<?php ?>


<?php

if(isset($_POST['username'])) {

     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $connection = mysqli_connect('localhost','root','','users');


     if($connection) {
          echo "Connected";
     } else {
          echo "Not Connected";
     }




     $query = "INSERT INTO user_info (username, email, password)" ; 
     $query .="VALUES ('$username', '$email', '$password')";
     
     $result = mysqli_query($connection, $query);


     if($result) {
          echo "Success";
     } else {
          echo "Not success";
     }

}    


?>



<form action="dog.php" method="post">

     <input type="text" name="username" placeholder="username">
     <input type="email" name="email" placeholder="email">
     <input type="password" name="password" placeholder="password">

     <input type="submit" name="submit">

</form>


 
