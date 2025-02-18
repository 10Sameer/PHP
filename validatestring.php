<?php
$name =$_POST["name"];
if(!preg_match("/^[a-ZA-z]*$/",$name) ){
    $Errmsg ="Only alphabets snd whitespace are allowed";
    echo $Errmsg;

} else{
    echo $name;
}

?>