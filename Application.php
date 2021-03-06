<?php

    class Application {
        private $dbParams = array(
            'servername' => 'localhost',
            'username' => 'root',
            'password' => 'Passw123',
            'dbname' => 'varosok'
        );
        private $connection;
        private $connectionLive = false;

        public function __construct()
        {
            $this->connectDb();
        }

        private function connectDb(){
            $this->connection = new mysqli($this->dbParams['servername'], $this->dbParams['username'],$this->dbParams['password'],$this->dbParams['dbname']);
            if ($this->connection->connect_error){
                die('Connection failed: '. $this->connection->connect_error);
            }
            $this->connectionLive = true;
        }

        protected function isDbConnectionLive(): bool
        {
            return $this->connectionLive;
        }

        protected function getResultList($sql): array
        {
            $resultList = array();
            $result = $this->connection->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    $resultList[] = $row;
                }
            } else {
                $this->writeLog("nem talált értéket a lekérdezés", $sql);
            }
            return $resultList;
        }

        protected function writeLog($string, $sql){

        }

        protected function isValidId($id): bool
        {
            if (is_int($id) && $id > 0){
                return true;
            } else {
                return false;
            }
        }

    }