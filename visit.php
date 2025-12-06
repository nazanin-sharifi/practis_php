<?php
session_start();
if(isset($_SESSION['counter'])){
    $_SESSION['counter'] +=1;
}
else{
    $_SESSION['counter']=1;
}

$msg = "شما از این صفحه به تعداد  ". $_SESSION['counter'];
$msg .= "  بار بازدید داشته اید!";
?>

<title>تعداد بازدید کاربر</title>

<?php
echo($msg);
?>