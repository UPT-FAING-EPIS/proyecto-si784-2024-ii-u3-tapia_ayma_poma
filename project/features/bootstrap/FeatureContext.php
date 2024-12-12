<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    // Tus pasos personalizados aquí

    /**
     * @Given estoy en la página de login
     */
    public function estoyEnLaPaginaDeLogin()
    {
        $this->visit('/login');
    }

    /**
     * @When ingreso :correo como correo y :contrasena como contraseña
     */
    public function ingresoCorreoYContrasena($correo, $contrasena)
    {
        $this->fillField('email', $correo);
        $this->fillField('password', $contrasena);
    }

    /**
     * @When hago clic en :boton
     */
    public function hagoClicEn($boton)
    {
        $this->pressButton($boton);
    }

    /**
     * @Then debo ser redirigido al panel de control
     */
    public function deboSerRedirigidoAlPanelDeControl()
    {
        $this->assertPageAddress('/dashboard');
    }

    /**
     * @Then debo ver un mensaje de error :mensaje
     */
    public function deboVerUnMensajeDeError($mensaje)
    {
        $this->assertElementContainsText('.error-message', $mensaje);
    }

    // Escenarios relacionados con la creación de tareas

    /**
     * @Given estoy en la página de creación de tareas
     */
    public function estoyEnLaPaginaDeCreacionDeTareas()
    {
        $this->visit('/task/create');
    }

    /**
     * @When ingreso el título :titulo, la descripción :descripcion, y selecciono la categoría con ID :idCategoria
     */
    public function ingresoTituloDescripcionYCategoria($titulo, $descripcion, $idCategoria)
    {
        $this->fillField('title', $titulo);
        $this->fillField('description', $descripcion);
        $this->selectOption('category_id', $idCategoria);
    }

    /**
     * @When selecciono la fecha de vencimiento :fecha
     */
    public function seleccionoLaFechaDeVencimiento($fecha)
    {
        $this->fillField('due_date', $fecha);
    }

    /**
     * @Then debo ver el mensaje de confirmación :mensaje
     */
    public function deboVerElMensajeDeConfirmacion($mensaje)
    {
        $this->assertElementContainsText('.success-message', $mensaje);
    }

    /**
     * @Then debo permanecer en la página de creación de tareas
     */
    public function deboPermanecerEnLaPaginaDeCreacionDeTareas()
    {
        $this->assertPageAddress('/task/create');
    }

    /**
     * @Then debo ver un mensaje de error en la página de creación :mensaje
     */
    public function deboVerUnMensajeDeErrorEnLaPaginaDeCreacion($mensaje)
    {
        $this->assertElementContainsText('.error-message', $mensaje);
    }
}
