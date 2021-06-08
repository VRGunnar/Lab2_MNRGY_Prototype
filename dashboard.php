<?php
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
    <title>Dashboard</title>
</head>
<body class="px-4">

<div class="mt-8 mb-6">
    <h2 class="font-extralight text-2xl">Welcome to your</h2>
    <h1 class="font-bold text-2xl mb-2">Dashboard</h1>
    <span class="w-4/5 bg-green h-0.5 block self-center"></span>
</div>

<div class="flex flex-wrap justify-between gap-y-4">
    <a href="water.php" class="wp-47 glassmorphism flex flex-col items-center">
        <svg class="my-4" xmlns="http://www.w3.org/2000/svg" width="50" height="70" viewBox="0 0 50 70">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f8f8ff;
                    }
                </style>
            </defs>
            <g id="Group_7" data-name="Group 7" transform="translate(-167.583 -212.299)">
                <path id="water-sharp" class="cls-1"
                      d="M32.875,3.087s-25,26.746-25,45.669c0,14.93,9.659,24.331,25,24.331s25-9.4,25-24.331C57.875,29.833,32.875,3.087,32.875,3.087ZM35.653,64.3V60.245A10.293,10.293,0,0,0,46.07,50.107h4.168A14.409,14.409,0,0,1,35.655,64.3Z"
                      transform="translate(159.708 209.212)"/>
            </g>
        </svg>
        <p class="text-white font-normal text-base mb-2">Water</p>
    </a>

    <a href="basalt.php" class="wp-47 glassmorphism flex flex-col items-center">
        <svg class="my-4" xmlns="http://www.w3.org/2000/svg" width="39" height="70" viewBox="0 0 39 70">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f8f8ff;
                    }
                </style>
            </defs>
            <path id="battery" class="cls-1"
                  d="M58.333,7.8V31.2H7.778V7.8Zm3.889,17.55h3.889V13.65H62.222V4.875A.94.94,0,0,0,61.25,3.9H4.861a.94.94,0,0,0-.7.275.96.96,0,0,0-.274.7v29.25a.94.94,0,0,0,.972.975H61.25a.94.94,0,0,0,.7-.275.96.96,0,0,0,.274-.7ZM70,13.65v11.7a3.9,3.9,0,0,1-3.889,3.9v4.875A4.88,4.88,0,0,1,61.25,39H4.861a4.679,4.679,0,0,1-3.434-1.431A4.691,4.691,0,0,1,0,34.125V4.875A4.706,4.706,0,0,1,1.427,1.431,4.665,4.665,0,0,1,4.861,0H61.25a4.679,4.679,0,0,1,3.434,1.431,4.691,4.691,0,0,1,1.427,3.444V9.75A3.9,3.9,0,0,1,70,13.65Z"
                  transform="translate(0 70) rotate(-90)"/>
        </svg>
        <p class="text-white font-normal text-base mb-2">Basalt energy</p>
    </a>

    <a href="gasElectricity.php" class="wp-47 glassmorphism flex flex-col items-center">
        <svg class="my-4" xmlns="http://www.w3.org/2000/svg" width="41" height="70" viewBox="0 0 41 70">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f8f8ff;
                    }
                </style>
            </defs>
            <path id="Path_278" data-name="Path 278" class="cls-1"
                  d="M272.322,59.081a6.741,6.741,0,0,0-6.21-3.912h-5.253l11.649-19.312a2.91,2.91,0,0,0-2.5-4.41H252.626a2.925,2.925,0,0,0-2.525,1.445L233.06,62.019c-.014.023-.027.047-.04.071a8.732,8.732,0,0,0,7.695,12.916h2.859l-7.383,20.482a4.136,4.136,0,0,0,.275,3.93,4.747,4.747,0,0,0,4.055,2.03h.023a5.522,5.522,0,0,0,3.862-1.578,2.908,2.908,0,0,0,.247-.281L260.625,78.9a2.918,2.918,0,0,0-4.633-3.549L244.111,90.741l6.366-17.662a2.912,2.912,0,0,0-2.75-3.894h-7.013a2.911,2.911,0,0,1-2.581-4.275l16.172-27.641h10.534l-3.595,5.959L253.189,56.58a2.91,2.91,0,0,0,2.5,4.41h10.418a.914.914,0,0,1,.9.521.859.859,0,0,1-.18.975l-.022.025-1.2,1.424a2.917,2.917,0,0,0,4.477,3.742l1.19-1.413A6.65,6.65,0,0,0,272.322,59.081Z"
                  transform="translate(-231.937 -31.447)"/>
        </svg>
        <p class="text-white font-normal text-base mb-2">Gas & electricity</p>
    </a>

    <a href="solarPanels.php" class="wp-47 glassmorphism flex flex-col items-center">
        <svg class="my-4" id="Group_8" data-name="Group 8" xmlns="http://www.w3.org/2000/svg" width="70" height="70"
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
        <p class="text-white font-normal text-base mb-2">Solar panels</p>
    </a>

    <a href="resourcesConsumptions.php" class="w-full glassmorphism grid grid-cols-2 grid-rows-2 justify-items-stretch items-center">
        <p class="text-white text-xl font-bold col-start-1 col-end-2 row-start-1 row-end-2 pt-3 pl-5">20°C / 3
            Months</p>
        <p class="text-white font-normal text-base col-start-1 col-end-2 row-start-2 row-end-3 pb-3 pl-5">Resources &
            Consumptions</p>
        <svg class="col-start-2 col-end-3 row-start-1 row-end-3 justify-self-center p-4" id="statistics"
             xmlns="http://www.w3.org/2000/svg" width="111" height="111" viewBox="0 0 111 111">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f8f8ff;
                    }
                </style>
            </defs>
            <g id="Group_11" data-name="Group 11" transform="translate(0 43.607)">
                <g id="Group_10" data-name="Group 10">
                    <path id="Path_281" data-name="Path 281" class="cls-1"
                          d="M27.75,187.733H3.964A3.964,3.964,0,0,0,0,191.7v59.464a3.964,3.964,0,0,0,3.964,3.964H27.75a3.964,3.964,0,0,0,3.964-3.964V191.7A3.965,3.965,0,0,0,27.75,187.733ZM23.786,247.2H7.928V195.662H23.786Z"
                          transform="translate(0 -187.733)"/>
                </g>
            </g>
            <g id="Group_13" data-name="Group 13" transform="translate(39.643)">
                <g id="Group_12" data-name="Group 12">
                    <path id="Path_282" data-name="Path 282" class="cls-1"
                          d="M198.416,0H174.63a3.964,3.964,0,0,0-3.964,3.964V107.035A3.964,3.964,0,0,0,174.63,111h23.786a3.964,3.964,0,0,0,3.964-3.964V3.964A3.964,3.964,0,0,0,198.416,0Zm-3.964,103.071H178.595V7.928h15.857Z"
                          transform="translate(-170.666)"/>
                </g>
            </g>
            <g id="Group_15" data-name="Group 15" transform="translate(79.285 31.714)">
                <g id="Group_14" data-name="Group 14">
                    <path id="Path_283" data-name="Path 283" class="cls-1"
                          d="M369.083,136.533H345.3a3.964,3.964,0,0,0-3.964,3.964v71.357a3.964,3.964,0,0,0,3.964,3.964h23.786a3.964,3.964,0,0,0,3.964-3.964V140.5A3.964,3.964,0,0,0,369.083,136.533Zm-3.964,71.357H349.261V144.462h15.857Z"
                          transform="translate(-341.333 -136.533)"/>
                </g>
            </g>
        </svg>
    </a>

    <a href="roi.php" class="w-full glassmorphism grid grid-cols-2 grid-rows-2 justify-items-stretch items-center">
        <p class="text-white text-xl font-bold col-start-1 col-end-2 row-start-1 row-end-2 pt-3 pl-5">+210.00</p>
        <p class="text-white font-normal text-base col-start-1 col-end-2 row-start-2 row-end-3 pb-3 pl-5">What is my
            return on investment?</p>
        <svg class="col-start-2 col-end-3 row-start-1 row-end-3 justify-self-center p-4" id="coin"
             xmlns="http://www.w3.org/2000/svg" width="111" height="111" viewBox="0 0 111 111">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f8f8ff;
                    }
                </style>
            </defs>
            <g id="Group_9" data-name="Group 9">
                <path id="Path_279" data-name="Path 279" class="cls-1"
                      d="M55.5,0A55.5,55.5,0,1,0,111,55.5,55.574,55.574,0,0,0,55.5,0Zm0,99.51A44.01,44.01,0,1,1,99.51,55.5,44.064,44.064,0,0,1,55.5,99.51Z"/>
                <path id="Path_280" data-name="Path 280" class="cls-1"
                      d="M192.157,124.481a80.075,80.075,0,0,0-8.348-3.761,18.253,18.253,0,0,1-4.564-2.569c-2.706-2.179-2.2-5.688.986-7.087a7.816,7.816,0,0,1,2.8-.573,21.163,21.163,0,0,1,10.527,2.087c1.651.8,2.2.55,2.775-1.17.6-1.835,1.1-3.692,1.628-5.527a1.922,1.922,0,0,0-1.261-2.569,25.831,25.831,0,0,0-6.651-1.972c-3-.482-3-.482-3.027-3.509-.023-4.289-.023-4.289-4.289-4.266-.619,0-1.238-.023-1.858,0-2,.069-2.339.413-2.385,2.408-.023.894,0,1.812,0,2.706-.023,2.683-.023,2.637-2.592,3.555-6.192,2.248-10.022,6.467-10.435,13.233-.367,5.986,2.752,10.022,7.66,12.958,3.027,1.812,6.376,2.89,9.586,4.312a13.99,13.99,0,0,1,3.486,2.064,4.783,4.783,0,0,1-1.147,8.394,11.524,11.524,0,0,1-6.146.8,27.274,27.274,0,0,1-9.357-2.8c-1.72-.894-2.225-.665-2.821,1.215-.5,1.628-.963,3.257-1.4,4.885-.6,2.2-.39,2.729,1.72,3.738a30.726,30.726,0,0,0,8.44,2.431c2.27.367,2.362.459,2.385,2.821,0,1.078.023,2.156.023,3.211a1.91,1.91,0,0,0,2.064,2.156q2.374.034,4.747,0a1.83,1.83,0,0,0,1.972-2.041c0-1.468.069-2.936.023-4.4a2.316,2.316,0,0,1,2.018-2.637,16.017,16.017,0,0,0,8.3-5.321C202.982,139.915,200.688,129.205,192.157,124.481Z"
                      transform="translate(-127.185 -72.1)"/>
            </g>
        </svg>
    </a>

    <nav class="glassmorphism rounded-full mx-1 px-5 py-2 navbar">
        <ul class="flex flex-row justify-between">
            <li>
                <a href="profile.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="29" viewBox="0 0 24 29">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #f8f8ff;
                                }
                            </style>
                        </defs>
                        <g id="Group_16" data-name="Group 16" transform="translate(-446.045 -95.17)">
                            <path id="Path_286" data-name="Path 286" class="cls-1"
                                  d="M533.689,97.208a6.987,6.987,0,0,0,0,9.837,6.873,6.873,0,0,0,9.769,0,6.988,6.988,0,0,0,0-9.837,6.873,6.873,0,0,0-9.769,0Z"
                                  transform="translate(-80.711)"/>
                            <path id="Path_287" data-name="Path 287" class="cls-1"
                                  d="M468.626,352.081a4.805,4.805,0,0,0,1.419-3.628c0-.582-.019-1.156-.058-1.706a17.18,17.18,0,0,0-.233-1.824,14.294,14.294,0,0,0-.447-1.835,9.067,9.067,0,0,0-.751-1.711,6.453,6.453,0,0,0-1.133-1.482,5,5,0,0,0-1.627-1.027,5.606,5.606,0,0,0-2.078-.377,2.1,2.1,0,0,0-1.126.479c-.337.221-.732.477-1.173.76a6.731,6.731,0,0,1-1.518.671,5.876,5.876,0,0,1-3.713,0,6.72,6.72,0,0,1-1.517-.671c-.436-.28-.831-.536-1.174-.76a2.1,2.1,0,0,0-1.126-.479,5.59,5.59,0,0,0-2.077.378,4.99,4.99,0,0,0-1.628,1.026,6.446,6.446,0,0,0-1.133,1.482,9.109,9.109,0,0,0-.752,1.711,14.491,14.491,0,0,0-.447,1.835,17.117,17.117,0,0,0-.233,1.826c-.038.552-.058,1.126-.058,1.705a4.806,4.806,0,0,0,1.419,3.628,5.1,5.1,0,0,0,3.656,1.339h13.851A5.1,5.1,0,0,0,468.626,352.081Z"
                                  transform="translate(0 -229.25)"/>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href="home.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #f8f8ff;
                                }
                            </style>
                        </defs>
                        <path id="Path_284" data-name="Path 284" class="cls-1"
                              d="M1504,96.081l-9.409,9.5a3.137,3.137,0,0,0-.905,2.207v13.256a3.107,3.107,0,0,0,3.091,3.122h3.217a3.107,3.107,0,0,0,3.091-3.122v-3.259a3.106,3.106,0,0,1,3.091-3.122h.018a3.106,3.106,0,0,1,3.091,3.122v3.259a3.107,3.107,0,0,0,3.091,3.122h3.217a3.107,3.107,0,0,0,3.091-3.122V107.789a3.137,3.137,0,0,0-.905-2.207l-9.409-9.5A3.07,3.07,0,0,0,1504,96.081Z"
                              transform="translate(-1493.685 -95.166)"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="settings.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #f8f8ff;
                                }
                            </style>
                        </defs>
                        <path id="Path_285" data-name="Path 285" class="cls-1"
                              d="M950.354,112.844l-2.643-2.084a10.573,10.573,0,0,0,.062-1.095,10.26,10.26,0,0,0-.062-1.095l2.645-2.086a1.314,1.314,0,0,0,.313-1.665l-2.748-4.8a1.269,1.269,0,0,0-1.59-.576l-3.119,1.263a10.674,10.674,0,0,0-1.873-1.1l-.474-3.336a1.276,1.276,0,0,0-1.27-1.112h-5.511a1.272,1.272,0,0,0-1.268,1.1l-.476,3.348a11,11,0,0,0-1.869,1.1l-3.127-1.266a1.294,1.294,0,0,0-1.578.567l-2.752,4.8a1.307,1.307,0,0,0,.312,1.674l2.643,2.084a9.646,9.646,0,0,0,0,2.188l-2.645,2.086a1.315,1.315,0,0,0-.312,1.665l2.748,4.8a1.267,1.267,0,0,0,1.59.576l3.119-1.263a10.769,10.769,0,0,0,1.871,1.1l.474,3.335a1.275,1.275,0,0,0,1.27,1.114H939.6a1.274,1.274,0,0,0,1.269-1.1l.476-3.347a11.058,11.058,0,0,0,1.869-1.1l3.127,1.266a1.278,1.278,0,0,0,.47.089,1.263,1.263,0,0,0,1.108-.655l2.76-4.821A1.312,1.312,0,0,0,950.354,112.844ZM936.84,114.5a4.833,4.833,0,1,1,4.792-4.833A4.818,4.818,0,0,1,936.84,114.5Z"
                              transform="translate(-922.839 -95.166)"/>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</div>
</body>
</html>
