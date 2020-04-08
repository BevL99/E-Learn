<!DOCTYPE html>
<html>
<head>
    <title>Live Session</title>
    <link rel="stylesheet" href="styles.css">    
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
</head>

<style>
    .containdiv{
        width:100%;
        height:100%;
        padding-left: 5px;
        padding-top:60px;
        bottom:0;
        display:block;
        position: absolute;
    }

    .containdiv .videocontainer{
        padding-top:80px;
        padding-left: 5px;
        padding-right:360px;
        padding-bottom: 10px;
        bottom:0;
        position:absolute;
        height:100%;
        width:100%;
        display:block;
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
        right:0;
        bottom:0;
        padding-top:60px;
        position:absolute;
        width: 350px;
        height: 100%;
        display: block;
    }

    .containdiv .interactcontainer .contentheader{
        height:35px;
        width:350px;
        right:0;
        text-align: center;
        border:solid;
        border-color: lightgrey;
        border-width:1px;
        background:rgb(220,220,220);
    }

    .containdiv .interactcontainer .interactcontent{
        height: 100%;
        width: 350px;
        bottom:0;
        padding-top:60px;
        position:absolute;
        display: flex;
        flex: 0 0 1px;
    }
    
    .containdiv .interactcontainer .interactoptions{
        width:350px;
        height:50px;
        right:0;
        bottom:0;
        position:absolute;
        background:whitesmoke;
        display: block;
    }

    .containdiv .interactcontainer .interactoptions .option{
        width:172.5px;
        height:50px;
        display: inline-block;
        border:solid;
        border-color: lightgrey;
        border-width:1px;
    }

    .containdiv .interactcontainer .interactoptions .option ul li a{
        padding-top:7px;
        display: block;
        height:49px;
        color: #fff;
        position: relative;
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

    .containdiv .interactcontainer .interactcontent .chatcontainer{
        height:100%;
        width:100%;
        bottom:0;
        padding-top:145px;
        margin-bottom:50px;
        position:absolute;
    }

    .containdiv .interactcontainer .interactcontent .chatcontainer .chatcontent{
        height:100%;
        width:100%;
        border:solid;
        margin-bottom:50px;
        border-color: lightgrey;
        border-width:1px;        
        background:whitesmoke;
    }

    .chatscroll{
        height:100%;
        padding-bottom:50px;
        overflow-y:auto;
    }

    .containdiv .interactcontainer .interactcontent .chatcontainer .chatinput{
        width:350px;
        height:50px;
        padding:5px;
        bottom:0;
        position:absolute;
        border:solid;
        border-color: lightgrey;
        border-width:1px;
        text-align: center;
    }

    .chatscroll{
        background: whitesmoke;
        color: black;
    }


    input[type=text] {
        width: 250px;
        height:35px;
        padding: 12px 16px;
        margin: auto;
        box-sizing: border-box;
        display:inline-block;
    }

    .send{
        display:inline-block;
        width:35px;
        height:35px;
        background:whitesmoke;
    }

    .send:hover{
        cursor:pointer;
    }

    .containdiv .interactcontainer .interactcontent .quizcontainer{
        height:100%;
        width:100%;
        bottom:0;
        padding-top:145px;
        margin-bottom:50px;
        position:absolute;
        
    }

    .containdiv .interactcontainer .interactcontent .quizcontainer .quizcontent{
        height:100%;
        width:100%;
        border:solid;
        margin-bottom:50px;
        border-color: lightgrey;
        border-width:1px;        
        background:whitesmoke;
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
            <div class="videowrapper">
                <iframe width="100%" height="100%" 
                src="https://www.youtube.com/embed/IQGyBNL8opY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="interactcontainer">
            <div id="chat" class="interactcontent">
                <header class="contentheader"><h2>Chat</h2></header>                
                <section class="chatcontainer">
                    <section class="chatcontent">
                        <div class="chatscroll" id="chatmsg">
                            <p>asdasda</p>
                        </div>
                    </section>
                    <section class="chatinput">
                        <input type="text" id="msg" placeholder="Type Your Message">
                        <div class="send" >
                            <li><a>
                            <span class="icon"><i class="fas fa-chalkboard-teacher" onclick="insertMsg(event)"></i></span>
                            </a></li>
                        </div>
                    </section>
                </section>
            </div>

            <div id="quiz" class="interactcontent" style="display:none">
                <header class="contentheader"><h2>Workshop Quiz</h2></header>
                <section class="quizcontainer">
                    <section class="quizcontent">
                    Due 1 Hour After Workshop End
                    <!--WHERE THE QUIZ API SHOULD GO-->
                    <p>My idea is that the quiz has to be on the same page as workshop instead of under assessments page</p>
                    </section>
                </section>
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

    document.getElementById("defaultOpen").click(); 

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
    

    function insertMsg(evt){
        var block_to_insert, chatBox;
        
        block_to_insert = document.createElement( 'div' );
        block_to_insert.innerHTML = document.getElementById('msg').value;
        
        chatBox = document.getElementById(chatmsg);
        chatBox.appendChild( block_to_insert );
    }

</script>

</body>
</html>
