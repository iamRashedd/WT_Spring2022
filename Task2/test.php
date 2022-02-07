<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<hr>

<form action="Control/results.php" method="post">
	<table>
    	<tr>
			<td>
            	First Name:
            	</td> 
    		<td>
            	<input type="text" name="firstName">
                </td>
            </tr>
      	<tr>
			<td>
            	Last Name:
            	</td> 
    		<td>
            	<input type="text" name="lastName">
                </td>
            </tr>
      	<tr>
			<td>
            	Age:
            	</td> 
    		<td>
            	<input type="text" name="age">
                </td>
            </tr>
    
		<tr>
			<td>
				Designation
				</td>
			<td>
				<input type="radio" name="designation" value="Junior Programmer"> Junior Programmer
				<input type="radio" name="designation" value="Senior Programmer"> Senior Programmer
				<input type="radio" name="designation" value="Project Lead"> Project Lead
				</td>
			</tr>
		<tr>
			<td>
				Preferred Language
				</td>
			<td>
				<input type="checkbox" name="java" value="Java"> Java
				<input type="checkbox" name="php" value="PHP"> PHP
				<input type="checkbox" name="c++" value="C++"> C++
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
            	<input type="file" name="uploadedFile" value="Choose File">
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

