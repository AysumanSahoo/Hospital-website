<?php
include('dbcon.php');
         $id=$_GET['id'];
         $Patient_Name = $_POST['Patient_Name'];
         $Doctor = $_POST['Doctor'];
         $Phone_No=$_POST['Phone_No'];
         $Email_ID=$_POST['Email_ID'];
         $Select_Date=$_POST['Select_Date'];
         $gender= $_POST['gender'];
         $Select_Time=$_POST['Select_Time'];
         $q="INSERT INTO `patient`(`id`,`Patient_Name`, `Doctor`, `Phone_No`, `Email_ID`, `Select_Date`, `gender`, `Select_Time`) VALUES ('$id','$Patient_Name','$Doctor','$Phone_No','$Email_ID','$Select_Date','$gender','$Select_Time')";
         $data= mysqli_query($con , $q);
         
         if($data)
          {
            ?>
            <script>
            alert("Booked appointment successfully...")
            window.open("http://localhost/Hospital/index.html","_self")</script>
                
                <?php
}
else
{
    ?>
    <script>
        alert("please try again");
    </script>
    <?php
}
?>