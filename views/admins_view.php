<?php
include 'core/abstract_view.php';

class admins_view extends abstract_view {
    public function generate($template_view, $data = null) {
        ob_start();
        include 'views/' . $template_view;
        echo "<table id='mainTable' align='center'>
         <tr>
            <th>Admin Id</th>
            <th>Admin Name</th>
         </tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo '<th>' . $row['adminID'] . '</th>';
            echo '<th>' . $row['adminName'] . '</th>';
            echo '</tr>';
        }
        return ob_get_clean();
    }
}