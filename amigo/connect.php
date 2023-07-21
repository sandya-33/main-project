<?php
include 'main.php';
if(isset($_POST['submit']))
{
    $Name = $_POST['Name'];
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$mbti = $_POST['mbti'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
        $gender= $_POST['gender'];
    $sql="insert into personality(Name,Username,Email,mbti,password,cpassword,gender)
    values('$Name','$Username','$Email','$mbti','$password','$cpassword','$gender')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('account created')</script>";
    }
    else{
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}

?>