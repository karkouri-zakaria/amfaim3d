<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./dist/styles.css" rel="stylesheet">
        <title>AMFAIM3D - Association Marocaine de Fabrication Additive et d'Impression 3D</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="./assets/images/logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <style>
            @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
            @keyframes float { 0%,100% { transform: translateY(0px);} 50% { transform: translateY(-10px);} }
        </style>
    </head>
    <!-- Desktop version -->
    <body class="font-oswald min-h-screen tracking-wide">
        <nav id="main-nav" class="w-full flex items-center justify-between px-4 py-2 md:px-8 bg-peach backdrop-blur-md border-b fixed top-0 z-50 transition-all duration-[280ms] ease-out [&.scrolled]:shadow-[0_8px_30px_rgba(0,0,0,0.08)] [&.scrolled]:backdrop-blur-md [&.nav-hidden]:-translate-y-[110%]">
            <div class="flex items-center gap-3 text-tarawera text-xl font-medium">
                <img src="./assets/images/logo.png" alt="AMFAIM3D Logo" class="inline h-10 w-10 transition-all duration-[280ms] ease-out [.scrolled_&]:h-9 [.scrolled_&]:w-9 logo-img" />
                <a href="#home">AMFAIM3D</a>
            </div>
            
            <!-- Desktop nav (hidden on small screens) -->
            <div id="desktop-menu" class="hidden md:block">
                <ul class="flex justify-evenly space-x-28   ">
                    <li><a href="#home" class="relative text-tarawera hover:text-[#2580a7] transition-colors duration-300 after:content-[''] after:absolute after:-bottom-[5px] after:left-0 after:w-0 after:h-[2px] after:bg-[#2580a7] after:transition-all after:duration-300 hover:after:w-full">Accueil</a></li>
                    <li><a href="#about" class="relative text-tarawera hover:text-[#2580a7] transition-colors duration-300 after:content-[''] after:absolute after:-bottom-[5px] after:left-0 after:w-0 after:h-[2px] after:bg-[#2580a7] after:transition-all after:duration-300 hover:after:w-full">À propos</a></li>
                    <li><a href="#events" class="relative text-tarawera hover:text-[#2580a7] transition-colors duration-300 after:content-[''] after:absolute after:-bottom-[5px] after:left-0 after:w-0 after:h-[2px] after:bg-[#2580a7] after:transition-all after:duration-300 hover:after:w-full">Événements</a></li>
                    <li><a href="#contact" class="relative text-tarawera hover:text-[#2580a7] transition-colors duration-300 after:content-[''] after:absolute after:-bottom-[5px] after:left-0 after:w-0 after:h-[2px] after:bg-[#2580a7] after:transition-all after:duration-300 hover:after:w-full">Contact</a></li>
                </ul>
            </div>
            
            <!-- CTA (hidden on extra-small screens to keep header compact) -->
            <div class="hidden lg:inline-block">
                <div class="text-white bg-fun px-4 py-2 rounded-lg hover:bg-blight hover:text-fun transition">
                    <a href="#contact">Rejoignez-nous</a>
                </div>
            </div>
            
            <!-- Mobile hamburger -->
            <button id="nav-toggle" class="md:hidden p-2.5 rounded-lg text-peach bg-transparent focus:outline-none z-[60]" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- hamburger (open) -->
                <svg class="icon-open h-7 w-7 [.menu-open_&]:hidden block text-tarawera" xmlns="http://www.w3.org/2000/svg tracking-wide" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- close (hidden by default, shown when menu open) -->
                <svg class="icon-close h-7 w-7 [.menu-open_&]:block hidden text-tarawera drop-shadow-md" xmlns="http://www.w3.org/2000/svg tracking-wide" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Mobile menu (Removed 'flex' from default classes) -->
            <div id="mobile-menu" class="hidden fixed inset-0 z-40 md:hidden flex-col items-center justify-center before:content-[''] before:absolute before:inset-0 before:bg-tarawera/90 before:backdrop-blur-lg before:-z-10 bg-transparent">
                <ul class="flex flex-col items-center space-y-1 text-center w-full px-12 py-3 relative z-50 bg-peach">
                    <li class="w-full transform transition-transform hover:scale-105"><a href="#home-mobile" class="text-xl py-3 block transition-colors duration-300 text-tarawera hover:text-black font-light tracking-wide border-b border-white/10">Accueil</a></li>
                    <li class="w-full transform transition-transform hover:scale-105"><a href="#about-mobile" class="text-xl py-3 block transition-colors duration-300 text-tarawera hover:text-black font-light tracking-wide border-b border-white/10">À propos</a></li>
                    <li class="w-full transform transition-transform hover:scale-105"><a href="#events-mobile" class="text-xl py-3 block transition-colors duration-300 text-tarawera hover:text-black font-light tracking-wide border-b border-white/10">Événements</a></li>
                    <li class="w-full transform transition-transform hover:scale-105"><a href="#contact-mobile" class="text-xl py-3 block transition-colors duration-300 text-tarawera hover:text-black font-light tracking-wide border-b border-white/10">Contact</a></li>
                    <li class="w-full pt-6 mx-4 transform transition-transform hover:scale-105"><a href="#contact-mobile" class="block text-lg w-full text-white bg-tarawera px-1 py-2 rounded-3xl hover:bg-black transition-all shadow-[0_0_20px_rgba(255,218,185,0.3)] tracking-wider">Rejoignez-nous</a></li>
                </ul>
            </div>
        </nav>










		<!-- Desktop version -->
        <main class="hidden lg:block">
            <header id="home" class="relative min-h-screen flex items-center justify-start px-8 md:px-72 mt-0 scroll-mt-[4.5rem]">
                <div class="absolute inset-0 z-0">
                    <img src="./assets/images/objectives/Vision.png" alt="Turkic Architecture" class="w-full h-full object-fit">
                    <div class="absolute inset-0 bg-black/70"></div>
                </div>
                <div class="relative text-peach pt-12 tracking-widest z-10 text-justify w-full">
                    <h1 class="text-8xl 2xl:text-9xl drop-shadow-2xl leading-tight mb-16 fade-in-up delay-200 tracking-normal">
                        L'Association Marocaine <br> de Fabrication Additive <br> et d'Impression 3D
                    </h1>
                    <p class="text-peach text-2xl mb-16 drop-shadow-lg fade-in-up delay-300">
                        AMFAIM3D est une association à vocation scientifique, à but non lucratif et apolitique.
                    </p>
                    <a href="#contact" class="inline-block px-8 py-3 bg-tarawera text-peach font-semibold rounded-lg hover:bg-blue-700 transition shadow-md">
                        Rejoignez-nous
                    </a>
                </div>
            </header>
            <section class="bg-[#b8d1e9] flex-col items-center justify-center min-h-screen flex">
                <!--first section: About TAA-->
                <div id="about" class="scroll-mt-[4.5rem] bg-peach w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl flex items-center">
                    <div class=" mx-auto">
                        <div class="grid grid-cols-3 gap-7 items-center text-back">
                            <!-- Top row: 1 text + 2 images -->
                            <div class="flex flex-col justify-center">
                                <h2 class="text-5xl md:text-6xl font-base mb-6 text-tarawera">Vision</h2>
                                <p class=" text-sm leading-relaxed mb-8 text-justify">
                                    Devenir la référence scientifique incontournable en Fabrication Additive et Impression 3D.
                                </p>
                            </div>
                            <div class="rounded-2xl overflow-hidden aspect-[4/3] w-full">
                                <img src="./assets/images/objectives/Objectifs.png" alt="Objectifs" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col justify-center">
                                <h2 class="text-5xl md:text-6xl font-base mb-6 text-tarawera">Mission</h2>
                                <p class=" text-sm leading-relaxed mb-8">
                                <ul class="text-sm text-gray-700 space-y-2 list-disc pl-4 text-justify">
                                    <li>Ancrer durablement les sciences de la fabrication additive et de l'impression 3D au niveau national.</li>
                                    <li>Contribuer activement au développement, à la vulgarisation et au rayonnement de cette discipline auprès du grand public et des professionnels.</li>
                                </ul>
                                </p>
                            </div>
                            <!-- Bottom row: 3 images -->
                            <div class="rounded-2xl overflow-hidden aspect-[4/3] w-full">
                                <img src="./assets/images/objectives/Vision.png" alt="Vision" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col justify-center ">
                                <h2 class="text-5xl md:text-6xl font-base mb-6 text-tarawera">Objectifs</h2>
                                <p class=" text-sm leading-relaxed mb-8">
                                <ul class="text-sm text-gray-700 space-y-2 list-disc pl-4 text-justify">
                                    <li>Connecter : Fédérer l’industrie, la recherche et l’enseignement autour de projets communs.</li>
                                    <li>Former & Informer : Être le pôle central d’accès aux connaissances et aux compétences du domaine de la fabrication additive et l'impression 3D.</li>
                                    <li>Accélérer : Faciliter le transfert de technologies vers le monde socio-économique.</li>
                                    <li>Animer : Organiser des événements de référence pour fédérer la communauté et valoriser l’innovation.</li>
                                </ul>
                                </p>
                            </div>
                            <div class="rounded-2xl overflow-hidden aspect-[4/3] w-full">
                                <img src="./assets/images/objectives/Mission.png" alt="Mission" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <!--second section: A Word of the Co-Presidents-->
                <div class="bg-peach w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl flex items-center">
                    <div class="mx-auto">
                        <h2 class="text-5xl md:text-6xl text-tarawera mt-8 mb-2">MOT DU PRÉSIDENT</h2>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <!-- Left: Text Content -->
                            <div class="space-y-6 text-justify">
                                <p class="text-gray-800 text-base leading-relaxed">
                                    La discipline de la fabrication additive et de l’impression 3D commence à bousculer le monde de la fabrication au point d’être qualifié par une nouvelle révolution industrielle.
                                </p>
                                <p class="text-gray-800 text-base leading-relaxed">
                                    Conscient de l’intérêt immense de cette discipline pour notre pays, un groupe de scientifique et d’industriels ont entrepris la création de L’Association Marocaine de Fabrication Additive et d’Impression 3D» (AMFAIM3D).
                                </p>
                                <p class="text-gray-800 text-base leading-relaxed">
                                    Deux mots d’ordre nous animent dans cette action : la maitrise de la discipline pour servir le monde socioéconomique national, et le rayonnement au niveau du grand public pour préparer les futurs acteurs de la discipline.
                                </p>
                                <p class="text-gray-800 text-base leading-relaxed">
                                    Et dans cet esprit d’ouverture aux autres disciplines scientifiques et de collaboration avec les acteurs nationaux et internationaux que nous entamons nos actions pour assurer notre mission et atteindre nos objectifs.
                                </p>
                            </div>
                            <!-- Right: Co-Presidents -->
                            <div class="flex lg:flex-col xl:flex-row justify-center gap-8">
                                <!-- President 1 -->
                                <div class="flex flex-col items-center">
                                    <div class="w-80 h-80 rounded-full overflow-hidden mb-4">
                                        <img src="./assets/images/staff/Zarbane.jpg" alt="Prof. Zarbane" class="w-full h-full object-contain">
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-800">Pr. Khalid Zarbane</h3>
                                    <h3 class="text-md text-gray-500">Président</h3>
                                </div>
                                <!-- President 2 -->
                                <div class="flex flex-col items-center">
                                    <div class="w-80 h-80 rounded-full overflow-hidden mb-4 ">
                                        <img src="./assets/images/staff/Beidouri.jpg" alt="Prof. Beidouri" class="w-full h-full object-contain">
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-800">Pr. Zitouni Beidouri</h3>
                                    <h3 class="text-md text-gray-500">Vice Président</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fourth section: They support us-->
                <div class="w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl my-8">
                    <div class="mx-auto">
                        <div class="flex flex-col md:flex-row items-center justify-evenly gap-8">
                            <!-- Left: Heading -->
                            <h2 class="text-5xl md:text-6xl text-tarawera whitespace-nowrap">Nos Partenaires</h2>
                            <!-- Right: Logos -->
                            <div class="flex items-center">
                                <img src="https://karkouri-zakaria.github.io/casicam/assets/images/partners/UH2C.svg" alt="Legalize Law Firm" class="h-28 object-contain">
                            </div>
                            <div class="flex items-center">
                                <img src="https://karkouri-zakaria.github.io/casicam/assets/images/partners/UH2C_CITT.svg" alt="Freshfields" class="h-28 object-contain">
                            </div>
                            <div class="flex items-center">
                                <img src="https://karkouri-zakaria.github.io/casicam/assets/images/partners/UH2C_EST.svg" alt="Paksoy" class="h-28 object-contain">
                            </div>
                        </div>
                    </div>
                </div>
                <!--third section: Latest News-->
                <div id="events" class="scroll-mt-[4.5rem] bg-[url('https://media.istockphoto.com/id/1225542662/vector/abstract-creative-background.jpg?s=612x612&w=0&k=20&c=k4xNFV_Rd1uH_VAcZcHA1mln-dCYK1cOueMsbhXAZhI=')] bg-cover bg-center bg-no-repeat w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl my-8 mx-auto">
                    <div class="mx-auto">
                        <h2 class="text-4xl md:text-6xl text-white text-center mb-10 tracking-tight"> News </h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                            <a href="https://www.casicam.com/" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col hover:shadow-lg transition-shadow">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/2027.png" alt="CASICAM" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h3 class="text-sm font-bold text-gray-800 mb-2 leading-tight">CASICAM 4th Ed | Avril 2027</h3>
                                        <p class="text-gray-700 text-[10px] leading-snug mb-3 flex-grow line-clamp-3">
                                            Organization of the fourth edition of CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING...
                                        </p>
                                        <p class="text-gray-400 text-[9px] text-right">June 24, 2025</p>
                                    </div>
                                </div>
                            </a>
                            <a href="./archive/casicam25.html" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/2025.png" alt="CASICAM" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h3 class="text-sm font-bold text-gray-800 mb-2 leading-tight">CASICAM 3rd Ed | Avril 2025</h3>
                                        <p class="text-gray-700 text-[10px] leading-snug mb-3 flex-grow line-clamp-3">
                                            Organization of the third edition of CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING...
                                        </p>
                                        <p class="text-gray-400 text-[9px] text-right">June 24, 2024</p>
                                    </div>
                                </div>
                            </a>
                            <a href="./archive/casicam22.html" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/2022.png" alt="CASICAM" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h3 class="text-sm font-bold text-gray-800 mb-2 leading-tight">CASICAM 2nd Ed | Nov 2022</h3>
                                        <p class="text-gray-700 text-[10px] leading-snug mb-3 flex-grow line-clamp-3">
                                            Great pleasure to announce the organization of the second edition of CASICAM in Morocco...
                                        </p>
                                        <p class="text-gray-400 text-[9px] text-right">June 10, 2022</p>
                                    </div>
                                </div>
                            </a>
                            <a href="./archive/mw3dp19.html" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/MW3D-2019.png" alt="MW3DP" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4 flex flex-col flex-grow">
                                        <h3 class="text-sm font-bold text-gray-800 mb-2 leading-tight">MW3DP’19 Workshop</h3>
                                        <p class="text-gray-700 text-[10px] leading-snug mb-3 flex-grow line-clamp-3">
                                            Couvre le domaine de l’impression 3D et les technologies associées. Objectif de cerner la recherche...
                                        </p>
                                        <p class="text-gray-400 text-[9px] text-right">June 3, 2019</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <button class="px-6 py-2 bg-tarawera text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition shadow-md">
                            Voir Plus
                            </button>
                        </div>
                    </div>
                </div>
                <!--Members-->
                <div class="bg-peach w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl my-8 mx-auto">
                    <div class="mx-auto">
                        <h2 class="text-4xl md:text-6xl text-tarawera text-center mb-10 tracking-tight"> Nos memebres </h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6   gap-4 mb-4">
                            <div class="bg-white w-52 rounded-2xl overflow-hidden shadow-lg flex flex-col hover:shadow-xl transition-shadow border border-gray-100">
                                <div class="aspect-square w-full overflow-hidden">
                                    <img src="./assets/images/staff/Kiass.jpg" alt="Elmehdi Kiass   " class="w-full h-full object-cover">
                                </div>
                                <div class="p-5 flex flex-col items-center text-center">
                                    <h3 class="text-md font-bold text-tarawera leading-tight">M. Elmehdi Kiass</h3>
                                    <span class="text-blue-600 font-medium text-xs mb-3">Secrétaire général</span>                          
                                </div>
                            </div>
                            <div class="bg-white w-52 rounded-2xl overflow-hidden shadow-lg flex flex-col hover:shadow-xl transition-shadow border border-gray-100">
                                <div class="aspect-square w-full overflow-hidden bg-white">
                                    <img src="./assets/images/staff/Abdeddine.jpg" alt="M. El Mehdi Abdeddine" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5 flex flex-col items-center text-center">
                                    <h3 class="text-md font-bold text-tarawera leading-tight">Dr. El Mehdi Abdeddine</h3>
                                    <span class="text-blue-600 font-medium text-xs mb-3">Trésorier</span>                           
                                </div>
                            </div>
                            <div class="bg-white w-52 rounded-2xl overflow-hidden shadow-lg flex flex-col hover:shadow-xl transition-shadow border border-gray-100">
                                <div class="aspect-square w-full overflow-hidden bg-white">
                                    <img src="./assets/images/staff/Eloumami.jpg" alt="Pr. Mohamed Eloumami" class="w-full h-full object-cover">
                                </div>
                                <div class="p-5 flex flex-col items-center text-center">
                                    <h3 class="text-md font-bold text-tarawera leading-tight">Pr. Mohamed Eloumami</h3>
                                    <span class="text-blue-600 font-medium text-xs mb-3">conseiller</span>                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fifth section: Become a Member-->
                <div id="contact" class="scroll-mt-[4.5rem] bg-peach w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl my-8">
                    <div class="mx-auto">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <!-- Left: Form -->
                            <div>
                                <h2 class="text-5xl md:text-6xl text-tarawera mb-4">Contactez-nous: </h2>
                                <p class="text-gray-700 mb-8">Envoyez-nous un message, nous vous répondrons dans les plus brefs délais.</p>
                                <form class="space-y-4">
                                    <!-- Name -->
                                    <input type="text" placeholder="Nom" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                    <!-- Email -->
                                    <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                    <!-- Country -->
                                    <input type="text" placeholder="Pays" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                    <!-- Message -->
                                    <textarea placeholder="Message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white resize-none"></textarea>
                                    <!-- Consent Checkbox -->
                                    <div class="flex items-start gap-3">
                                        <input type="checkbox" id="consent" class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="consent" class="text-sm text-gray-700"> Je comprends que mes données seront traitées conformément à la Politique de Confidentialité.</label>
                                    </div>
                                    <!-- Submit Button -->
                                    <button type="submit" class="px-4 py-2 bg-tarawera text-peach text-xl rounded-lg hover:bg-blue-700 transition shadow-md">
                                    Envoyer
                                    </button>
                                </form>
                            </div>
                            <!-- Right: Image -->
                            <div class="overflow-hidden">
                                <img src="./assets/images/logo.png" alt="Traditional Turkic Architecture" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

























		<!-- Mobile version -->
        <main class="block lg:hidden">
            <header id="home-mobile" class="relative min-h-screen flex items-center justify-between lg:justify-start px-4 sm:px-8 lg:px-72 mt-0 scroll-mt-[4.5rem]">
                <div class="absolute inset-0 z-0">
                    <img src="./assets/images/objectives/Vision.png" alt="Event photo" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/70"></div>
                </div>
                <div class="relative text-peach pt-12 tracking-widest z-10 max-w-5xl flex flex-col items-center lg:items-start text-center lg:text-left w-full">
                    <h1 class="text-5xl drop-shadow-2xl leading-tight mb-32 px-4 animate-[fadeInUp_0.8s_ease-out_forwards] opacity-0 [animation-delay:200ms] tracking-widest">
                        L'Association Marocaine <br> de Fabrication Additive <br class="hidden lg:block"> et d'Impression 3D
                    </h1>
                    <p class="text-peach text-xl mb-10 drop-shadow-lg animate-[fadeInUp_0.8s_ease-out_forwards] opacity-0 [animation-delay:300ms]">
                        AMFAIM3D est une association à vocation scientifique,<br class="hidden lg:block"> à but non lucratif et apolitique.
                    </p>
                    <a href="#contact-mobile" class="px-6 py-3 lg:px-8 lg:py-3 bg-tarawera text-peach font-semibold rounded-lg hover:bg-blue-700 transition shadow-md">
                    Rejoignez-nous
                    </a>
                </div>
            </header>
            <section id="about-mobile" class="bg-[#b8d1e9] flex flex-col items-center justify-center py-12 px-4 sm:px-6 scroll-mt-[4.5rem]">
                <!--first section: About TAA-->
                <div class="bg-peach w-full max-w-6xl py-6 px-4 mt-14 sm:px-6 md:px-8 rounded-3xl">
                    <div class="mx-auto">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 items-center text-back">
                            <!-- Top row: 1 text + 2 images -->
                            <div class="flex flex-col justify-center pt-4 sm:px-0">
                                <h2 class="text-4xl sm:text-3xl md:text-5xl font-base mb-4 sm:mb-6 text-tarawera text-center sm:text-left">Vision</h2>
                                <p class="text-sm md:text-base leading-relaxed mb-6 text-justify">
                                    Avoir une assise scientifique solide et large de la Fabrication Additive et d’Impression 3D.
                                </p>
                            </div>
                            <div class="overflow-hidden w-full mx-auto rounded-2xl">
                                <img src="./assets/images/objectives/Objectifs.png" alt="Objectifs" class="w-full h-40 sm:h-48 md:h-64 lg:h-80 object-cover">
                            </div>
                            <div class="flex flex-col justify-center pt-4 sm:px-0">
                                <h2 class="text-4xl sm:text-3xl md:text-5xl font-base mb-4 sm:mb-6 text-tarawera text-center">Mission</h2>
                                <div class="text-sm md:text-base leading-relaxed mb-6 text-justify">
                                    <ul class="text-sm text-gray-700 space-y-2 list-disc pl-4">
                                        <li>Ancrer durablement les sciences de la fabrication additive et de l'impression 3D au niveau national.</li>
                                        <li>Contribuer activement au développement, à la vulgarisation et au rayonnement de cette discipline auprès du grand public et des professionnels.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Bottom row: 3 images / content flows responsively -->
                            <div class="overflow-hidden w-full mx-auto rounded-2xl">
                                <img src="./assets/images/objectives/Vision.png" alt="Vision" class="w-full h-40 sm:h-48 md:h-64 lg:h-80 object-cover">
                            </div>
                            <div class="flex flex-col justify-center pt-4 sm:px-0">
                                <h2 class="text-4xl sm:text-3xl md:text-5xl font-base mb-4 sm:mb-6 text-tarawera text-center">Objectifs</h2>
                                <div class="text-sm md:text-base leading-relaxed mb-6 text-justify">
                                    <ul class="text-sm text-gray-700 space-y-2 list-disc pl-4">
                                        <li>Connecter : Fédérer l’industrie, la recherche et l’enseignement autour de projets communs.</li>
                                        <li>Former & Informer : Être le pôle central d’accès aux connaissances et aux compétences du domaine de la fabrication additive et l'impression 3D.</li>
                                        <li>Accélérer : Faciliter le transfert de technologies vers le monde socio-économique.</li>
                                        <li>Animer : Organiser des événements de référence pour fédérer la communauté et valoriser l’innovation.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overflow-hidden w-full mx-auto rounded-2xl">
                                <img src="./assets/images/objectives/Mission.png" alt="Mission" class="w-full h-40 sm:h-48 md:h-64 lg:h-80 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <!--second section: A Word of the Co-Presidents-->
                <div class="bg-peach w-full sm:w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl my-6">
                    <div class="mx-auto">
                        <h2 class="text-3xl sm:text-5xl md:text-6xl text-tarawera mt-4 mb-4 text-center">MOT DU PRÉSIDENT</h2>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <!-- Right: Co-Presidents -->
                            <div class="flex flex-row justify-center items-center gap-6 sm:gap-8">
                                <!-- President 1 -->
                                <div class="flex flex-col items-center">
                                    <div class="w-40 h-40 sm:w-56 sm:h-56 md:w-80 md:h-80 rounded-full overflow-hidden mb-3 mx-auto">
                                        <img src="./assets/images/staff/Zarbane.jpg" alt="Prof. Zarbane" class="w-full h-full object-contain lg:object-cover">
                                    </div>
                                    <h3 class="text-md sm:text-lg font-semibold text-gray-800 text-center">Pr. Khalid Zarbane</h3>
                                    <h3 class="text-sm text-gray-500 text-center">Président</h3>
                                </div>
                                <!-- President 2 -->
                                <div class="flex flex-col items-center">
                                    <div class="w-40 h-40 sm:w-56 sm:h-56 md:w-80 md:h-80 rounded-full overflow-hidden mb-3 mx-auto">
                                        <img src="./assets/images/staff/Beidouri.jpg" alt="Prof. Beidouri" class="w-full h-full object-contain lg:object-cover">
                                    </div>
                                    <h3 class="text-md sm:text-lg font-semibold text-gray-800 text-center">Pr. Zitouni Beidouri</h3>
                                    <h3 class="text-sm text-gray-500 text-center">Vice Président</h3>
                                </div>
                            </div>
                            <!-- Left: Text Content -->
                            <div class="space-y-4 text-justify">
                                <p class="text-gray-800 text-xs sm:text-base leading-relaxed text-left">
                                    La discipline de la fabrication additive et de l’impression 3D commence à bousculer le monde de la fabrication au point d’être qualifié par une nouvelle révolution industrielle.
                                </p>
                                <p class="text-gray-800 text-xs sm:text-base leading-relaxed text-left">
                                    Conscient de l’intérêt immense de cette discipline pour notre pays, un groupe de scientifique et d’industriels ont entrepris la création de L’Association Marocaine de Fabrication Additive et d’Impression 3D» (AMFAIM3D).
                                </p>
                                <p class="text-gray-800 text-xs sm:text-base leading-relaxed text-left">
                                    Deux mots d’ordre nous animent dans cette action : la maitrise de la discipline pour servir le monde socioéconomique national, et le rayonnement au niveau du grand public pour préparer les futurs acteurs de la discipline.
                                </p>
                                <p class="text-gray-800 text-xs sm:text-base leading-relaxed text-left">
                                    Et dans cet esprit d’ouverture aux autres disciplines scientifiques et de collaboration avec les acteurs nationaux et internationaux que nous entamons nos actions pour assurer notre mission et atteindre nos objectifs.
                                </p>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!--fourth section: They support us-->
                <div class="bg-peach w-full sm:w-4/5 py-10 px-4 mt-14 md:px-8 rounded-3xl my-8 mx-auto shadow-sm">
                <div class="mx-auto">
                    <h2 class="text-3xl sm:text-4xl md:text-6xl text-tarawera text-center mb-8 tracking-tight">Nos Partenaires</h2>
                    <div class="flex flex-wrap items-center justify-center gap-6 md:gap-12">
                        <div class="bg-white p-4 sm:p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex items-center justify-center h-28 w-40 sm:h-36 sm:w-52">
                            <img src="https://karkouri-zakaria.github.io/casicam/assets/images/partners/UH2C.svg" alt="UH2C" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-500">
                        </div>
                        <div class="bg-white p-4 sm:p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex items-center justify-center h-28 w-40 sm:h-36 sm:w-52">
                            <img src="https://karkouri-zakaria.github.io/casicam/assets/images/partners/UH2C_CITT.svg" alt="UH2C CITT" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-500">
                        </div>
                        <div class="bg-white p-4 sm:p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex items-center justify-center h-28 w-40 sm:h-36 sm:w-52">
                            <img src="https://karkouri-zakaria.github.io/casicam/assets/images/partners/UH2C_EST.svg" alt="UH2C EST" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-500">
                        </div>
                    </div>
                </div>
                <!--third section: Latest News-->
                <div id="events-mobile" class="scroll-mt-[4.5rem] bg-[url('https://media.istockphoto.com/id/1225542662/vector/abstract-creative-background.jpg?s=612x612&w=0&k=20&c=k4xNFV_Rd1uH_VAcZcHA1mln-dCYK1cOueMsbhXAZhI=')] bg-cover bg-center bg-no-repeat w-full sm:w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl my-8 mx-auto">
                    <div class="mx-auto">
                        <h2 class="text-3xl sm:text-4xl md:text-6xl text-white text-center mb-8 tracking-tight">News</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-4 mb-8">
                            <a href="https://www.casicam.com/" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col hover:shadow-lg transition-shadow">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/2027.png" alt="CASICAM" class="w-fit lg:w-full lg:h-full object-cover">
                                    </div>
                                    <div class="p-1 flex flex-col flex-grow">
                                        <h3 class="text-base md:text-sm font-bold text-gray-800 mb-2 leading-tight">CASICAM 4th Ed | Avril 2027</h3>
                                        <p class="text-gray-700 text-sm leading-snug mb-3 flex-grow line-clamp-3">
                                            Organization of the fourth edition of CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING...
                                        </p>
                                        <p class="text-gray-400 text-xs text-right">June 24, 2025</p>
                                    </div>
                                </div>
                            </a>
                            <a href="./archive/casicam25.html" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col hover:shadow-lg transition">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/2025.png" 
                                            alt="CASICAM" 
                                            class="w-fit lg:w-full lg:h-full object-cover">
                                    </div>

                                    <div class="p-1 flex flex-col flex-grow">
                                        <h3 class="text-base md:text-sm font-bold text-gray-800 mb-2 leading-tight">
                                            CASICAM 3rd Ed | Avril 2025
                                        </h3>

                                        <p class="text-gray-700 text-sm leading-snug mb-3 flex-grow line-clamp-3">
                                            Organization of the third edition of CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING...
                                        </p>

                                        <p class="text-gray-400 text-xs text-right">
                                            June 24, 2024
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="./archive/casicam22.html" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/2022.png" alt="CASICAM" class="w-fit lg:w-full lg:h-full object-cover">
                                    </div>
                                    <div class="p-1 flex flex-col flex-grow">
                                        <h3 class="text-base md:text-sm font-bold text-gray-800 mb-2 leading-tight">CASICAM 2nd Ed | Nov 2022</h3>
                                        <p class="text-gray-700 text-sm leading-snug mb-3 flex-grow line-clamp-3">
                                            Great pleasure to announce the organization of the second edition of CASICAM in Morocco...
                                        </p>
                                        <p class="text-gray-400 text-xs text-right">June 10, 2022</p>
                                    </div>
                                </div>
                            </a>
                            <a href="./archive/mw3dp19.html" class="block">
                                <div class="bg-white rounded-xl overflow-hidden shadow-md flex flex-col">
                                    <div class="h-32 overflow-hidden">
                                        <img src="assets/images/events/MW3D-2019.png" alt="MW3DP" class="w-fit lg:w-full lg:h-full object-cover">
                                    </div>
                                    <div class="p-1 flex flex-col flex-grow">
                                        <h3 class="text-base md:text-sm font-bold text-gray-800 mb-2 leading-tight">MW3DP’19 Workshop</h3>
                                        <p class="text-gray-700 text-sm leading-snug mb-3 flex-grow line-clamp-3">
                                            Couvre le domaine de l’impression 3D et les technologies associées. Objectif de cerner la recherche...
                                        </p>
                                        <p class="text-gray-400 text-xs text-right">June 3, 2019</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center">
                            <button class="px-6 py-2 bg-tarawera text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition shadow-md">
                            Voir Plus
                            </button>
                        </div>
                    </div>
                </div>
                <!--Members-->
                <div class="bg-peach w-full sm:w-4/5 py-6 px-4 mt-14 md:px-8 rounded-3xl my-8 mx-auto">
                    <div class="mx-auto">
                        <h2 class="text-3xl sm:text-4xl md:text-6xl text-tarawera text-center mb-6 tracking-tight">Nos membres</h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4 mb-4">
                            <div class="bg-white h-48 rounded-xl sm:rounded-2xl overflow-hidden shadow-md sm:shadow-lg flex flex-col hover:shadow-xl transition-shadow border border-gray-100 w-full max-w-xs mx-auto">
                                <div class="aspect-[4/3] w-full overflow-hidden h-3/4 ">
                                    <img src="./assets/images/staff/Kiass.jpg" alt="Elmehdi Kiass" class="w-full h-full object-cover">
                                </div>
                                <div class="p-3 sm:p-5 flex flex-col items-center text-center h-1/4">
                                    <h3 class="text-[13px] sm:text-base font-bold text-tarawera leading-tight mb-0 sm:mb-0">M. Elmehdi Kiass</h3>
                                    <span class="text-blue-600 font-medium text-[11px] sm:text-xs mb-0 sm:mb-2">Secrétaire général</span>                          
                                </div>
                            </div>
                            <div class="bg-white h-48 rounded-xl sm:rounded-2xl overflow-hidden shadow-md sm:shadow-lg flex flex-col hover:shadow-xl transition-shadow border border-gray-100 w-full max-w-xs mx-auto">
                                <div class="aspect-[4/3] w-full overflow-hidden bg-white h-3/4">
                                    <img src="./assets/images/staff/Abdeddine.jpg" alt="M. El Mehdi Abdeddine" class="w-full h-full object-cover">
                                </div>
                                <div class="p-3 sm:p-5 flex flex-col items-center text-center h-1/4">
                                    <h3 class="text-[13px] sm:text-base font-bold text-tarawera leading-tight mb-1 sm:mb-0">Dr. El Mehdi Abdeddine</h3>
                                    <span class="text-blue-600 font-medium text-[11px] sm:text-xs mb-1 sm:mb-2">Trésorier</span>                           
                                </div>
                            </div>
                            <div class="bg-white h-48 rounded-xl sm:rounded-2xl overflow-hidden shadow-md sm:shadow-lg flex flex-col hover:shadow-xl transition-shadow border border-gray-100 w-full max-w-xs mx-auto">
                                <div class="aspect-[4/3] w-full overflow-hidden bg-white h-3/4">
                                    <img src="./assets/images/staff/Eloumami.jpg" alt="Pr. Mohamed Eloumami" class="w-full h-full object-cover">
                                </div>
                                <div class="p-3 sm:p-5 flex flex-col items-center text-center h-1/4">
                                    <h3 class="text-[13px] sm:text-base font-bold text-tarawera leading-tight mb-1 sm:mb-0">Pr. Mohamed Eloumami</h3>
                                    <span class="text-blue-600 font-medium text-[11px] sm:text-xs mb-1 sm:mb-2">Trésorier</span>                           
                                </div>
                            </div>
                            <div class="bg-white h-48 rounded-xl sm:rounded-2xl overflow-hidden shadow-md sm:shadow-lg flex flex-col hover:shadow-xl transition-shadow border border-gray-100 w-full max-w-xs mx-auto">
                                <div class="aspect-[4/3] w-full overflow-hidden bg-white h-3/4">
                                    <img src="./assets/images/staff/Berrada.jpg" alt="M. Rachid Berrada" class="w-full h-full object-cover">
                                </div>
                                <div class="p-3 sm:p-5 flex flex-col items-center text-center h-1/4">
                                    <h3 class="text-[13px] sm:text-base font-bold text-tarawera leading-tight mb-1 sm:mb-0">M. Rachid Berrada</h3>
                                    <span class="text-blue-600 font-medium text-[11px] sm:text-xs mb-1 sm:mb-2">Trésorier</span>                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fifth section: Become a Member-->
                <div id="contact-mobile" class="scroll-mt-[4.5rem] bg-peach w-full sm:w-4/5 pt-6 px-4 mt-4 md:px-8 rounded-3xl my-2 mx-auto">
                    <div class="mx-auto">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <!-- Left: Form -->
                            <div>
                                <h2 class="text-5xl md:text-6xl text-tarawera mb-4">Contactez-nous: </h2>
                                <p class="text-gray-700 mb-8">Envoyez-nous un message, nous vous répondrons dans les plus brefs délais.</p>
                                <form class="space-y-4">
                                    <!-- Name -->
                                    <input type="text" placeholder="Nom" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                    <!-- Email -->
                                    <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                    <!-- Country -->
                                    <input type="text" placeholder="Pays" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                                    <!-- Message -->
                                    <textarea placeholder="Message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white resize-none"></textarea>
                                    <!-- Consent Checkbox -->
                                    <div class="flex items-start gap-3">
                                        <input type="checkbox" id="consent" class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="consent" class="text-sm text-gray-700"> Je comprends que mes données seront traitées conformément à la Politique de Confidentialité.</label>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="flex justify-center pt-12">
										<button type="submit" class="px-4 py-2 bg-tarawera text-peach text-xl rounded-lg hover:bg-blue-700 transition shadow-md">
                                    		Envoyer
                                    	</button>
									</div>
                                </form>
                            </div>
                            <!-- Right: Image -->
                            <div class="overflow-hidden hidden lg:block">
                                <img src="./assets/images/logo.png" alt="Logo" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>





        <footer class="bg-peach pb-3 w-full">
            <div class="mx-auto px-4 sm:px-6 md:px-12 lg:px-20 xl:px-60">
                <!-- Top row -->
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="./assets/images/logo.png" alt="Logo" class="h-20 w-20 object-contain">
                    </div>
                    <!-- Middle nav -->
                    <nav class="hidden md:flex items-center gap-10 text-gray-800">
                        <a href="#news" class="hover:text-tarawera transition">News</a>
                        <a href="#members" class="hover:text-tarawera transition">Memberes</a>
                        <a href="#events" class="hover:text-tarawera transition">Partenaires</a>
                    </nav>
                    <!-- Social icons -->
                    <div class="flex items-center gap-4">
                        <a aria-label="Facebook" href="#" class="text-tarawera hover:opacity-80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.988H7.898V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.242 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a aria-label="LinkedIn" href="#" class="text-tarawera hover:opacity-80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.447-2.136 2.943v5.663H9.351V9h3.414v1.561h.049c.476-.9 1.637-1.852 3.37-1.852 3.603 0 4.268 2.371 4.268 5.455v6.288zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.114 20.452H3.558V9h3.556v11.452z"/>
                            </svg>
                        </a>
                        <a aria-label="Email" href="#" class="text-tarawera hover:opacity-80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.236-8 5.333-8-5.333V6l8 5.333L20 6v2.236z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Divider -->
                <div class="mt-1 border-t border-gray-700"></div>
                <!-- Bottom row -->
                <div class="my-3 flex flex-col md:flex-row items-center justify-center gap-4 text-gray-800">
                    <p class="text-sm">© 2026 AMFAIM3D Association. All rights reserved.</p>
                    <div class="flex items-center gap-6 text-sm">
                        <a href="#" class="hover:text-tarawera transition">Privacy Policy</a>
                        <a href="#" class="hover:text-tarawera transition">Terms of Service</a>
                        <a href="#" class="hover:text-tarawera transition">Cookies Settings</a>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', function(){
            	var btn = document.getElementById('nav-toggle');
            	var menu = document.getElementById('mobile-menu');
            	var nav = document.getElementById('main-nav');
            	if(btn && menu){
            		btn.addEventListener('click', function(e){
            			var expanded = btn.getAttribute('aria-expanded') === 'true';
            			btn.setAttribute('aria-expanded', String(!expanded));
            			// toggle nav state and menu visibility
            			var open = nav.classList.toggle('menu-open');
            			if(open) menu.classList.remove('hidden'); else menu.classList.add('hidden');
            			e.stopPropagation();
            		});
            
            		// close mobile menu when an in-page link is clicked
            		var internalLinks = menu.querySelectorAll('a[href^="#"]');
            		internalLinks.forEach(function(link){
            			link.addEventListener('click', function(){
            				menu.classList.add('hidden');
            				btn.setAttribute('aria-expanded', 'false');
            				// ensure nav is visible and close overlay
            				nav && nav.classList.remove('nav-hidden');
            				nav && nav.classList.remove('menu-open');
            			});
            		});
            		// close menu when clicking outside
            		document.addEventListener('click', function(e){
            			if(!menu.classList.contains('hidden') && !menu.contains(e.target) && !btn.contains(e.target)){
            				menu.classList.add('hidden');
            				btn.setAttribute('aria-expanded', 'false');
            				nav && nav.classList.remove('menu-open');
            			}
            		});
            	}
            
            	// Scroll behavior: shrink on scroll and hide on scroll-down
            	if(nav){
            		var lastScroll = 0;
            		var ticking = false;
            		window.addEventListener('scroll', function(){
            			var current = window.scrollY || window.pageYOffset;
            			if(!ticking){
            				window.requestAnimationFrame(function(){
            					if(current > 20) nav.classList.add('scrolled'); else nav.classList.remove('scrolled');
            					if(current > lastScroll && current > 100){
            						nav.classList.add('nav-hidden');
            					} else {
            						nav.classList.remove('nav-hidden');
            					}
            					lastScroll = current <= 0 ? 0 : current;
            					ticking = false;
            				});
            				ticking = true;
            			}
            		}, {passive:true});
            	}
            });
        </script>
    </body>
</html>