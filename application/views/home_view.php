<h1> thanapon </h1> AGE = <?php echo $age; echo "<br><br>"; ?>
<?php 
foreach($person as $value) {
	echo $value->personel_fname_th; echo "&nbsp &nbsp";
	echo $value->personel_lname_th; echo "&nbsp &nbsp";
	echo $value->personel_username. "<br>";
}

?>