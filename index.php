<?php
session_start();
require 'config.php';
include('alert.php');
?>

<?php

// Funktion til at hente serverstatus og antal spillere
function getServerStatus($cfxLink) {
    // URL til FiveM API'en
    $url = "https://servers-frontend.fivem.net/api/servers/single/$cfxLink/";

    
    $ch = curl_init($url);

    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($ch, CURLOPT_MAXREDIRS, 5); 

    
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

    
    $response = curl_exec($ch);

    
    if ($response === false) {
        echo "cURL Fejl: " . curl_error($ch);
        exit;
    }

    
    curl_close($ch);


    
    $data = json_decode($response, true);




    
    return [
        'status' => isset($data['Data']['hostname']) ? 'Online' : 'Offline',
        'players' => isset($data['Data']['clients']) ? $data['Data']['clients'] : 0,
    ];
}


$cfxLink = 'yegaqm';


$status = getServerStatus($cfxLink);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHP Dashboard</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="sstylesheet" href="style.css">



    
</head>
<script>
    // Send en anmodning til besoegslog.php, når siden indlæses
    fetch('track.php')
        .then(response => console.log('Du er blevet registreret i vores database'))
        .catch(error => console.error('Fejl ved registrering af besøg:', error));
</script>

<body class="bg-gray-800 flex flex-col h-screen">

    <?php include('nav.php'); ?>






    <div class="md:flex justify-center  md:mx-24 items-center h-full">



        
        <div class="mx-auto w-96 px-8 py-5 my-auto max-w-6xl bg-gray-900 bg-opacity-90 text-white rounded-lg border border-gray-700 overflow-hidden shadowd-lg">
<h1 class="text-2xl my-4 font-semibold text-center">Online Players <?php echo $status['players'] ?>/128</h1>
<button onclick='statusConnecting()' class="bg-gray-800 w-full mt-4 text-gray-300 py-3 rounded-lg font-semibold">Connect to server</button>
</div>

        
        
</body>








</html>