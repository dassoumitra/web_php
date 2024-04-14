
<!DOCTYPE HTML>
<html>
<head>
        <title></title>
</head>
<body>
    <h1><center>SIMPLE ARITHMETIC CALCULATOR</center></h1>
     <form method= "post" action="calculator_controller.php"> <center>
        <input type = "text" name="x" placeholder="value of x">
        <br>
        <br>
        <input type = "text" name="y" placeholder="value of y">
        <br>
        <br>
        <input type = "submit" name="add" value="+">
        <input type = "submit" name="sub" value="-">
        <input type = "submit" name="div" value="/">
        <input type = "submit" name="multi" value="*">

        <!--<input type = "text" name="username" placeholder="username">-->
  

</center></form>

</body>
<?php
    $addition = $_GET['add'];
    echo "$addition"; 

    $subtract = $_GET['sub'];
    echo $subtract;
    // $c
    // $c


?>
</html>