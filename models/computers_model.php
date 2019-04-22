<?php

class computers_model extends abstract_model {
    public function get_data() {
        $mysql = DataBase::getInstance();
        return $mysql->query('Select * from Computers');
    }
}