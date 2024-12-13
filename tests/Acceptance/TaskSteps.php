<?php
namespace Step\Acceptance;

class TaskSteps extends \AcceptanceTester
{
    public function tengoDetallesDeTarea($titulo, $descripcion)
    {
        $this->actor->wantTo("crear una tarea con título $titulo y descripción $descripcion");
        // No se interactúa con la base de datos ni la UI
    }

    public function envioSolicitudParaCrearTarea()
    {
        $this->actor->wantTo("enviar la solicitud para crear una tarea");
        // Lógica de solicitud sin base de datos
    }

    public function laTareaDebeSerCreadaExitosamente()
    {
        $this->actor->see("Tarea $titulo creada con éxito");
        // Validación sin conexión a la base de datos
    }

    public function solicitoTareasPorUsuario($idUsuario)
    {
        $this->actor->wantTo("solicitar tareas para el usuario $idUsuario");
    }

    public function deboVerTodasLasTareasAsignadas($idUsuario)
    {
        $this->actor->see("Tareas asignadas a $idUsuario");
    }
}
