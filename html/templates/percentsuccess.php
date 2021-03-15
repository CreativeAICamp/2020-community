<?php
$item1=$_GET['item1'];
$item2=$_GET['item2'];
$need1=$_GET['need1'];
$need2=$_GET['need2'];
$per1= $need1/($need1+$need2);
$per2= $need2/($need1+$need2);
if($item1<=$need1)
{
    $success1= $per1*$item1/$need1;
}
else
{
    $success1= $per1;
}
if($item2<=$need2)
{
    $success2= $per2*$item2/$need2;
}
else
{
    $success2= $per2;
}
echo ($success1+$success2)*100;
?> 