<?php 

$conn = mysqli_connect('localhost', 'root' , '', 'filters'); 

//كود إضافي للتأكد من الأتصال :-

if(!$conn){
     echo 'Not Connected';
}
else{
     echo 'You are Connected to database';
}

?>