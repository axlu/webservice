<?php
/*  Axel Lundqvist
    Webbutveckling III
    2018-10-15
*/
include ('includes/header.php');
spl_autoload_register(function ($class){include 'classes/' . $class . '.class.php';});?>


<?php
            session_start();

            $account = new Login();

            if(isset($_REQUEST["send"])){
                if(strlen($_REQUEST["account"])>0 && strlen($_REQUEST["password"])>0){
                    $account->checkInput($_REQUEST["account"], $_REQUEST["password"]);
                    $usr = $_REQUEST["account"];
                    $_SESSION['trueuser'] = $usr;
                } else {
                    header("Location: admin.php");
                }
                unset($_REQUEST["send"]);
                exit();
            }
?>

    <div id="body">
            <div class="wrapper">
                <div class="white">
                <div class="row">
                    <div class="print">
                    <form method="post">
                    <label>Användarnamn</label><br>
                    <input type="text" name="account" class="account" /><br><br>
                    <label>Lösenord</label><br>
                    <input type="password" name="password" class="account" /><br>
                    <br>
                    <input type="submit" name="send" value="Logga in" class="button" />
                </form>
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