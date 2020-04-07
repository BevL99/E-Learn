<!DOCTYPE html>

<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>
</head>

<style>
    .courses .content a{
        color: blue;
        text-decoration: underline;
    }

    .courses .content{
        margin-left:10px;
        margin-right: 10px;
    }

    h4{
        padding-top:10px;
        font-size: 20px;
        padding-bottom: 5px;
    }

    .container{
        text-align: center;
    }

    .container a{
        color:blue;
        text-decoration: underline;
    }

    .container .content{
        margin-left: 10px;
        margin-right: 10px;
        padding:10px;
        background: rgba(220, 220, 255, 0.65);
        color:rgb(124, 124, 255);
        text-align: left;
    }

</style>

<body>
<div class="wrapper">
    <div class="top_navbar">
        <div class="top_menu">
            <div class="logo">Home</div>
            <ul>
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
        <section class="summaryitems">
            <div class="container">
            <h4><a href="student_workspace_session.php">Click to Workspace</a></h4>
            </div>
        </section>
        

        <section class="summaryitems">
            <div class="container">
            <h4>Your Upcoming Activities</h4>
            </div>
        </section>

        <section class="summaryitems">
            <div class="container">
                <h4>Your Upcoming Submissions</h4>
                <div class="content">
                    asdasd
                </div>
            </div>
        </section>

        </div>
      
        <div class="right">
            <section class = "courses">
                <div class ="content">
                <h4>INFS3605</h4>
                <p>
                IS Innovation & Transformation
                </p>
                <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3605" target="_blank">Course Outline</a>
                </div>
            </section>

            <section class = "courses">
                <div class ="content">
                    <h4>INFS3617</h4>
                    <p>
                    Networking & Cyber Security
                    </p>
                    <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3617" target="_blank">Course Outline</a>
                </div>
            </section>

            <section class = "courses">
                <div class ="content">
                <h4>INFS3830</h4>
                <p>
                Social Media and Analytics
                </p>
                <a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS3830" target="_blank">Course Outline</a>
                </div>
            </section>
        </div>
    </div>
 
</div>
</body>
</html>