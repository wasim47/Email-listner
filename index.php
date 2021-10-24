<form method="post" enctype="multipart/form-data" action="upload.php">
	<table width="100%">
    	<tr>
       	  <td width="11%"><label>Live File: </label></td>
            <td width="89%"><input type="file" name="livefile" required/></td>
        </tr>
        <tr>
        	<td><label>Dead File: </label></td>
            <td><input type="file" name="deadfile" required/></td>
        </tr>
        <tr>
        	<td><label>New File: </label></td>
            <td><input type="file" name="newfile" required/></td>
        </tr>
        <tr>
        	<td><label>Your File Name: </label></td>
            <td><input type="text" name="filename" required /></td>
        </tr>
        <tr>
            <td height="50" align="right"><input type="submit" name="submit"  value="Submit"/></td>
      </tr>
    </table>
   
</form>