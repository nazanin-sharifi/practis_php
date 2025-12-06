<?php
session_start();
if(isset($_SESSION['counter'])){
    $_SESSION['counter'] +=1;
}
else{
    $_SESSION['counter']=1;
}

$msg = "شما ازین صفحه به تعداد". $_SESSION['counter'];
$msg .= "بازدید داشته اید!";

?>

<title>تعداد بازدید کاربر</title>

<?php
each($msg)
?>