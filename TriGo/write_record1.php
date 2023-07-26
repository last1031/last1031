<?php
    $content = $_POST['num'];
    $filename = 'record1.txt';

    $fp = fopen($filename, 'w');
    fwrite($fp, $content)
?>