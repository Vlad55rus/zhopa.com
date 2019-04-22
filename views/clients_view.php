<?php

class clients_view extends abstract_view {
    public function generate($template_view, $data = null) {
        ob_start();
        include 'views/' . $template_view;
        echo "<table id='mainTable' align='center'>
         <tr>
            <th>Client Id</th>
            <th>Client Name</th>
            <th>Address</th>
         </tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo '<th>' . $row['ClientID'] . '</th>';
            echo '<th>' . $row['ClientName'] . '</th>';
            echo '<th>' . $row['Adress'] . '</th>';
            echo '</tr>';
        }
        return ob_get_clean();
    }
}