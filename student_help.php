<!DOCTYPE html>
<html>
<head>
    <title>Help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/bdbb373685.js" crossorigin="anonymous"></script>

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
            height: 500px;
            flex-grow: 1;
            margin-bottom: 20px;
            margin-top: 5px;
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

        .search-container button {
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 10px;
            border: none;
            cursor: pointer;
        }

        .search-container {
            float: none;
            display: block;
            text-align: left;
            width: 200%;
            margin: 0;
            padding: 14px;
        }
    </style>
</head>
<body>

    <div class="top-container">

        <img src="UNSW logo.png" alt="logo" class="logo" height="50" width="130">
    </div>

    <div class="header" id="myHeader">
        <span style="font-size:30px;position: absolute; left: 20px; bottom: 590px;cursor:pointer" onclick="openNav()"> &#9776; </span>
        <h2 style='display: inline;'><b>My Workspace</b></h2>
        <span style="position:absolute; right: 160px; bottom: 590px"><a href="student_home_pg.html"> <i class="fa fa-home" style="font-size:30px;color:white;"></i></span>

        <div class="dropdown">
            <button class="dropbtn">
                Rachel Johnson
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

        <a href="student_workspace_session.html"><i class="fas fa-chalkboard-teacher"></i> Sessions</a>
        <a href="student_workspace_group.html"><i class="fa fa-users"></i> Groups</a>
        <a href="student_workspace_chat.html"><i class="fa fa-comments"></i> Chat</a>
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
        <a href="student_help.html"><i class="fa fa-question-circle"></i> Help</a>
    </div>



    <div id="main" sstyle="background: rgba(208, 240, 192, 0.65);">
        <div id="containdiv">
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
