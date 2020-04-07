<?php

error_reporting(0);

if(isset($_POST['submit'])){
    
    $db = mysqli_connect('192.168.1.189','Infs_data','Infs2020!')
    or die('Error connecting to MySQL server.');

    $username = $_POST['uid'];
    $password = $_POST['psw'];
    $error = "";
    $success = "";

    $query = "SELECT * FROM STUDENT WHERE STUDENT_ID = '$username' AND STUDENT_PASSWORD = '$password'";
    mysqli_query($db, $query) or die('Error querying database.');

    $result = mysqli_query($db, $query);
	$row = mysqli_fetch_array($result);

	if ($row['STUDENT_ID'] == $username && $row['STUDENT_PASSWORD'] == $password){
        $success="Login Successful";
        header("Location: student_home_pg.php");
    }
    else{
        $error="Invalid Username or Password! ";
	}
}
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  
</head>
<body style="background-image: url('lgn_bkgnd.png')">

   

    <div class="imgcontainer">
        <img src="Unswuni.png" alt="Avatar" class="avatar"
             style='height: 100%; width: 100%; object-fit: contain'>
    </div>

    <div class="lgncontainer">
        
        <form method="post">

            <h2 align="center">
                <font size="8">E-Learn Sign On</font>
            </h2>

            <label for="uid">
                <b>USER ID</b>
            </label>
            <input type="text" placeholder="Enter your zID" id="uid" name="uid" required />

            <br />

            <label for="psw">
                <b>PASSWORD</b>
            </label>
            <input type="password" placeholder="Enter your password" id="psw" name="psw" required />

           

            <p class="error" align="center" style="color:red">
                <?php echo $error; ?>
            </p>
           

            <p align="center">

                <font size="2">
                    I agree to the
                    <b>Terms & Conditions</b> of using UNSW ICT resources as set out in the policy and procedures.
                </font>
            </p>

            <div class="btncontainer">

                <button type="submit" class="button" id="submit" name="submit" >Agree and sign on as Student</button>

                <button type="submit" class="button" formaction="staff_home_pg.php">Agree and sign on as Staff</button>
                
            </div>

            <span class="psw">
                <a href="forgot_pw_pg.php">Forgot password?</a>
            </span>
            
        </form>
    </div>
    
    

</body>
</html>
