<?php

class Database {

    public static function connect(){

        $db = new mysqli('178.128.146.252', 'admin_sigmauser', 'pfaDKIJyPF', 'admin_sigmatest');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
