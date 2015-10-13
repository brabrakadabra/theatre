<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Test</h1>
        <?php
            $db = new mysqli('localhost', 'root', 'root', 'test');
            $result = $db->query('SELECT * from actors');
            //print_r($result);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    print_r($row);
                    echo '<br>';
                }
            } else {
                echo "Wystąpił nieznany błąd";
            }                
        ?>
    </body>
</html>
 