<?php
include 'core/abstract_view.php';

class dr_view extends abstract_view {
    public function generate($template_view, $data = null) {
        ob_start();
        include 'views/' . $template_view;
        $rows = mysqli_num_rows($data);
        for ($i = 0; $i < $rows; $i++) {
            $rows = mysqli_fetch_row($data);
            for ($j = 0; $j < 4; $j++) {
                echo $rows[$j];
            }
        }
        return ob_get_clean();
    }
}