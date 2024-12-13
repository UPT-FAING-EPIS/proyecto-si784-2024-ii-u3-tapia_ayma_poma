<?php
namespace Step\Acceptance;

class NotificationSteps extends \AcceptanceTester
{
    public function tengoUnIdDeUsuarioYUnMensaje($idUsuario, $mensaje)
    {
        $this->actor->wantTo("crear una notificación para el usuario $idUsuario con el mensaje $mensaje");
        // Aquí no se conectará a la base de datos
    }

    public function envioSolicitudParaCrearNotificacion()
    {
        $this->actor->wantTo("enviar la solicitud para crear una notificación");
        // Lógica de solicitud, sin base de datos
    }

    public function laNotificacionDebeSerGuardadaExitosamente()
    {
        $this->actor->see("Notificación creada con éxito");
        // Validación sin base de datos
    }

    public function solicitoNotificacionesPorUsuario($idUsuario)
    {
        $this->actor->wantTo("solicitar notificaciones para el usuario $idUsuario");
    }

    public function deboVerUnaListaDeNotificaciones($idUsuario)
    {
        $this->actor->see("Notificación para el usuario $idUsuario");
    }
}
