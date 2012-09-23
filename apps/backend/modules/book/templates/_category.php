<?php
$categories = $book->getCategory();
$str="";
foreach ($categories as $category) 
{
    $str= $str .  $category->getName() . ", ";
}
$str = trim($str);
$str = substr($str,0,strlen($str)-1);
echo $str;
?>