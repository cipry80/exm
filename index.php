<?php
require_once 'config/db.php';
require_once 'db_data.php';
?>
<html> 
    <head> 
        
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link href="public/css/style.css" rel="stylesheet">
        <script src="public/js/jquery-1.11.2.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Table1</h2> 
            <div class="table-responsive " id = "main"> 
                <table class="table table-bordered" id="stanga">
                    <caption>Let's play!</caption>
                    <thead>
                        <tr>
                            <td>url</td>
                            <td>Descriere</td>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    $count = 0;
                    foreach ($array_db as $id => $row) {
                        $names[] = $row['nume'];
                        $urls[] = $row['url'];
                        $count++;
                    }
                    shuffle($names);
                    shuffle($urls);

                    for($i= 0; $i < $count; $i++){
                        echo '<tr>';
                        echo '<td class="name">';
                        echo  $urls[$i];
                        echo '</td>';
                        echo '<td class="description">';
                        echo  $names[$i];
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>

                    </tbody>
                </table>
            
            <table class="table table-bordered pull-left" id="dreapta">
                    <caption>RESULT</caption>
                    <thead>
                        <tr>
                            <td>url</td>
                            <td>Descriere</td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
            </table>
            </div>
        </div>
        
	<script src="public/js/main.js"></script>
    </body>
</html>
