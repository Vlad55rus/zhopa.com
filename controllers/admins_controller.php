<?php
include 'core/abstract_controller.php';

class admins_controller extends abstract_controller {
    public function __construct() {
        $this->view = new admins_view();
        $this->model = new admins_model();
    }

    public function index() {
        $data = $this->model->get_data();
        $content = $this->view->generate('template_view.php', $data);
        echo $content;
    }
}