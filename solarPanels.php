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
    <title>View your solar panel info!</title>
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
    <h1 class="font-bold text-2xl mb-2">Solar panels</h1>
    <span class="line-w2 bg-red h-0.5 block self-center"></span>
</div>

<div class="w-full glassmorphism mt-8 py-3 px-5 flex flex-row">
    <div class="flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="73.421" height="69.316" viewBox="0 0 73.421 69.316">
            <defs>
                <style>
                    .cls-12 {
                        fill: #fd5567;
                    }

                    .cls-2 {
                        fill: none;
                        stroke: #fe5567;
                        stroke-linecap: round;
                        stroke-miterlimit: 10;
                        stroke-width: 2.25px;
                    }
                </style>
            </defs>
            <g id="solarPanel" transform="translate(-59.246 -196.846)">
                <g id="solar-panel" transform="translate(59.226 197)">
                    <g id="Group_59" data-name="Group 59" transform="translate(0.02 16.138)">
                        <g id="Group_58" data-name="Group 58">
                            <path id="Path_323" data-name="Path 323" class="cls-12"
                                  d="M62.12,163.319,34.455,112.6a1.152,1.152,0,0,0-1.012-.6H1.167a1.2,1.2,0,0,0-.257.033H.882a1.116,1.116,0,0,0-.317.141.869.869,0,0,0-.083.062,1.207,1.207,0,0,0-.249.255c-.016.024-.038.044-.053.069a1,1,0,0,0-.062.145.934.934,0,0,0-.04.092,1.151,1.151,0,0,0-.058.346v8.078a1.154,1.154,0,0,0,.138.549l23.048,42.65a1.153,1.153,0,0,0,1.014.6H61.107a1.153,1.153,0,0,0,1.012-1.7Zm-9.871-13.28H44.5l-5.659-10.374H46.59Zm-27.665-12.68h-8.9l-5.659-10.374h8.9Zm-3.032-10.374H29.3l5.659,10.374H27.211Zm4.289,12.68L31.5,150.039H22.6l-5.659-10.374Zm2.627,0h7.747l5.659,10.374H34.127Zm16.864-2.305H37.585l-5.659-10.374h7.747ZM32.758,114.305l5.659,10.374H30.669l-5.659-10.374Zm-10.374,0,5.659,10.374H20.295l-5.659-10.374Zm-10.374,0,5.659,10.374h-8.9L3.109,114.305Zm12.9,48.413L2.32,120.93v-3.256l24.57,45.045Zm4.6,0-5.659-10.374h8.9l5.659,10.374Zm11.527,0-5.659-10.374h7.747l5.659,10.374Zm10.374,0-5.659-10.374h7.747l5.659,10.374Z"
                                  transform="translate(-0.02 -112)"/>
                        </g>
                    </g>
                </g>
                <g id="sunny-outline" transform="translate(101.138 194.596)">
                    <path id="Path_298" data-name="Path 298" class="cls-2" d="M18,3.375V6.494"
                          transform="translate(-1.11)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-2" d="M18,29.25v3.119"
                          transform="translate(-1.11 -1.964)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-2" d="M28.161,7.658l-2.2,2.2"
                          transform="translate(-1.714 -0.325)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-2" d="M9.864,25.955l-2.2,2.2"
                          transform="translate(-0.325 -1.714)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-2" d="M32.369,18H29.25"
                          transform="translate(-1.964 -1.11)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-2" d="M6.494,18H3.375"
                          transform="translate(0 -1.11)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-2" d="M28.161,28.161l-2.2-2.2"
                          transform="translate(-1.714 -1.714)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-2" d="M9.864,9.864l-2.2-2.2"
                          transform="translate(-0.325 -0.325)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-2"
                          d="M22.771,17.573a5.2,5.2,0,1,1-5.2-5.2A5.2,5.2,0,0,1,22.771,17.573Z"
                          transform="translate(-0.683 -0.683)"/>
                </g>
            </g>
        </svg>
        <p class="font-normal text-white text-xl mt-2">12 Panels</p>
    </div>

    <span class="line-w3 h-28 bg-white block self-center mx-4"></span>

    <div class="grid grid-cols-2 grid-rows-3 gap-y-2">
        <div class="flex flex-row justify-evenly gap-x-2 col-start-1 col-end-3 row-start-1 row-end-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="15.993" height="23.005" viewBox="0 0 15.993 23.005">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                        }
                    </style>
                </defs>
                <path id="placeholder" class="cls-1"
                      d="M1.746,0a8.006,8.006,0,0,0-8,8c0,5.542,8,15.008,8,15.008S9.743,13.266,9.743,8A8.005,8.005,0,0,0,1.746,0ZM4.159,10.338a3.412,3.412,0,1,1,0-4.825A3.4,3.4,0,0,1,4.159,10.338Zm0,0"
                      transform="translate(6.25)"/>
            </svg>
            <p class="font-normal text-white text-base">Mechelen, Belgium</p>
        </div>

        <div class="flex flex-row justify-evenly gap-x-2 col-start-1 col-end-3 row-start-2 row-end-3 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                <defs>
                    <style>
                        .cls-13 {
                            fill: none;
                            stroke: #f8f8ff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2.25px;
                        }
                    </style>
                </defs>
                <g id="sunny-outline" transform="translate(-2.25 -2.25)">
                    <path id="Path_298" data-name="Path 298" class="cls-13" d="M18,3.375V6.661"
                          transform="translate(-0.385 0)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-13" d="M18,29.25v3.286"
                          transform="translate(-0.385 -0.682)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-13" d="M28.279,7.658,25.956,9.981"
                          transform="translate(-0.595 -0.113)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-13" d="M9.982,25.955,7.659,28.278"
                          transform="translate(-0.113 -0.595)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-13" d="M32.536,18H29.25"
                          transform="translate(-0.682 -0.385)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-13" d="M6.661,18H3.375"
                          transform="translate(0 -0.385)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-13" d="M28.279,28.279l-2.323-2.323"
                          transform="translate(-0.595 -0.595)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-13" d="M9.982,9.982,7.659,7.659"
                          transform="translate(-0.113 -0.113)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-13"
                          d="M23.329,17.852a5.477,5.477,0,1,1-5.477-5.477A5.477,5.477,0,0,1,23.329,17.852Z"
                          transform="translate(-0.237 -0.237)"/>
                </g>
            </svg>
            <p class="font-normal text-white text-base">Monday 26, August</p>
        </div>

        <div class="flex flex-row justify-evenly gap-x-2 col-start-1 col-end-2 row-start-3 row-end-4 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="14.175" height="28.35" viewBox="0 0 14.175 28.35">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                        }
                    </style>
                </defs>
                <g id="thermometer" transform="translate(-128)">
                    <g id="Group_61" data-name="Group 61" transform="translate(128)">
                        <g id="Group_60" data-name="Group 60">
                            <path id="Path_324" data-name="Path 324" class="cls-1"
                                  d="M139.812,15.979V4.725a4.725,4.725,0,0,0-9.45,0V15.979a7.087,7.087,0,1,0,9.45,0Zm-4.725,10.008a4.725,4.725,0,0,1-3.149-8.247l.787-.7V4.725a2.362,2.362,0,1,1,4.725,0V17.036l.787.7a4.725,4.725,0,0,1-3.149,8.247Z"
                                  transform="translate(-128)"/>
                        </g>
                    </g>
                    <g id="Group_63" data-name="Group 63" transform="translate(133.906 9.45)">
                        <g id="Group_62" data-name="Group 62">
                            <rect id="Rectangle_1147" data-name="Rectangle 1147" class="cls-1" width="2.362"
                                  height="14.175"/>
                        </g>
                    </g>
                    <g id="Group_65" data-name="Group 65" transform="translate(131.555 17.685)">
                        <g id="Group_64" data-name="Group 64" transform="translate(0 0)">
                            <circle id="Ellipse_39" data-name="Ellipse 39" class="cls-1" cx="3.555" cy="3.555"
                                    r="3.555"/>
                        </g>
                    </g>
                </g>
            </svg>
            <p class="font-normal text-white text-xl">24°C</p>
        </div>

        <div class="flex flex-row justify-evenly gap-x-2 col-start-2 col-end-3 row-start-3 row-end-4 items-center">
            <svg id="Group_8" data-name="Group 8" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                 viewBox="0 0 70 70">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                        }
                    </style>
                </defs>
                <path id="Path_270" data-name="Path 270" class="cls-1"
                      d="M120.208,39.571a2.734,2.734,0,0,0,4.656-2.868l-2.053-3.332a2.734,2.734,0,1,0-4.656,2.868Z"
                      transform="translate(-101.655 -27.746)"/>
                <path id="Path_271" data-name="Path 271" class="cls-1"
                      d="M36.441,340.171l-3.469,1.916a2.734,2.734,0,1,0,2.644,4.787l3.469-1.916a2.734,2.734,0,0,0-2.644-4.787Z"
                      transform="translate(-27.235 -293.346)"/>
                <path id="Path_272" data-name="Path 272" class="cls-1"
                      d="M238.266,10.08A2.734,2.734,0,0,0,241,7.346v-4.1a2.734,2.734,0,1,0-5.469,0v4.1A2.734,2.734,0,0,0,238.266,10.08Z"
                      transform="translate(-203.336 -0.51)"/>
                <path id="Path_273" data-name="Path 273" class="cls-1"
                      d="M9.57,238.774a2.734,2.734,0,0,0-2.734-2.734h-4.1a2.734,2.734,0,1,0,0,5.469h4.1A2.734,2.734,0,0,0,9.57,238.774Z"
                      transform="translate(0 -203.775)"/>
                <path id="Path_274" data-name="Path 274" class="cls-1"
                      d="M118.679,137.92q-.235-.037-.467-.08a15.863,15.863,0,0,1,.7-31.3c.192-.027.388-.051.583-.071a2.734,2.734,0,1,0-.556-5.44c-.262.027-.526.059-.784.095a21.332,21.332,0,0,0-.942,42.091c.206.038.417.074.627.107a2.734,2.734,0,1,0,.839-5.4Z"
                      transform="translate(-86.17 -87.249)"/>
                <path id="Path_275" data-name="Path 275" class="cls-1"
                      d="M269.727,57.408a6.306,6.306,0,0,0-5.811-3.676H259L269.9,35.59a2.734,2.734,0,0,0-2.344-4.143H251.3a2.735,2.735,0,0,0-2.363,1.358L232.988,60.168l-.037.067a8.2,8.2,0,0,0,7.2,12.134h2.675L235.918,91.61a3.9,3.9,0,0,0,.257,3.692,4.437,4.437,0,0,0,3.795,1.907h.022a5.156,5.156,0,0,0,3.614-1.482,2.728,2.728,0,0,0,.231-.264l14.946-19.435a2.734,2.734,0,0,0-4.335-3.334L243.329,87.151l5.957-16.593a2.735,2.735,0,0,0-2.574-3.659h-6.562a2.734,2.734,0,0,1-2.415-4.016l15.133-25.968h9.857l-10.9,18.143a2.734,2.734,0,0,0,2.344,4.143h9.748a.855.855,0,0,1,.841.489.81.81,0,0,1-.169.916l-.02.024-1.123,1.338a2.734,2.734,0,0,0,4.189,3.516l1.114-1.327A6.267,6.267,0,0,0,269.727,57.408Z"
                      transform="translate(-200.303 -27.209)"/>
                <path id="Path_276" data-name="Path 276" class="cls-1"
                      d="M41.948,115.559l-3.338-1.914a2.734,2.734,0,1,0-2.721,4.744l3.338,1.914a2.734,2.734,0,1,0,2.721-4.744Z"
                      transform="translate(-29.787 -97.833)"/>
                <path id="Path_277" data-name="Path 277" class="cls-1"
                      d="M118.272,412.061a2.735,2.735,0,0,0-3.74.983l-2,3.423a2.734,2.734,0,1,0,4.723,2.757l2-3.423A2.735,2.735,0,0,0,118.272,412.061Z"
                      transform="translate(-96.83 -355.36)"/>
            </svg>
            <p class="font-normal text-white text-xl">7kWh</p>
        </div>
    </div>
