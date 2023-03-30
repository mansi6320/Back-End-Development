<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student89-3530313543fa", "ua92-studentAc", "student89-3530313543fa");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>
<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">student ID<br><hr></th>
				<th width="250px">SName<br><hr></th>
				<th width="250px">LName<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT sid, sname, lname FROM Class1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['sid']}</th>
				<th>{$row['sname']}</th>
				<th>{$row['lname']}</th>

                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


