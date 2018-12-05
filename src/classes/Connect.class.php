<?php

    include("includes/config.php");

class Connect {

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
        echo ("<div class='col-6'><div class='service_box'><div class='title'><h1>" . utf8_encode($row['name']) . "</h1></div><div class='descript'><p>" . utf8_encode($row['descr']) . "</p></div><div class='price'><p>Pris - " . utf8_encode($row['price']) . "</p></div></div></div>");
        if ($count == $max) break;    
        }
        
    }
}