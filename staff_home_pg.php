<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .top-container {
            background-color: #ffffff;
            padding: 10px;
        }

        .header {
            padding: 10px;
            text-align: center;
            background: rgb(73, 206, 46);
            color: #f1f1f1;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

            .sticky + .content {
                padding-top: 102px;
            }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #043927;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

                .sidenav a:hover {
                    color: #f1f1f1;
                }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

                .sidenav a {
                    font-size: 18px;
                }
        }


        .summaryitems {
            height: 220px;
            
            color: rgb(0,0,0);
            margin-left: 15px;
            margin-right: 20px;
            text-align: left;
        }

        .containdiv {
            display:flex;
            margin-top: 10px;
            background: rgba(208, 240, 192, 0.65);
        }

        .left {
            height: 100vh;
            margin-bottom: 20px;
            background-color: white;
            margin-left: 15px;
            flex-grow: 1;
        }

        .right {
            height: 100vh;
            margin-bottom: 20px;
            margin-right: 15px;
            flex-grow: 1;
        }

        .courses {
            height: 100px;
            background: #ffffff;
            color: rgb(0,0,0);
            margin-left: 20px;
            margin-right: 15px;
        }


        .dropdown {
            float: right;
            overflow: hidden;
        }

            .dropdown .dropbtn {
                font-size: 16px;
                border: none;
                outline: none;
                color: white;
                padding: 14px 16px;
                background-color: inherit;
                font-family: inherit;
                margin: 0;
            }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

                .dropdown-content a:hover {
                    background-color: #ddd;
                }

        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
</head>
<body>

    <div class="top-container">

        <img src="UNSW logo.png" alt="logo" class="logo" height="50" width="130">
    </div>

    <div class="header" id="myHeader">
        <span style="font-size:30px;position: absolute; left: 10px; bottom: 605px;cursor:pointer" onclick="openNav()"> &#9776; </span><h2 style='display: inline;'><b>My Dashboard</b></h2>
        <div class="dropdown">
            <button class="dropbtn">
                John Doe
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Preferences</a>
                <a href="#">Settings</a>
            </div>
        </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br />
        <br />

        <a href="staff_home_pg.html"><i class="fa fa-home"></i> Home</a>
        <a href="staff_workspace_session.html"><i class="fa fa-comments"></i> Sessions</a>
        <a href="#"><i class="fa fa-users"></i> Groups</a>
        <a href="#"><i class="fa fa-address-book"></i> Contacts</a>
        <a href="#"><i class="fa fa-user-circle"></i> My Profile</a>
        <a href="login_page.html"><i class="fa fa-sign-out"></i> Log out</a>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <a href="#"><i class="fa fa-question-circle"></i> Help</a>
    </div>

    

    <div id="main">
       
        <div class="containdiv">
            <div class="left">
                <section class="summaryitems">
                    <h3 style="padding-left: 5px;padding-top:5px"> MySpace: </h3>
                    <h4 style="padding-left: 25px;padding-top:5px"><a href="staff_workspace_session.html"> >> Click <u>here</u> to enter your Workspace</a></h4>
                    
                </section>

                <section class="summaryitems">
                    <h3 style="padding-left: 5px;padding-top:5px">Your Announcements:</h3>
                    <br />
                    <br />
                </section>

                <section class="summaryitems">
                    <h3 style="padding-left: 5px;padding-top:5px">Upcoming Student Submissions:</h3>
                    <br />
                    <br />
                </section>

            </div>
            <div class="right">
                <h3 style="padding-left: 15px">Course Overview:</h3>
                <section class="courses">
                    <h4 style="padding-left: 5px;padding-top:5px;color:black"><a href="staff_course_detail_pg1.html">INFS1602: Digital Transformation in Business </a></h4>
                    <p style="padding-left: 5px;color:blue"><a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS1602" target="_blank">Course Outline</a>
                        
                    </p>

                    
                </section>

                <section class="courses">
                    <h4 style="padding-left: 5px;padding-top:5px;color:black"><a href="staff_course_detail_pg2.html">INFS1603: Introduction to Business Databases</a></h4>
                    <p style="padding-left: 5px;color:blue"><a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS1603" target="_blank"> Course Outline</a>
                        
                    </p>
                </section>

                <section class="courses">
                    <h4 style="padding-left: 5px;padding-top:5px;color:black"><a href="staff_course_detail_pg1.html">INFS1609: Fundamentals of Business Programming</a></h4>
                    <p style="padding-left: 5px; padding-bottom:50px;color:blue"><a href="https://www.business.unsw.edu.au/degrees-courses/course-outlines/INFS1609" target="_blank"> Course Outline</a>
                        
                    </p>
                </section>

            </div>


        </div>

    </div>

    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }

        function openNav() {
            document.getElementById("mySidenav").style.width = "300px";
            document.getElementById("main").style.marginLeft = "300px";
            
           
          


        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
          
        }
    </script>


</body>
</html>