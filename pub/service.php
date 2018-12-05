<?php
/*  Axel Lundqvist
    Webbutveckling III
    2018-10-15
*/
include ('includes/header.php');?>

    <div id="body">
            <div class="wrapper">
                <div class="white">
                <div class="row">
                    <div class="print">
                        <?php $service = new Connect;
         
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
