<?php

class admins_model extends abstract_model {
    public function get_data() {
        $mysqli = DataBase::getInstance();
        $query = "SELECT * FROM Admins";
        $result = $mysqli->query($query);
        return $result;
    }
}