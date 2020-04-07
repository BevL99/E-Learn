<?php
session_start();
error_reporting(0);

if(isset($_POST['submit'])){
    
    $db = mysqli_connect('localhost','root','','infs3605')
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
        $_SESSION['uid'] = $username;
        $_SESSION['psw'] = $password;
        header("Location: student_home_pg.php");
    }
    else{
        $error="Invalid Username or Password! ";
	}
}

if(isset($_POST['submit_btn'])){

    $db = mysqli_connect('localhost','root','','infs3605')
 or die('Error connecting to MySQL server.');

    $username = $_POST['uid'];
    $password = $_POST['psw'];
    $error = "";
    $success = "";

    $query = "SELECT * FROM STAFF WHERE STAFF_ID = '$username' AND STAFF_PASSWORD = '$password'";
    mysqli_query($db, $query) or die('Error querying database.');

    $result = mysqli_query($db, $query);
	$row = mysqli_fetch_array($result);

	if ($row['STAFF_ID'] == $username && $row['STAFF_PASSWORD'] == $password){
        $success="Login Successful";
        $_SESSION['uid'] = $username;
        $_SESSION['psw'] = $password;
        header("Location: staff_home_pg.php");
    }
    else{
        $error="Invalid Username or Password! ";
	}
}
mysqli_close($db);
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  
</head>

<style>
    h2{
        padding:10px;
    }

    .banner{
        border-bottom: 10px solid #0E4D92;
    }

    .bdcontainer {        
        padding: 50px 0;
        width: 100%-10px;
        height:100%;
        margin: auto;
        border: none;
        background-image: url('login_bg.png');
        align-content: center;
    }
</style>

<div class="banner">
    
    <img src="unsw_elearn_blk.jpg" style="height:60px"/>
</div>



<body class="bg" style="margin-top: 5px; margin-left:10px; margin-right:10px;">
    
    <div class="bdcontainer">


    <div class="lgncontainer">
        <form method="post">
            <body style="width: 100px">
                <h2 align="center"> <font size="8">Sign On</font></h2>

                <label for="uid"><b>USER ID</b></label>
                <input type="text" placeholder="Enter your zID" name="uid" required>
                <br />
                <label for="psw"><b>PASSWORD</b></label>
                <input type="password" placeholder="Enter your password" name="psw" required>
                
                 <p class="error" align="center" style="color:red">
                <?php echo $error; ?>
                 </p>

                <p align="center"> <font size="2">I agree to the <b>Terms & Conditions</b> of using UNSW ICT resources as set out in the policy and procedures.</font></p>
                
                <div class="btncontainer">
                    
                    <button type="submit" class="button" id="submit" name="submit">Agree and sign on as Student</button>

                    <button type="submit" class="button" id="submit_btn" name="submit_btn">Agree and sign on as Staff</button>
                    
                </div>
                <span class="psw"> <a href="forgot_pw_pg.html">Forgot password?</a></span>
        </form>
    </div>
</div>
</body>
</html>
