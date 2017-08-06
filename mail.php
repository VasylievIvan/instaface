<?php
$result = mail("instaface67@gmail.com","Заявка из сайта инстаграм на хостинге","\nИмя: $_POST[username] \nТелефон: $_POST[phone] ", "Content-type: text/plain; charset=\"utf-8\"\r\n");

if ($result) {
header("Location:good.html");
} 
else{
   header("Location:index.html?status=false");
}
?>

