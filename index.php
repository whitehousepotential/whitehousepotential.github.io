<?php
session_start();
require 'config.php';
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
    <title>Zonix Roleplay</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">



    
</head>

<body class="flex flex-col h-screen">

    <?php include('nav.php'); ?>

    <div class="md:flex justify-center  md:mx-24 items-center h-full">



        
        <div class="mx-auto my-auto max-w-lg bg-gray-900 bg-opacity-90 text-white rounded-lg overflow-hidden shadowd-lg">
    <img src="logo.png" class="w-64 h-64 object-cover mx-auto">

    <div class="p-6">
        <div class="mb-4 text-center">
            <h1 class="text-4xl font-bold mb-2">Velkommen til Zonix</h1>
            <h2 class="text-lg text-gray-300">discord.gg/zonix</h2>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gray-800 text-white p-4 rounded">
                <p class="font-bold text-lg uppercase">Seriøst</p>
                <p class="text-sm">Vores server tager udgangspunkt i realistisk & seriøst RP.</p>
            </div>
            <div class="bg-gray-600 bg-opacity-80 text-white p-4 rounded">
                <p class="font-bold text-lg uppercase">Aldersgrænse</p>
                <p class="text-sm">Vi har valgt at sætte en aldergrænse på minmium 15 år.</p>
            </div>
            <div class="bg-gray-600 bg-opacity-80 text-white p-4 rounded">
                <p class="font-bold text-lg uppercase">Hurtig Support</p>
                <p class="text-sm">Vi bestræber os på hurtigt support. Skriftligt & mundtligt.</p>
            </div>
            <div class="bg-gray-800 text-white p-4 rounded">
                <p class="font-bold text-lg uppercase">Allowlist</p>
                <p class="text-sm">Ansøgning & samtale er påkrævet, for at kunne spille på zonix.</p>
            </div>
        </div>

        <div class="bg-green-600 my-4 py-4 shadowd-lg rounded">

        <p class="text-3xl font-normal text-center ">
            Online <br>
            <span class="font-normal text-gray-200 text-2xl"><?php echo $status['players'] ?>/128</span>
        </p>
        </div>
    </div>
</div>

        
        
</body>








</html>