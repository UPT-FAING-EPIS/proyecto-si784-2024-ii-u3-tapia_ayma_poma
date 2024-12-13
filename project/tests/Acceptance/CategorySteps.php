<?php
namespace Step\Acceptance;

class CategorySteps extends \AcceptanceTester
{
    public function tengoUnNombreDeCategoria($nombreCategoria)
    {
        $this->actor->wantTo("crear una categoría con el nombre $nombreCategoria");
        // Aquí no se conecta a la base de datos ni se interactúa con la UI
    }

    public function envioSolicitudParaCrearCategoria()
    {
        $this->actor->wantTo("enviar la solicitud para crear una categoría");
        // No se realiza ninguna acción en la base de datos ni UI
    }

    public function laCategoriaDebeSerCreadaExitosamente($nombreCategoria)
    {
        $this->actor->see("Categoría $nombreCategoria creada con éxito");
        // Aquí validamos el comportamiento esperado sin acceder a la base de datos
    }

    public function solicitoListaDeCategorias()
    {
        $this->actor->wantTo("solicitar la lista de categorías");
    }

    public function deboVerTodasLasCategoriasDisponibles()
    {
        $this->actor->see("Trabajo"); // Verificar el nombre de una categoría esperada
    }
}
