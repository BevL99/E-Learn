<!DOCTYPE html>
<?php include 'student_filesLogic.php';?>
<html>
<head>
    <title>E-Learn Submissions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles.css" />
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
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="top_navbar">
            <div class="hamburger">
                <li>
                    <a href="staff_home_pg.php">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </li>
            </div>
            <div class="top_menu">
                <div class="logo">Submissions</div>
                <ul>
                    <li>
                        <a href="staff_home_pg.php">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login_page.php">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="containdiv">
            
                
                <div class="weekcontent">
                    <br />
                    
                    <br />
                    <br />
                    <section class="content">
                        <h3>Student Submissions:</h3>
                        <hr class="rounded2" />
                        <br />
                        <div>
                            <table>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td>
                                            <?php echo 'z1111111'; ?>
                                        </td>
                                        <td>
                                            <?php echo $file['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo floor($file['size'] / 1000) . ' KB';?>
                                        </td>
                                        <td>
                                            <a href="get_submission.php?file_id=<?php echo $file['id'] ?>">Download</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>

            </div>

            
                    
                
            
        </div>
    
</body>
</html>