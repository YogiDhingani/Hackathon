<?php
//$com = $_POST["comment"];
$rplc = null;
function filterwords($text){
$filterWords = explode("\n", file_get_contents('en.txt'));
//$filterWords=array('fuck','boob');
 $filterCount = sizeof($filterWords);
 for($i=0; $i<$filterCount; $i++){
     $str = trim($filterWords[$i]);
     $reg = '/\b'.$str.'\b/i';
     $GLOBALS['rplc'] = str_repeat('*',strlen($str));
     //echo $reg;
     $text = preg_replace_callback($reg,
       function ($matches) {
           return  $GLOBALS['rplc'];
       },
       $text);
 }
 return $text;
}
//
// $result = filterwords($com);
// echo $result;
?>
