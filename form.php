<!-- // if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $name = @$_GET['name'];
// $email = @$_GET['email'];
// $sub = @$_GET['sub'];
// $msg = @$_GET['msg'];

//Database Insert Code
$sql = "INSERT INTO contact ($name, $email, $sub, $msg) VALUES ('.$name.', '.$email.', '.$sub', '$msg')"; -->

<?php
$local = false;
if ($local == true) {
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "amaan";
} else {
    $servername = "localhost";
    $username = "lach_lachakk";
    $password = "lachakk@1234";
    $dbname = "lach_lachakk";
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



// RQUESTING Feild ID from CONTACT.PHP in Variable
$name = @$_REQUEST['name'];
$num = @$_REQUEST['number'];
$email = @$_REQUEST['email'];
$sub = @$_REQUEST['subject'];
$msg = @$_REQUEST['message'];

try {
    // All insert names should be same as DB field name
    $sql = $conn->prepare("INSERT INTO contact (name, num, email, sub, msg)
VALUES (:name, :num, :email, :sub, :msg)");
    // BindParam is for Security Purpose
    $sql->bindParam(":name", $name);
    $sql->bindParam(":num", $num);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":sub", $sub);
    $sql->bindParam(":msg", $msg);
    $sql->execute();
    echo "New Record Added Successfully";
    // sleep(3);
    header("Location: http://localhost/lachakk/contact.php?form=pass");
    exit();
} catch (PDOException $e) {
    $ee = "Something went wrong, failed: " . $e->getMessage();
    echo $ee;
    header("Location: http://localhost/lachakk/contact.php?form=$ee");
    exit();
}

?>