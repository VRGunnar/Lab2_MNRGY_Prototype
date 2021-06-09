<?php
include_once("partials/nav.inc.php");
include_once ("classes/User.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

if(!empty($_POST['btnSave'])) {
    $nPassword = $_POST['nPassword'];
    $cPassword = $_POST['currentPassword'];
    $Username = $_POST['newPassword'];
    User::userUpdate($Username, $cPassword, $nPassword);
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
    <title>Your profile!</title>
</head>
<body class="px-4 background4">
<div class="mt-8 mb-6">
    <h2 class="font-extralight text-2xl">Here is your</h2>
    <h1 class="font-bold text-2xl mb-2">Profile</h1>
    <span class="line-w bg-green h-0.5 block self-center"></span>
</div>

<div class="w-full glassmorphism mt-8 p-8">
    <h2 class="font-semibold text-xl mb-4">Change your information?</h2>
    <form action="" method="post">
        <div class="grid justify-items-center">
            <?php if (isset($error)): ?>
                <div class="flex items-center gap-3 w-full h-10 border border-red-300 rounded px-4 bg-red-200">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <ul>
                        <li class="text-sm font-normal">Username or password was incorrect.</li>
                    </ul>
                </div>
            <?php endif; ?>
            <label class="pt-4 justify-self-start text-sm font-medium" for="username">Username</label>
            <input class="w-full h-10 border border-gray-300 rounded px-2 bg-gray-100" id="username" name="username"
                   type="text" placeholder="Username" required>
            <label class="pt-4 justify-self-start text-sm font-medium" for="newPassword">New password</label>
            <input class="w-full h-10 border border-gray-300 rounded px-2 bg-gray-100" id="newPassword"
                   name="newPassword"
                   type="password" placeholder="New password" required>
            <label class="pt-4 justify-self-start text-sm font-medium" for="currentPassword">Current password</label>
            <input class="w-full h-10 border border-gray-300 rounded px-2 bg-gray-100" id="currentPassword"
                   name="currentPassword"
                   type="password" placeholder="Current password" required>
            <input class="w-full h-10 text-white font-bold rounded mt-2 button"
                   name="btnLogin" type="submit" value="UPDATE">
        </div>
    </form>
</div>

<div class="w-full glassmorphism mt-8 px-8 py-4 mb-24">
    <h2 class="font-semibold text-xl mb-4">Set your limits and alerts!</h2>
    <div class="grid grid-cols-2 grid-rows-3 gap-y-2">
        <div class="flex flex-row justify-between gap-x-2 col-start-1 col-end-2 row-start-1 row-end-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.234" height="33.928" viewBox="0 0 24.234 33.928">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                        }
                    </style>
                </defs>
                <g id="Group_7" data-name="Group 7" transform="translate(-167.583 -212.298)">
                    <path id="water-sharp" class="cls-1"
                          d="M19.992,3.087S7.875,16.05,7.875,25.222c0,7.236,4.682,11.793,12.117,11.793s12.117-4.556,12.117-11.793C32.109,16.05,19.992,3.087,19.992,3.087Zm1.346,29.67V30.791a4.989,4.989,0,0,0,5.049-4.914h2.02a6.984,6.984,0,0,1-7.068,6.879Z"
                          transform="translate(159.708 209.212)"/>
                </g>
            </svg>
            <input class="w-1/2 h-8 border border-gray-300 rounded px-2 bg-gray-100 mr-4" id="waterLimit"
                   name="waterLimit"
                   type="text" placeholder="100L">
        </div>
        <div class="selectDiv col-start-2 col-end-3 row-start-1 row-end-2">
            <select class="selectBox" id="waterSelection">
                <option value="Per day">Per day</option>
                <option value="Per week">Per week</option>
                <option value="Per month">Per month</option>
            </select>
        </div>

        <div class="flex flex-row justify-between gap-x-2 col-start-1 col-end-2 row-start-2 row-end-3 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.235" height="41.376" viewBox="0 0 24.235 41.376">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                        }
                    </style>
                </defs>
                <path id="Path_278" data-name="Path 278" class="cls-1"
                      d="M255.808,47.781a3.984,3.984,0,0,0-3.671-2.313h-3.1l6.886-11.415a1.72,1.72,0,0,0-1.48-2.606H244.166a1.729,1.729,0,0,0-1.492.854L232.6,49.518l-.024.042a5.162,5.162,0,0,0,4.548,7.634h1.69L234.452,69.3a2.445,2.445,0,0,0,.163,2.323,2.806,2.806,0,0,0,2.4,1.2h.014a3.264,3.264,0,0,0,2.283-.933,1.719,1.719,0,0,0,.146-.166L248.894,59.5a1.725,1.725,0,0,0-2.738-2.1l-7.023,9.1,3.763-10.44a1.721,1.721,0,0,0-1.626-2.3h-4.145a1.721,1.721,0,0,1-1.526-2.527l9.559-16.338h6.226L249.26,38.41,244.5,46.3a1.72,1.72,0,0,0,1.48,2.606h6.158a.54.54,0,0,1,.531.308.508.508,0,0,1-.107.576l-.013.015-.709.842a1.724,1.724,0,0,0,2.646,2.212l.7-.835A3.93,3.93,0,0,0,255.808,47.781Z"
                      transform="translate(-231.937 -31.447)"/>
            </svg>
            <input class="w-1/2 h-8 border border-gray-300 rounded px-2 bg-gray-100 mr-4" id="waterLimit" name="waterLimit"
                   type="text" placeholder="100L">
        </div>
        <div class="selectDiv col-start-2 col-end-3 row-start-2 row-end-3">
            <select class="selectBox place-self-center" id="waterSelection">
                <option value="Per day">Per day</option>
                <option value="Per week">Per week</option>
                <option value="Per month">Per month</option>
            </select>
        </div>

        <div class="flex flex-row justify-between gap-x-2 col-start-1 col-end-2 row-start-2 row-end-3 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24.235" height="41.376" viewBox="0 0 24.235 41.376">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                        }
                    </style>
                </defs>
                <path id="Path_278" data-name="Path 278" class="cls-1"
                      d="M255.808,47.781a3.984,3.984,0,0,0-3.671-2.313h-3.1l6.886-11.415a1.72,1.72,0,0,0-1.48-2.606H244.166a1.729,1.729,0,0,0-1.492.854L232.6,49.518l-.024.042a5.162,5.162,0,0,0,4.548,7.634h1.69L234.452,69.3a2.445,2.445,0,0,0,.163,2.323,2.806,2.806,0,0,0,2.4,1.2h.014a3.264,3.264,0,0,0,2.283-.933,1.719,1.719,0,0,0,.146-.166L248.894,59.5a1.725,1.725,0,0,0-2.738-2.1l-7.023,9.1,3.763-10.44a1.721,1.721,0,0,0-1.626-2.3h-4.145a1.721,1.721,0,0,1-1.526-2.527l9.559-16.338h6.226L249.26,38.41,244.5,46.3a1.72,1.72,0,0,0,1.48,2.606h6.158a.54.54,0,0,1,.531.308.508.508,0,0,1-.107.576l-.013.015-.709.842a1.724,1.724,0,0,0,2.646,2.212l.7-.835A3.93,3.93,0,0,0,255.808,47.781Z"
                      transform="translate(-231.937 -31.447)"/>
            </svg>
            <input class="w-1/2 h-8 border border-gray-300 rounded px-2 bg-gray-100 mr-4" id="waterLimit" name="waterLimit"
                   type="text" placeholder="750kW">
        </div>
        <div class="selectDiv col-start-2 col-end-3 row-start-2 row-end-3">
            <select class="selectBox place-self-center" id="electricitySelection">
                <option value="Per day">Per day</option>
                <option value="Per week">Per week</option>
                <option value="Per month">Per month</option>
            </select>
        </div>

        <div class="flex flex-row justify-between gap-x-2 col-start-1 col-end-2 row-start-3 row-end-4 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="23.403" height="41.376" viewBox="0 0 23.403 41.376">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                        }
                    </style>
                </defs>
                <g id="gas" transform="translate(-98.304)">
                    <g id="Group_87" data-name="Group 87" transform="translate(98.304)">
                        <g id="Group_86" data-name="Group 86" transform="translate(0)">
                            <path id="Path_344" data-name="Path 344" class="cls-1" d="M115.388,8.472V5.8H116a2.917,2.917,0,0,0,2.9-2.9A2.917,2.917,0,0,0,116,0H104.014a2.917,2.917,0,0,0-2.9,2.9,2.917,2.917,0,0,0,2.9,2.9h.608V8.472a6.757,6.757,0,0,0-6.319,6.74V22.56h23.4V15.212A6.757,6.757,0,0,0,115.388,8.472Zm-2.34-.047h-1.872V7.4h-2.34v1.03h-1.872V5.757h6.085Z" transform="translate(-98.304)"/>
                        </g>
                    </g>
                    <g id="Group_89" data-name="Group 89" transform="translate(98.304 24.9)">
                        <g id="Group_88" data-name="Group 88">
                            <path id="Path_345" data-name="Path 345" class="cls-1" d="M98.3,272.384v7.489a6.831,6.831,0,0,0,3.744,6.085v2.9h15.914v-2.9a6.831,6.831,0,0,0,3.744-6.085v-7.489Z" transform="translate(-98.304 -272.384)"/>
                        </g>
                    </g>
                </g>
            </svg>
            <input class="w-1/2 h-8 border border-gray-300 rounded px-2 bg-gray-100 mr-4" id="waterLimit" name="waterLimit"
                   type="text" placeholder="133m³">
        </div>
        <div class="selectDiv col-start-2 col-end-3 row-start-3 row-end-4">
            <select class="selectBox" id="gasSelection">
                <option value="Per month">Per month</option>
                <option value="Per day">Per day</option>
                <option value="Per week">Per week</option>
            </select>
        </div>
    </div>


</div>

</body>
</html>
