<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/dashboard.css">

    <link rel="stylesheet" href="./css/update_profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Student details</title>

    <style>
    table,th,td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px; 
        text-align: center;
    }
    th {
        background-color: #8581fc;
    }
    .paid{
        color:green; 
    }
    .peding{
        color:red; 
    }
    </style>
</head>

<body>
    <div class="slidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bx-user'></i>
                <i class="fa-solid fa-user"></i>
                <div class="logo_name"><?php echo $_SESSION['uname'] ?> Panel</div>
            </div>

        </div>
        <ul class="nav_list">

            <li>
                <a href="perant_page.php">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_name">Home</span>
                </a>

            </li>
            
            <li>
                <a href="parent_gallery.php">
                    <i class='bx bx-folder'></i>
                    <span class="link_name">Gallery</span>
                </a>

            </li>

            <li>
                <a href="perant_profile.php">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Profile</span>
                </a>

            </li>
            <li>
                <a href="perant_feedback.php">
                    <i class='bx bx-chat'></i>
                    <span class="link_name">Feedback</span>
                </a>

            </li>

            <li>
                <a href="parent_student_detail.php" class="active">
                    <i class='bx bx-chat'></i>
                    <span class="link_name">student info</span>
                </a>

            </li>
            <!-- <li>
                <a href="#">
                    <i class='bx bxs-user-rectangle'></i>
                    <span class="link_name">Friends</span>
                </a>

            </li> -->
            <!-- <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="link_name">Favourite</span>
                </a>

            </li> -->
            <!-- <li>
                <a href="#">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="link_name">Notification</span>
                </a>

            </li> -->
            <li>
                <a href="perant_location.php">
                    <i class='bx bx-map'></i>
                    <span class="link_name">location</span>
                </a>

            </li>
            <!-- <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>

            </li> -->

            <li>
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log-Out</span>
                </a>

            </li>
        </ul>
    </div>
    <div class="main">
        <!-- <div class="update-profile"> -->
            <table style="width:100%">
                <tr>
                    <th>Enrollment no</th>
                    <th>Student Name</th>
                    <th>Bus Route</th>
                    <th>Fees</th>
                </tr>

                <?php
                    $sql = "SELECT eno,name,bus_route,status FROM student";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        
                            echo "<tr><td>".$row['eno']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['bus_route']."</td>";

                            echo "<td>";
                            if($row['status']==1){
                                echo '<p class="paid">paid</p>';
                            }
                            else{echo '<p class="peding">pending</p>'; }
                            echo "</td>"; 
                      }
                    } else {
                      echo "0 results";
                    }
                ?>

                
            </table>
        <!-- </div> -->
    </div>
</body>

</html>