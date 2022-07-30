<?php

$url ="http://localhost:4000/getAdmin";

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$set_data=curl_exec($ch);
if($e = curl_error($ch)){
    echo $e;
    
}
else{
    // $decode =json_decode($set_data);
    // print_r($decode);
    // echo $set_data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Data</h1> -->
    <p>
        <?php 

        // $decode =json_decode($set_data);
        // print_r($decode);
        // echo $set_data;
        
        $arr = json_decode($set_data, true);
        
        $adminEmail = $arr['adminEmail'];
        $adminPassword = $arr['adminPassword'];
        $adminUsername= $arr['adminUsername'];
        
        // foreach($arr as $item) { //foreach element in $arr
        //     $uses = $item['_id']; //etc
        //     echo $uses;
        // }
        ?>
    </p>
    
</body>
</html>