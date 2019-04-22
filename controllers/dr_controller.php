<?php
include 'core/abstract_controller.php';

class dr_controller extends abstract_controller {
    public function __construct() {
        $this->view = new dr_view();
        $this->model = new dr_model();
    }

    public function index() {
        $data = $this->model->get_data();
        echo $this->view->generate('template_view.php', $data);
    }
}