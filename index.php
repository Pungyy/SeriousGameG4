<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Link of all ressources -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="assets/css/main.css"/>

    

</head>
<body>


    <nav class="bg-gray px-2 sm:px-4 py-2.5 dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">

        <div class="container flex flex-wrap justify-between items-center mx-auto">

            <a href="/" class="flex items-center">
                <img src="assets/img/logo.png" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo" />
            </a>

            <div class="flex md:order-2">
                <button type="button" class="play-btn text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Jouer</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>

            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class=" flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="gradient-text block py-2 pr-4 pl-3 bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Compétences</a>
                    </li>
                    <li>
                        <a href="#" class="gradient-text block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">L'équipe</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="/assets/img/nature.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/img/moutain.jfif" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/img/night.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <section>
        <div class="main-container">
            <div class="first-bloc">
                <div class="first-left-side">
                    <div class="first-image rounded"></div>
                </div>

                <div class="first-right-side">
                    <h1 class="first-bloc-title">
                        Lorem Ipsum
                    </h1>
                    <p class="first-bloc-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae totam magni accusamus corrupti quae sed nostrum obcaecati libero in magnam delectus, ipsum repellendus. Numquam aliquam tempora libero eligendi dolorum.
                        Quae quisquam nam voluptatem iste! Debitis doloremque ut sint numquam accusamus rerum, nisi molestias quia ex repellendus, temporibus laudantium officia harum voluptas minima aut unde praesentium accusantium magni natus? Accusamus.
                    </p>
                </div>
            </div>

            <div class="second-bloc">

                <div class="second-left-side">
                    <h1 class="second-bloc-title">
                        Lorem Ipsum
                    </h1>
                    <p class="second-bloc-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae totam magni accusamus corrupti quae sed nostrum obcaecati libero in magnam delectus, ipsum repellendus. Numquam aliquam tempora libero eligendi dolorum.
                        Quae quisquam nam voluptatem iste! Debitis doloremque ut sint numquam accusamus rerum, nisi molestias quia ex repellendus, temporibus laudantium officia harum voluptas minima aut unde praesentium accusantium magni natus? Accusamus.
                    </p>
                </div>

                <div class="second-right-side">
                    <div class="second-image rounded"></div>
                </div>

            </div>
        </div>
    </section>


    <section class="game rounded">
        <div class="play">
            <button class="text-white custom-btn btn-14 rounded">Play the game</button>
        </div>
    </section>

    <div class="englob-dl-btn mt-4">
        <button class="text-white custom-btn btn-14 rounded dl-btn">Download</button>
    </div>

</body>
</html>

<script src="assets/js/flowbite.js" type="text/javascript"></script>
<script src="assets/js/animation.js" type="text/javascript"></script>
    