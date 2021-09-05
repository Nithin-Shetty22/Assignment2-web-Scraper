<?php
$str = file_get_contents('https://en.wikipedia.org/wiki/Engineering');
$results =array_count_values(str_word_count(strip_tags($str), 1));

foreach($results as  $key=> $val){
    if($key == "Engineering"){
        echo $key." = ". $val.'<br>';
    }
    if($key == "Engineers"){
        echo $key. " = ".$val.'<br>';
    }
    if($key == "Engineer"){
        echo $key. " = ".$val.'<br>';
    }

}

?>