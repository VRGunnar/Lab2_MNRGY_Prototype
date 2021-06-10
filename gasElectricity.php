<?php
include_once ("partials/nav.inc.php");

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
    <title>View your gas and electricity info!</title>
</head>
<body class="px-4 background4">
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
    <h1 class="font-bold text-2xl mb-2">Gas & electricity</h1>
    <span class="line-w2 bg-red h-0.5 block self-center"></span>
</div>
<div class="w-full glassmorphism mt-8 p-3 flex flex-col">
    <div class="grid grid-cols-2 items-center justify-items-stretch">
        <h3 class="font-medium text-xl col-start-1 col-end-2 justify-self-start">Gas statistics</h3>
        <div class="h-9 bg-white rounded-full flex flex-row justify-evenly p-1 gap-x-1.5 col-start-2 col-end-3 justify-self-end">
            <button class="bg-black rounded-full text-white font-medium text-base px-3">DAILY</button>
            <button class="rounded-full text-black font-medium text-base">MONTHLY</button>
        </div>
    </div>

    <div>
        <section class="bar-graph-gas bar-graph-vertical-gas bar-graph-two-gas w-80 flex justify-evenly">
            <div class="bar-one-gas bar-container-gas">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-gas"></div>
                <span class="year-gas">Mon</span>
            </div>
            <div class="bar-two-gas bar-container-gas">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-gas"></div>
                <span class="year-gas">Tue</span>
            </div>
            <div class="bar-three-gas bar-container-gas">
                <label class="font-medium text-base">7m<sup>3</sup></label>
                <div class="bar-gas"></div>
                <span class="year-gas">Wed</span>
            </div>
            <div class="bar-four-gas bar-container-gas">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-gas"></div>
                <span class="year-gas">Thu</span>
            </div>
            <div class="bar-five-gas bar-container-gas">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-gas"></div>
                <span class="year-gas">Fri</span>
            </div>
            <div class="bar-six-gas bar-container-gas">
                <label class="font-medium text-base">9m<sup>3</sup></label>
                <div class="bar-gas"></div>
                <span class="year-gas">Sat</span>
            </div>
            <div class="bar-seven-gas bar-container-gas">
                <label class="font-medium text-base">9m<sup>3</sup></label>
                <div class="bar-gas"></div>
                <span class="year-gas">Sun</span>
            </div>
        </section>
        <p class="px-1.5 text-white font-light"> Monthly costs with current consumption data: <span class="font-medium">128.48</span></p>
    </div>
</div>

<div class="w-full glassmorphism mt-6 p-3 flex flex-col mb-24">
    <div class="grid grid-cols-2 items-center justify-items-stretch">
        <h3 class="font-medium text-xl col-start-1 col-end-2 justify-self-start">Electricity statistics</h3>
        <div class="h-9 bg-white rounded-full flex flex-row justify-evenly p-1 gap-x-1.5 col-start-2 col-end-3 justify-self-end">
            <button class="bg-black rounded-full text-white font-medium text-base px-3">DAILY</button>
            <button class="rounded-full text-black font-medium text-base">MONTHLY</button>
        </div>
    </div>

    <div>
        <section class="bar-graph-electricity bar-graph-vertical-electricity bar-graph-two-electricity w-80 flex justify-evenly">
            <div class="bar-one-electricity bar-container-electricity">
                <label class="font-medium text-base">5<span class="text-xs">kWh</span></label>
                <div class="bar-electricity"></div>
                <span class="year-electricity">Mon</span>
            </div>
            <div class="bar-two-electricity bar-container-electricity">
                <label class="font-medium text-base">5<span class="text-xs">kWh</span></label>
                <div class="bar-electricity"></div>
                <span class="year-electricity">Tue</span>
            </div>
            <div class="bar-three-electricity bar-container-electricity">
                <label class="font-medium text-base">7<span class="text-xs">kWh</span></label>
                <div class="bar-electricity"></div>
                <span class="year-electricity">Wed</span>
            </div>
            <div class="bar-four-electricity bar-container-electricity">
                <label class="font-medium text-base">5<span class="text-xs">kWh</span></label>
                <div class="bar-electricity"></div>
                <span class="year-electricity">Thu</span>
            </div>
            <div class="bar-five-electricity bar-container-electricity">
                <label class="font-medium text-base">5<span class="text-xs">kWh</span></label>
                <div class="bar-electricity"></div>
                <span class="year-electricity">Fri</span>
            </div>
            <div class="bar-six-electricity bar-container-electricity">
                <label class="font-medium text-base">9<span class="text-xs">kWh</span></label>
                <div class="bar-electricity"></div>
                <span class="year-electricity">Sat</span>
            </div>
            <div class="bar-seven-electricity bar-container-electricity">
                <label class="font-medium text-base">9<span class="text-xs">kWh</span></label>
                <div class="bar-electricity"></div>
                <span class="year-electricity">Sun</span>
            </div>
        </section>
        <p class="px-1.5 text-white font-light"> Monthly costs with current consumption data: <span class="font-medium">128.48</span></p>
    </div>
</div>

</body>
</html>
