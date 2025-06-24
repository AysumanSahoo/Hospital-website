<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPITAL HOSPITAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="style.css">-->
    <style>
        * {
            margin: 0%;
            padding: auto;

        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: white;


        }

        nav {
            padding: 14px 16px;
            background-color: #16a085;
            color: #111;
            position: flex;
            top: 0%;
            width: 100%;

        }
        

        .footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 66px;
            margin-top: 300px;
            background-color: #16a085;
            color: #111;
            width: 92.5%;
            
        }

        .text1 p {
            margin-top: 12px;
        }

        .detail {
            display: none;
            position: fixed;
            left: 50%;
            right: 50%;
            top: 5%;
            transform: translate(-50%, 40%);
            background-color: #111;
            padding: 22px;
            width: 400px;
            border-radius: 4px;

        }

        .content {
            display: flex;
            gap: 22px;
        }

        .content img {
            width: auto;
            height: 250px;
        }

        .content p {
            margin-top: 22px;
        }


        .detail button {
            position: relative;
            top: -23px;
            left: -22px;
            width: 30px;
            height: 30px;
            background-color:#16a085;
            color: #111;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #bar {
            display: none;
            font-size: 26px;
        }
        table, th, td {
        border: 1px solid black;
        

        }
        .center {
        margin-left: auto;
        margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <!--logo-->
            <div class="logo">
                <!--<img src="image/images-removebg-preview.png" alt=" ">-->
            </div>
            <!-- Close logo-->
            <!--start navbar-->
            <!--<i id="bar" class="fa-solid fa-bars"></i>-->
            <h1 style="text-align: center;"> ADMIN DASHBOARD</h1>
        </nav>
        
        <h1 style="text-align:center;color:#16a085;padding-top:30px ">Patient Details</h1>
<table class="center">
    <tr>
        
        <th>Patient_Name</th>
        <th>Doctor</th>
        <th>Phone_No</th>
        <th>Email_ID</th>
        <th>Select_Date</th>
        <th>gender</th>
        <th>Select_Time</th>
    </tr>
    <?php
        include('dbcon.php');
        $q="select * from patient";
        $query = mysqli_query($con,$q);
        while ($result = mysqli_fetch_array($query)) 
        {
    ?>
    <tr>
       
        <td><?php echo $result['Patient_Name']?></td>
        <td><?php echo $result['Doctor']?></td>
        <td><?php echo $result['Phone_No']?></td>
        <td><?php echo $result['Email_ID']?></td>
        <td><?php echo $result['Select_Date']?></td>
        <td><?php echo $result['gender']?></td>
        <td><?php echo $result['Select_Time']?></td>
        <td><a id="edit" href="update.php?id=<?php echo $result['id']; ?>">Edit</a></td>
        <td><a id="delete" href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
       
    </tr> 
    <?php
        }
    ?>
</table>


        <div class="footer">
            <div class="text1">
                <h3>About Us</h3>
                <p>24X7</p>
                <p>Top Doctor</p>
                <p>Best Care</p>
                <p>Patient</p>
            </div>
            <div class="text1">
                <h3>Speciality</h3>
                <p>Knee Surgery</p>
                <p>Spin Surgery</p>
                <p>Leg Surgery</p>
                <p>Tendon Surgery</p>
            </div>
            <div class="text1">
                <h3>Best Teams</h3>
                <p>Doctors</p>
                <p>Nursing</p>
                <p>Staff</p>
                <p>Hospital</p>
            </div>
            <div class="text1">
                <h3>Address</h3>
                <p>Near XYZ Road</p>
                <p>Capital Care</p>
                <p>788-4444-458-56</p>
            </div>
            <div class="detail">
                <button id="closebtn">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="content">
                </div>


            </div>
        </div>
        <!--Close footer-->
        <script src="index.js">

        </script>

</body>

</html>
</body>

</html>