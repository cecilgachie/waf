<?php

require_once('./a.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_name=$_POST["name"];
	$_email=$_POST["email"];
	$_contact=$_POST["contact"];
	$_gender=$_POST["gender"];
	$_level_of_education=$_POST["level_of_education"];
	$_course=$_POST["course"];
	$_address=$_POST["address"];
	$_comment=$_POST["comment"];


	$sql="INSERT INTO aform(name,email,contact,gender,education_qualification,level_of_education,course,address,comment)VALUES('$name','$email','$contact','$gender','$education_qualification','$level_of_education','$course','$address','$comment')";

	
if ($conn->query($sql)) {
    echo "form filled succesfully";
} else {
    echo "error";
}
}

$conn->close();//close conection



?>

<!DOCTYPE html>
<form>
<html>
<head>
	<title>work application form</title>
	<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		

		<h1><em><u>PERSONAL DETAILS</u></em><BR>
		<P>NAME<input type ="text"><br>
		<P>EMAIL<input type ="text"><br>

		<P>CONTACT<input type ="numbers" size="20" maxlength="60"><br>

		<P>	GENDER<P>
			<INPUT TYPE="RADIO" NAME="GENDER" VALUE="MALE">male
			<input type="radio" name="gender" value="FEMALE">female<BR>
		</P>

		<H2><em>EDUCATION_QUALIFICATION</em></H2><br>
		LEVEL_OF_EDUCATION <br>

		COURSE<input type ="text"><br>

		<em><B>ADDRESS</B></em></H3><input type ="text"><br>

		<H3><em>COMMENT</em></H4><input type ="text"><br>
		
		<button>submit</button>

</body>
</form>