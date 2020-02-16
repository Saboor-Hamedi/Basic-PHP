<!-- print text on the screen with form,   -->
<?php
$name  = "";
$food = "";
$going = "";
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
    
    <!-- next section  url-->
    <!-- difference between post and get, in one word,
    use post which is more secure, by using post no one can see your usernane nor password.
    -->
    <!-- try to change post into get and see the result  -->
    <?php
    if (isset($_POST['passbtn'])) {
  $pass = $_POST['pass'];
    $mes = "Your pass: $pass";
    }else{
        
    }
    ?>
    <form action="Index.php" method="POST">
      <input type="password" name="pass">
      <br>
      <span> <?php echo $mes;?></span>
      <br>
      <button name="passbtn">
      pass
      </button>
    </form>
    
    <!-- section three array -->
    <?php 
      // declare array 
    echo "List of our information <br>";
$myArray = array('saboor','hamedi', true, 1, 'Hello');
echo $myArray [0]. "<br>";
echo $myArray [1]. "<br>";
echo $myArray [2]. "<br>";
echo $myArray [3]. "<br>";
echo $myArray [4]. "<br>";
if($myArray[2] == true){
echo "I'm true";
}else {
echo "I'm not true";
}
echo "<br>This is the length of my name Saboor: ";
echo strlen ($myArray[0]);
echo "<br> to uppercase ";
echo strtoupper("(... $myArray[0] ...)");
// lets modify one value
echo "<br>";
echo  $myArray [1] = 'Abdul Saboor, im updated<br>';
// store different data type
echo $myArray [2] = 'At the top im a boolean number 1 ';
//you can play with the code 
?>
    
  </body>
</html>