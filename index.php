<?php
require_once 'config/db.php';
include 'db_data.php';?>
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

                    <?php 
                    foreach ($array_db as $id => $row) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td class="name">';
                        echo  $row['url'];
                        echo '</td>';
                        echo '<td class="description">';
                        echo  $row['nume'];
                        echo '</td>';
                        echo '</tr>';
                        echo '</tbody>';
                    }?>
                </table>
            
            <table class="table table-bordered pull-left" >
                    <caption>RESULT</caption>
                    <thead>
                        <tr>
                            <td>url</td>
                            <td>Descriere</td>
                        </tr>
                    </thead>
                    <tbody id = "dreapta" >
                        <script>
                            $.ajax({
                            dataType: 'json',
                            url: 'http://www.ciprian.dev/db_data.php',
                            succes: function(data){
                                
                                $.each(data, function(i, val){
                                   var tableDreapta = 
                                    "<tbody>"+                       
                                    +"<tr>"+
                                    +"<td>"+val.nume+"</td>"+
                                     +"<td>"+val.url+"</td>"+
                                     +"</tr>"+
                                      +"</tbody>";
                                $(tableDreapta).appendTo("#dreapta");
                                }); 
                            }
                    });
                        </script>
                    </tbody>
            </table>
            </div>
        </div>
        
	<script src="public/js/main.js"></script>
    </body>
</html>