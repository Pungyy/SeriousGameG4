<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prolent</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">

    <!-- Link of all ressources -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css"/>

    

</head>
<body>


    <nav class="bg-gray px-6 py-2 dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">

        <div class="flex flex-wrap justify-between items-center">

            <a href="/" class="flex items-center">
                <img src="assets/img/logo.png" class="mr-3 h-6 sm:h-10" alt="Prolent Logo" />
            </a>

            <div class="flex md:order-2">
                <a href="#escape">
                    <button type="button" class="play-btn text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Jouer</button>
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Ouvrir le menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>

            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class=" flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#competences" class="gradient-text block py-2 pr-4 pl-3 bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white text-2xl" aria-current="page">Compétences</a>
                    </li>
                    <li>
                        <a href="#team" class="gradient-text block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-2xl">L'équipe</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <section data-aos="fade-up">


        <div class="home-title">

            <h1 class="line1">Valider votre titre chef de projet</h1>
            <h1 class="gradient-text">en participant à notre Escape Game</h1>

        </div>

        <div class="img-chef">
            <img src="/assets/img/chef.png" alt="chef image">
        </div>

        <div class="line">
            <span class="rounded"></span>
        </div>

    </section>

    <section>

    <div class="competences" id="competences">


        <div class="left-competences-side" data-aos="fade-right">

            <div class="competences-title">
                <h1 class="gradient-text">Compétences Validées</h1>
            </div>

            <ul>
                <li>A remplir avec les compétences validées</li>
                <li>A remplir avec les compétences validées</li>
                <li>A remplir avec les compétences validées</li>
                <li>A remplir avec les compétences validées</li>
                <li>A remplir avec les compétences validées</li>
                <li>A remplir avec les compétences validées</li>
                <li>A remplir avec les compétences validées</li>
            </ul>

        </div>

        <div class="right-competences-side" data-aos="fade-left">
            <img src="assets/img/orga.png" alt="Image organisation">
        </div>

    </div>

    <div class="line">
        <span class="rounded"></span>
    </div>

    </section>

    <section class="card-section " id="team">

        <div class="card-section-title" data-aos="zoom-in">
            <h1 class="gradient-text card-div-title">L'équipe</h1>
        </div>
        
            <div class="container2">
            
                <div class="slider">
            
                    <div class="max-w-sm rounded-lg border border-gray-200 shadow-md card item" data-aos="flip-down">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/bryan.jfif" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bryan</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Graphiste | Game Designer</p>
                        </div>
                    </div>

                    <div class="max-w-sm rounded-lg border border-gray-200 shadow-md card item" data-aos="flip-up">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/mathis.jfif" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mathis</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Développeur Unity</p>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md card item" data-aos="flip-down">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/dorian.jfif" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dorian</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Développeur Unity</p>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md card item" data-aos="flip-up">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/ibra.jfif" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ibrahim</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Développeur Web</p>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md card item" data-aos="flip-down">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/maceo.jpg" alt="" style="width: 100%;"/>
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Macéo</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Modeleur 3D</p>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md card item" data-aos="flip-up">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/nathael.jfif" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nathaël</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Modeleur 3D</p>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md card item" data-aos="flip-down">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/img/david.jfif" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">David</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Développeur Unity</p>
                        </div>
                    </div>

                    

                </div>
            </div>
        

    </section>

    <div class="line">
        <span class="rounded"></span>
    </div>

    <section class="" id="escape">

    <div class="game-section-title">
        <h1 class="gradient-text card-div-title">L'Escape Game</h1>
    </div>

    <div class="module-border-wrap">
        <div class="module">
            <div class="loader loader--style3" title="2">
                <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="100px" height="100px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                    <path fill="#000" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                        <animateTransform attributeType="xml"
                        attributeName="transform"
                        type="rotate"
                        from="0 25 25"
                        to="360 25 25"
                        dur="0.6s"
                        repeatCount="indefinite"/>
                        </path>
                </svg>
            </div>
        </div>
    </div>
    </section>

    <div class="englob-dl-btn mb-4">
        <button class="text-white custom-btn btn-14 rounded dl-btn">Télécharger</button>
    </div>

    <footer class="p-4 bg-gray  rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
        <div class="sm:flex sm:items-center sm:justify-between small-footer">

            <div class="footer-logo">
                <a href="/" class="flex items-center mb-4 sm:mb-0">
                    <img src="assets/img/logo.png" class="mr-3 h-8" alt="Prolent Logo" />
                </a>
            </div>

            <div class="footer-proverbe" style="margin-left: 10%;">
                <h1 class="gradient-text prolent-text">Avec Prolent, Prouver votre Talent !</h1>
            </div>

            <div class="footer-copyright">
                <ul class="flex flex-wrap items-center text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline gradient-text text-2xl copyright-text">© Tous droit réservés</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>

<script src="assets/js/flowbite.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src="assets/js/animation.js" type="text/javascript"></script>
