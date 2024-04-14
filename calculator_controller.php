<?php
//for add
// if (isset($_POST['add'])){
// $a=$_POST['x'];
// $b=$_POST['y'];
// $c=$a+$b;
// echo $c;}
if(isset($_POST['add'])){
    // echo "Addition is : " ;
    // echo $_POST['x']+$_POST['y']."<br>";
    if(empty($_POST['x'])||empty($_POST['y'])){
        echo "check method type";
    }
    else{
        $a=$_POST['x'];
        $b=$_POST['y'];
        $c=$a+$b;
        header("Location:calculator.php?add=$c"); 
    }
}

if(isset($_POST['sub'])){
    // echo "Addition is : " ;
    // echo $_POST['x']+$_POST['y']."<br>";
    if(empty($_POST['x'])||empty($_POST['y'])){
        echo "check method type";
    }
    else{
        $a=$_POST['x'];
        $b=$_POST['y'];
        $c=$a-$b;
        header("Location:calculator.php?sub=$c"); 
    }
}

if(isset($_POST['div'])){
    // echo "Addition is : " ;
    // echo $_POST['x']+$_POST['y']."<br>";
    if(empty($_POST['x'])||empty($_POST['y'])){
        echo "check method type";
    }
    else{
        $a=$_POST['x'];
        $b=$_POST['y'];
        $c=$a/$b;
        header("Location:calculator.php?div=$c"); 
    }
}

if(isset($_POST['multi'])){
    // echo "Addition is : " ;
    // echo $_POST['x']+$_POST['y']."<br>";
    if(empty($_POST['x'])||empty($_POST['y'])){
        echo "check method type";
    }
    else{
        $a=$_POST['x'];
        $b=$_POST['y'];
        $c=$a*$b;
        header("Location:calculator.php?multi=$c"); 
    }
}


if(isset($_POST['BUBBLE']))
{
    $n=$_POST['n'];
    $arr=explode(",",$n);
    echo " Before Sorting array is: $n.<br>";
    bSort($arr);
}

  function bSort($arr){
    $c=count($arr);
    for($i=0;$i<$c-1;$i++){
      for($j=0;$j<$c-$i-1;$j++){
        if($arr[$j]>$arr[$j+1]){
          $arr[$j]=$arr[$j]+$arr[$j+1];
          $arr[$j+1]=$arr[$j]-$arr[$j+1];
          $arr[$j]=$arr[$j]-$arr[$j+1];
        }
      }
    }
    echo "Sorting by using bubble sort Algorithm : ";
    disp($arr);
  }

function disp($arr)
{
    foreach($arr as $a)
    {
        echo $a." ";
    }
}




if (isset($_POST['INSERTION SORT'])){
    $n=$_POST['n'];
    $arr=explode(",",$n);
    Insort($arr);
}

function Insort($arr){
    $c=count($arr);
    for($i=1;$i<$c;$i++){
        $temp=$arr[$i];
        $j=$i-1;
        while(($temp<$arr[$j])&&($j>=0)){
            $arr[$j+1]=$arr[$j];
            $j--;
        }
        $arr[$j+1]=$temp;
    }
       echo "Sorting by using insertion sort Algorithm :";
       disIN($arr);
}

function disIN($arr){
    foreach($arr as $a){
        echo $a." ";
    }
}

?>