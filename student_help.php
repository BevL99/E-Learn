<!DOCTYPE html>
<html>
<head>
    <title>Help</title>
    <link rel="stylesheet" href="styles.css">    
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>

    <style>
        
    </style>
</head>

<body>

<div class="wrapper">
    <div class="top_navbar">
        <div class="hamburger">
                <li><a href="student_home_pg.php">
                <i class ="fas fa-arrow-left"></i></a>
            </li>        
        </div>
        <div class="top_menu">
            <div class="logo">Chat</div>
            <ul>
                <li><a href="student_home_pg.php">
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
            <li><a href="student_workspace_session.php">
                <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
                <span class="title">Sessions</span></a></li>
            <li><a href="student_workspace_group.php">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span class="title">Groups</span></a></li>
            <li><a href="student_workspace_chat.php">
                <span class="icon"><i class="fas fa-comments"></i></span>
                <span class="title">Chat</span></a></li>
        </ul>
    </div>

    <div class="containdiv">
        <h3>I need Help with:</h3>
            <hr />
            <br />

            <div class="search-container" style="padding-left:600px">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
    </div>
</div>

</body>
</html>
