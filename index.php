<?php
require_once 'config/db.php';
include 'db_data.php';?>
<html> 
    <head> 
    </head>
    <body>
        <div id="main">
            <table id="stanga"><?php 
                foreach ($array_db as $id => $row) {
                    echo 'Nume: '. $row['nume'];
                    echo 'Url: ' . $row['url'];
                }?>
            </table>
            
            <table id="dreapta"></table>
        </div>
    </body>
</html>
