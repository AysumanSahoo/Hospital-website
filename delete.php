<?php
include 'dbcon.php';
$id=$_GET['id'];

$query="DELETE FROM patient WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
    ?>
    <script>alert("data delete successfully")
window.open("http://localhost/Hospital/dashboard.php","_self")</script>
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