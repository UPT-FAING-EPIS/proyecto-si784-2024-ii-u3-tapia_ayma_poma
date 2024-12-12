<?php
/**
 * This code is licensed under the BSD 3-Clause License.
 *
 * Copyright (c) 2017, Maks Rafalko
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 *
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 *
 * * Neither the name of the copyright holder nor the names of its
 *   contributors may be used to endorse or promote products derived from
 *   this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

declare(strict_types=1);

namespace Infection\ExtensionInstaller;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;
use function count;

final class Plugin implements EventSubscriberInterface, PluginInterface
{
    private const FILE_TEMPLATE = <<<'PHP'
<?php
declare(strict_types=1);

namespace Infection\ExtensionInstaller;

/**
 * This class is generated by infection/extension-installer
 */
final class GeneratedExtensionsConfig
{
    public const EXTENSIONS = %s;

    private function __construct()
    {
    }
}
PHP;

    public function activate(Composer $composer, IOInterface $io): void
    {
        // no need to activate anything
    }

    /**
     * @codeCoverageIgnore
     */
    public function deactivate(Composer $composer, IOInterface $io): void
    {
        // no need to deactivate anything
    }

    /**
     * @codeCoverageIgnore
     */
    public function uninstall(Composer $composer, IOInterface $io): void
    {
        // no need to uninstall anything
    }

    /**
     * @return array<string, string>
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ScriptEvents::POST_INSTALL_CMD => 'process',
            ScriptEvents::POST_UPDATE_CMD => 'process',
        ];
    }

    public function process(Event $event): void
    {
        $io = $event->getIO();

        if (!file_exists(__DIR__)) {
            $io->write('<info>infection/extension-installer:</info> Package not found (probably scheduled for removal); extensions installation skipped.');

            return;
        }

        $composer = $event->getComposer();
        $installationManager = $composer->getInstallationManager();
        $infectionInstalledExtensions = [];
        $invalidInfectionExtensions = [];

        foreach ($composer->getRepositoryManager()->getLocalRepository()->getPackages() as $package) {
            if ($package->getType() !== 'infection-extension') {
                continue;
            }

            /** @var string|null $extensionClass */
            $extensionClass = $package->getExtra()['infection']['class'] ?? null;

            if ($extensionClass === null) {
                $invalidInfectionExtensions[$package->getName()] = '`class` is not specified under `extra.infection` key';

                continue;
            }

            $infectionInstalledExtensions[$package->getName()] = [
                'install_path' => $installationManager->getInstallPath($package),
                'extra' => $package->getExtra()['infection'] ?? null,
                'version' => $package->getFullPrettyVersion(),
            ];
        }

        ksort($infectionInstalledExtensions);

        $generatedConfigFilePath = __DIR__ . '/GeneratedExtensionsConfig.php';

        $generatedConfigFileContents = sprintf(self::FILE_TEMPLATE, var_export($infectionInstalledExtensions, true));
        file_put_contents($generatedConfigFilePath, $generatedConfigFileContents);

        $installedExtensionsCount = count($infectionInstalledExtensions);
        $invalidExtensionsCount = count($invalidInfectionExtensions);

        if ($installedExtensionsCount === 0 && $invalidExtensionsCount === 0) {
            $io->write('<info>infection/extension-installer:</info> No extensions found');
        }

        if ($installedExtensionsCount > 0) {
            $io->write('<info>infection/extension-installer:</info> Extensions installed');

            foreach (array_keys($infectionInstalledExtensions) as $name) {
                $io->write(sprintf('<comment>></comment> <info>%s:</info> installed', $name));
            }
        }

        if ($invalidExtensionsCount > 0) {
            $io->write('<info>infection/extension-installer:</info> Invalid extensions:');

            foreach ($invalidInfectionExtensions as $name => $reason) {
                $io->write(sprintf('<comment>></comment> <info>%s.</info> (%s)', $name, $reason));
            }
        }
    }
}