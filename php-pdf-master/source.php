<?php

session_start();

?>

<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                margin-left:350px;
                margin-top:100px;
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
                
            }
            .container {
                
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
                align-items:center;
            }
            .logo {
                color: tan;
            }

            .hello {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .hey {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="logo">
                An Organization
            </div>

            <div class="hello">
                Certificate of Completion
            </div>

            <div class="hey">
                This certificate is presented to
            </div>

            <div class="person" id="person">
            <?php
            echo $_SESSION['username'];
            ?>
            </div>

            <div class="reason">
                For the completion of internship as a
            </div>
            <div id="job">
                <?php
                echo $_SESSION['position'];
                ?>
            </div>
            <div>
                from
            </div>
            <div id="doj">
            <?php
            echo  $_SESSION['DOJ'];
            ?>
            </div>
            <div>
                During this period his/her conduct was found extraordinary<br>
                We wish him/her good luck for the future.
            </div>


        </div>


        
    </body>
</html>