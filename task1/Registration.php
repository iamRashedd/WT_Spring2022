<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<hr>

<form action="/action_page.php">
	<table>
    	<tr>
			<td>
            	First Name:
            	</td> 
    		<td>
            	<input type="text" name="name">
                </td>
            </tr>
      	<tr>
			<td>
            	Last Name:
            	</td> 
    		<td>
            	<input type="text" name="name">
                </td>
            </tr>
      	<tr>
			<td>
            	Age:
            	</td> 
    		<td>
            	<input type="text" name="name">
                </td>
            </tr>
    
    <tr>
    	<td>
    		Designation
            </td>
    	<td>
        	<input type="radio" name="designation"> Junior Programmer
    		<input type="radio" name="designation"> Senior Programmer
    		<input type="radio" name="designation"> Project Lead
            </td>
    	</tr>
      <tr>
    	<td>
    		Preferred Language
            </td>
    	<td>
        	<input type="checkbox" name="java"> Java
    		<input type="checkbox" name="php"> PHP
    		<input type="checkbox" name="c++"> C++
            </td>
    	</tr>
        
        <tr>
			<td>
            	Email:
            	</td> 
    		<td>
            	<input type="text" name="email">
                </td>
            </tr>
            <tr>
			<td>
            	Password:
            	</td> 
    		<td>
            	<input type="password" name="password">
                </td>
            </tr>
            <tr>
			<td>
            	Please choose a file:
            	</td> 
    		<td>
            	<input type="submit" name="file" value="Choose File"> No file chosen
                </td>
            </tr>
    <tr>
    	<td>
        	<input type="submit" name="submit" value="Submit">
            </td>
    	<td>
        	<input type="reset" name="reset" value="Reset">
            </td>
    </tr>
</form> 
</body>
</html>

