<?php

class oppDb{

    public $localhost = "localhost";
    public $user = "root";
    public $pass = "";
    public $databaseName = "online_profile";
    public $conn = "";

    // __CONSTRUCTOR FUNCTION END HERE 
    public function __construct(){
        // connection code here
        if (!$this->conn) {
            $this->conn = new mysqli($this->localhost, $this->user, $this->pass, $this->databaseName);
            if ($this->conn->connect_error) {
                echo $this->conn->connect_error;
                return false;
            }
        } else {
            return true;
        }
    } // __CONSTRUCTOR FUNCTION END HERE



    // INSERT function start HERE
    public function insert($table, $para = array()){
        if ($this->tableExe($table)) {
            // print_r($para);
            $table_attb = implode(" , ", array_keys($para));
            $table_val = implode("','",  $para);

            $sql = "INSERT INTO $table ($table_attb) VALUES ('$table_val')";

            if ($this->conn->query($sql)) {
                return true;
            } else {
                echo $this->conn->error;
                return false;
            }
        }
    } // INSERT FUNCTION END HERE 


    // UPDATE function start HERE
    public function update($table, $para = array(), $where = null){
        $val = array();

        foreach ($para as $key => $value) {
            array_push($val, $key . " = '" . $value . "'");
        }
        if ($this->tableExe($table)) {
            $sql = "UPDATE $table  SET " . implode(" , ", $val);
            if ($where != null) {
                $sql .= " WHERE $where ";
                if ($this->conn->query($sql)) {
                    return true;
                   
                } else {
                    echo $this->conn->error;
                    return false;
                    
                }
                echo $sql;
            } else {
                return false;
            }
        } else {
            return false;
        }
        // echo $sql;
    } // UPDATE FUNCTION END HERE 


    // DELETE function start HERE
    public function delete($table, $where = null){

        if ($this->tableExe($table)) {
            $sql = "DELETE FROM $table ";
            if ($where != null) {

                $sql .= " WHERE $where ";
                if ($this->conn->query($sql)) {
                    return true;
                } else {
                    echo $this->conn->error;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
        // echo $sql;
    }
    // DELETE FUNCTION END HERE 




    // SELECT FUNCTION START HERE
    public function select($table, $attr = "*", $join = null, $where, $order = null){

        if ($this->tableExe($table)) {
            $sql = "SELECT $attr FROM $table ";
            if ($join != null) {
                $sql .= " $join";
            }
            if ($where != null) {
                $sql .= " WHERE $where ";
            }
            if ($order != null) {
                $sql .= " ORDER BY $order ";
            }
            
            $res = $this->conn->query($sql);
            if ($res) {
                return  $res->fetch_all(MYSQLI_ASSOC);
                // echo;
            } else {
                echo $this->conn->error;
            }
        } else {
            return false;
        }
    }
    // SELECT FUNCTION END HERE


    // SQL FUNTION START HERE

    public function sql($gernSql){
        
        if(isset($gernSql)){
            $res =  $this->conn->query($gernSql);
            if($res){
                return $res->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{
                return $this->conn->error;
            }
        }else{
            return false;
        }
    }
    

    // SQL FUNTION END HERE

    

    // TABLE_EXE function start HERE
    public function tableExe($table){
        $sqlTableExe = "SHOW TABLES FROM $this->databaseName LIKE '$table' ";
        $res = $this->conn->query($sqlTableExe);
        if ($res) {
            if ($res->num_rows == 1) {
                return true;
            } else {
                echo "Table name does not valid";
             
                return false;
            }
        }
    }
    // TABLE_EXE FUNCTION END HERE 


    // __DESTRUCT function start HERE
    public function __destruct(){
        if ($this->conn) {
            if ($this->conn->close()) {
                $this->conn = "";
                // echo "Hello";
            }
        } else {
            return false;
        }
    } // __DESTRUCT FUNCTION END HERE 

}


?>