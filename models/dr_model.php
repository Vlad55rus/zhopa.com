<?php
include 'core/abstract_model.php';

class dr_model extends abstract_model {
    public function get_data() {
        $mysql = DataBase::getInstance();
        $query = "SELECT * FROM Daily_Responsibilities";
        return $mysql->query($query);
    }
}