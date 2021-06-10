<?php
include_once ('partials/nav.inc.php');

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <title>View your water info!</title>
</head>
<body class="px-4">
<a href="dashboard.php">
    <svg class="mt-4" xmlns="http://www.w3.org/2000/svg" width="23.482" height="17.219" viewBox="0 0 23.482 17.219">
        <defs>
            <style>
                .cls-1 {
                    fill: #f8f8ff;
                }
            </style>
        </defs>
        <g id="fast-forward" transform="translate(23.482 81.232) rotate(180)">
            <g id="Group_22" data-name="Group 22" transform="translate(10.175 64.013)">
                <g id="Group_21" data-name="Group 21">
                    <path id="Path_294" data-name="Path 294" class="cls-1"
                          d="M221.106,72.1l-7.044-7.827a.783.783,0,0,0-.582-.26h-4.7a.782.782,0,0,0-.582,1.306l6.573,7.3-6.573,7.3a.783.783,0,0,0,.582,1.307h4.7a.793.793,0,0,0,.582-.258l7.044-7.827A.783.783,0,0,0,221.106,72.1Z"
                          transform="translate(-208 -64.013)"/>
                </g>
            </g>
            <g id="Group_24" data-name="Group 24" transform="translate(0 64.013)">
                <g id="Group_23" data-name="Group 23" transform="translate(0)">
                    <path id="Path_295" data-name="Path 295" class="cls-1"
                          d="M13.106,72.1,6.062,64.273a.783.783,0,0,0-.582-.26H.784A.782.782,0,0,0,.2,65.319l6.573,7.3L.2,79.925a.783.783,0,0,0,.582,1.307h4.7a.793.793,0,0,0,.582-.258l7.044-7.827A.783.783,0,0,0,13.106,72.1Z"
                          transform="translate(0 -64.013)"/>
                </g>
            </g>
        </g>
    </svg>
</a>
<div class="mt-4 mb-6">
    <h2 class="font-extralight text-2xl">View your info of</h2>
    <h1 class="font-bold text-2xl mb-2">Water</h1>
    <span class="w-4/5 bg-blue h-0.5 block self-center"></span>
</div>
<div class="w-full glassmorphism3 flex flex-col mb-24">
    <div class="flex justify-center items-center">
        <div class="circle flex justify-center items-center">
            <div class="tempCircle flex justify-center items-center">
                <div class="infoCircle flex flex-col justify-center items-center text-white">
                    <p id="boilerTemp" class="font-bold text-6xl">50<sup class="text-3xl">°C</sup></p>
                    <p class="font-light text-base">BOILER TEMPERATURE</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 py-3 px-5 flex flex-col mb-1.5">
        <h2 class="font-normal text-lg">Goal temperature</h2>
        <div class="flex flex-row items-center">
            <div class="slidecontainer">
                <input type="range" min="1" max="80" value="50" id="myRange" class="slider2">
            </div>
            <p class="ml-1.5 text-lg font-medium text-white w-12" id="temp"> 50°C</p>
        </div>
        <div class="mt-4">
            <h2 class="font-normal text-base">When do you need warm water?</h2>
            <div class="flex flex-wrap justify-between mt-2 gap-y-2">
                <button class="bg-white rounded-full px-2">05:00</button>
                <button class="bg-white rounded-full px-2">06:00</button>
                <button class="bg-orange text-white rounded-full px-2">07:00</button>
                <button class="bg-orange text-white rounded-full px-2">08:00</button>
                <button class="bg-white rounded-full px-2">09:00</button>
                <button class="bg-white rounded-full px-2">10:00</button>
                <button class="bg-white rounded-full px-2">11:00</button>
                <button class="bg-white rounded-full px-2">12:00</button>
                <button class="bg-white rounded-full px-2">13:00</button>
                <button class="bg-white rounded-full px-2">14:00</button>
                <button class="bg-white rounded-full px-2">15:00</button>
                <button class="bg-orange text-white rounded-full px-2">16:00</button>
                <button class="bg-orange text-white rounded-full px-2">17:00</button>
                <button class="bg-orange text-white rounded-full px-2">18:00</button>
                <button class="bg-orange text-white rounded-full px-2">19:00</button>
                <button class="bg-orange text-white rounded-full px-2">20:00</button>
                <button class="bg-white rounded-full px-2">21:00</button>
                <button class="bg-white rounded-full px-2">22:00</button>
                <button class="bg-white rounded-full px-2">23:00</button>
                <button class="bg-white rounded-full px-2">24:00</button>
                <button class="text-white font-medium text-base underline">Mon</button>
                <button class="text-white font-medium text-base">Tue</button>
                <button class="text-white font-medium text-base">Wed</button>
                <button class="text-white font-medium text-base">Thu</button>
                <button class="text-white font-medium text-base">Fri</button>
                <button class="text-white font-medium text-base">Sat</button>
                <button class="text-white font-medium text-base">Sun</button>
            </div>
        </div>
    </div>
</div>

<script src="js/water.js"></script>
</body>
</html>
