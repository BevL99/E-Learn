<html>
<head>
    <title>Live Session</title>
    <link rel="stylesheet" href="styles.css">    
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
</head>

<style>
    .wrapper .containdiv .videocontainer{
        width:100%;
        background:none;
        padding-right: 10px;
    }

    .wrapper .containdiv{
        margin-left: 10px;
        margin-right: 10px;
        margin-top:60px;
    }

    .wrapper .containdiv .videocontainer .videowrapper{
        position: relative;
        padding-bottom: 56.25%;
    }
    
    iframe{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .wrapper .containdiv .interactcontainer{
        background:red;
        width:350px;
        margin:0px;
        height:calc(100%-60px);
    }
    
    .wrapper .containdiv .interactcontainer .interactoptions{
        width:350px;
        height: 50px;
        bottom:0px;
        right:10px;
        position:absolute;
        background:white;
        border:dotted;
    }

    .wrapper .containdiv .interactcontainer .interactoptions .option{
        width:175px;
        height:50px;
        bottom:0px;
        margin:0px;
        position:absolute;
        border:solid;
        border-color: blue;
        display:inline-block;
    }

    .wrapper .containdiv .interactcontainer .interactoptions .option ul li a{
        display: block;
        color: #fff;
        position: relative;
        margin-bottom: 1px;
        color: rgb(81,81,206);
        white-space: nowrap;
        align-content: center;
    }

    .wrapper .containdiv .interactcontainer .interactoptions .option ul li a span.icon{
        margin:0px;
        text-align: center;
        display: block;
    }

    .wrapper .containdiv .interactcontainer .interactoptions .option ul li a span.title{
        margin:0px;
        text-align: center;
        display:block;
    }

</style>

<body>

<div class="wrapper">
    <div class="top_navbar">
        <div class="hamburger">
                <li><a href="student_workspace_session.php">
                <i class ="fas fa-arrow-left"></i></a>
            </li>        
        </div>
        <div class="top_menu">
            <div class="logo">Live Session</div>
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

    <div class="containdiv">

        <div class="videocontainer">
            <h2>Welcome to the active session for Course Name</h2>
            <div class="videowrapper">
                <iframe width="100%" height="100%" 
                src="https://www.youtube.com/embed/IQGyBNL8opY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="interactcontainer">
            <div><h3>Workshop Quiz</h3>
                <div>
                    Due 1 Hour After Workshop End
                    <!--WHERE THE QUIZ API SHOULD GO-->
                    <p>My idea is that the quiz has to be on the same page as workshop instead of under assessments page</p>
                </div>
            </div>
            <div class="interactoptions">
                <div class="option">
                    <ul>
                        <li><a href="student_workspace_session.php">
                            <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
                            <span class="title">Chat</span></a></li>
                    </ul>
                </div>
                <div class="option">
                    <ul>
                    <li><a href="student_workspace_group.php">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Quiz</span></a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
