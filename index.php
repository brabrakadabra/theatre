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
	?>
            <table>
		<thead>
			<tr>
                            <th>Full name
                            </th>
                            <th>Date of birth
                            </th>
                            <th>Description
                            </th>
			</tr>
                </thead>
                <tbody>
	<?php
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    //print_r($row);
        ?>
                   <tr>
			<td>
        <?php
                        echo $row['first_name'].' '. $row['last_name'] ;
        ?>    
                        </td>
			<td>
        <?php
                        echo $row['birth_date'];
        ?> 
			</td>
			<td>
        <?php
                        echo $row['description'];
        ?> 
                        </td>
                    </tr>
        <?php
                                                        }
            } else {
                echo "Wystąpił nieznany błąd";
            }                
        ?>
                                        
            </tbody>
	</table>
    </body>
</html>
 