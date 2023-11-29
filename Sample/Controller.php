<?php
namespace SampleApps\Sample;

use \Irbis\Controller as iController;

class Controller extends iController {
    public $name = 'sample';
    public $router = true;

    /**
     * Ruta de entrada a tu aplicación
     * @route /
     */
    public function index ($request, $response) {
        return "Felicitaciones tienes tu primera aplicación instalada!!";
    }

    /**
     * Ruta alternativa de prueba
     * @route /other
     */
    public function other ($request, $response) {
        return "Te encuentras en otra ruta".
            "<br/><a href='/'>Click aquí para volver</a>";
    }

    /**
     * Este es un método que puede ser llamado
     * para construir un ancla a otra ruta
     */
    public function getAnchor ($url = '/other') {
        return "<br/><a href='$url'>Click aquí para ir a otra ruta</a>";
    }

    private function internal () {
        var_dump("Este un método que sólo puede ser llamado dentro de este controlador");
    }
}