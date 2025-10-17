<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="./dist/styles.css" rel="stylesheet">
		<title>AMFAIM3D - Association Marocaine de Fabrication Additive et d'Impression 3D</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="./assets/images/logo.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
		<style>
			.glass {
			background: rgba(200, 220, 217, 0.15);
			backdrop-filter: blur(10px);
			border: 1px solid rgba(37, 128, 167, 0.1);
			}
			/* Smooth gradient animation */
			@keyframes gradient {
			0% { background-position: 0% 50%; }
			50% { background-position: 100% 50%; }
			100% { background-position: 0% 50%; }
			}
			.gradient-animate {
			background: linear-gradient(45deg, #ffffff, #c8dcd9, #ffffff, #f0f7f6);
			background-size: 400% 400%;
			animation: gradient 30s ease infinite;
			}
			/* Fade in animation (kept as custom animation used by several elements) */
			@keyframes fadeInUp {
			from { opacity: 0; transform: translateY(30px); }
			to   { opacity: 1; transform: translateY(0); }
			}
			.fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
			.delay-100 { animation-delay: 0.1s; opacity: 0; }
			.delay-200 { animation-delay: 0.2s; opacity: 0; }
			.delay-300 { animation-delay: 0.3s; opacity: 0; }
			.delay-400 { animation-delay: 0.4s; opacity: 0; }
			/* Floating animation for the right-side logo */
			@keyframes float { 0%,100% { transform: translateY(0px);} 50% { transform: translateY(-10px);} }
			.float { animation: float 7s ease-in-out infinite; }
			.nav-link { position: relative; transition: all 0.3s ease; }
			.nav-link::after {
			content: '';
			position: absolute;
			bottom: -5px;
			left: 0;
			width: 0;
			height: 2px;
			background: #2580a7;
			transition: width 0.3s ease;
			}
			.nav-link:hover::after { width: 100%; }
			@keyframes scrollDown {
			0% {
			transform: translateY(-50%);
			}
			100% {
			transform: translateY();
			}
			}
			.animate-scrollDown {
			animation: scrollDown 60s linear infinite;
			}
			.animate-scrollDown:hover {
			animation-play-state: paused;
			cursor: pointer;
			}
			.event-item {
			text-transform: none;
			line-height: 1.1;
			writing-mode: vertical-rl; /* make text vertical */
			transform: rotate(180deg); /* read top-to-bottom */
			white-space: nowrap;
			display: inline-block;
			padding: 0.1rem 0;
			}
			.label {
			writing-mode: vertical-rl; /* vertical text */
			transform: rotate(180deg); /* read top-to-bottom */
			margin: 0;
			clip-path: polygon(50% 0, 50% 0, 100% 25%, 100% 40%, 85% 40%, 85% 50%, 100% 50%, 100% 100%, 50% 100%, 0 100%, 0 50%, 15% 50%, 15% 40%, 0% 40%, 0% 25%);
			animation: jiggleLabel 2s infinite;
			}
			@keyframes jiggleLabel {
			0% { transform: rotate(180deg) translateX(0); }
			10% { transform: rotate(180deg) translateX(-2px); }
			20% { transform: rotate(180deg) translateX(3px); }
			30% { transform: rotate(180deg) translateX(-4px); }
			40% { transform: rotate(180deg) translateX(2px); }
			50% { transform: rotate(180deg) translateX(-3px); }
			60% { transform: rotate(180deg) translateX(4px); }
			70% { transform: rotate(180deg) translateX(-2px); }
			80% { transform: rotate(180deg) translateX(3px); }
			90% { transform: rotate(180deg) translateX(-1px); }
			100% { transform: rotate(180deg) translateX(0); }
			}
			/* Particle background effect (kept) */
			.particle { position: absolute; border-radius: 50%; background: rgba(37, 128, 167, 0.08); animation: rise 15s infinite ease-in; }
			@keyframes rise {
			0% { bottom: -100px; opacity: 0; }
			10% { opacity: 0.3; }
			90% { opacity: 0.3; }
			100% { bottom: 100%; opacity: 0; }
			}
			/* Modal styles (backdrop-filter and entrance animations are easier to keep here) */
			.modal {
			display: none; position: fixed; inset: 0; width: 100vw; height: 100vh;
			background: rgba(255,255,255,0.85); backdrop-filter: blur(16px) saturate(180%);
			z-index: 1000; overflow-y: auto; transition: background 0.4s cubic-bezier(.4,0,.2,1);
			}
			.modal.active { display: flex; animation: fadeIn 0.3s ease-out; }
			@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
			.modal-content {
			animation: slideUp 0.4s ease-out;
			box-shadow: 0 8px 32px 0 rgba(33, 118, 174, 0.18), 0 1.5px 6px 0 rgba(33, 118, 174, 0.10);
			border: 1.5px solid rgba(33, 118, 174, 0.12);
			background: rgba(255,255,255,0.85); backdrop-filter: blur(8px);
			transition: box-shadow 0.3s cubic-bezier(.4,0,.2,1), background 0.3s cubic-bezier(.4,0,.2,1);
			}
			@keyframes slideUp { from { transform: translateY(30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
		</style>
	</head>
	<body class="font-saira min-h-screen overflow-hidden">
		<!-- Navigation -->
		<nav class="absolute right-12 top-1/2 -translate-y-1/2 z-50 hidden md:block">
			<ul class="flex flex-col space-y-6 text-tarawera items-end">
				<li><a href="#association" onclick="openModal('associationModal'); return false;" class="nav-link text-lg font-light tracking-wide hover:text-jelly-bean transition-all duration-300">Association</a></li>
				<li><a href="#evenements" onclick="openModal('evenementsModal'); return false;" class="nav-link text-lg font-light tracking-wide hover:text-jelly-bean transition-all duration-300">Évènements</a></li>
				<li><a href="#projets" class="nav-link text-lg font-light tracking-wide hover:text-jelly-bean transition-all duration-300">Projets</a></li>
				<li><a href="#publications" class="nav-link text-lg font-light tracking-wide hover:text-jelly-bean transition-all duration-300">Publications</a></li>
				<li><a href="#sponsors" onclick="openModal('sponsorsModal'); return false;" class="nav-link text-lg font-light tracking-wide hover:text-jelly-bean transition-all duration-300">Sponsors</a></li>
				<li><a href="#contact" onclick="openModal('contactModal'); return false;" class="nav-link text-lg font-light tracking-wide hover:text-jelly-bean transition-all duration-300">Contact</a></li>
			</ul>
			<!-- Social Links -->
			<div class="mt-12 flex flex-col items-end space-y-6">
				<a href="https://www.facebook.com/AMFAIM3D" target="_blank" rel="noopener" class="text-tarawera/50 hover:text-jelly-bean transition-colors duration-300">
					<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
						<path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.729 0 1.324-.592 1.324-1.326V1.326C24 .592 23.404 0 22.675 0"/>
					</svg>
				</a>
				<a href="#" class="text-tarawera/50 hover:text-jelly-bean transition-colors duration-300">
					<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
						<path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zm4.25 3.25a5.25 5.25 0 1 1 0 10.5 5.25 5.25 0 0 1 0-10.5zm0 1.5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5zm5.25.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
					</svg>
				</a>
				<a href="#" class="text-tarawera/50 hover:text-jelly-bean transition-colors duration-300">
					<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
						<path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
					</svg>
				</a>
			</div>
		</nav>
		<!-- Mobile Hamburger -->
		<div class="absolute top-6 right-6 z-50 md:hidden">
			<button id="menu-toggle" class="text-tarawera focus:outline-none">
				<svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
				</svg>
			</button>
		</div>
		<!-- Mobile Menu Panel -->
		<div id="mobile-menu" class="fixed inset-x-0 top-0 bg-white/90 backdrop-blur-md shadow-lg text-tarawera hidden flex-col items-center py-8 space-y-6 text-lg font-light z-40">
			<a href="#association" onclick="openModal('associationModal'); toggleMenu(false); return false;" class="hover:text-jelly-bean">Association</a>
			<a href="#evenements" onclick="openModal('evenementsModal'); toggleMenu(false); return false;" class="hover:text-jelly-bean">Évènements</a>
			<a href="#projets" onclick="toggleMenu(false)" class="hover:text-jelly-bean">Projets</a>
			<a href="#publications" onclick="toggleMenu(false)" class="hover:text-jelly-bean">Publications</a>
			<a href="#sponsors" onclick="openModal('sponsorsModal'); toggleMenu(false); return false;" class="hover:text-jelly-bean">Sponsors</a>
			<a href="#contact" onclick="openModal('contactModal'); toggleMenu(false); return false;" class="hover:text-jelly-bean">Contact</a>
			<div class="w-full flex items-center justify-center z-40">
				<form class="flex flex-col md:flex-row items-center gap-0 w-full max-w-5xl px-4 bg-white bg-opacity-10" action="#" method="POST">
					<label class="font-bold text-tarawera text-lg">Newsletter:</label>
					<div class="flex items-centerw-full justify-evenly gap-2">
						<input type="email" name="newsletter-email" required placeholder="E-mail *" class="flex-1 rounded-lg border-2 px-4 py-1 text-sm focus:outline-none focus:border-jelly-bean focus:shadow-2xl bg-transparent border-tarawera" />
						<button type="submit" class="bg-jelly-bean text-white font-medium rounded-lg px-1 py-1 hover:bg-tarawera transition-all duration-300">S'inscrire</button>
					</div>
				</form>
			</div>
		</div>
		<!-- Hero Section -->
		<main class="hidden xl:block relative w-full h-screen gradient-animate overflow-hidden">
			<!-- Right-half background image with inclined split -->
			<div class="absolute top-0 -left-60 h-full w-2/3 z-0" style="background: url('./assets/images/bg.png') center center/cover no-repeat; clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);"></div>
			<div class="absolute top-0 -left-60 h-full w-2/3 z-10 pointer-events-none bg-nebula opacity-85" style="clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);"></div>
			<!-- Animated Particles -->
			<div class="absolute inset-0 overflow-hidden pointer-events-none">
				<div class="particle" style="left: 10%; width: 4px; height: 4px; animation-delay: 0s;"></div>
				<div class="particle" style="left: 20%; width: 6px; height: 6px; animation-delay: 2s;"></div>
				<div class="particle" style="left: 30%; width: 3px; height: 3px; animation-delay: 4s;"></div>
				<div class="particle" style="left: 40%; width: 5px; height: 5px; animation-delay: 1s;"></div>
				<div class="particle" style="left: 50%; width: 4px; height: 4px; animation-delay: 6s;"></div>
				<div class="particle" style="left: 60%; width: 6px; height: 6px; animation-delay: 3s;"></div>
				<div class="particle" style="left: 70%; width: 3px; height: 3px; animation-delay: 5s;"></div>
				<div class="particle" style="left: 80%; width: 5px; height: 5px; animation-delay: 7s;"></div>
				<div class="particle" style="left: 90%; width: 4px; height: 4px; animation-delay: 2.5s;"></div>
			</div>
			<div class="absolute left-10 top-0 h-screen w-[4.5rem] z-50 pointer-events-auto text-tarawera flex flex-col items-center justify-between text-xl border-b-8 border-tarawera">
				<div class="label !bg-tarawera !text-white py-3 pt-14 px-2 mb-4">News</div>
				<div class="overflow-hidden flex items-center h-[calc(100vh-3.5rem)]" aria-hidden="false">
					<div class="flex flex-col gap-40 animate-scrollDown" aria-hidden="false">
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<!-- duplicate for smooth loop -->
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
					</div>
				</div>
			</div>
			<!-- Main Content - Hero Flex Layout -->
			<div class="relative z-10 h-full flex items-center">
				<div class="container mx-auto px-20 max-w-9xl flex flex-col xl:flex-row items-center justify-between w-full">
					<!-- Left: Text Content -->
					<div class="max-w-9xl flex-1">
						<h1 class="text-7xl font-bold text-tarawera mb-6 leading-tight fade-in-up delay-100 font-orbitron">
							AMFAIM<span class="text-jelly-bean">3D</span>
						</h1>
						<h2 class="text-3xl font-light text-mine-shaft mb-4 fade-in-up delay-200">
							Association Marocaine de
						</h2>
						<h2 class="text-3xl font-light text-mine-shaft mb-8 fade-in-up delay-300">
							Fabrication Additive et d'Impression 3D
						</h2>
						<p class="text-xl text-gray-800 font-medium leading-relaxed mb-6 max-w-2xl fade-in-up delay-400">
							Pionniers de l'innovation technologique au Maroc, nous façonnons l'avenir de la fabrication additive 
							et de l'impression 3D à travers la recherche, l'éducation et la collaboration.
						</p>
						<p class="text-lg text-gray-700 font-normal leading-relaxed mb-12 max-w-2xl fade-in-up delay-400">
							L'Association est à vocation scientifique, à but non lucratif et apolitique.
						</p>
						<div class="flex space-x-6 fade-in-up delay-400">
							<a href="#contact" onclick="document.querySelector('input[name=subject]').value='Inscription 2026'; openModal('contactModal'); return false;" class="group relative px-8 py-4 bg-jelly-bean text-white font-semibold rounded-lg overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl">
								<span class="relative z-10">Devenir Membre</span>
								<div class="absolute inset-0 bg-tarawera transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
							</a>
							<a href="#association" onclick="openModal('associationModal'); return false;" class="group px-8 py-4 border-2 border-jelly-bean text-jelly-bean font-semibold rounded-lg transition-all duration-300 hover:bg-jelly-bean hover:text-white hover:scale-105 hover:shadow-2xl">
							En Savoir Plus
							</a>
						</div>
						<div class="mt-16 grid grid-cols-3 gap-8 max-w-2xl fade-in-up delay-400">
							<div class="glass rounded-xl p-6 backdrop-blur-md">
								<div class="text-4xl font-bold text-jelly-bean mb-2 counter" data-target="100">0+</div>
								<div class="text-sm text-mine-shaft/70 font-light">Membres Actifs</div>
							</div>
							<div class="glass rounded-xl p-6 backdrop-blur-md">
								<div class="text-4xl font-bold text-jelly-bean mb-2 counter" data-target="15">0+</div>
								<div class="text-sm text-mine-shaft/70 font-light">Projets Réalisés</div>
							</div>
							<div class="glass rounded-xl p-6 backdrop-blur-md">
								<div class="text-4xl font-bold text-jelly-bean mb-2 counter" data-target="8">0+</div>
								<div class="text-sm text-mine-shaft/70 font-light">Partenaires</div>
							</div>
						</div>
					</div>
					<!-- Right: Floating Logo -->
					<div class="flex-shrink-0 flex items-center justify-center h-full fade-in-up delay-100 ml-20">
						<img src="./assets/images/logo.png" alt="AMFAIM3D Logo" class="h-[42rem] w-auto float drop-shadow-2xl animate-float" style="min-width: 12rem;">
					</div>
				</div>
			</div>
			<!-- Newsletter Signup - Bottom of Hero -->
			<div class="absolute bottom-4 left-0 w-full flex items-center justify-center z-40">
				<form class="flex flex-col md:flex-row items-center gap-4 w-full max-w-5xl px-4 bg-white bg-opacity-10" action="#" method="POST">
					<label class="font-bold text-tarawera text-lg whitespace-nowrap">Newsletter:</label>
					<span class="text-gray-600 text-sm whitespace-nowrap">Restez informé des nouveaux événements et des prochaines conférences. Ne manquez rien !</span>
					<input type="email" name="newsletter-email" required placeholder="E-mail *" class="flex-1 rounded-lg border-2 px-4 py-1 text-sm focus:outline-none focus:border-jelly-bean focus:shadow-2xl bg-transparent border-tarawera" />
					<button type="submit" class="bg-jelly-bean text-white font-semibold rounded-lg px-6 py-1 hover:bg-tarawera transition-all duration-300">S'inscrire</button>
				</form>
			</div>
		</main>
		<!-- Mobile Hero Section -->
		<main class="h-screen w-full bg-white relative xl:hidden">
			<div class="absolute left-1 bottom-0 h-screen w-[4.5rem] z-30 pointer-events-auto text-tarawera flex flex-col items-center justify-between text-xl border-b-8 border-tarawera">
				<div class="label !bg-tarawera !text-white py-4 pt-14 px-2">News</div>
				<div class="overflow-hidden flex items-center h-[calc(100vh-3.5rem)]" aria-hidden="false">
					<div class="flex flex-col gap-40 animate-scrollDown" aria-hidden="false">
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<!-- duplicate for smooth loop -->
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
						<div class="event-item">Nous avons le plaisir de vous annoncer le lancement de la nouvelle édition de la Conférence <a href="https://karkouri-zakaria.github.io/casicam/" class="font-bold">CASICAM'26 Marrakech</a>. Nous vous invitons à nous rejoindre!</div>
					</div>
				</div>
			</div>
			<div class="relative w-full h-screen gradient-animate pl-12">
				<!-- Background Image -->
				<div class="absolute inset-0 h-full w-full z-0" style="background: url('./assets/images/bg.png') center center/cover no-repeat;"></div>
				<div class="absolute inset-0 h-full w-full z-0 bg-nebula opacity-85"></div>
				<!-- Content on Top -->
				<div class="relative z-10 h-full flex items-center">
					<div class="container mx-auto px-6 flex flex-col items-center text-center">
						<div class="flex-shrink-0 flex items-center justify-center h-1/2 fade-in-up delay-100">
							<img src="./assets/images/logo.png" alt="AMFAIM3D Logo" class="w-auto drop-shadow-2xl" style="max-width: 32vh;">
						</div>
						<p class="text-lg text-gray-700 font-medium leading-relaxed mb-2 max-w-md fade-in-up delay-400">
							Pionniers de l'innovation technologique au Maroc, nous façonnons l'avenir de la fabrication additive 
							et de l'impression 3D à travers la recherche, l'éducation et la collaboration.
						</p>
						<div class="grid grid-cols-3 gap-8 max-w-2xl fade-in-up delay-400">
							<div class="glass rounded-xl p-1 backdrop-blur-md">
								<div class="text-4xl font-bold text-jelly-bean mb-2 counter" data-target="100">0+</div>
								<div class="text-sm text-mine-shaft/70 font-light">Membres Actifs</div>
							</div>
							<div class="glass rounded-xl p-1 backdrop-blur-md">
								<div class="text-4xl font-bold text-jelly-bean mb-2 counter" data-target="15">0+</div>
								<div class="text-sm text-mine-shaft/70 font-light">Projets Réalisés</div>
							</div>
							<div class="glass rounded-xl p-1 backdrop-blur-md">
								<div class="text-4xl font-bold text-jelly-bean mb-2 counter" data-target="8">0+</div>
								<div class="text-sm text-mine-shaft/70 font-light">Partenaires</div>
							</div>
						</div>
						<div class="flex space-x-4 fade-in-up delay-400 mt-4">
							<a href="#contact" onclick="document.querySelector('input[name=subject]').value='Inscription 2026'; openModal('contactModal'); return false;" class="group relative px-6 py-3 bg-jelly-bean text-white font-semibold rounded-lg overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl">
								<span class="relative z-10">Devenir Membre</span>
								<div class="absolute inset-0 bg-tarawera transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
							</a>
							<a href="#association" onclick="openModal('associationModal'); return false;" class="group px-6 py-3 border-2 border-jelly-bean text-jelly-bean font-semibold rounded-lg transition-all duration-300 hover:bg-jelly-bean hover:text-white hover:scale-105 hover:shadow-2xl">
							En Savoir Plus
							</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Association Modal -->
		<div id="associationModal" class="modal">
			<div class="w-full max-w-7xl mx-auto p-6 my-12">
				<div class="modal-content rounded-3xl p-10 relative max-w-7xl mx-auto">
					<!-- Close Button -->
					<button onclick="closeModal('associationModal')" class="absolute top-6 right-6 text-tarawera hover:text-jelly-bean duration-300 focus:outline-none focus:ring-2 focus:ring-jelly-bean bg-white/70 rounded-full shadow-md p-2 transition-all">
						<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
						</svg>
					</button>
					<!-- Title -->
					<h2 class="xl:text-3xl font-bold text-tarawera mb-12 text-center">ASSOCIATION</h2>
					<!-- President's Message -->
					<div class="mb-16">
						<h3 class="xl:text-xl font-bold text-jelly-bean mb-4">MOT DU PRÉSIDENT</h3>
						<p class="text-lg font-semibold text-mine-shaft mb-4">Pr. Khalid Zarbane</p>
						<div class="text-gray-700 leading-relaxed space-y-4">
							<p>La discipline de la fabrication additive et de l'impression 3D commence à bousculer le monde de la fabrication au point d'être qualifié par une nouvelle révolution industrielle.</p>
							<p>Conscient de l'intérêt immense de cette discipline pour notre pays, un groupe de scientifique et d'industriels ont entrepris la création de L'Association Marocaine de Fabrication Additive et d'Impression 3D» (AMFAIM3D).</p>
							<p>Deux mots d'ordre nous animent dans cette action : la maitrise de la discipline pour servir le monde socioéconomique national, et le rayonnement au niveau du grand public pour préparer les futurs acteurs de la discipline.</p>
							<p>Et dans cet esprit d'ouverture aux autres disciplines scientifiques et de collaboration avec les acteurs nationaux et internationaux que nous entamons nos actions pour assurer notre mission et atteindre nos objectifs.</p>
						</div>
					</div>
					<!-- Who We Are -->
					<div class="mb-16">
						<h3 class="xl:text-xl font-bold text-jelly-bean mb-4">QUI SOMMES-NOUS?</h3>
						<p class="text-gray-700 leading-relaxed mb-8"><span class="font-semibold">A</span>ssociation Marocaine de Fabrication Additive et d'Impression 3D» (AMFAIM3D) est une association à vocation scientifique, à but non lucratif et apolitique. L'AMFAIM3D a une vision, une mission et des objectifs :</p>
						<!-- Vision, Mission, Objectives Grid -->
						<div class="grid md:grid-cols-3 gap-8 mb-8">
							<div class="glass rounded-xl p-6">
								<h4 class="flex items-center gap-2 text-xl font-bold text-tarawera mb-3">
									<span>Vision</span>
									<svg class="w-6 h-6 text-jelly-bean" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
										<circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
									</svg>
								</h4>
								<p class="text-gray-700 text-sm leading-relaxed">Avoir une assise scientifique solide et large de la Fabrication Additive et d'Impression 3D.</p>
							</div>
							<div class="glass rounded-xl p-6">
								<h4 class="flex items-center gap-2 text-xl font-bold text-tarawera mb-3">
									<span>Mission</span>
									<svg class="w-6 h-6 text-jelly-bean" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<path d="M12 19V5M5 12l7-7 7 7" stroke="currentColor" stroke-width="2" fill="none"/>
									</svg>
								</h4>
								<p class="text-gray-700 text-sm leading-relaxed">Sédentariser les sciences liées au domaine de la Fabrication Additive et de l'Impression 3D au niveau national et Contribuer au développement et au rayonnement de cette discipline au sein du grand public</p>
							</div>
							<div class="glass rounded-xl p-6">
								<h4 class="flex items-center gap-2 text-xl font-bold text-tarawera mb-3">
									<span>Objectifs</span>
									<svg class="w-6 h-6 text-jelly-bean" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<path d="M3 12h18M12 3v18" stroke="currentColor" stroke-width="2" fill="none"/>
									</svg>
								</h4>
								<ul class="text-gray-700 text-sm leading-relaxed space-y-2">
									<li>• Animer et promouvoir la communauté scientifique en Fabrication Additive et Impression 3D</li>
									<li>• Créer des passerelles avec les autres disciplines scientifiques</li>
									<li>• Assurer la liaison avec les associations nationales et internationales</li>
									<li>• Être l'opérateur incontournable pour l'information et la formation</li>
									<li>• Favoriser le transfert de technologie</li>
									<li>• Organiser et participer à des manifestations</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Staff -->
					<div>
						<h3 class="xl:text-xl font-bold text-jelly-bean mb-8 text-center">STAFF</h3>
						<div class="grid md:grid-cols-3 gap-6">
							<!-- Staff Member 1 - Khalid Zarbane -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean">
									<img src="./assets/images/staff/Zarbane.jpg" alt="Pr. Khalid Zarbane" class="w-full h-full object-scale-down">
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">Pr. Khalid Zarbane</h4>
								<p class="text-jelly-bean font-semibold mb-2">Président</p>
								<p class="text-sm text-gray-600">Ecole Supérieure de Technologie, Université Hassan II, Casablanca, Maroc.</p>
							</div>
							<!-- Staff Member 2 - Zitouni Beidouri -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean">
									<img src="./assets/images/staff/Beidouri.jpg" alt="Pr. Zitouni Beidouri" class="w-full h-full object-scale-down">
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">Pr. Zitouni Beidouri</h4>
								<p class="text-jelly-bean font-semibold mb-2">Vice Président</p>
								<p class="text-sm text-gray-600">Ecole Supérieure de Technologie, Université Hassan II, Casablanca, Maroc.</p>
							</div>
							<!-- Staff Member 3 - Abdelali El Bouchti -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean">
									<img src="./assets/images/staff/El_Bouchti.jpg" alt="Dr. Abdelali El Bouchti" class="w-full h-full object-scale-down">
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">Dr. Abdelali El Bouchti</h4>
								<p class="text-jelly-bean font-semibold mb-2">Secrétaire général</p>
								<p class="text-sm text-gray-600">Institute for Forecasting and Futuristics (I2F)</p>
							</div>
							<!-- Staff Member 4 - Abdelkarim Chouaf -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean">
									<img src="./assets/images/staff/Chouaf.jpg" alt="Pr. Abdelkarim Chouaf" class="w-full h-full object-scale-down">
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">Pr. Abdelkarim Chouaf</h4>
								<p class="text-jelly-bean font-semibold mb-2">Conseiller</p>
								<p class="text-sm text-gray-600">Ecole Nationale Supérieure d'Electricité et de Mécanique, Université Hassan II, Casablanca, Maroc.</p>
							</div>
							<!-- Staff Member 5 - El Mehdi Abdeddine -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean">
									<img src="./assets/images/staff/Abdeddine.jpg" alt="M. El Mehdi Abdeddine" class="w-full h-full object-scale-down">
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">M. El Mehdi Abdeddine</h4>
								<p class="text-jelly-bean font-semibold mb-2">Trésorier</p>
								<p class="text-sm text-gray-600">Ecole Nationale Supérieure d'Electricité et de Mécanique, Université Hassan II, Casablanca, Maroc.</p>
							</div>
							<!-- Staff Member 6 - Hassan Bouchachia (SVG placeholder) -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean flex items-center justify-center bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-44 h-44">
										<circle cx="32" cy="24" r="14" fill="#E9F1F7" stroke="#2176AE" stroke-width="2" />
										<ellipse cx="32" cy="48" rx="18" ry="10" fill="#E9F1F7" stroke="#2176AE" stroke-width="2" />
										<circle cx="32" cy="24" r="7" fill="#2176AE" opacity="0.15" />
									</svg>
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">M. Hassan Bouchachia</h4>
								<p class="text-jelly-bean font-semibold mb-2">Vice Trésorier</p>
								<p class="text-sm text-gray-600">Chargé d'affaire des moyens industriels chez Groupe Renault.</p>
							</div>
							<!-- Staff Member 7 - Hayat Salhi -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean">
									<img src="./assets/images/staff/Salhi.jpg" alt="Pr. Hayat Salhi" class="w-full h-full object-scale-down">
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">Pr. Hayat Salhi</h4>
								<p class="text-jelly-bean font-semibold mb-2">Conseiller</p>
								<p class="text-sm text-gray-600">Ecole Supérieure de Technologie, Université Hassan II, Casablanca, Maroc.</p>
							</div>
							<!-- Staff Member 8 - Mohamed Eloumami -->
							<div class="text-center p-6 border border-nebula rounded-xl hover:shadow-lg transition-shadow duration-300">
								<div class="mb-4 mx-auto w-40 h-52 rounded-full overflow-hidden border-4 border-jelly-bean">
									<img src="./assets/images/staff/Eloumami.jpg" alt="Pr. Mohamed Eloumami" class="w-full h-full object-scale-down">
								</div>
								<h4 class="text-lg font-bold text-tarawera mb-1">Pr. Mohamed Eloumami</h4>
								<p class="text-jelly-bean font-semibold mb-2">Conseiller</p>
								<p class="text-sm text-gray-600">Ecole Supérieure de Technologie, Université Hassan II, Casablanca, Maroc.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Events Modal -->
		<div id="evenementsModal" class="modal">
			<div class="w-full max-w-7xl mx-auto p-8 my-8">
				<div class="modal-content bg-white rounded-2xl shadow-2xl p-12 relative max-w-7xl mx-auto">
					<!-- Close Button -->
					<button onclick="closeModal('evenementsModal')" class="absolute top-6 right-6 text-tarawera hover:text-jelly-bean transition-colors duration-300">
						<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
						</svg>
					</button>
					<!-- Title -->
					<h2 class="xl:text-3xl font-bold text-tarawera mb-12 text-center">ÉVÈNEMENTS</h2>
					<!-- Events Grid -->
					<div class="space-y-8">
						<!-- Event 1 - CASICAM 2026 (Upcoming) -->
						<div class="border-l-4 border-jelly-bean pl-6 hover:shadow-xl transition-shadow duration-300 p-6 rounded-r-xl bg-gradient-to-r from-nebula/20 to-transparent">
							<img src="./assets/images/events/2026.png" alt="2026 Event" class="w-2/3 h-52 object-fill rounded-lg mb-4 shadow-md">
							<div class="flex items-start justify-between mb-3">
								<div>
									<span class="inline-block bg-jelly-bean text-white text-xs font-bold px-3 py-1 pl-6 rounded-full mb-2 relative">
										BIENTÔT
										<span class="absolute left-1.5 top-1/2 -translate-y-1/2 flex h-3 w-3">
											<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-nebula opacity-95"></span>
											<span class="relative inline-flex rounded-full h-3 w-3 bg-nebula"></span>
										</span>
									</span>
									<a href="https://karkouri-zakaria.github.io/casicam/" target="_blank" rel="noopener" class="xl:text-xl font-bold text-tarawera mb-2 hover:text-jelly-bean transition-colors ml-2">CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING 2026</a>
									<p class="text-jelly-bean font-semibold">November 2026 | Casablanca, Morocco</p>
								</div>
							</div>
							<p class="text-gray-700 leading-relaxed mb-4">
								La sixième édition de CASICAM (Casablanca International Conference on Additive Manufacturing) réunira les experts internationaux et nationaux dans le domaine de la fabrication additive. Cette conférence vise à promouvoir les avancées scientifiques et technologiques, favoriser les échanges entre chercheurs, industriels et étudiants, et explorer les nouvelles applications de l'impression 3D.
							</p>
							<div class="text-sm text-gray-600">
								<p><strong>Thèmes principaux :</strong> Matériaux avancés, Bioprinting, Industrie 4.0, Intelligence Artificielle, Durabilité</p>
							</div>
						</div>
						<!-- Event 2 - CASICAM 2025 (Past Event) -->
						<div class="border-l-4 border-gray-500 pl-6 hover:shadow-lg transition-shadow duration-300 p-6 rounded-r-xl">
							<img src="./assets/images/events/2025.png" alt="2025 Event" class="w-2/3 h-52 object-fill rounded-lg mb-4 shadow-md">
							<div class="flex items-start justify-between mb-3">
								<div>
									<span class="inline-block bg-gray-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">PASSÉ</span>
									<a href="https://www.casicam.com/" target="_blank" rel="noopener" class="xl:text-xl font-bold text-tarawera mb-2 hover:text-jelly-bean transition-colors">CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING</a>
									<p class="text-jelly-bean font-semibold">November 2025 | Casablanca, Morocco</p>
									<p class="text-sm text-gray-500">01 Oct 2025</p>
								</div>
							</div>
							<p class="text-gray-700 leading-relaxed mb-4">
								La cinquième édition de CASICAM a été la plateforme de référence pour les innovations en fabrication additive au Maghreb et en Afrique. Cette édition a mis l'accent sur les applications industrielles concrètes et le transfert de technologie vers les PME.
							</p>
							<div class="bg-nebula/30 p-4 rounded-lg mb-4">
								<h4 class="font-bold text-tarawera mb-2">THÈMES PRINCIPAUX</h4>
								<div class="grid md:grid-cols-2 gap-2 text-sm text-gray-700">
									<p>• Fabrication additive métallique</p>
									<p>• Applications médicales</p>
									<p>• Aéronautique</p>
									<p>• Automobile</p>
								</div>
							</div>
							<a href="#" class="text-jelly-bean hover:text-tarawera font-semibold transition-colors duration-300">Read More →</a>
						</div>
						<!-- Event 3 - CASICAM 2022 (Past Event) -->
						<div class="border-l-4 border-gray-500 pl-6 hover:shadow-lg transition-shadow duration-300 p-6 rounded-r-xl">
							<img src="./assets/images/events/2022.png" alt="2022 Event" class="w-2/3 h-52 object-fill rounded-lg mb-4 shadow-md">
							<div class="flex items-start justify-between mb-3">
								<div>
									<span class="inline-block bg-gray-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">PASSÉ</span>
									<a href="https://http://amfaim3d.org/casablanca-international-conference-on-additive-manufacturing-november-23-24-2022-morocco/" target="_blank" rel="noopener" class="xl:text-xl font-bold text-tarawera mb-2 hover:text-jelly-bean transition-colors">CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING</a>
									<p class="text-jelly-bean font-semibold">November 23-24, 2022 | Casablanca, Morocco</p>
									<p class="text-sm text-gray-500">07 Oct 2022</p>
								</div>
							</div>
							<p class="text-gray-700 leading-relaxed mb-4">
								CASICAM 2022 a été une conférence majeure couvrant tous les aspects de la fabrication additive et de l'impression 3D. L'événement a rassemblé chercheurs, industriels et professionnels pour partager les dernières avancées dans le domaine.
							</p>
							<div class="bg-nebula/30 p-4 rounded-lg mb-4">
								<h4 class="font-bold text-tarawera mb-2">DATES IMPORTANTES</h4>
								<div class="grid md:grid-cols-2 gap-2 text-sm text-gray-700">
									<p>• 05 Sept 2022 - 12 Sept 2022: Abstract submission</p>
									<p>• 12 Sept 2022 - 19 Sept 2022: Notification of acceptance</p>
									<p>• 26 Sept 2022 - 10 Oct 2022: Full paper submission</p>
									<p>• 17 Oct 2022 - 24 Oct 2022: Notification of acceptance</p>
									<p>• 31 Oct 2022: Author's registration / camera-ready</p>
								</div>
							</div>
							<a href="#" class="text-jelly-bean hover:text-tarawera font-semibold transition-colors duration-300">Read More →</a>
						</div>
						<!-- Event 4 - CASICAM 2020 (Past Event) -->
						<div class="border-l-4 border-gray-500 pl-6 hover:shadow-lg transition-shadow duration-300 p-6 rounded-r-xl">
							<img src="./assets/images/events/2020.png" alt="2020 Event" class="w-2/3 h-52 object-fill rounded-lg mb-4 shadow-md">
							<div class="mb-3">
								<span class="inline-block bg-gray-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-2">PASSÉ</span>
								<a href="http://amfaim3d.org/donec-luctus-imperdiet/" target="_blank" rel="noopener" class="xl:text-xl font-bold text-tarawera mb-2 hover:text-jelly-bean transition-colors">CASABLANCA INTERNATIONAL CONFERENCE ON ADDITIVE MANUFACTURING</a>
								<p class="text-jelly-bean font-semibold">November 19-20, 2020 | Casablanca, Morocco</p>
								<p class="text-sm text-gray-500">28 Août 2019</p>
							</div>
							<p class="text-gray-700 leading-relaxed mb-4">
								La conférence CASICAM 2020 (Casablanca International Conference on Additive Manufacturing 2020) couvre le domaine de la fabrication additive, de l'impression 3D et les technologies associées. Elle a pour objectif de couvrir de manière non exhaustive la recherche universitaire, les développements industriels et explorer les applications innovantes.
							</p>
							<a href="#" class="text-jelly-bean hover:text-tarawera font-semibold transition-colors duration-300">Read More →</a>
						</div>
						<!-- Event 5 - MW3DP 2019 (Past Event - Sticky) -->
						<div class="border-l-4 border-tarawera pl-6 hover:shadow-lg transition-shadow duration-300 p-6 rounded-r-xl">
							<img src="./assets/images/events/MW3D-2019.png" alt="MW3DP 2019 Event" class="w-2/3 h-52 object-fill rounded-lg mb-4 shadow-md">
							<div class="mb-3">
								<span class="inline-block bg-tarawera text-white text-xs font-bold px-3 py-1 rounded-full mb-2">ÉPINGLÉ</span>
								<a href="http://amfaim3d.org/mw3dp2019/" target="_blank" rel="noopener" class="xl:text-xl font-bold text-tarawera mb-2 hover:text-jelly-bean transition-colors">MOROCCAN WORKSHOP ON 3D PRINTING (MW3DP 2019)</a>
								<p class="text-jelly-bean font-semibold">December 18, 2019 | Morocco</p>
								<p class="text-sm text-gray-500">26 Août 2019</p>
							</div>
							<p class="text-gray-700 leading-relaxed mb-4">
								Moroccan Workshop on 3D Printing (MW3DP'19) couvre le domaine de l'impression 3D (fabrication additive) et les technologies associées. Il a pour objectif de cerner de manière non-exhaustive la recherche universitaire, les développements industriels et explorer les applications innovantes dans le contexte marocain.
							</p>
							<a href="#" class="text-jelly-bean hover:text-tarawera font-semibold transition-colors duration-300">Read More →</a>
						</div>
						<!-- Event 6 - Inauguration (Past Event - Sticky) -->
						<div class="border-l-4 border-tarawera pl-6 hover:shadow-lg transition-shadow duration-300 p-6 rounded-r-xl">
							<img src="./assets/images/events/INAUGURATION.png" alt="Inauguration Event" class="w-2/3 h-52 object-fill rounded-lg mb-4 shadow-md">
							<div class="mb-3">
								<span class="inline-block bg-tarawera text-white text-xs font-bold px-3 py-1 rounded-full mb-2">ÉPINGLÉ</span>
								<a href="http://amfaim3d.org/donec-luctus-imperdiet-2/" target="_blank" rel="noopener" class="xl:text-xl font-bold text-tarawera mb-2 hover:text-jelly-bean transition-colors">CÉRÉMONIE D'INAUGURATION (AMFAIM3D)</a>
								<p class="text-jelly-bean font-semibold">December 18, 2019 | Morocco</p>
								<p class="text-sm text-gray-500">30 Août 2019</p>
							</div>
							<p class="text-gray-700 leading-relaxed mb-4">
								La fabrication additive communément désignée par L'impression 3D, est la technologie de fabrication de la prochaine génération. Elle va révolutionner le mode de production industrielle dans la mesure où elle va modifier fondamentalement la façon dont nous concevons et fabriquons les produits. Cette cérémonie a marqué le lancement officiel de l'AMFAIM3D.
							</p>
							<a href="#" class="text-jelly-bean hover:text-tarawera font-semibold transition-colors duration-300">Read More →</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sponsors Modal -->
		<div id="sponsorsModal" class="modal">
			<div class="w-full max-w-7xl mx-auto p-8 my-8">
				<div class="modal-content bg-white rounded-2xl shadow-2xl p-12 relative max-w-7xl mx-auto">
					<!-- Close Button -->
					<button onclick="closeModal('sponsorsModal')" class="absolute top-6 right-6 text-tarawera hover:text-jelly-bean transition-colors duration-300">
						<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
						</svg>
					</button>
					<!-- Title -->
					<h2 class="xl:text-3xl font-bold text-tarawera mb-4 text-center">NOS PARTENAIRES</h2>
					<p class="text-gray-600 text-center mb-12">L'AMFAIM3D est fière de collaborer avec des institutions académiques, industrielles et de recherche de premier plan.</p>
					<!-- Partners Grid -->
					<div class="space-y-16">
						<!-- All Partners -->
						<section>
							<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
								<!-- UH2C -->
								<div class="flex items-center justify-center p-6 bg-white border-2 border-nebula rounded-xl hover:border-jelly-bean hover:shadow-lg transition-all duration-300">
									<img src="./assets/images/partners/UH2C.svg" alt="Université Hassan II de Casablanca" class="w-full h-20 object-contain">
								</div>
								<!-- EST -->
								<div class="flex items-center justify-center p-6 bg-white border-2 border-nebula rounded-xl hover:border-jelly-bean hover:shadow-lg transition-all duration-300">
									<img src="./assets/images/partners/UH2C_EST.svg" alt="École Supérieure de Technologie" class="w-full h-20 object-contain">
								</div>
								<!-- ENSEM -->
								<div class="flex items-center justify-center p-6 bg-white border-2 border-nebula rounded-xl hover:border-jelly-bean hover:shadow-lg transition-all duration-300">
									<img src="./assets/images/partners/UH2C_ENSEM.svg" alt="ENSEM Hassan II" class="w-full h-20 object-contain">
								</div>
								<!-- AIENSEM -->
								<div class="flex items-center justify-center p-6 bg-white border-2 border-nebula rounded-xl hover:border-jelly-bean hover:shadow-lg transition-all duration-300">
									<img src="./assets/images/partners/AIENSEM.svg" alt="AI ENSEM" class="w-full h-20 object-contain">
								</div>
								<!-- CITT -->
								<div class="flex items-center justify-center p-6 bg-white border-2 border-nebula rounded-xl hover:border-jelly-bean hover:shadow-lg transition-all duration-300">
									<img src="./assets/images/partners/UH2C_CITT.svg" alt="CITT Hassan II" class="w-full h-20 object-contain">
								</div>
								<!-- CNRST -->
								<div class="flex items-center justify-center p-6 bg-white border-2 border-nebula rounded-xl hover:border-jelly-bean hover:shadow-lg transition-all duration-300">
									<img src="./assets/images/partners/CNRST.svg" alt="CNRST" class="w-full h-20 object-contain">
								</div>
								<!-- C3S -->
								<div class="flex items-center justify-center p-6 bg-white border-2 border-nebula rounded-xl hover:border-jelly-bean hover:shadow-lg transition-all duration-300">
									<img src="./assets/images/partners/C3S.svg" alt="C3S" class="w-full h-20 object-contain">
								</div>
							</div>
						</section>
						<!-- Call to Action -->
						<section class="text-center pt-8 border-t border-nebula">
							<h3 class="text-2xl font-bold text-tarawera mb-4">Devenez Partenaire</h3>
							<p class="text-gray-600 mb-6 max-w-2xl mx-auto">
								Rejoignez notre réseau de partenaires et contribuez au développement de la fabrication additive au Maroc.
							</p>
							<button onclick="closeModal('sponsorsModal'); setTimeout(() => openModal('contactModal'), 100);" class="inline-flex items-center gap-2 px-8 py-3 bg-jelly-bean text-white font-semibold rounded-lg hover:bg-tarawera transition-all duration-300 hover:scale-105 shadow-lg">
								Contactez-nous
								<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
								</svg>
							</button>
						</section>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Modal -->
		<div id="contactModal" class="modal">
			<div class="w-full max-w-7xl mx-auto p-8 my-8">
				<div class="modal-content bg-white rounded-2xl shadow-2xl p-12 relative max-w-7xl mx-auto">
					<!-- Close Button -->
					<button onclick="closeModal('contactModal')" class="absolute top-6 right-6 text-tarawera hover:text-jelly-bean transition-colors duration-300">
						<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
						</svg>
					</button>
					<!-- Title -->
					<h2 class="xl:text-3xl font-bold text-tarawera mb-4 text-center">CONTACT</h2>
					<p class="text-gray-600 text-center mb-12">Contactez-nous pour toute question concernant l'adhésion, les événements, les projets ou toute autre information.</p>
					<!-- Contact Content -->
					<div class="grid lg:grid-cols-5 gap-10">
						<!-- Contact Form -->
						<form action="" method="POST" class="lg:col-span-3 space-y-5">
							<div class="space-y-2">
								<label class="block text-sm font-semibold text-tarawera">Sujet</label>
								<input type="text" name="subject" class="w-full rounded-xl border-2 border-nebula focus:border-jelly-bean focus:outline-none px-4 py-3 text-sm transition-colors" placeholder="Sujet de votre message" required>
							</div>
							<div class="space-y-2">
								<label class="block text-sm font-semibold text-tarawera">Nom Complet</label>
								<input type="text" name="full-name" class="w-full rounded-xl border-2 border-nebula focus:border-jelly-bean focus:outline-none px-4 py-3 text-sm transition-colors" placeholder="Votre nom" required>
							</div>
							<div class="space-y-2">
								<label class="block text-sm font-semibold text-tarawera">E-mail</label>
								<input type="email" name="email" class="w-full rounded-xl border-2 border-nebula focus:border-jelly-bean focus:outline-none px-4 py-3 text-sm transition-colors" placeholder="nom@exemple.com" required>
							</div>
							<div class="space-y-2">
								<label class="block text-sm font-semibold text-tarawera">Université / Entreprise</label>
								<input type="text" name="company" class="w-full rounded-xl border-2 border-nebula focus:border-jelly-bean focus:outline-none px-4 py-3 text-sm transition-colors" placeholder="Votre affiliation" required>
							</div>
							<div class="space-y-2">
								<label class="block text-sm font-semibold text-tarawera">Votre Message</label>
								<textarea name="message" rows="5" class="w-full resize-y rounded-xl border-2 border-nebula focus:border-jelly-bean focus:outline-none px-4 py-3 text-sm transition-colors" placeholder="Écrivez votre message..." required></textarea>
							</div>
							<div class="pt-2">
								<button type="submit" name="send" class="inline-flex items-center gap-2 rounded-full px-8 py-3 bg-jelly-bean text-white font-semibold hover:bg-tarawera transition-all duration-300 hover:scale-105 shadow-lg">
									Envoyer
									<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
										<path d="m5 12 7-7 7 7"/>
										<path d="M12 19V5"/>
									</svg>
								</button>
							</div>
						</form>
						<!-- Contact Info -->
						<div class="lg:col-span-2 space-y-8">
							<div class="glass rounded-xl p-6">
								<h3 class="text-lg font-bold text-tarawera mb-3">Adresse</h3>
								<p class="text-sm text-gray-700 leading-relaxed">
									École Supérieure de Technologie de Casablanca<br>
									Route d'El Jadida, km 7<br>
									BP : 8012, Oasis<br>
									Casablanca, Maroc
								</p>
							</div>
							<div class="glass rounded-xl p-6">
								<h3 class="text-lg font-bold text-tarawera mb-3">Email</h3>
								<p class="text-sm">
									<a href="mailto:contact@amfaim3d.ma" class="text-jelly-bean hover:text-tarawera underline decoration-dotted transition-colors">
									contact@amfaim3d.ma
									</a>
								</p>
							</div>
							<div class="glass rounded-xl p-6">
								<h3 class="text-lg font-bold text-tarawera mb-3">Suivez-nous</h3>
								<div class="flex space-x-4">
									<!-- Facebook -->
									<a href="https://www.facebook.com/AMFAIM3D" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-jelly-bean/10 hover:bg-jelly-bean text-jelly-bean hover:text-white flex items-center justify-center transition-all duration-300">
										<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
											<path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.729 0 1.324-.592 1.324-1.326V1.326C24 .592 23.404 0 22.675 0"/>
										</svg>
									</a>
									<!-- Instagram -->
									<a href="#" class="w-10 h-10 rounded-full bg-jelly-bean/10 hover:bg-jelly-bean text-jelly-bean hover:text-white flex items-center justify-center transition-all duration-300">
										<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
											<path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5A4.25 4.25 0 0 0 20.5 16.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zm4.25 3.25a5.25 5.25 0 1 1 0 10.5 5.25 5.25 0 0 1 0-10.5zm0 1.5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5zm5.25.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
										</svg>
									</a>
									<!-- LinkedIn -->
									<a href="#" class="w-10 h-10 rounded-full bg-jelly-bean/10 hover:bg-jelly-bean text-jelly-bean hover:text-white flex items-center justify-center transition-all duration-300">
										<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
											<path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
										</svg>
									</a>
								</div>
							</div>
							<div class="glass rounded-xl p-6">
								<h3 class="text-lg font-bold text-tarawera mb-3">Liens Rapides</h3>
								<ul class="space-y-2 text-sm text-gray-700">
									<li>
										<a href="#association" onclick="closeModal('contactModal'); setTimeout(() => openModal('associationModal'), 100); return false;" class="underline decoration-dotted hover:text-jelly-bean transition-colors">
										À Propos de l'Association
										</a>
									</li>
									<li>
										<a href="#evenements" onclick="closeModal('contactModal'); setTimeout(() => openModal('evenementsModal'), 100); return false;" class="underline decoration-dotted hover:text-jelly-bean transition-colors">
										Évènements
										</a>
									</li>
									<li>
										<a href="#adhesion" class="underline decoration-dotted hover:text-jelly-bean transition-colors">
										Devenir Membre
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Script -->
		<script>
			function openModal(modalId) {
			    document.getElementById(modalId).classList.add('active');
			    document.body.style.overflow = 'hidden';
			}
			
			function closeModal(modalId) {
			    document.getElementById(modalId).classList.remove('active');
			    document.body.style.overflow = 'auto';
			}
			
			// Close modal when clicking outside
			document.addEventListener('click', function(event) {
			    if (event.target.classList.contains('modal')) {
			        closeModal(event.target.id);
			    }
			});
			
			// Close modal with Escape key
			document.addEventListener('keydown', function(event) {
			    if (event.key === 'Escape') {
			        document.querySelectorAll('.modal.active').forEach(modal => {
			            closeModal(modal.id);
			        });
			    }
			
			
			});
			
			// Counter effect for stats
			function animateCounter(element, target, duration = 1200) {
			    let start = 0;
			    let startTime = null;
			    function updateCounter(timestamp) {
			        if (!startTime) startTime = timestamp;
			        const progress = Math.min((timestamp - startTime) / duration, 1);
			        const value = Math.floor(progress * target);
			        element.textContent = value + '+';
			        if (progress < 1) {
			            requestAnimationFrame(updateCounter);
			        } else {
			            element.textContent = target + '+';
			        }
			    }
			    requestAnimationFrame(updateCounter);
			}
			
			document.addEventListener('DOMContentLoaded', function() {
			    document.querySelectorAll('.counter').forEach(function(counter) {
			        const target = parseInt(counter.getAttribute('data-target'), 10);
			        animateCounter(counter, target);
			    });
			});
			
			const toggleMenu = (force = null) => {
			    const menu = document.getElementById('mobile-menu');
			    const icon = document.getElementById('menu-icon');
			    const isOpen = menu.classList.contains('flex');
			
			    const shouldOpen = force !== null ? force : !isOpen;
			
			    if (shouldOpen) {
			        menu.classList.remove('hidden');
			        menu.classList.add('flex'); // ✅ ensures flex layout
			    } else {
			        menu.classList.remove('flex');
			        menu.classList.add('hidden');
			    }
			
			    icon.innerHTML = shouldOpen
			        ? `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>`
			        : `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>`;
			    };
			
			
			document.getElementById('menu-toggle').addEventListener('click', () => toggleMenu());
		</script>
	</body>
</html>