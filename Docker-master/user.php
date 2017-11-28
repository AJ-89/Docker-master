<html>
<body>

<form action ="geocord.php" method="POST">
Origin: <input type="text" name ="city"><br>
Destination:<input type="text" name ="city2"><br>
Mode: <select name ="mode">
	<option value= "">Select</option>
	 <option value="driving">Drive</option>
	<option value="walking">Walk</option>
	<option value ="transit">Public</option>
	<option value ="bicycling">Cycle</option>
</select>			
<input type = "submit" name="Submit"  value="Send">
</form>

</body>
</html>

