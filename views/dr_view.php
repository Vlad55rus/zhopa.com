<?php
include 'core/abstract_view.php';
class dr_view extends abstract_view {
    public function generate($template_view, $data = null) {
        ob_start();
        include 'views/' . $template_view;
        echo "<table id='mainTable' align='center'>
         <tr>
            <th>Client Id</th>
            <th>Admin Id</th>
            <th>Computer Number</th>
            <th>Duration</th>
         </tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo '<th>' . $row['ClientID'] . '</th>';
            echo '<th>' . $row['adminID'] . '</th>';
            echo '<th>' . $row['ComputerNumber'] . '</th>';
            echo '<th>' . $row['Duration'] . '</th>';
            echo '</tr>';
        }
        echo '</table>';
        return ob_get_clean();
    }
}