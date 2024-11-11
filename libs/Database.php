<?php
class Database extends PDO
{
    public function __construct()
    {
        try {
            parent::__construct("mysql:host=" . $this->DB()['host'] . ";dbname=" . $this->DB()['dbname'] . ";charset=utf8mb4", $this->DB()['user'], $this->DB()['pass']);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            echo "No connection".$e->getMessage();
        }
    }

    protected function DB(): array
    {
         return array(
            "host" => DB_SERVER,
            "user" => DB_USER,
            "pass" => DB_PASS,
            "dbname" => DB_NAME
        );
    }

}
