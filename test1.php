<body>
 
<form  method="post" enctype="multipart/form-data">
 
<table width="419" border="1"> 
 <tr>    
<td width="173">Enter your email </td>
  <td width="230"><input type="email"  name="eid"/>
 
</td>  </tr>  <tr> 
 
   <td>Password</td>  
 
<td><input type="password"  name="pass"/></td> 
 
</tr>  <tr>    <td>Mobile</td> 
 
   <td><input type="text"  name="mob"/></td>
 
  </tr> 
 
 <tr>   
 <td>Address</td> 
  
 <td><textarea name="add"></textarea></td> 
 
 </tr> 
 <tr>  
  <td>Gender</td> 
   <td>
    
Male<input type="radio" value="m" name="g"/>
Female<input type="radio" value="f" name="g"/>
	
</td>
 
 </tr>
 
 <tr>
 
   <td>Hobbies</td>
    <td>	cricket<input type="checkbox" name="chlist[]" value="cricket"/>
singing<input type="checkbox" name="chlist[]" value="singing"/>
 
reading<input type="checkbox" name="chlist[]" value="reading"/>
	
</td>
 
  </tr>
 
  <tr>
 
    <td>Image</td> 
 
   <td><input type="file" name="file" id="file" />
 
 </td>
  </tr>
 
  <tr> 
 
   <td>DOB</td> 
 
   <td>
	<select name="yy">
	<option value="" disabled="disabled" selected="selected">	Year</option>
	<?php
	for($i=1900;$i<=2013;$i++)
	{
	echo "<option value='$i'>$i</option>";
 	}
	?>
			
</select><select name="mm">
 
<option value="" disabled="disabled" selected="selected">	Month	</option>
 
	<?php	
	for($i=1;$i<=12;$i++)
		{
		echo "<option value='$i'>$i</option>";
 		}
		?>
 
	</select>
 
	<select name="dd">		
 
<option value="" disabled="disabled" selected="selected">	Date</option>
 
		<?php
		for($i=1;$i<=31;$i++)
		{
		echo "<option value='$i'>$i</option>";
 		}
		?>
		
</select>	</td>
 
  </tr>
 
  	<tr> 
 		<td colspan="2" align="center">	<input type="submit" name="ins" value="Insert"/>			
 
<input type="submit" name="disp" value="show"/>	
 
</tr>
 
</table>
 
</form>
 
</body>
 
</html>