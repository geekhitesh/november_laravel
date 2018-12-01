<html>

<h1>Employee List</h1>

<ul>
<?php
foreach($empList as $emp) {
	echo "<li>".$emp['name']."</li>";
}
?>
</ul>

</html>