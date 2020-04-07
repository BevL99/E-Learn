<html>
<head>
    <title>Live Session</title>
    <link rel="stylesheet" href="styles.css">    
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
</head>

<style>
    .wrapper{
        margin-right:0px;
    }
    .containdiv{
        width:100%;
        padding-left: 5px;
        padding-top:5px;
        margin-right: 0px;
        margin-top:60px;
    }

    .containdiv .videocontainer{
        background:yellow;
        padding-left: 10px;
        padding-right:10px;
        padding-bottom: 10px;
        bottom:0;
        position:absolute;
        padding-top:60px;
        height:100%;
    }

    .containdiv .videocontainer .videowrapper{
        position: relative;
        padding-bottom: 56.25%;
    }
    
    .containdiv .videocontainer .videowrapper iframe{
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
    }

    .containdiv .interactcontainer{
        width:350px;
        bottom:0;
        right:0;
        float:right;
        margin-left:5px;
        padding-top:65px;
        padding-bottom:50px;
        position:absolute;
        height:100%;
        display:block;
    }

    .containdiv .interactcontainer .interactcontent{
        height:100%;
        width:350px;
        background: whitesmoke;
        display:none;
        border:solid;
        border-color:lightgrey;
        flex:0 0 1px;
    }
    
    .containdiv .interactcontainer .interactoptions{
        width:350px;
        height:51px;
        bottom:0px;
        right:0px;
        position:absolute;
        background:whitesmoke;
        display: inline-block;
    }

    .containdiv .interactcontainer .interactoptions .option{
        width:172.5px;
        height:48px;
        border:solid;
        display: inline-block;
        background: inherit;
        color:lightgrey;
    }

    .containdiv .interactcontainer .interactoptions .option ul li a{
        padding-top:7px;
        display: block;
        color: #fff;
        position: relative;
        margin-bottom: 1px;
        color: rgb(81,81,206);
        white-space: nowrap;
        align-content: center;
    }

    .containdiv .interactcontainer .interactoptions .option ul li a:hover,
    .containdiv .interactcontainer .interactoptions .option ul li a.active{
        background: rgb(81,81,206);
        color: white;
        cursor: pointer;
    }
    .containdiv .interactcontainer .interactoptions .option ul li a span.icon{
        margin:0px;
        text-align: center;
        display: block;
    }

    .containdiv .interactcontainer .interactoptions .option ul li a span.title{
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
                <li><a href="login_page.php">
                    <i class="fas fa-sign-out-alt"></i></a></li>
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
            <div id="chat" class="interactcontent">
                <div><h3>Chat</h3>
                    <div>
                        Due 1 Hour After Workshop End
                        <!--WHERE THE QUIZ API SHOULD GO-->
                        <p>My idea is that the quiz has to be on the same page as workshop instead of under assessments page</p>
                    </div>
                </div>
            </div>
            <div id="quiz" class="interactcontent" style="display:none">
                <div><h3>Workshop Quiz</h3>
                    <div>
                        Due 1 Hour After Workshop End
                        <!--WHERE THE QUIZ API SHOULD GO-->
                        <p>My idea is that the quiz has to be on the same page as workshop instead of under assessments page</p>
                    </div>
                </div>
            </div>
            
            <div class="interactoptions">
                <div class="option" onclick="openContent(event, 'chat')" id="defaultOpen">
                    <ul>
                        <li><a>
                            <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
                            <span class="title">Chat</span></a></li>
                    </ul>
                </div>
                <div class="option" onclick="openContent(event, 'quiz')">
                    <ul>
                    <li><a>
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Quiz</span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<script>

    
    function openContent(evt, contentTitle) {
        var i, interactContent, option;
        
        interactContent = document.getElementsByClassName("interactContent");
        for (i = 0; i < interactContent.length; i++) {
            interactContent[i].style.display = "none";
        }
        
        option = document.getElementsByClassName("option");
        for (i = 0; i < option.length; i++) {
            option[i].className = option[i].className.replace(" active", "");
        }
        
        document.getElementById(contentTitle).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>
