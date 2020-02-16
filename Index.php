<!-- print text on the screen with form  -->
<?php
$name = $_POST['name'];
$food = $_POST['food'];
$going = $_POST['going'];
if(isset($_POST['btn1'])){
echo "This is $name <br>";
echo "i like this $food <br>";
echo "where are you goin: $going <br>";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP LEARNING</title>
  </head>
  <body>


     <form action="Index.php" method="post">
       Name:<input type="text" name="name">
       <br>
       Food: <input type="text" name="food">
      <br>
        Going: <input type="text" name="going">

      <br>
      <button name="btn1">Click me</button>
     </form>
     <hr>
  

  </body>
</html>
