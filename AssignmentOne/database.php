<?php
class Database{

    private $connection;

    function __construct(){
        $this->connect_db();
    }
public function connect_db(){
    $this->connection = mysqli_connect('172.31.22.43', 'Rodrigo200549271', 'MVe9E-OiyJ', 'Rodrigo200549271');
    if(mysqli_connect_error()){
        die("Database Connection failed" . mysqli_connect_error());
     } 
}
public function create($fname, $lname, $email, $phone, $pizza, $psize, $orderaddress, $suiteapart, $city, $postcode, $paymethod){
    $sql = "INSERT INTO pizzaOrders (fname, lname, email, phone, pizza, psize, orderaddress, suiteapart, city, postcode, paymethod) VALUES ('$fname', '$lname', '$email','$phone', '$pizza', '$psize', '$orderaddress', '$suiteapart', '$city', '$postcode', '$paymethod')";
    $res = mysqli_query($this->connection, $sql);
    if($res){
        return true;
    }else{
        return false;
    }
}
public function read($id=null){
    $sql = "SELECT * FROM pizzaOrders";
    if($id){
        $sql .= " WHERE id=$id";
    }
    $res = mysqli_query($this->connection, $sql);
    return $res;
    }
public function sanitize($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}
$database = new Database();
?>