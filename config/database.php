<?php 


class Database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'oop';
        
        $conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password, 
            $this->dbname, 
        );
        return $conn;
    }
}


class Query extends Database
{
    public function getData($table,$fields)
    {
        $sql = "SELECT $fields FROM $table";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function insertData($table,$params)
    {
        $fields = array();
        $values = array();
        foreach($params as $key => $value){
            $fields[] = $key;
            $values[] = $value;
        }
        //array to string conversion
        
        $fields = implode(',',$fields);
        $values = implode("','",$values);
        $values = "'".$values."'";
        
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function deleteData($table,$field,$id)
    {
        $sql = "DELETE FROM $table WHERE $field = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }
}
