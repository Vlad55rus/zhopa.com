<?php
include 'core/abstract_view.php';

class default_view extends abstract_view {
    public function generate($template_view, $data = null) {
        ob_start();
        include 'views/' . $template_view;
        return ob_get_clean();
    }
}