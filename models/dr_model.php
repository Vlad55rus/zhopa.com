<?php
include 'core/abstract_model.php';

class dr_model extends abstract_model {
    public function get_data() {
        $mysqli = DataBase::getInstance();
        $query = "SELECT * FROM Daily_Responsibilities";
        $result = $mysqli->query($query);
        return $result;
    }
}