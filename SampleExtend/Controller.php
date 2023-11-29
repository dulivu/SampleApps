<?php
namespace SampleApps\SampleExtend;

use \Irbis\Controller as iController;

class Controller extends iController {
    public $name = 'sample_extend';
    public $router = true;

    /**
     * @route /
     */
    public function index ($request, $response) {
        $sample_controller = $this->getController('sample');
        $response = $this->super();
        return $response."<br/>"."Ahora has extendido un módulo y añadido este mensaje."
            .$sample_controller->getAnchor();
    }
}