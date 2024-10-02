<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
</head>

<html>
<?php
session_start();
$isSignedIn = isset($_SESSION['user_id']);
$userProfileImage = $isSignedIn ? $_SESSION['profile_pic'] : null;
?>

<!-- HTML + Tailwind CSS Code for Responsive Navbar -->
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left section (Logo) -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/">
                    <img src="your-logo-url.png" alt="Logo" class="h-8 w-auto">
                </a>
            </div>

            <!-- Hamburger Menu Button for Mobile -->
            <div class="flex items-center sm:hidden">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                    <svg class="h-6 w-6" id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg class="hidden h-6 w-6" id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Right side items (Desktop) -->
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8 mt-3">
                <a href="./index.php" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                <a href="./courses.php" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Courses</a>
                <!-- <a href="./leaderboard.php" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Leaderboard</a> -->
                <a href="./contact.php" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Contact Us</a>
            </div>

            <div class="hidden sm:flex items-center">
                <?php if (!$isSignedIn): ?>
                    <a href="./signup.php" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-md text-sm font-medium">Get Started</a>
                <?php else: ?>
                    <a href="/lms-dashboard.php" class="flex items-center">
                        <img src="<?php echo $userProfileImage ? $userProfileImage : 'default-avatar.png'; ?>" alt="Profile" class="h-8 w-8 rounded-full">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="sm:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="text-gray-500 hover:text-gray-700 block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="/courses.php" class="text-gray-500 hover:text-gray-700 block px-3 py-2 rounded-md text-base font-medium">Courses</a>
            <!-- <a href="/leaderboard.php" class="text-gray-500 hover:text-gray-700 block px-3 py-2 rounded-md text-base font-medium">Leaderboard</a> -->
            <a href="/contact.php" class="text-gray-500 hover:text-gray-700 block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>

            <!-- Mobile Get Started or Profile -->
            <?php if (!$isSignedIn): ?>
                <a href="/get-started.php" class="text-white bg-blue-600 hover:bg-blue-700 block text-center px-4 py-2 rounded-md text-base font-medium">Get Started</a>
            <?php else: ?>
                <a href="/lms-dashboard.php" class="flex items-center justify-center">
                    <img src="<?php echo $userProfileImage ? $userProfileImage : 'default-avatar.png'; ?>" alt="Profile" class="h-8 w-8 rounded-full">
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- JavaScript for Toggle Menu -->
<script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    menuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        hamburgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>


</html>