<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">    
    <!--Link for the Icons-->
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
    <style>
        .left{
            width:70%;
            float:left;
            background:white;
        }

        .right{
            width:30%;
            background: rgba(227, 228, 255, 0.842);
        }

        hr.rounded {
            border-top: 6px solid #bbb;
            border-radius: 5px;
            width:90%;
            margin-bottom:10px;
        }

        hr.rounded2 {
            border-top: 2px solid #bbb;
            border-radius: 5px;
            width:40%;
        }

        .weekcontent .content{
            margin-left:20px;
        }

        .weekcontent .content ul{
            list-style-type: square;
            color:black;
            margin-bottom: 3px;
            display:list-item;
            margin-left:20px;
        }

        .previous{
            height: 150px;
            background: white;
            color: rgb(81,81,206);
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 30px;
            padding:10px;
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
            <div class="logo">Course Details</div>
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
        <div class="left">
            <h2>Your NEXT workshop is coming this Thursday, 10/04/20</h2>
            <hr class="rounded">

            <img src="agile_scrum.png" alt="Agile Scrum" width="60%">

            <div class="weekcontent">
                <br>
                <section class="content">
                    <h3>Week 8 Learning Objectives:</h3>
                    <hr class="rounded2"><br>
                    <h4>Starting Your Sprint</h4><br>
                    <div>
                    <ul>
                        <li>Selecting Agile Scrum Roles</li></ul>
                    <ul>
                        <li>Starting Sprint Planning</li></ul>
                    <ul>
                        <li>Keeping track of progress</li></ul>
                    </div>
                </section>
                <br><br>
                <section class="content">
                    <h3>Learning Materials:</h3>
                    <hr class="rounded2"><br>
                    <ul><li>
                    <a href="https://www.atlassian.com/agile/scrum/roles" target="_blank">Atlassian - Scrum Roles</a></li></ul>
                    <br>
                    <ul><li>
                    <a href="https://www.atlassian.com/agile/scrum/sprint-planning" target="_blank">Atlassian - Sprint Planning</a></li></ul>
                    <br>
                    <ul><li>
                    <a href="https://www.scrum.org/resources/blog/typical-sprint-play-play" target="_blank">Steps to a Sprint</a></li></ul>
                    <br>
                    <ul><li>
                    <a href="https://www.atlassian.com/agile/tutorials/burndown-charts" target="_blank">Tracking - Burndown Charts</a></li></ul>
                    
                </section>
            </div>          
            
        </div>
      
        <div class="right">
            <section class = "previous">
                <div class ="content">
                    <h4>Week 7: Sprint Ceremonies</h4>
                </div>
            </section>

            <section class = "previous">
                <div class ="content">
                    <h4>Week 6: Agile Sprints</h4>
                </div>
            </section>

            <section class = "previous">
                <div class ="content">
                    <h4>Week 5: Agile Roles</h4>
                </div>
            </section>

            <section class = "previous">
                <div class ="content">
                    <h4>Week 4: Agile Scrum</h4>
                </div>
            </section>
        </div>
    </div>
</div>     

</body>
</html>
