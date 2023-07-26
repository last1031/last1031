<?php
    $content = $_POST['num'];
    $filename = 'record.txt';

    $fp = fopen($filename, 'w');
    fwrite($fp, $content)
?>