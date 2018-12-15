<html>

<h1>Hi, my role is <?php echo strtoupper($emp["role"]); ?></h1>

<p>Welcome <?php echo $emp["name"]; ?></p>

Hobbies:<ul>
<?php 
  foreach($emp["hobbies"] as $hobby) {
	  echo "<li>".$hobby."</li>";
  }
?>

</ul>
</html>