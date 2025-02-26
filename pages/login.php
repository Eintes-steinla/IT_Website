<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/output.css">

    <!-- * favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Log in</title>
</head>

<body class="bg-gray-500 h-full font-[exo2-regular]">
    <div class="relative sm:mx-auto py-3 w-full sm:max-w-xl">
        <div
            class="relative bg-gray-800 shadow mx-8 md:mx-0 sm:p-10 px-4 py-10 rounded-3xl">
            <div class="mx-auto max-w-md text-white">
                <div class="flex justify-center items-center">
                    <a href="../index.php"><img src="../assets/images/logo/logo.png" alt="Logo"></a>
                </div>
                <div class="mt-5">
                    <label
                        for="login"
                        class="block pb-1 font-semibold text-gray-400 text-sm">E-mail</label>
                    <input
                        id="login"
                        type="text"
                        class="bg-gray-700 mt-1 mb-5 px-3 py-2 border focus:border-blue-500 rounded-lg focus:ring-0 focus:ring-blue-500 w-full text-white text-sm" />
                    <label
                        for="password"
                        class="block pb-1 font-semibold text-gray-400 text-sm">Password</label>
                    <input
                        id="password"
                        type="password"
                        class="bg-gray-700 mt-1 mb-5 px-3 py-2 border focus:border-blue-500 rounded-lg focus:ring-0 focus:ring-blue-500 w-full text-white text-sm" />
                </div>
                <div class="mb-4 text-right">
                    <a
                        href="#"
                        class="font-display font-semibold text-gray-500 hover:text-gray-400 text-xs cursor-pointer">
                        Forgot Password?
                    </a>
                </div>
                <div class="flex justify-center items-center">
                    <div>
                        <button
                            class="flex justify-center items-center bg-white hover:bg-gray-200 shadow-md px-20 py-2 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-2 focus:ring-offset-blue-200 focus:ring-offset-2 w-full font-semibold text-gray-700 text-base text-center transition duration-200 ease-in">
                            <svg
                                viewBox="0 0 24 24"
                                height="25"
                                width="25"
                                y="0px"
                                x="0px"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12,5c1.6167603,0,3.1012573,0.5535278,4.2863159,1.4740601l3.637146-3.4699707 C17.8087769,1.1399536,15.0406494,0,12,0C7.392395,0,3.3966675,2.5999146,1.3858032,6.4098511l4.0444336,3.1929321 C6.4099731,6.9193726,8.977478,5,12,5z"
                                    fill="#F44336"></path>
                                <path
                                    d="M23.8960571,13.5018311C23.9585571,13.0101929,24,12.508667,24,12 c0-0.8578491-0.093689-1.6931763-0.2647705-2.5H12v5h6.4862061c-0.5247192,1.3637695-1.4589844,2.5177612-2.6481934,3.319458 l4.0594482,3.204834C22.0493774,19.135437,23.5219727,16.4903564,23.8960571,13.5018311z"
                                    fill="#2196F3"></path>
                                <path
                                    d="M5,12c0-0.8434448,0.1568604-1.6483765,0.4302368-2.3972168L1.3858032,6.4098511 C0.5043335,8.0800171,0,9.9801636,0,12c0,1.9972534,0.4950562,3.8763428,1.3582153,5.532959l4.0495605-3.1970215 C5.1484375,13.6044312,5,12.8204346,5,12z"
                                    fill="#FFC107"></path>
                                <path
                                    d="M12,19c-3.0455322,0-5.6295776-1.9484863-6.5922241-4.6640625L1.3582153,17.532959 C3.3592529,21.3734741,7.369812,24,12,24c3.027771,0,5.7887573-1.1248169,7.8974609-2.975708l-4.0594482-3.204834 C14.7412109,18.5588989,13.4284058,19,12,19z"
                                    fill="#00B060"></path>
                                <path
                                    opacity=".1"
                                    d="M12,23.75c-3.5316772,0-6.7072754-1.4571533-8.9524536-3.7786865C5.2453613,22.4378052,8.4364624,24,12,24 c3.5305786,0,6.6952515-1.5313721,8.8881226-3.9592285C18.6495972,22.324646,15.4981079,23.75,12,23.75z"></path>
                                <polygon
                                    opacity=".1"
                                    points="12,14.25 12,14.5 18.4862061,14.5 18.587492,14.25"></polygon>
                                <path
                                    d="M23.9944458,12.1470337C23.9952393,12.0977783,24,12.0493774,24,12 c0-0.0139771-0.0021973-0.0274658-0.0022583-0.0414429C23.9970703,12.0215454,23.9938965,12.0838013,23.9944458,12.1470337z"
                                    fill="#E6E6E6"></path>
                                <path
                                    opacity=".2"
                                    d="M12,9.5v0.25h11.7855721c-0.0157471-0.0825195-0.0329475-0.1680908-0.0503426-0.25H12z"
                                    fill="#FFF"></path>
                                <linearGradient
                                    gradientUnits="userSpaceOnUse"
                                    y2="12"
                                    y1="12"
                                    x2="24"
                                    x1="0"
                                    id="LxT-gk5MfRc1Gl_4XsNKba_xoyhGXWmHnqX_gr1">
                                    <stop stop-opacity=".2" stop-color="#fff" offset="0"></stop>
                                    <stop stop-opacity="0" stop-color="#fff" offset="1"></stop>
                                </linearGradient>
                                <path
                                    d="M23.7352295,9.5H12v5h6.4862061C17.4775391,17.121582,14.9771729,19,12,19 c-3.8659668,0-7-3.1340332-7-7c0-3.8660278,3.1340332-7,7-7c1.4018555,0,2.6939087,0.4306641,3.7885132,1.140686 c0.1675415,0.1088867,0.3403931,0.2111206,0.4978027,0.333374l3.637146-3.4699707L19.8414307,2.940979 C17.7369385,1.1170654,15.00354,0,12,0C5.3725586,0,0,5.3725586,0,12c0,6.6273804,5.3725586,12,12,12 c6.1176758,0,11.1554565-4.5812378,11.8960571-10.4981689C23.9585571,13.0101929,24,12.508667,24,12 C24,11.1421509,23.906311,10.3068237,23.7352295,9.5z"
                                    fill="url(#LxT-gk5MfRc1Gl_4XsNKba_xoyhGXWmHnqX_gr1)"></path>
                                <path
                                    opacity=".1"
                                    d="M15.7885132,5.890686C14.6939087,5.1806641,13.4018555,4.75,12,4.75c-3.8659668,0-7,3.1339722-7,7 c0,0.0421753,0.0005674,0.0751343,0.0012999,0.1171875C5.0687437,8.0595093,8.1762085,5,12,5 c1.4018555,0,2.6939087,0.4306641,3.7885132,1.140686c0.1675415,0.1088867,0.3403931,0.2111206,0.4978027,0.333374 l3.637146-3.4699707l-3.637146,3.2199707C16.1289062,6.1018066,15.9560547,5.9995728,15.7885132,5.890686z"></path>
                                <path
                                    opacity=".2"
                                    d="M12,0.25c2.9750366,0,5.6829224,1.0983887,7.7792969,2.8916016l0.144165-0.1375122 l-0.110014-0.0958166C17.7089558,1.0843592,15.00354,0,12,0C5.3725586,0,0,5.3725586,0,12 c0,0.0421753,0.0058594,0.0828857,0.0062866,0.125C0.0740356,5.5558472,5.4147339,0.25,12,0.25z"
                                    fill="#FFF"></path>
                            </svg>
                            <span class="hidden md:block ml-8">Sign in with Google</span>
                        </button>
                        <button
                            class="flex justify-center items-center bg-white hover:bg-gray-200 shadow-md mt-4 px-20 py-2 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-2 focus:ring-offset-blue-200 focus:ring-offset-2 w-full font-semibold text-gray-700 text-base text-center transition duration-200 ease-in">
                            <svg
                                viewBox="0 0 30 30"
                                height="30"
                                width="30"
                                y="0px"
                                x="0px"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.565,9.785c-0.123,0.077-3.051,1.702-3.051,5.305c0.138,4.109,3.695,5.55,3.756,5.55 c-0.061,0.077-0.537,1.963-1.947,3.94C23.204,26.283,21.962,28,20.076,28c-1.794,0-2.438-1.135-4.508-1.135 c-2.223,0-2.852,1.135-4.554,1.135c-1.886,0-3.22-1.809-4.4-3.496c-1.533-2.208-2.836-5.673-2.882-9 c-0.031-1.763,0.307-3.496,1.165-4.968c1.211-2.055,3.373-3.45,5.734-3.496c1.809-0.061,3.419,1.242,4.523,1.242 c1.058,0,3.036-1.242,5.274-1.242C21.394,7.041,23.97,7.332,25.565,9.785z M15.001,6.688c-0.322-1.61,0.567-3.22,1.395-4.247 c1.058-1.242,2.729-2.085,4.17-2.085c0.092,1.61-0.491,3.189-1.533,4.339C18.098,5.937,16.488,6.872,15.001,6.688z"></path>
                            </svg>
                            <span class="hidden md:block ml-8">Sign in with Apple</span>
                        </button>
                    </div>
                </div>
                <div class="mt-5">
                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 shadow-md px-4 py-2 rounded-lg focus:outline-none focus:ring-blue-500 focus:ring-2 focus:ring-offset-blue-200 focus:ring-offset-2 w-full font-semibold text-white text-base text-center transition duration-200 ease-in">
                        Log in
                    </button>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="dark:border-gray-600 border-b w-1/5 md:w-1/4"></span>
                    <a
                        href="sign-up.php"
                        class="text-gray-500 dark:text-gray-400 text-xs hover:underline uppercase">or sign up</a>
                    <span class="dark:border-gray-600 border-b w-1/5 md:w-1/4"></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>