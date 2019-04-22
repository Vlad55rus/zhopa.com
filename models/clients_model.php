<?php
class clients_model extends abstract_model{
    public function get_data() {
        $mysql = DataBase::getInstance();
        return $mysql->query('Select * from Clients');
    }
}