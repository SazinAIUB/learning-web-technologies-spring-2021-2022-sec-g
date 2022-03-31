<?php 
$conn = mysqli_connect('localhost','root','','ProjectDatabase');
$sql = 'select * from users';
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Job Application </title>
</head>
<body>
		<h1 style="background-color:Tomato;" align="center">Job Application Form</h1>
 <form>
  <table border="solid">
<?php while ($data = mysqli_fetch_assoc($result))?> 
{
   
   <tr>
    <td><?=$data["Name"]?>Name :</td>
    <td><input type="Text"></td>
   </tr>
   <tr>
    <td><?=$data["Address"]?>Address :</td>
    <td><input type="text"></td>
   </tr>
   <tr>
    <td><?=$data["Gender"]?>Gender :</td>
    <td>
     <input type="radio" name="Gender"> Male
     <input type="radio" name="Gender"> Female
    </td>
   </tr>
   <tr>
    <td><?=$data["Email"]?>Email :</td>
    <td><input type="email"></td>
   </tr>
   <tr>
    <td><?=$data["Phone Number"]?>Phone no :</td>
    <td>
     <select>
      <option>+880</option>
     </select>
     <input type="phone">
    </td>
	</tr>
	<tr>
    <td><?=$data["DOB"]?>     
     <label for="birthday">Birthday:</label>
	   <input type="date">
	  </td>
   </tr>
      <tr>
    <td><?=$data["Blood Group"]?>Blood Group :</td>
    <td>
     <select>
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>0+</option>
      <option>Others</option>
     </select>
    </td>
	</tr>
	   <tr>
   	<td><?=$data["Photo"]?>
   		<label for="photo">Choose Your CV</label>
   	<td>
        <input type="file" name="pdf" id= "pdf">
     </td>
   	</td>
   </tr>
   <tr>
		<td><input type="Submit" value="Submit"> <input type="Reset" value="reset"> </td>
	</tr>	
}
  </table>
 </form>
</body>
</html>