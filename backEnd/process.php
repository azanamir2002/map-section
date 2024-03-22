
<?php
$Server_name="localhost";
$username="root";
$password="";
$database_name="zerohungerdb";

$conn=mysqli_connect($Server_name,$username,$password,$database_name);

if(!$conn)
{
    die("connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['ok']))
{
    $username =$_POST['UName'];
    $email=$_POST['Email'];
    $subject=$_POST['Subject'];
    $messages=$_POST['msg'];

    $sql_query = "INSERT INTO mapdb(name,email,subject,messages)
    Values('$username','$email','$subject','$messages')";

    if(mysqli_query($conn, $sql_query))
    {
        echo"You have submitted successfully!";
    }
    else
    {
        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>