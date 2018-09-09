<?php

  include_once('connection.php');
  
  if(isset($_POST['search1'])){
	$q = $_POST['search12'];
	$query = mysqli_query($conn,"SELECT * FROM `movie` WHERE `movieName` LIKE 'q'"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}else{
		while($row = mysqli_fetch_array($query)){
		$s = $row['column_to_display']; // Replace column_to_display with the column you want the results from
				$output .= '<h2>'.$s.'</h2><br>';
			}
		}
	} 

?>