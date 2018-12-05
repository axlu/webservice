<?php

    include("includes/config.php");

class Admin {

    private $db;
    private $us;
    private $pw;

    /* connect to database */
    function __construct() {
        $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);
        if($this->db->connect_errno > 0)
        {
            die("Fel vid anslutning: " . $this->db->connect_error);
        }
    }

    public function showAll() {

        $sql ="SELECT * FROM services;"; /* sql query */
        $result = $this->db->query($sql); /* Save query result in $result */
        
        $count = 0;
        $max = 50;

        /* print each entry */
        while($row = mysqli_fetch_assoc($result)) 
        {
        $count++;
        
        echo ("<div class='col-6'><div class='service_box'><form><button onclick='delpost(" . utf8_encode($row['id']) . ")' type='submit' class='delete-btn' value='delete'>&#x2716;</button></form><br /><div class='title'><p>" . utf8_encode($row['name']) . "</p></div><div class='descript'><p>" . utf8_encode($row['descr']) . "</p></div><div class='price'><p>Pris - " . utf8_encode($row['price']) . "</p></div></div></div>");
        if ($count == $max) break;  
        
        
        }
        
    }

    public function checkInput($title, $description, $price) {

        // Remove illegal characters
        $esctitle = $this->db->real_escape_string($title);
        $escdesc = $this->db->real_escape_string($description);
        $escprice = $this->db->real_escape_string($price);

        $fixedTitle = utf8_decode($esctitle);
        $fixedDesc = utf8_decode($escdesc);
        $fixedPrice = utf8_decode($escprice);

        $query = "INSERT INTO services (name, descr, price) VALUES ('$fixedTitle', '$fixedDesc', '$fixedPrice');";

        mysqli_query($this->db, $query);

        header("Location: control.php");
    }


    public function deleteId($id) {

        $query = "DELETE FROM services WHERE id = $id;";
        
        mysqli_query($this->db, $query);

        header("Location: control.php");
    }


}