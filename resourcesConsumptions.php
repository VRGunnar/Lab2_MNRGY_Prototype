<?php
include_once("partials/nav.inc.php");
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
    <title>Your resources and consumptions!</title>
</head>
<body class="px-4 background2">
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
    <h2 class="font-extralight text-2xl">View your <span class="font-bold text-2xl mb-2"> Resources</span></h2>
    <h1 class="font-bold text-2xl mb-2">& consumptions</h1>
    <span class="line-w2 bg-green h-0.5 block self-center "></span>
</div>
<div class="w-full glassmorphism mt-8 py-3 px-5">
    <div class="grid grid-cols-2 grid-rows-2 items-center">
        <svg class="col-start-1 cold-end-2 row-start-1 row-end-3" xmlns="http://www.w3.org/2000/svg" width="156.26"
             height="87.059" viewBox="0 0 156.26 87.059">
            <defs>
                <style>
                    .cls-11 {
                        fill: #1dd05d;
                    }

                    .cls-2 {
                        fill: #fff;
                    }
                </style>
            </defs>
            <g id="Group_94" data-name="Group 94" transform="translate(-36 -180.052)">
                <path id="batteryFill" class="cls-11"
                      d="M56.26,17.412V69.948h-38.9V17.412ZM138.9,56.588h8.681V30.471H138.9V10.882a2.1,2.1,0,0,0-2.17-2.176H10.851a2.1,2.1,0,0,0-1.558.614,2.143,2.143,0,0,0-.612,1.563V76.177a2.1,2.1,0,0,0,2.17,2.176H136.727a2.1,2.1,0,0,0,1.558-.614,2.143,2.143,0,0,0,.612-1.563ZM156.26,30.471V56.588a8.7,8.7,0,0,1-8.681,8.706V76.177a10.893,10.893,0,0,1-10.851,10.882H10.851a10.445,10.445,0,0,1-7.665-3.2A10.473,10.473,0,0,1,0,76.177V10.882A10.5,10.5,0,0,1,3.186,3.2,10.413,10.413,0,0,1,10.851,0H136.727a10.445,10.445,0,0,1,7.665,3.2,10.473,10.473,0,0,1,3.186,7.687V21.765a8.7,8.7,0,0,1,8.681,8.706Z"
                      transform="translate(36 180.052)"/>
                <rect id="Rectangle_1080" data-name="Rectangle 1080" class="cls-2" width="3.16" height="52.5"
                      transform="translate(53.36 197.5)"/>
            </g>
        </svg>
        <p class="text-black font-bold text-3xl col-start-2 cold-end-3 row-start-1 row-end-2 justify-self-end">
            Charged</p>
        <div class="col-start-2 cold-end-3 row-start-2 row-end-3 justify-self-end flex flex-row gap-x-2">
            <p class="text-white font-bold text-3xl">2.5%</p>
            <p class="text-green font-bold text-3xl">33%</p>
        </div>
    </div>
    <p class="text-white font-normal text-base mt-3">There is an estimated amount of <span class="text-green">300Kwh</span> of energy available this equals to <span class="text-green">35 days</span> of electricity 24/7.</p>
</div>

<div class="w-full glassmorphism mt-6 mb-24 p-3 flex flex-col">
    <div class="grid grid-cols-2 items-center justify-items-stretch">
        <h3 class="font-medium text-xl col-start-1 col-end-2 justify-self-start">Consumed energy</h3>
        <div class="h-9 bg-white rounded-full flex flex-row justify-evenly p-1 gap-x-1.5 col-start-2 col-end-3 justify-self-end">
            <button class="bg-black rounded-full text-white font-medium text-base px-3">DAILY</button>
            <button class="rounded-full text-black font-medium text-base">MONTHLY</button>
        </div>
    </div>

    <div>
        <section class="bar-graph-consumed bar-graph-vertical-consumed bar-graph-two-consumed w-80 flex justify-evenly">
            <div class="bar-one-consumed bar-container-consumed">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-consumed"></div>
                <span class="year-consumed">Mon</span>
            </div>
            <div class="bar-two-consumed bar-container-consumed">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-consumed"></div>
                <span class="year-consumed">Tue</span>
            </div>
            <div class="bar-three-consumed bar-container-consumed">
                <label class="font-medium text-base">7m<sup>3</sup></label>
                <div class="bar-consumed"></div>
                <span class="year-consumed">Wed</span>
            </div>
            <div class="bar-four-consumed bar-container-consumed">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-consumed"></div>
                <span class="year-consumed">Thu</span>
            </div>
            <div class="bar-five-consumed bar-container-consumed">
                <label class="font-medium text-base">5m<sup>3</sup></label>
                <div class="bar-consumed"></div>
                <span class="year-consumed">Fri</span>
            </div>
            <div class="bar-six-consumed bar-container-consumed">
                <label class="font-medium text-base">9m<sup>3</sup></label>
                <div class="bar-consumed"></div>
                <span class="year-consumed">Sat</span>
            </div>
            <div class="bar-seven-consumed bar-container-consumed">
                <label class="font-medium text-base">9m<sup>3</sup></label>
                <div class="bar-consumed"></div>
                <span class="year-consumed">Sun</span>
            </div>
        </section>
        <p class="px-1.5 text-white font-light"> Monthly costs with current consumption data: <span class="font-medium">128.48</span></p>
    </div>
</div>

</body>
</html>
