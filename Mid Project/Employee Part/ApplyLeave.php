<?php  

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leave Application</title>
</head>
<body>
	<h1>Apply Form</h1>
	<form>
	<table>
		<tr>
    		<td>Select Post :</td>
    		<td>
     		<select>
      		<option>Doctor</option>
      		<option>Nurse</option>
      		<option>Recieptionist</option>
      		<option>Others</option>
     		</select>
    		</td>
		</tr>
		<tr>
    		<td>Name :</td>
    		<td><input type="Text"></td>
   		</tr>
   		<tr>
   			<td>Id</td>
   			<td><input type="number" name=""></td>
   		</tr>
   		<tr>
   			<td>Leave Reason</td>
   			<td><textarea rows="4" cols="50" name="comment" form="usrform"> Enter text here...</textarea></td>
   		</tr>
   		<tr>
		<td><input type="Submit" value="Submit"> <input type="Reset" value="reset"> </td>
	</tr>
	</table>
	</form>

</body>
</html>