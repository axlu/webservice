<?php
/*  Axel Lundqvist
    Webbutveckling III
    2018-10-15
*/
    include("includes/config.php");

class Login {

    private $db;

    /* connect to database */
    function __construct() {
        $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);
        if($this->db->connect_errno > 0)
        {
            die("Fel vid anslutning: " . $this->db->connect_error);
        }
    }

    
    /* Login */
    public function checkInput($username, $password)
    {
        $username = $this->db->real_escape_string($username);
        $password = $this->db->real_escape_string($password);
        
        $query ="SELECT * FROM users WHERE username = '$username' and password = '$password';";
        
        $result = $this->db->query($query);

        mysqli_query($this->db, $query);

        if(mysqli_num_rows($result) > 0){
            header("Location: control.php");
        }
        else {
            echo ("<p>Någonting gick fel</p>");
        }
        mysqli_close($db);
        
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
        echo ("<div class='col-6'><div class='service_box'><form><button type='submit' value='delete'>&#x2716;</button></form><div class='title'><p>" . utf8_encode($row['name']) . "</p></div><div class='descript'><p>" . utf8_encode($row['descr']) . "</p></div><div class='price'><p>Pris - " . utf8_encode($row['price']) . "</p></div></div></div>");
        if ($count == $max) break;    
        }
        
    }

}