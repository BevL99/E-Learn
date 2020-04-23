<!DOCTYPE html>
<?php include 'student_filesLogic.php';?>
<html>
<head>
        <title>E-Learn Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

    .top-container {
            background-color: #ffffff;
            padding: 10px;
        }
        table {
            margin:0;
            border-collapse: collapse;
        }
        th,
        td {
            height: 30px;
            vertical-align: center;
            border: 1px solid black;
            padding-left:5px;
            padding-right: 5px;
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

</style>

<body>
    

<div class="wrapper">
    <div class="top-container">

        <img src="unsw_elearn_blk.jpg" alt="logo" class="logo" height="50" width="220">
    </div>
    <div class="top_navbar" style="padding-top:80px">
        <div class="top_menu">
            <div class="logo" style="text-align:center">Home</div>
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
            <h4><a href="staff_wkspace_session.php">Enter your Workspace</a></h4>
            </div>
        </section>
        

        <section class="summaryitems">
            <div class="container">
                <h4>
                    <a href="get_submission.php">View recent student submissions</a>
                </h4>
            </div>
        </section>

        <section class="summaryitems">
            <div class="container">
                <h4>Upcoming Student Submissions</h4>
                <br />
                    INFS3605 Assignment 1 
                <br />
                    INFS3830 3rd Hands-On Assignment
                <br />
                
                
                
            </div>
        </section>

        </div>
      
        <div class="right">
            <section class = "courses">
                <div class ="content">
                <a href="student_course_detail_pg1.php" target="_blank"><h4>INFS3605</h4></a>
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