</div>

<div class="w-full glassmorphism mt-8 p-3 flex flex-col">
    <h3 class="font-medium text-xl col-start-1 col-end-2 justify-self-start">Potential Energy</h3>

    <div>
        <section
                class="bar-graph-potentialEnergy bar-graph-vertical-potentialEnergy bar-graph-two-potentialEnergy w-80 flex justify-evenly">
            <div class="bar-one-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">7<span class="text-xs">kWh</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Mon</span>
            </div>
            <div class="bar-two-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">4<span class="text-xs">kWh</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Tue</span>
            </div>
            <div class="bar-three-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">4<span class="text-xs">kWh</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Wed</span>
            </div>
            <div class="bar-four-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">7<span class="text-xs">kWh</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Thu</span>
            </div>
            <div class="bar-five-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">7<span class="text-xs">kWh</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Fri</span>
            </div>
            <div class="bar-six-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">3<span class="text-xs">kWh</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Sat</span>
            </div>
            <div class="bar-seven-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">3<span class="text-xs">kWh</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Sun</span>
            </div>
        </section>
        <div class="flex flex-row justify-around">
            <svg xmlns="http://www.w3.org/2000/svg" width="22.433" height="22.433" viewBox="0 0 22.433 22.433">
                <defs>
                    <style>
                        .cls-123 {
                            fill: none;
                            stroke: #f8f8ff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2.25px;
                        }
                    </style>
                </defs>
                <g id="sun" transform="translate(-2.25 -2.25)">
                    <path id="Path_298" data-name="Path 298" class="cls-123" d="M18,3.375V5.7" transform="translate(-4.534)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-123" d="M18,29.25v2.329" transform="translate(-4.534 -8.021)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-123" d="M27.6,7.658,25.956,9.3" transform="translate(-7 -1.328)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-123" d="M9.305,25.955,7.659,27.6" transform="translate(-1.328 -7)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-123" d="M31.579,18H29.25" transform="translate(-8.021 -4.534)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-123" d="M5.7,18H3.375" transform="translate(0 -4.534)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-123" d="M27.6,27.6l-1.646-1.646" transform="translate(-7 -7)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-123" d="M9.305,9.305,7.659,7.659" transform="translate(-1.328 -1.328)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-123" d="M20.138,16.256a3.881,3.881,0,1,1-3.881-3.881A3.881,3.881,0,0,1,20.138,16.256Z" transform="translate(-2.79 -2.79)"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="22.433" height="22.433" viewBox="0 0 22.433 22.433">
                <defs>
                    <style>
                        .cls-123 {
                            fill: none;
                            stroke: #f8f8ff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2.25px;
                        }
                    </style>
                </defs>
                <g id="sun" transform="translate(-2.25 -2.25)">
                    <path id="Path_298" data-name="Path 298" class="cls-123" d="M18,3.375V5.7" transform="translate(-4.534)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-123" d="M18,29.25v2.329" transform="translate(-4.534 -8.021)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-123" d="M27.6,7.658,25.956,9.3" transform="translate(-7 -1.328)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-123" d="M9.305,25.955,7.659,27.6" transform="translate(-1.328 -7)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-123" d="M31.579,18H29.25" transform="translate(-8.021 -4.534)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-123" d="M5.7,18H3.375" transform="translate(0 -4.534)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-123" d="M27.6,27.6l-1.646-1.646" transform="translate(-7 -7)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-123" d="M9.305,9.305,7.659,7.659" transform="translate(-1.328 -1.328)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-123" d="M20.138,16.256a3.881,3.881,0,1,1-3.881-3.881A3.881,3.881,0,0,1,20.138,16.256Z" transform="translate(-2.79 -2.79)"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="22.433" height="22.433" viewBox="0 0 22.433 22.433">
                <defs>
                    <style>
                        .cls-123 {
                            fill: none;
                            stroke: #f8f8ff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2.25px;
                        }
                    </style>
                </defs>
                <g id="sun" transform="translate(-2.25 -2.25)">
                    <path id="Path_298" data-name="Path 298" class="cls-123" d="M18,3.375V5.7" transform="translate(-4.534)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-123" d="M18,29.25v2.329" transform="translate(-4.534 -8.021)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-123" d="M27.6,7.658,25.956,9.3" transform="translate(-7 -1.328)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-123" d="M9.305,25.955,7.659,27.6" transform="translate(-1.328 -7)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-123" d="M31.579,18H29.25" transform="translate(-8.021 -4.534)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-123" d="M5.7,18H3.375" transform="translate(0 -4.534)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-123" d="M27.6,27.6l-1.646-1.646" transform="translate(-7 -7)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-123" d="M9.305,9.305,7.659,7.659" transform="translate(-1.328 -1.328)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-123" d="M20.138,16.256a3.881,3.881,0,1,1-3.881-3.881A3.881,3.881,0,0,1,20.138,16.256Z" transform="translate(-2.79 -2.79)"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>
        </div>
        <p class="px-1.5 text-white font-light mt-2">Potential energy to be generated this week: <span class="font-medium">35 kWh</span>
        </p>
    </div>
