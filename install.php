<?php

// get latest german WordPress file
$ch = curl_init();
$source = "https://wordpress.org/latest.zip"; // THE FILE URL
curl_setopt($ch, CURLOPT_URL, $source);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec ($ch);
curl_close ($ch);


// save as wordpress.zip
$destination = "wordpress.zip"; // NEW FILE LOCATION
$file = fopen($destination, "w+");
fputs($file, $data);
fclose($file);
echo " wordpress.zip downloaded; ";

// unzip
$zip = new ZipArchive;
$res = $zip->open('wordpress.zip'); // zip datei
if ($res === TRUE) {
    $zip->extractTo('.'); // verz zum entpacken
    $zip->close();
    echo ' wordpress.zip extracted; ';
    //unlink('wordpress.zip');
    echo ' wordpress.zip deleted; ';
} else {
    echo ' unzip failed; ';
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <title>App "Kingston StartUp"</title>
    <meta charset="utf-8"/>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }
        #header {
            background-color: #f1f1f1;
            border-bottom: 1px solid #ddd;
            padding: 30px;
            text-align: center;
            color: #444;
            font-size: 22px;
        }
        #content {
            padding: 30px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>


</body>
</html>
