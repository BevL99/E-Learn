<!DOCTYPE html>
<html>
<head>
    <title>Uploads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>

    <style>
        .containdiv{
            margin-left: 150px;
            margin-right: 150px;
            padding-top: 10px;
            width:calc(100%-160px);
            height:100%;
            display:block;
        }

        h2{
            margin-top: 10px;
            margin-bottom:20px;
        }

        input[type=text]{
            margin-left:0;
            display:block;
            margin-bottom:10px;
            border: 1px solid rgb(81,81,206);
        }

        button{
            background-color: rgb(81,81,206);
            margin-bottom:20px;
        }

        .upload{
            display:block;
        }

    </style>
</head>
<body>



<div class="wrapper">
    <div class="top_navbar">
        <div class="hamburger">
                <li><a href="staff_home_pg.php">
                <i class ="fas fa-arrow-left"></i></a>
            </li>        
        </div>
        <div class="top_menu">
            <div class="logo">Uploads</div>
            <ul>
                <li><a href="staff_home_pg.php">
                    <i class="fas fa-home"></i></a></li>
                <li><a href="#">
                    <i class="fas fa-cog"></i></a></li>
                <li><a href="#">
                    <i class="far fa-user"></i></a></li>
                <li><a href="login_page.php">
                    <i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="sidebar">
        <ul>
            <li><a href="staff_wkspace_session.php">
                <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
                <span class="title">Sessions</span></a></li>

            
            <li><a href="staff_contacts.php">
                <span class="icon"><i class="fas fa-address-book"></i></span>
                <span class="title">Contacts</span></a></li>

            <li>
                <a href="dash.php">
                    <span class="icon">
                        <i class="fas fa-poll-h"></i>
                    </span>
                    <span class="title">Quiz</span>
                </a>
            </li>
            <li><a href="staff_upload_pg.php">
                <span class="icon"><i class="fas fa-upload"></i></span>
                <span class="title">Upload</span></a></li>
        </ul>
    </div>

    <div class="containdiv">
        <h2>Upload Files Here</h2>

        <form method="post" action="staff_upload_pg.php" enctype="multipart/form-data">
            <label>File Title:</label>
            <input type="text" name="title">
            <label>File Upload: </label>
            <input type="file" name="file">
            <button type="submit" name="submit">Upload</button>
            <?php include 'filesLogic.php';?>
        </form>
    </div>        

</body>
</html>

