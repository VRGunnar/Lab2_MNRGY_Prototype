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
    <title>Your settings!</title>
</head>
<body class="px-4 background1 glassmorphism2">
<div class="mt-8 mb-6">
    <h2 class="font-extralight text-2xl">Here are your</h2>
    <h1 class="font-bold text-2xl mb-2">Settings</h1>
    <span class="w-full bg-green h-0.5 block self-center"></span>
</div>

<div class="grid grid-cols-2 grid-rows-2 gap-y-2">
    <p class="text-white font-normal text-lg col-start-1 col-end-2 row-start-1 row-end-2">Notifications</p>
    <label class="switch mt-0.5 col-start-2 col-end-3 row-start-1 row-end-2">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>

    <p class="text-white font-normal text-lg col-start-1 col-end-2 row-start-2 row-end-3">Currency</p>
    <div class="selectDiv2 col-start-2 col-end-3 row-start-2 row-end-3 mt-0.5">
        <select class="selectBox2 place-self-center" id="waterSelection">
            <option value="euro">€</option>
            <option value="dollar">$</option>
            <option value="pond">£</option>
        </select>
    </div>
</div>
<div class="mt-8">
    <p class="text-white font-normal text-lg mb-2 items-center">Contact us</p>
    <div class="flex flex-row gap-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="22.864" height="22.864" viewBox="0 0 22.864 22.864">
            <defs>
                <style>
                    .cls-12345 {
                        fill: #1dd05d;
                    }
                </style>
            </defs>
            <g id="call_1_" data-name="call (1)" transform="translate(0)">
                <path id="Path_333" data-name="Path 333" class="cls-12345" d="M43.289,78.319a2.012,2.012,0,0,0,0-2.842l-2.756-2.756a2.027,2.027,0,0,0-1.6-.586,1.98,1.98,0,0,0-1.453.819c-.07.1-.138.2-.2.3l5.541,5.541Z" transform="translate(-35.609 -68.908)"/>
                <path id="Path_334" data-name="Path 334" class="cls-12345" d="M296.707,330.217l-2.756-2.756a2.012,2.012,0,0,0-2.842,0l-.474.474,5.541,5.541q.15-.1.3-.2a1.98,1.98,0,0,0,.819-1.453A2.026,2.026,0,0,0,296.707,330.217Z" transform="translate(-277.657 -312.277)"/>
                <path id="Path_335" data-name="Path 335" class="cls-12345" d="M11.085,135.545a2,2,0,0,1-1.421-.589l-2.931-2.931a2.013,2.013,0,0,1-.393-2.287L.98,124.379a10.119,10.119,0,0,0,1.963,11.48l2.887,2.887a10.073,10.073,0,0,0,6.344,2.913q.393.03.785.03a10.125,10.125,0,0,0,4.351-.98l-5.359-5.359a2,2,0,0,1-.866.2Z" transform="translate(0 -118.825)"/>
                <path id="Path_336" data-name="Path 336" class="cls-12345" d="M287.669,0a.67.67,0,0,0,0,1.34,8.047,8.047,0,0,1,8.038,8.038.67.67,0,0,0,1.34,0A9.388,9.388,0,0,0,287.669,0Z" transform="translate(-274.182)"/>
                <path id="Path_337" data-name="Path 337" class="cls-12345" d="M287.669,181.339h0a.67.67,0,0,0,1.34,0,1.341,1.341,0,0,0-1.34-1.34.67.67,0,1,0,0,1.339Z" transform="translate(-274.182 -171.962)"/>
                <path id="Path_338" data-name="Path 338" class="cls-12345" d="M287.669,121.34a2.682,2.682,0,0,1,2.679,2.679.67.67,0,1,0,1.34,0A4.024,4.024,0,0,0,287.669,120a.67.67,0,0,0,0,1.34Z" transform="translate(-274.182 -114.641)"/>
                <path id="Path_339" data-name="Path 339" class="cls-12345" d="M287.669,60a.67.67,0,0,0,0,1.34,5.365,5.365,0,0,1,5.359,5.359.67.67,0,0,0,1.34,0A6.706,6.706,0,0,0,287.669,60Z" transform="translate(-274.182 -57.321)"/>
            </g>
        </svg>
        <p class="text-white font-normal text-base">+32478050580</p>
    </div>
    <div class="flex flex-row gap-x-3 mt-4 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="22.864" height="15.719" viewBox="0 0 22.864 15.719">
            <defs>
                <style>
                    .cls-1234 {
                        fill: #1dd05d;
                    }
                </style>
            </defs>
            <g id="email_1_" data-name="email (1)" transform="translate(0 -80)">
                <g id="Group_79" data-name="Group 79" transform="translate(15.156 82.898)">
                    <g id="Group_78" data-name="Group 78">
                        <path id="Path_340" data-name="Path 340" class="cls-1234" d="M339.392,149.975l7.708,4.873V144.9Z" transform="translate(-339.392 -144.896)"/>
                    </g>
                </g>
                <g id="Group_81" data-name="Group 81" transform="translate(0 82.898)">
                    <g id="Group_80" data-name="Group 80">
                        <path id="Path_341" data-name="Path 341" class="cls-1234" d="M0,144.9v9.952l7.708-4.873Z" transform="translate(0 -144.896)"/>
                    </g>
                </g>
                <g id="Group_83" data-name="Group 83" transform="translate(0.043 80)">
                    <g id="Group_82" data-name="Group 82" transform="translate(0 0)">
                        <path id="Path_342" data-name="Path 342" class="cls-1234" d="M22.352,80H2.346A1.411,1.411,0,0,0,.96,81.216l11.389,7.5,11.389-7.5A1.411,1.411,0,0,0,22.352,80Z" transform="translate(-0.96 -80)"/>
                    </g>
                </g>
                <g id="Group_85" data-name="Group 85" transform="translate(0.046 88.838)">
                    <g id="Group_84" data-name="Group 84">
                        <path id="Path_343" data-name="Path 343" class="cls-1234" d="M14.825,277.921,12.8,279.253a.718.718,0,0,1-.786,0L10,277.92l-8.971,5.675A1.409,1.409,0,0,0,2.407,284.8H22.414a1.409,1.409,0,0,0,1.383-1.206Z" transform="translate(-1.024 -277.92)"/>
                    </g>
                </g>
            </g>
        </svg>
        <p class="text-white font-normal text-base">mnrgy@example.com</p>
    </div>
</div>

</body>
</html>