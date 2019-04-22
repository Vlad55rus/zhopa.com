<?php

class error_view extends abstract_view {
    public function generate($template_view, $data = null) {
        ob_start();
        include 'views/' . $template_view;
        echo '<h1>Error</h1>';
        return ob_get_clean();
    }
}