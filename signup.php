<?php
include_once (__DIR__ . "/classes/User.php");

session_start();
session_destroy();
var_dump($_POST);

if(!empty($_POST)){
    try {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $user = new User($_POST['fullname'], $_POST['email'], $_POST['username'], $_POST['password']);
            $user->setPassword($_POST['password']);
            $saved = $user->saveUser();
            if (!$saved) {
                $error = "";
            } else {
                header("Location: index.php");
            }
        }else{
            $error2 = "";
        }
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
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
    <title>Sign up!</title>
</head>
<body>
<div class="flex flex-col gap-8 min-h-screen items-center justify-center">
    <div class="mb-2">
        <h1 class="font-semibold text-2xl mb-2">Welcome to</h1>
        <svg class="" xmlns="http://www.w3.org/2000/svg" width="280.505" height="52.004" viewBox="0 0 280.505 52.004">
            <defs>
                <style>
                    .cls-1 {
                        fill: #ff5668;
                    }

                    .cls-2 {
                        fill: #f8f8ff;
                    }
                </style>
            </defs>
            <g id="Group_1" data-name="Group 1" transform="translate(-47.128 -343.057)">
                <path id="Path_1" data-name="Path 1" class="cls-1"
                      d="M137.669,393.99l.146-50.568-11.76,30.74-35.116-30.6-.146,50.568L102.626,363.4Z"
                      transform="translate(25.145 0.211)"/>
                <path id="Path_2" data-name="Path 2" class="cls-2"
                      d="M94.049,394.074l-.072-33.514L77.192,388.295H72.961l-16.785-27.3v33.079H47.128V343.515h7.808l20.286,33.512,19.922-33.512h7.808l.072,50.559Z"
                      transform="translate(0 0.264)"/>
                <path id="Path_3" data-name="Path 3" class="cls-2"
                      d="M162.281,394.074l-10.435-14.807a19.354,19.354,0,0,1-1.971.074H138.345v14.733h-9.487V343.515h21.016a28.53,28.53,0,0,1,11.567,2.167,16.788,16.788,0,0,1,7.553,6.212,17.248,17.248,0,0,1,2.627,9.607,17.007,17.007,0,0,1-2.81,9.822,16.7,16.7,0,0,1-8.064,6.14l11.75,16.611Zm-3.431-40.013q-3.212-2.6-9.413-2.6H138.345v20.154h11.093q6.2,0,9.413-2.638a9.124,9.124,0,0,0,3.21-7.474A9.021,9.021,0,0,0,158.85,354.061Z"
                      transform="translate(47.066 0.264)"/>
                <path id="Path_4" data-name="Path 4" class="cls-2"
                      d="M198.922,368.48H207.9v20.151a28.645,28.645,0,0,1-9.2,4.769,35.652,35.652,0,0,1-10.8,1.661A29.378,29.378,0,0,1,173.82,391.7a25.1,25.1,0,0,1-9.852-9.282,26.754,26.754,0,0,1,0-26.724,25.035,25.035,0,0,1,9.889-9.282,29.733,29.733,0,0,1,14.194-3.358,31.3,31.3,0,0,1,11.674,2.093,22.938,22.938,0,0,1,8.83,6.141l-5.982,5.779a19.3,19.3,0,0,0-14.085-5.779,20.067,20.067,0,0,0-9.6,2.239,16.416,16.416,0,0,0-6.568,6.283,17.942,17.942,0,0,0-2.37,9.244,17.653,17.653,0,0,0,2.37,9.1,16.886,16.886,0,0,0,6.568,6.357,19.4,19.4,0,0,0,9.523,2.312,20.7,20.7,0,0,0,10.508-2.6Z"
                      transform="translate(65.225 0)"/>
                <path id="Path_5" data-name="Path 5" class="cls-2"
                      d="M223.24,376.233v17.84h-9.485v-17.7l-20.069-32.863H203.83l14.958,24.629,15.106-24.629h9.34Z"
                      transform="translate(84.398 0.264)"/>
            </g>
        </svg>
    </div>
    <div class="w-10/12 glassmorphism p-8">
        <h2 class="font-semibold text-xl mb-4">Sign up here!</h2>
        <form action="" method="post">
            <div class="grid grid-rows-6 justify-items-center">
                <?php if (isset($error)): ?>
                    <div class="flex items-center gap-3 w-full h-10 border border-red-300 rounded px-4 bg-red-200">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <ul>
                            <li>Email or username already exists!</li>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if (isset($error2)): ?>
                    <div class="flex items-center gap-3 w-full h-10 border border-red-300 rounded px-4 bg-red-200">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <ul>
                            <li>Invalid email!</li>
                        </ul>
                    </div>
                <?php endif; ?>
                <label class="pt-4 justify-self-start text-sm font-medium" for="fullname">Fullname</label>
                <input class="w-full h-10 border border-gray-300 rounded px-2 bg-gray-100" id="fullname" name="fullname"
                       type="text" placeholder="Full name" required>
                <label class="pt-4 justify-self-start text-sm font-medium" for="email">Email</label>
                <input class="w-full h-10 border border-gray-300 rounded px-2 bg-gray-100" id="email" name="email"
                       type="email" placeholder="Email address" required>
                <label class="pt-4 justify-self-start text-sm font-medium" for="username">Username</label>
                <input class="w-full h-10 border border-gray-300 rounded px-2 bg-gray-100" id="username" name="username"
                       type="text" placeholder="Username" required>
                <label class="pt-4 justify-self-start text-sm font-medium" for="password">Password</label>
                <input class="w-full h-10 border border-gray-300 rounded px-2 bg-gray-100" id="password" name="password"
                       type="password" placeholder="Password" required>
                <input class="w-full h-10 text-white font-bold rounded mt-2 button"
                       name="btnRegister" type="submit" value="Register">
            </div>
        </form>
        <p class="text-sm font-normal text-center text-white mt-8">Already have an account? <a class="font-bold"
                                                                                               href="index.php">Log
                in</a></p>
    </div>

</div>
</body>
</html>
