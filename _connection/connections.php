<?php
    @session_start();
	   error_reporting(0);

    class OpenConnect{

        private $con;
        private $svname = "";
        private $usrdb = "";
        private $passdb = "";
        private $dbname = "";

        // OPEN CONNECTION
        public function openconnect(){
            $this->con = new mysqli($this->svname, $this->usrdb, $this->passdb, $this->dbname);
            // Check connection
            if (!$this->con) {
                return die("Connection failed: " . mysqli_connect_error());
            }else{
                return  "Database [".$this->dbname."] was connneted successful.";
            }

            $this->con->set_charset("utf8");

        }
        // Query Command
        public function getQuery($sql){
            $result = $this->con->query($sql);
            return $result;
        }

        // Fecth Data
        public function getData($rsObj){
            $rsObj = $rsObj->fetch_assoc();
            return $rsObj;
        }

        // Count Data
        public function getCount($rsObj){
            $rsObj = mysqli_num_rows($rsObj);
            return $rsObj;
        }

    }

    class DBConnect{

		private $con;
        private $svname = "";
        private $usrdb = "";
        private $passdb = "";
        private $dbname = "antmanage";

        // OPEN CONNECTION
        public function dbconnect(){
            $this->con = new mysqli($this->svname, $this->usrdb, $this->passdb, $this->dbname);
            // Check connection
            if (!$this->con) {
                return die("Connection failed: " . $this->con->connect_error);
            }else{
                return  "Database [".$this->dbname."] was connneted successful.";
            }

            $this->con->set_charset("utf8");
            

        }
        public function getDataInfo($sql){
            $this->con->set_charset('utf8');
            $result = $this->con->query($sql);
            return $result->fetch_assoc();
        }
        // Query Command
        public function getQuery($sql){
            $this->con->set_charset('utf8');
            $result = $this->con->query($sql);
            return $result;
        }

        // Fecth Data
        public function getData($rsObj){
            $this->con->set_charset('utf8');
            $rsObj =  $rsObj->fetch_assoc();
            return $rsObj;
        }

        // Count Data
        public function getCount($rsObj){
            $rsObj = mysqli_num_rows($rsObj);
            return $rsObj;
        }

	}

?>
