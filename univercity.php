<?php
class univercity {
var $name;
var $count;
var $total;
var $subname;
var $subdeg;
public function getname(){
    return $this->name;
}
public function gettotal(){
    return $this->total;
}
public function getcount(){
    return $this->count;
}
public function getsubname(){
    return $this->subname;
}
public function getsubdeg(){
    return $this->subdeg;
}
public function setname($n){
    $this->name=$n;
}
public function settotal($n){
    $this->total=$n;
}
public function setcount($n){
    $this->count=$n;
}
public function setsubname($n){
     $this->subname=$n;
}

public function setsubdeg($n){
     $this->subdeg=$n;
}
public function showprecent(){
    $p=$this->gettotal()/$this->getcount() ;
    return$p;
}
public function showmax($maxdeg){
 $max=0;
 
 if($this->getsubdeg() > $max){
    $max=$this->setsubdeg();
    
 }
 return $max;
}
public function showmin($mindeg) {
    $min=0;
    if($this->getsubdeg() < $min){
        $min=$this->setsubdeg();
    }
        return $min;
    }
/*public function shownamemax($nmax){
    $maxname=null;
    $maxname= $this->setsubname;
    }*/
   

public function showgrade($prec){
    $grade=null;
    if($prec<50)
    $grade="fail";
   else if($prec<65)
    $grade="pass";
   else if($prec<75)
    $grade="good";
   else if($prec<85)
    $grade="V.good";
    else
    $grade="excellent";
    return$grade;
}
public function showsign($subgrade){
$sign=null;
switch($subgrade){
    case "fail":
        $sign="F";
        break;
    case "pass":
         $sign="D";
         break;
    case "good":
          $sign="C";
          break;
    case "V.good":
          $sign="B";
          break;
   default:
        $sign="A";
        break;
        
}
return $sign;
}


}





















?>
