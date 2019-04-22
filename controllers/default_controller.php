<?php
include 'core/abstract_controller.php';

class default_controller extends abstract_controller {
    public function __construct() {
        $this->view = new default_view();
    }

    function index() {
        $content = $this->view->generate('template_view.php');
        echo $content;
    }
}