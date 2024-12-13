<?php
namespace Step\Acceptance;

class UserSteps extends \AcceptanceTester
{
    public function tengoDetallesDeUsuario($nombre, $email, $contrasena)
    {
        $this->actor->wantTo("crear un usuario con nombre $nombre, email $email y contraseña $contrasena");
        // No interactúa con la base de datos
    }

    public function envioSolicitudParaCrearUsuario()
    {
        $this->actor->wantTo("enviar la solicitud para crear un usuario");
        // Lógica de solicitud sin base de datos
    }

    public function elUsuarioDebeSerCreadoExitosamente()
    {
        $this->actor->see("Usuario $nombre creado con éxito");
        // Validación de que el usuario ha sido creado sin acceder a la base de datos
    }

    public function buscoUsuarioPorEmail($email)
    {
        $this->actor->wantTo("buscar un usuario por el email $email");
    }

    public function deboEncontrarSusDetalles($email)
    {
        $this->actor->see("Detalles del usuario con email $email");
    }
}
