<div id="main">
	<div id="main_1_2">
		<h1>Artists</h1>
<!-- aktorzy -->
        <?php
            $db = new mysqli('localhost', 'root', 'root', 'theatre');
            $result = $db->query('SELECT * from actors');
            //print_r($result);
		?>
		<h1>Actors</h1>
        <table>
		<thead>
			<tr>
                <th>Full name</th>
                <th>Date of birth</th>
                <th>Description</th>
			</tr>
        </thead>
        <tbody>
	<?php
            if ($result) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
			<td><?php echo $row['first_name'].' '. $row['last_name'] ;?> </td>
			<td><?php echo $row['birth_date'];?></td>
			<td><?php echo $row['description'];?></td>
            </tr>
        <?php
                                                        }
            } else {
                echo "Wystąpił nieznany błąd";
            }                
        ?>
                                        
        </tbody>
		</table>
<!-- reżyserzy -->
        <?php
        $result->free();
            $result = $db->query('SELECT * from directors');
            //print_r($result);
		?>
		<h1>Directors</h1>
        <table>
		<thead>
			<tr>
                <th>Full name</th>
                <th>Description</th>
			</tr>
        </thead>
        <tbody>
	<?php
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    //print_r($row);
        ?>
            <tr>
			<td><?php echo $row['first_name'].' '. $row['last_name'] ;?> </td>
			<td><?php echo $row['description'];?></td>
            </tr>
        <?php
                                                        }
            } else {
                echo "Wystąpił nieznany błąd";
            }                
        ?>
                                        
        </tbody>
		</table>	
<!-- recenzenci -->
        <?php
            $result->free();
            $result = $db->query('SELECT * from reviewers');
            //print_r($result);
		?>
		<h1>Reviewer</h1>
        <table>
		<thead>
			<tr>
                <th>Full name</th>
			</tr>
        </thead>
        <tbody>
	<?php
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    //print_r($row);
        ?>
            <tr>
			<td><?php echo $row['name'].' '. $row['last_name'] ;?> </td>
            </tr>
        <?php
                                                        }
            } else {
                echo "Wystąpił nieznany błąd";
            }                
        ?>
                                        
        </tbody>
		</table>
</div>