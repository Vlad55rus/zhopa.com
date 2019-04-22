<?php
class computers_view extends abstract_view{
    public function generate($template_view, $data = null) {
        ob_start();
        include 'views/' . $template_view;
        echo "<table id='mainTable' align='center'>
         <tr>
            <th>Computer ID</th>
            <th>Graphics</th>
         </tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo '<th>' . $row['computerID'] . '</th>';
            echo '<th>' . $row['GPU'] . '</th>';
            echo '</tr>';
        }
        return ob_get_clean();
    }
}