</div>

<div class="w-full glassmorphism mt-8 p-3 flex flex-col mb-24">
    <h3 class="font-medium text-xl col-start-1 col-end-2 justify-self-start">Generated energy history</h3>

    <div>
        <section
                class="bar-graph-potentialEnergy bar-graph-vertical-potentialEnergy bar-graph-two-potentialEnergy w-80 flex justify-evenly">
            <div class="bar-one-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">250<span class="text-xs">w</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Mon</span>
            </div>
            <div class="bar-two-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">120<span class="text-xs">w</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Tue</span>
            </div>
            <div class="bar-three-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">70<span class="text-xs">w</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Wed</span>
            </div>
            <div class="bar-four-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">250<span class="text-xs">w</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Thu</span>
            </div>
            <div class="bar-five-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">250<span class="text-xs">w</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Fri</span>
            </div>
            <div class="bar-six-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">70<span class="text-xs">w</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Sat</span>
            </div>
            <div class="bar-seven-potentialEnergy bar-container-potentialEnergy">
                <label class="font-medium text-base">70<span class="text-xs">w</span></label>
                <div class="bar-potentialEnergy"></div>
                <span class="year-potentialEnergy">Sun</span>
            </div>
        </section>
        <div class="flex flex-row justify-around">
            <svg xmlns="http://www.w3.org/2000/svg" width="22.433" height="22.433" viewBox="0 0 22.433 22.433">
                <defs>
                    <style>
                        .cls-123 {
                            fill: none;
                            stroke: #f8f8ff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2.25px;
                        }
                    </style>
                </defs>
                <g id="sun" transform="translate(-2.25 -2.25)">
                    <path id="Path_298" data-name="Path 298" class="cls-123" d="M18,3.375V5.7" transform="translate(-4.534)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-123" d="M18,29.25v2.329" transform="translate(-4.534 -8.021)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-123" d="M27.6,7.658,25.956,9.3" transform="translate(-7 -1.328)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-123" d="M9.305,25.955,7.659,27.6" transform="translate(-1.328 -7)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-123" d="M31.579,18H29.25" transform="translate(-8.021 -4.534)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-123" d="M5.7,18H3.375" transform="translate(0 -4.534)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-123" d="M27.6,27.6l-1.646-1.646" transform="translate(-7 -7)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-123" d="M9.305,9.305,7.659,7.659" transform="translate(-1.328 -1.328)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-123" d="M20.138,16.256a3.881,3.881,0,1,1-3.881-3.881A3.881,3.881,0,0,1,20.138,16.256Z" transform="translate(-2.79 -2.79)"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="22.433" height="22.433" viewBox="0 0 22.433 22.433">
                <defs>
                    <style>
                        .cls-123 {
                            fill: none;
                            stroke: #f8f8ff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2.25px;
                        }
                    </style>
                </defs>
                <g id="sun" transform="translate(-2.25 -2.25)">
                    <path id="Path_298" data-name="Path 298" class="cls-123" d="M18,3.375V5.7" transform="translate(-4.534)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-123" d="M18,29.25v2.329" transform="translate(-4.534 -8.021)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-123" d="M27.6,7.658,25.956,9.3" transform="translate(-7 -1.328)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-123" d="M9.305,25.955,7.659,27.6" transform="translate(-1.328 -7)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-123" d="M31.579,18H29.25" transform="translate(-8.021 -4.534)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-123" d="M5.7,18H3.375" transform="translate(0 -4.534)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-123" d="M27.6,27.6l-1.646-1.646" transform="translate(-7 -7)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-123" d="M9.305,9.305,7.659,7.659" transform="translate(-1.328 -1.328)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-123" d="M20.138,16.256a3.881,3.881,0,1,1-3.881-3.881A3.881,3.881,0,0,1,20.138,16.256Z" transform="translate(-2.79 -2.79)"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="22.433" height="22.433" viewBox="0 0 22.433 22.433">
                <defs>
                    <style>
                        .cls-123 {
                            fill: none;
                            stroke: #f8f8ff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2.25px;
                        }
                    </style>
                </defs>
                <g id="sun" transform="translate(-2.25 -2.25)">
                    <path id="Path_298" data-name="Path 298" class="cls-123" d="M18,3.375V5.7" transform="translate(-4.534)"/>
                    <path id="Path_299" data-name="Path 299" class="cls-123" d="M18,29.25v2.329" transform="translate(-4.534 -8.021)"/>
                    <path id="Path_300" data-name="Path 300" class="cls-123" d="M27.6,7.658,25.956,9.3" transform="translate(-7 -1.328)"/>
                    <path id="Path_301" data-name="Path 301" class="cls-123" d="M9.305,25.955,7.659,27.6" transform="translate(-1.328 -7)"/>
                    <path id="Path_302" data-name="Path 302" class="cls-123" d="M31.579,18H29.25" transform="translate(-8.021 -4.534)"/>
                    <path id="Path_303" data-name="Path 303" class="cls-123" d="M5.7,18H3.375" transform="translate(0 -4.534)"/>
                    <path id="Path_304" data-name="Path 304" class="cls-123" d="M27.6,27.6l-1.646-1.646" transform="translate(-7 -7)"/>
                    <path id="Path_305" data-name="Path 305" class="cls-123" d="M9.305,9.305,7.659,7.659" transform="translate(-1.328 -1.328)"/>
                    <path id="Path_306" data-name="Path 306" class="cls-123" d="M20.138,16.256a3.881,3.881,0,1,1-3.881-3.881A3.881,3.881,0,0,1,20.138,16.256Z" transform="translate(-2.79 -2.79)"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="26.375" height="18.133" viewBox="0 0 26.375 18.133">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #f8f8ff;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="cloud" transform="translate(0 -4.5)">
                    <path id="Path_297" data-name="Path 297" class="cls-1" d="M7.263,6.712A9.116,9.116,0,0,1,13.188,4.5,8.466,8.466,0,0,1,21.7,12.048a5.313,5.313,0,0,1-.789,10.584H6.233A6.058,6.058,0,0,1,4.85,10.64,6.935,6.935,0,0,1,7.263,6.712ZM8.339,7.96a4.881,4.881,0,0,0-1.9,3.389v.738l-.733.081a4.417,4.417,0,0,0,.527,8.817H20.914a3.675,3.675,0,1,0,0-7.344H20.09v-.824a6.786,6.786,0,0,0-6.9-6.668A7.468,7.468,0,0,0,8.34,7.962Z"/>
                </g>
            </svg>
        </div>
        <p class="px-1.5 text-white font-light mt-2">Generated energy: <span class="font-medium">1080 W</span>
        </p>
    </div>
</div>


</body>
</html>
