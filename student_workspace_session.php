<!DOCTYPE html>
<html>
<head>
    <title>Sessions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>

    <style>
        .containdiv{
            margin-left: 150px;
            margin-right: 10px;
            padding-top: 10px;
            width:calc(100%-160px);
            height:100%;
            display:block;
        }

        h2{
            margin-top: 40px;
        }

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
            <div class="logo">Sessions</div>
            <ul>
                <li><a href="student_home_pg.php">
                    <i class="fas fa-home"></i></a></li>
                <li><a href="#">
                    <i class="fas fa-cog"></i></a></li>
                <li><a href="#">
                    <i class="far fa-user"></i></a></li>
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
        <h2>Active Sessions</h2>
        
        <div class="sessions">
            <div class="workshop">
            <ul>
                <li><a href="student_session_activity.php">
                <span class="icon"><i class="fas fa-school" style="font-size:40px"></i></span>
                <span class="title">INFS3617 W8</span></a></li>
            </div>
            <div class="workshop">
            <ul>
                <li><a href="student_session_activity.php">
                <span class="icon"><i class="fas fa-school" style="font-size:40px"></i></span>
                <span class="title">INFS3605 W8</span></a></li>
            </div>
        </div>

        <h2>Past Sessions</h2>
        
        <div class="sessions">
            <div class="workshop">
            <ul>
                <li><a href="student_session_activity.php">
                <span class="icon"><i class="fas fa-school" style="font-size:40px"></i></span>
                <span class="title">INFS3617 W7</span></a></li>
            </div>
            <div class="workshop">
            <ul>
                <li><a href="student_session_activity.php">
                <span class="icon"><i class="fas fa-school" style="font-size:40px"></i></span>
                <span class="title">INFS3605 W7</span></a></li>
            </div>
        </div>

    </div>
</div>        

</body>
</html>

