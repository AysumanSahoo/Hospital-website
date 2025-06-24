<?php
include 'dbcon.php';
$id=$_GET['id'];
$select="SELECT * FROM patient WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>

<div >
    <fieldset> <br><br>
    <legend style="color:#16a085; text-align:center;">Edit Details</legend>
        <form action="" method="POST">
        <label for="">Patient Name:</label> 
        <input type="text" value="<?php echo $row['Patient_Name']?>"name="Patient_Name" placeholder="Patient_Name" required> <br><br>
        <label for="">Prescription:</label> 
        <input type="text" value="<?php echo $row['prescription']?>"name="prescription" placeholder="prescription" required> <br><br>
        <input type="submit" name="edit" value="edit">
        <button><a href="dashboard.php">Back</a></button>
        </form>
    </fieldset>
</div>
<?php
 if (isset($_POST['edit']))
 {
    $Patient_Name=$_POST['Patient_Name'];
    $prescription=$_POST['prescription'];
    $update="UPDATE patient SET Patient_Name='$Patient_Name',prescription='$prescription'WHERE id='$id'";
    $data=mysqli_query($con,$update);
    if($data)
    {
        ?>
        <script>
            alert ("data update successfully")
            window.open("http://localhost/Hospital/dashboard.php","_self")
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("please try again")
        </script>
       <?php
    }
 }
 ?>