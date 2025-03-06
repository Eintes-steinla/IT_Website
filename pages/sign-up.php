<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/darkmode.css">

    <!-- * favicon -->
    <link rel="icon" sizes="57x57" href="../assets/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36" href="../assets/images/favicon/android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../assets/images/favicon/android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="../assets/images/favicon/android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144" href="../assets/images/favicon/android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/favicon-96x96.png">
    <link rel="manifest" href="../assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-70x70.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-144x144.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-150x150.png">
    <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-310x310.png">
    <meta name="theme-color" content="#ffffff">
    <title>Sign up</title>
</head>

<body class="bg-main font-[exo2-regular]">
    <div class="relative flex justify-center items-center w-full h-[100vh] min-h-[800px] sm:min-h-[600px]">
        <!-- * star -->
        <div class="bg-stars stars--small"></div>
        <div class="bg-stars stars--medium"></div>
        <div class="bg-stars stars--large"></div>

        <!-- starball -->
        <div
            class="-z-1 absolute flex gap-15 md:gap-35 w-full h-full overflow-hidden">
            <span class="blur-[4.5px] star" style="--i: 31"></span>
            <span class="blur-[4.5px] star" style="--i: 12"></span>
            <span class="blur-[4.5px] star" style="--i: 57"></span>
            <span class="blur-[4.5px] star" style="--i: 93"></span>
            <span class="blur-[4.5px] star" style="--i: 23"></span>
            <span class="blur-[4.5px] star" style="--i: 70"></span>
            <span class="blur-[4.5px] star" style="--i: 6"></span>
        </div>

        <div class="space-y-4 bg-form mx-4 p-4 rounded-3xl w-full min-w-[300px] max-w-[400px] text-normal">
            <div class="flex justify-center items-center">
                <button class="cursor-pointer">
                    <a href="../index.php"><img src="../assets/images/logo/logo.png" alt="logo"></a>
                </button>
            </div>

            <form action="" class="flex flex-col space-y-2">
                <div class="space-y-2 grid sm:grid-cols-[1fr_2fr]">
                    <label for="fullname" class="pl-2 md:pl-0 font-[exo2-bold]">Full Name</label>
                    <input
                        type="text"
                        name="fullname"
                        id="fullname"
                        class="bg-input mb-4 p-2 border-[1px] border-input rounded-lg focus:outline-none h-8">

                    <label for="username" class="pl-2 md:pl-0 font-[exo2-bold]">Username</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        class="bg-input mb-4 p-2 border-[1px] border-input rounded-lg focus:outline-none h-8">

                    <label for="email" class="pl-2 md:pl-0 font-[exo2-bold]">E-mail</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="bg-input mb-4 p-2 border-[1px] border-input rounded-lg focus:outline-none h-8">

                    <!-- * input password -->
                    <label for="password" class="pl-2 md:pl-0 font-[exo2-bold]">Password</label>
                    <div class="relative w-full">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="bg-input mb-4 py-2 pr-9 pl-2 border-[1px] border-input rounded-lg focus:outline-none w-full h-8">

                        <svg
                            id="show-password"
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="top-2 right-3 absolute cursor-pointer"
                            viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                        </svg>

                        <svg
                            id="hide-password"
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="hidden top-2 right-3 absolute cursor-pointer"
                            viewBox="0 0 16 16">
                            <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z" />
                            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z" />
                        </svg>
                    </div>
                    <script>
                        const showPassword = document.getElementById('show-password');
                        const hidePassword = document.getElementById('hide-password');
                        const password = document.getElementById('password');

                        showPassword.addEventListener('click', () => {
                            password.type = 'text';
                            showPassword.classList.add('hidden');
                            hidePassword.classList.remove('hidden');
                        });

                        hidePassword.addEventListener('click', () => {
                            password.type = 'password';
                            showPassword.classList.remove('hidden');
                            hidePassword.classList.add('hidden');
                        });
                    </script>

                    <label for="date" class="pl-2 md:pl-0 font-[exo2-bold]">Date of Birth</label>
                    <input
                        type="date"
                        name="date"
                        id="date"
                        class="bg-input mb-4 p-2 border-[1px] border-input rounded-lg focus:outline-none h-8">

                    <!-- * gender -->
                    <label for="gender" class="pl-2 md:pl-0 font-[exo2-bold]">Gender</label>
                    <div
                        class="flex justify-evenly items-center mb-4 rounded-lg w-full h-8">
                        <div class="relative flex justify-center items-center w-[30px] h-[30px]">
                            <input
                                type="radio"
                                id="radio"
                                name="gender"
                                value="male"
                                checked
                                class="peer z-10 opacity-0 w-full h-full cursor-pointer" />
                            <div class="absolute bg-blue-100 p-4 rounded-full ring-blue-400 peer-checked:ring-2 w-full h-full peer-checked:scale-110 duration-300"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="absolute fill-blue-400" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8" />
                            </svg>
                        </div>

                        <div class="relative flex justify-center items-center w-[30px] h-[30px]">
                            <input
                                type="radio"
                                id="radio"
                                name="gender"
                                value="female"
                                class="peer z-10 opacity-0 w-full h-full cursor-pointer" />
                            <div class="absolute bg-pink-100 p-2 rounded-full ring-pink-400 peer-checked:ring-2 w-full h-full peer-checked:scale-110 duration-300"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="absolute fill-pink-400" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5" />
                            </svg>
                        </div>

                        <div class="relative flex justify-center items-center w-[30px] h-[30px]">
                            <input
                                type="radio"
                                name="gender"
                                value="other"
                                class="peer z-10 opacity-0 w-full h-full cursor-pointer" />
                            <div class="absolute bg-neutral-100 p-2 rounded-full ring-neutral-400 peer-checked:ring-2 w-full h-full peer-checked:scale-110 duration-300"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill=" " class="absolute fill-gray-400" viewBox="0 0 16 16">
                                <path class="stroke-[0.1px] stroke-gray-400" d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mb-4"><a href="#" class="block w-fit hover-text-note text-note text-sm">Forgot Password?</a></div>
                <p class="text-note text-center">Login with social accounts</p>
                <div class="flex justify-evenly items-center mb-4">
                    <button class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" fill="white" viewBox="0 0 50 50">
                            <path d="M 44.527344 34.75 C 43.449219 37.144531 42.929688 38.214844 41.542969 40.328125 C 39.601563 43.28125 36.863281 46.96875 33.480469 46.992188 C 30.46875 47.019531 29.691406 45.027344 25.601563 45.0625 C 21.515625 45.082031 20.664063 47.03125 17.648438 47 C 14.261719 46.96875 11.671875 43.648438 9.730469 40.699219 C 4.300781 32.429688 3.726563 22.734375 7.082031 17.578125 C 9.457031 13.921875 13.210938 11.773438 16.738281 11.773438 C 20.332031 11.773438 22.589844 13.746094 25.558594 13.746094 C 28.441406 13.746094 30.195313 11.769531 34.351563 11.769531 C 37.492188 11.769531 40.8125 13.480469 43.1875 16.433594 C 35.421875 20.691406 36.683594 31.78125 44.527344 34.75 Z M 31.195313 8.46875 C 32.707031 6.527344 33.855469 3.789063 33.4375 1 C 30.972656 1.167969 28.089844 2.742188 26.40625 4.78125 C 24.878906 6.640625 23.613281 9.398438 24.105469 12.066406 C 26.796875 12.152344 29.582031 10.546875 31.195313 8.46875 Z"></path>
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                        </svg>
                    </button>
                </div>

                <button
                    type="submit"
                    class="rounded-lg focus:outline-none h-8 font-[exo2-bold] text-normal cursor-pointer hover-button-bg button-bg">Sign up</button>
            </form>

            <p class="text-note text-sm text-center">Have an account <a href="login.php" class="hover-text-note">Log in</a></p>
        </div>
    </div>
</body>

</html>