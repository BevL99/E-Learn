<?php

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
<style>
        form {
        border: none;
        align-content: center;
        }

        input[type=text], input[type=password] {
        width: 300px;
        padding: 10px 20px;
        margin: 8px 0;
        display: list-item;
        border: 1px solid rgb(198, 250, 177);
        }

        button {
        background-color: rgb(73, 206, 46);
        color: white;
        padding: 14px 20px;
        margin: 10px 0;
        border: none;
        cursor: pointer;
        width: 300px;
        display: list-item;
        }
        
        button:hover{
        opacity:0.8
        }

        .imgcontainer {
        text-align: center;
        width: 400px;
        height: 250px;
        margin: auto;
        padding: 10px 30px;
        background-color: rgba(255, 255, 255, 0.6);
        }

        img.avatar {
        width: 50%;
        }

        .lgncontainer {
        padding: 10px 30px;
        width: 400px;
        height: 500px;
        margin: auto;
        border: none;
        background-color: rgba(255, 255, 255, 0.6);
        align-content: center;
        }

        span.psw {
        float: right;
        padding-top: 16px;
        }

        hr.border{
        border-top: 7px solid #bbb;
        opacity: 60%;
        border-radius: 5px;
        }

        header {
        text-align: center;
        font-size: 35px;
        font-weight: bold;
        height: 40px;
        padding: 10px;
        color: rgb(0, 0, 0);
        }
        .button {
        text-align: center;
        position: relative;
        top: 50%;
        left: 12%;
    }
</style>
    
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

                <button type="submit" class="button" formaction="staff_home_pg.html">Agree and sign on as Staff</button>
                
            </div>

            <span class="psw">
                <a href="forgot_pw_pg.html">Forgot password?</a>
            </span>
            
        </form>
    </div>
    
    

</body>
</html>
