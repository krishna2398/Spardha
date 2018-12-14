<?php

session_start();
$user_name = $_POST['user_name'];
$passwd = $_POST['passwd'];

$conn = mysqli_connect('localhost', 'admin@localhost', 'admin@123', 'spardha');
$query = "SELECT `passwd` FROM `admin` WHERE username='$user_name'";
$result= mysqli_query($conn,$query);
$row =  mysqli_fetch_row($result);
if($row[0] == $passwd)
{
    header ('Location: http://localhost/spardha/admin/index.php');
}
else 
{
    header ('Location: http://localhost/spardha/login.php');
}
echo "$row[0]";

?>




 <?php
                    if(isset($_POST['id']))
                    {

                        $id=$_POST['id'];
                        $con = mysqli_connect('localhost', 'admin@localhost', 'admin@123', 'spardha');
                        $query="SELECT `name`, `phnum`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `id`, `valied`, `time` FROM `bookings` WHERE id='$id'";
                        $result = mysqli_query($con, $query); 
                        $row = mysqli_fetch_row($result);

                    }
                
                        echo "<form method='post' action=".$_SERVER['PHP_SELF']." id='search_form'>";
                        echo "<p>";
                        echo "<input type='text' name='id' placeholder='UserName' />";
                        echo "<input name='passwd' type='password' value='login' />";
                        echo "</p>";
                        echo "</form>";
                        if(isset($_POST["id"]))
                         {
                         }
                        else
                        {
                         echo "<h5 style='color: rgb(196, 46, 46);'>User ID and Password dosn't match </h5>";
                        }
                    }
                ?>