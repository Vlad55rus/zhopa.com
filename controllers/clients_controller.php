<?php
include 'core/abstract_controller.php';

class clients_controller extends abstract_controller {
    public function __construct() {
        $this->model = new clients_model();
        $this->view = new clients_view();
    }

    public function index() {
        $data = $this->model->get_data();
        $content = $this->view->generate('template_view.php', $data);
        echo $content;
    }
}