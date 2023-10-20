<?php
        include_once 'db_config.php';
?>

<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$polytechnic_name = $_POST['polytechnic_name'];
$address = $_POST['address'];
$brithday = $_POST['brithday'];
$phone = $_POST['phone'];
$choose_option = $_POST['choose_option'];



$insart_query = "INSERT INTO `cv` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `polytechnic_name`, `address`, `brithday`, `phone`, `choose_option`) VALUES (NULL, '$first_name', '$last_name', '$father_name', '$mother_name', '$polytechnic_name', '$address', '$brithday', '$phone', '$choose_option')";

$sql_query = mysqli_query($conn, $insart_query);

if($insart_query){
  header("Location: index.php");
}
else{
    echo 'samething is wrong';
}
?>