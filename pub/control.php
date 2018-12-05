<?php
/*  Axel Lundqvist
    Webbutveckling III
    2018-10-15
*/
include ('includes/header.php');
spl_autoload_register(function ($class){include 'classes/' . $class . '.class.php';});


session_start();

if(!isset($_SESSION['trueuser'])) { // check if it is the correct session (that the user actually came through the log in proccess)
    header("Location: login.php"); // redirect if not
}

/* Log out, kill the session and send user back to index */
if(isset($_REQUEST['log-out'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
}




$service = new Admin;


// Grap values from input fields (if not empty), send them to classfile
if(isset($_REQUEST["add"])){
    if(strlen($_REQUEST["title"])>0 && strlen($_REQUEST["description"])>0 && strlen($_REQUEST["price"])>0){
        $service->checkInput($_REQUEST["title"], $_REQUEST["description"], $_REQUEST["price"]); // send to function in classfile.
    } else {
        echo ('<p>Fyll i alla fält</p>'); // error message
    }
    unset($_REQUEST["add"]);
    exit();
}



// Isset is listening if anything is beeing posted with POST that contains "delete"
if(isset($_POST['delete'])) {
    $id = intval($_POST['delete']); // Save the integer value from the recieved package in $id
    $service->deleteId($id); // Initiate deleId function in Admin.class.php, send $id as parameter.
   
} else {
}
    
?>









<div id="body">
            <div class="wrapper">
            
                <div class="white">
                <div class="row">
                    <div class="print">
                    <form><input type="submit" name="log-out" value="Logga ut"></form>
                    <br><br>
                        <form method="post">
                            <label>Titel</label><br>
                            <input type="text" name="title" class="send" /><br><br>
                            <label>Information</label><br>
                            <textarea rows="4" cols="50" name="description" class="send"></textarea><br>
                            <br>
                            <label>Pris</label><br>
                            <input type="text" name="price" class="send" /><br><br>
                            <input type="submit" name="add" value="Lägg till" class="button" />
                        </form> <br><br>   



                        <?php
         
                         $service->showAll();?>
                    </div> <!-- End of print -->
                </div>
                </div> <!-- End of white -->

            </div> <!-- End of wrapper in body -->
        </div> <!-- End of body -->
        <div id="footer">
            <div class="row">
                <div class="col-4">
                    <div class="textfoot">
                        <p>axellundkvist@hotmail.com</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="textfoot">
                        <p>&copy; Axel Lundqvist 2018</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="textfoot">
                        <p>073-8079605</p>
                    </div>
                </div>
            </div> <!-- End of row -->
        </div> <!-- End of footer -->
     </div> <!-- End of container -->
     <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>