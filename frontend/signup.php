<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Center for Linguistics - Sign Up</title>
</head>

<body>
    <?php
    require "./nav.php";
    ?>
    <main class="w-full h-screen flex flex-col items-center justify-center  sm:px-4">
        <div class="w-full space-y-6 text-gray-600 sm:max-w-md">
            <div class="text-center">
                <div class="mt-5 space-y-2">
                    <h3 class="text-gray-800 text-2xl font-bold sm:text-3xl">
                        Register Yourself
                    </h3>
                </div>
            </div>
            <div class="bg-white shadow-lg p-4 py-6 sm:p-6 sm:rounded-lg">
                <form onSubmit="event.preventDefault()" class="space-y-5">
                    <!-- Name Input -->
                    <div>
                        <label class="font-medium">Name</label>
                        <input
                            type="text"
                            required
                            class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label class="font-medium">Email</label>
                        <input
                            type="email"
                            required
                            class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                    </div>

                    <!-- Dropdown for User Type (Teacher/Student) -->
                    <div>
                        <label class="font-medium">I am a</label>
                        <select
                            required
                            class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg">
                            <option value="" disabled selected>Select your role</option>
                            <option value="1">Teacher</option>
                            <option value="2">Student</option>
                        </select>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label class="font-medium">Password</label>
                        <input
                            type="password"
                            required
                            class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                    </div>

                    <!-- Create Account Button -->
                    <button
                        class="w-full px-4 py-2 text-white font-medium bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-600 rounded-lg duration-150">
                        Create account
                    </button>
                </form>

                <!-- Google Sign-Up Option -->
                <div class="mt-5">
                    <button
                        class="w-full flex items-center justify-center gap-x-3 py-2.5 mt-5 border rounded-lg text-sm font-medium hover:bg-gray-50 duration-150 active:bg-gray-100">
                        <img
                            src="https://raw.githubusercontent.com/sidiDev/remote-assets/7cd06bf1d8859c578c2efbfda2c68bd6bedc66d8/google-icon.svg"
                            alt="Google"
                            class="w-5 h-5" />
                        Continue with Google
                    </button>
                </div>
            </div>

            <!-- "Already have an account?" Moved to Bottom -->
            <div class="text-center">
                <p class="">
                    Already have an account?
                    <a href="login.php" class="font-medium text-indigo-600 hover:text-indigo-500">Log in</a>
                </p>
            </div>
        </div>
    </main>

    <?php
    require "./footer.php";
    ?>
</body>

</html>