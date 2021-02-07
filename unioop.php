<?php
include_once"univercity.php";
$uni= new univercity();
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>univercity</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body>
<div class="contanier" style="margin:50px">
<center><h1> univercity system</h1></center>
<form method='post'>
  Enter your Name:<br>
  <input type="text" name="txtname" value="<?php echo isset($_POST['txtname'])?$_POST['txtname']:'' ?>" required class="form-control"/><br>
  Enter total degree:<br>
  <input type="text" name="txtdeg" value="<?php echo isset($_POST['txtdeg'])?$_POST['txtdeg']:'' ?>" required class="form-control"/><br>
  No.subject<br>
  <input type="text" name="txtsub" value="<?php echo isset($_POST['txtsub'])?$_POST['txtsub']:'' ?>" required class="form-control"/><br>
 
  <input type="submit" name="btn" value="OK" class="btn btn-primary"><br>
  <br>
  <input type="submit" name="btnoop" value="OK OOP" class="btn btn-primary"><br>

  </form>
  </div>
   <?php
  if(isset($_POST["btnoop"])){
   $uni->setname($_POST["txtname"]);
  $uni->settotal($_POST["txtdeg"]);
  $uni->setcount($_POST["txtsub"]);
  $name=$uni->getname();
  $precent=$uni->showprecent();
  $stgrade=$uni->showgrade($precent);
  $stsign=$uni->showsign($stgrade);

echo("<table class='table table-border table-striped'>");
echo("<tr><th>Name </th><td>$name</td> </tr>");
echo("<tr><th>Precentage </th><td>$precent</td> </tr>");
echo("<tr><th>Grad </th><td>$stgrade</td> </tr>");
echo("<tr><th>GPA </th><td>$stsign</td> </tr>");
echo("</table>");



  }
   ?>
   <?PHP
   IF (isset($_POST["btn"])){
        //inputs
   $name;$deg;$num;$total;$precntage;$grade;$sign;
   $name=$_POST["txtname"];
   $deg=$_POST["txtdeg"];
   $num=$_POST["txtsub"];
   $total=$_POST["txtdeg"];
   //process
     $precntage=($total/$num) ;
  if($precntage<50)
      $grade="fail";
  
  else if($precntage<65)
    $grade="pass";

else if($precntage<75)
    $grade="good";

else if($precntage<85)
   $grade="very good";

else
$grade="excllent";

switch($grade){
    case"fail":
        $sign="F";
        break; 
    case"pass":
     $sign="D";
     break;
     case"good":
        $sign="C";
        break;     
     case"verygood":
       $sign="B";
        break;
    case"excllent":
     $sign="A";
     break;    
}
echo("<table class='table table-border table-striped'>");
echo("<tr><th>Name </th><td>$name</td> </tr>");
echo("<tr><th>Precentage </th><td>$precntage</td> </tr>");
echo("<tr><th>Grad </th><td>$grade</td> </tr>");
echo("<tr><th>GPA </th><td>$sign</td> </tr>");
echo("</table>");



   }
   
   
   
   ?>
</body>
</html>