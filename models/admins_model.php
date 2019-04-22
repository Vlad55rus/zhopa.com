<?php

class admins_model extends abstract_model {
    public function get_data() {
        $mysql = DataBase::getInstance();
        $query = "SELECT * FROM Admins";
        return $mysql->query($query);
    }
}