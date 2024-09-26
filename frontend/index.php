<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Center for Linguistics</title>
</head>

<body>
    <div x-data="{ open: false }">
        <div class="bg-gray-900">
            <header>
                <nav
                    x-bind:class="{ 'pb-5 md:text-sm absolute z-20 top-0 inset-x-0 bg-gray-800 rounded-xl mx-2 mt-2 md:mx-0 md:mt-0 md:relative md:bg-transparent': open, '' : !open }">
                    <div
                        class="gap-x-14 items-center max-w-screen-xl mx-auto px-4 md:flex md:px-8">
                        <div class="flex items-center justify-between py-5 md:block">
                            <a href="index.php">
                                <img
                                    src="https://www.floatui.com/logo-dark.svg"
                                    width="120"
                                    height="50"
                                    alt="Float UI logo" />
                            </a>
                            <div class="md:hidden">
                                <button
                                    class="menu-btn text-gray-400 hover:text-gray-300"
                                    x-on:click="open = !open">
                                    <template x-if="open">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6"
                                            viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </template>
                                    <template x-if="!open">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-6 h-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                        </svg>
                                    </template>
                                </button>
                            </div>
                        </div>
                        <div
                            x-bind:class="{ 'block' : open, 'hidden' : !open }"
                            class="flex-1 items-center mt-8 md:mt-0 md:flex">
                            <ul
                                class="flex-1 justify-end items-center space-y-6 md:flex md:space-x-6 md:space-y-0">
                                <li class="text-gray-300 hover:text-gray-400">
                                    <a href="javascript:void(0)" class="block">Features</a>
                                </li>
                                <li class="text-gray-300 hover:text-gray-400">
                                    <a href="javascript:void(0)" class="block">Integrations</a>
                                </li>
                                <li class="text-gray-300 hover:text-gray-400">
                                    <a href="javascript:void(0)" class="block">Customers</a>
                                </li>
                                <li class="text-gray-300 hover:text-gray-400">
                                    <a href="javascript:void(0)" class="block">Pricing</a>
                                </li>
                                <li>
                                    <a
                                        href="signup.php" 
                                        class="flex items-center justify-center gap-x-1 py-2 px-4 text-white font-medium bg-sky-500 hover:bg-sky-400 active:bg-sky-600 duration-150 rounded-full md:inline-flex">
                                        Get started
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            class="w-5 h-5">
                                            <path
                                                fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <section class="relative">
                <div class="relative z-10 max-w-screen-xl mx-auto px-4 py-28 md:px-8">
                    <div class="space-y-5 max-w-4xl mx-auto text-center">
                        <h2
                            class="text-4xl text-white font-extrabold mx-auto md:text-5xl">
                            Build and scale up your startup with the best tools
                        </h2>
                        <p class="max-w-2xl mx-auto text-gray-400">
                            Sed ut perspiciatis unde omnis iste natus voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                        </p>
                        <form
                            x-on:submit.prevent
                            class="justify-center items-center gap-x-3 sm:flex">
                            <input
                                type="text"
                                placeholder="Enter your email"
                                class="w-full px-3 py-2.5 text-gray-400 bg-gray-700 focus:bg-gray-900 duration-150 outline-none rounded-lg shadow sm:max-w-sm sm:w-auto" />
                            <button
                                class="flex items-center justify-center gap-x-2 py-2.5 px-4 mt-3 w-full text-sm text-white font-medium bg-sky-500 hover:bg-sky-400 active:bg-sky-600 duration-150 rounded-lg sm:mt-0 sm:w-auto">
                                Get started
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        fill-rule="evenodd"
                                        d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                        <div
                            class="flex justify-center items-center gap-x-4 text-gray-400 text-sm">
                            <div class="flex">
                                <svg
                                    class="w-5 h-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" />
                                </svg>
                                <svg
                                    class="w-5 h-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" />
                                </svg>
                                <svg
                                    class="w-5 h-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" />
                                </svg>
                                <svg
                                    class="w-5 h-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" />
                                </svg>
                            </div>
                            <p><span class="text-gray-100">5.0</span> by over 200 users</p>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute inset-0 m-auto max-w-xs h-[357px] blur-[118px] sm:max-w-md md:max-w-lg"
                    style="
          background: linear-gradient(
            106.89deg,
            rgba(192, 132, 252, 0.11) 15.73%,
            rgba(14, 165, 233, 0.41) 15.74%,
            rgba(232, 121, 249, 0.26) 56.49%,
            rgba(79, 70, 229, 0.4) 115.91%
          );
        "></div>
            </section>
        </div>
    </div>
</body>

</html>