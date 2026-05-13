<?php
$titre = "Dizonli — Témoignages";
?>


<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizonli — Témoignages</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                fontFamily: {
                    'poppins': ['Poppins', 'sans-serif']
                },
                colors: {
                    'dizo-green': '#15803d',
                    'dizo-green-dark': '#15803d',
                    'dizo-green-light': '#15803d',
                    'dizo-orange': '#15803d',
                    'dizo-orange-dark': '#15803d',
                    'dizo-orange-light': '#15803d',
                },
            }
        }
    }
    </script>
    <style>
    @font-face {
        font-family: 'Goldplay';
        src: url('fonts/Goldplay-Regular.woff2') format('woff2'),
            url('fonts/Goldplay-Regular.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Goldplay';
        src: url('fonts/Goldplay-Bold.woff2') format('woff2'),
            url('fonts/Goldplay-Bold.woff') format('woff');
        font-weight: bold;
        font-style: normal;
    }

    body {
        font-family: 'Goldplay', sans-serif;
    }

    body {
        overflow-x: hidden;
        transition: background-color 0.3s, color 0.3s;
    }

    html.dark body {
        background: #0f1117;
        color: #e2e8f0;
    }

    html.dark .dm-card {
        background: #1e2535;
        border-color: #2d3748;
    }

    html.dark input,
    html.dark textarea,
    html.dark select {
        background: #141824;
        border-color: #2d3748;
        color: #e2e8f0;
    }

    html.dark input::placeholder,
    html.dark textarea::placeholder {
        color: #64748b;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-12px)
        }
    }

    @keyframes bounceFade {

        0%,
        100% {
            transform: translateY(0);
            opacity: 1
        }

        50% {
            transform: translateY(6px);
            opacity: 0.6
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(0.85);
            opacity: 0.8
        }

        100% {
            transform: scale(1.5);
            opacity: 0
        }
    }

    @keyframes shimmer {
        0% {
            transform: translateX(-100%) skewX(-15deg)
        }

        100% {
            transform: translateX(250%) skewX(-15deg)
        }
    }

    @keyframes progressBar {
        from {
            width: 0%;
        }

        to {
            width: 100%;
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-40px) scale(0.97)
        }

        to {
            opacity: 1;
            transform: translateX(0) scale(1)
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(40px) scale(0.97)
        }

        to {
            opacity: 1;
            transform: translateX(0) scale(1)
        }
    }

    @keyframes navBtnPulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.5), 0 0 0 0 rgba(22, 163, 74, 0.3)
        }

        50% {
            box-shadow: 0 0 0 6px rgba(249, 115, 22, 0), 0 0 0 12px rgba(22, 163, 74, 0)
        }
    }

    @keyframes checkPop {
        0% {
            transform: scale(0) rotate(-15deg);
            opacity: 0
        }

        60% {
            transform: scale(1.2) rotate(5deg);
            opacity: 1
        }

        100% {
            transform: scale(1) rotate(0deg);
            opacity: 1
        }
    }

    @keyframes starWiggle {

        0%,
        100% {
            transform: scale(1) rotate(0deg)
        }

        30% {
            transform: scale(1.35) rotate(-10deg)
        }

        60% {
            transform: scale(1.2) rotate(6deg)
        }
    }

    @keyframes sendFly {
        0% {
            transform: translateX(0) translateY(0) scale(1);
            opacity: 1
        }

        100% {
            transform: translateX(60px) translateY(-60px) scale(0.3);
            opacity: 0
        }
    }

    @keyframes successIn {
        0% {
            transform: scale(0.7) translateY(20px);
            opacity: 0
        }

        100% {
            transform: scale(1) translateY(0);
            opacity: 1
        }
    }

    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease-out;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* ---- GRADIENT TEXT vert → orange ---- */
    .gradient-text {
        background: linear-gradient(135deg, #16a34a, #f97316);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .btn-green {
        background: #16a34a;
        transition: all 0.3s ease;
    }

    .btn-green:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(22, 163, 74, 0.4);
        background: #15803d;
    }

    .btn-orange {
        background: #f97316;
        transition: all 0.3s ease;
    }

    .btn-orange:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(249, 115, 22, 0.4);
        background: #ea580c;
    }

    .btn-nav-download {
        position: relative;
        overflow: hidden;
        background: #f97316;
        animation: navBtnPulse 2.5s ease-in-out infinite;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .btn-nav-download::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 40%;
        height: 100%;
        background: rgba(255, 255, 255, 0.25);
        animation: shimmer 2.5s ease-in-out infinite;
        pointer-events: none;
    }

    .btn-nav-download:hover {
        transform: translateY(-3px) scale(1.06);
        box-shadow: 0 12px 30px rgba(249, 115, 22, 0.5);
        animation: none;
        background: #ea580c;
    }

    .mobile-menu {
        transform: translateX(100%);
        transition: transform 0.3s ease;
    }

    .mobile-menu.active {
        transform: translateX(0);
    }

    .navbar-scrolled {
        backdrop-filter: blur(20px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    #themeToggle {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        z-index: 60;
        width: 40px;
        height: 40px;
        border-radius: 8px 0 0 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s;
        background: #16a34a;
        border: none;
        box-shadow: -3px 0 15px rgba(22, 163, 74, 0.3);
    }

    #themeToggle:hover {
        width: 46px;
        box-shadow: -4px 0 20px rgba(22, 163, 74, 0.5);
        background: #f97316;
    }

    /* ---- TESTIMONIALS SLIDER ---- */
    .testi-slider-wrap {
        overflow: hidden;
        position: relative;
    }

    .testi-track {
        display: flex;
        transition: transform 0.55s cubic-bezier(0.77, 0, 0.175, 1);
        will-change: transform;
    }

    .testi-slide {
        min-width: 100%;
        padding: 0 4px;
        box-sizing: border-box;
    }

    .testi-slide.animate-in-left {
        animation: slideInLeft 0.5s ease forwards;
    }

    .testi-slide.animate-in-right {
        animation: slideInRight 0.5s ease forwards;
    }

    .dot-btn {
        width: 10px;
        height: 10px;
        border-radius: 99px;
        background: #d1d5db;
        transition: all 0.3s ease;
        cursor: pointer;
        border: none;
    }

    html.dark .dot-btn {
        background: #4b5563;
    }

    .dot-btn.active {
        background: #16a34a;
        width: 28px;
    }

    .testi-arrow {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 2px solid #e5e7eb;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.25s ease;
        flex-shrink: 0;
    }

    html.dark .testi-arrow {
        background: #1e2535;
        border-color: #2d3748;
    }

    .testi-arrow:hover {
        background: #16a34a;
        border-color: transparent;
        transform: scale(1.08);
    }

    .testi-arrow:hover svg {
        color: white;
    }

    .testi-arrow svg {
        color: #6b7280;
        transition: color 0.25s;
    }

    .testi-progress-bar {
        height: 3px;
        background: linear-gradient(90deg, #16a34a, #f97316);
        border-radius: 99px;
        animation: progressBar 5s linear forwards;
    }

    /* ---- STAR RATING ---- */
    .star-btn {
        font-size: 1.8rem;
        cursor: pointer;
        transition: color 0.15s, transform 0.15s;
        display: inline-block;
    }

    .star-btn:hover {
        transform: scale(1.15);
        animation: starWiggle 0.4s ease;
    }

    .star-btn.active {
        color: #fbbf24;
    }

    /* ---- FORM INPUTS ---- */
    .form-input {
        width: 100%;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 13px 16px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.92rem;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
        background: white;
        color: #1f2937;
    }

    html.dark .form-input {
        background: #141824;
        border-color: #2d3748;
        color: #e2e8f0;
    }

    .form-input:focus {
        border-color: #16a34a;
        box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.12);
    }

    .form-input.error {
        border-color: #ef4444;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.12);
    }

    .form-label {
        display: block;
        font-size: 0.85rem;
        font-weight: 600;
        color: #374151;
        margin-bottom: 6px;
    }

    html.dark .form-label {
        color: #94a3b8;
    }

    /* ---- CARD HOVER ---- */
    .testi-card-static {
        transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        cursor: default;
    }

    .testi-card-static:hover {
        transform: translateY(-6px) scale(1.01);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    /* ---- SUCCESS ANIMATIONS ---- */
    .success-icon {
        animation: checkPop 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }

    .success-card {
        animation: successIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }

    .send-flying {
        animation: sendFly 0.5s ease forwards;
    }

    /* ---- DECORATION ---- */
    .deco-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.12;
        pointer-events: none;
        z-index: 0;
    }

    .section-badge {
        display: inline-block;
        padding: 6px 18px;
        border-radius: 99px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.04em;
    }

    /* ---- SCROLL ARROW ---- */
    #scrollArrow {
        position: fixed;
        bottom: 28px;
        right: 28px;
        z-index: 999;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s;
        opacity: 0;
        pointer-events: none;
        box-shadow: 0 4px 20px rgba(22, 163, 74, 0.4);
    }

    #scrollArrow.visible {
        opacity: 1;
        pointer-events: all;
    }

    /* ---- HERO gradient bg vert → orange ---- */
    .hero-bg {
        background: linear-gradient(135deg, #dcfce7 0%, #fff7ed 50%, #fff 100%);
    }

    html.dark .hero-bg {
        background: linear-gradient(135deg, #0a1a0d 0%, #0a1a0d 50%, #0a1a0d 100%);
    }

    /* ---- Download banner gradient vert → orange ---- */
    .download-banner-bg {
        background: linear-gradient(135deg, #16a34a 0%, #f97316 100%);
    }

    /* ---- Stats bar gradient vert → orange ---- */
    .stats-bar-bg {
        background: linear-gradient(135deg, #16a34a 0%, #f97316 100%);
    }

    @media (max-width:767px) {
        #navbar .container {
            position: relative;
            justify-content: center !important;
        }

        #navbar .container>a:first-child {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        #navbar .container>#mobileMenuBtn {
            position: absolute;
            right: 16px;
        }

        footer .container>.flex {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            gap: 16px !important;
        }
    }
    </style>
</head>

<body class="bg-white text-gray-800 dark:bg-[#0f1117] dark:text-slate-200">

    <!-- DARK MODE TOGGLE -->
    <button id="themeToggle" aria-label="Basculer le mode sombre">
        <span id="themeIcon">🌙</span>
    </button>

    <!-- SCROLL ARROW -->
    <button id="scrollArrow" class="btn-green text-white" aria-label="Défiler">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" id="arrowIcon" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- ===== NAVBAR ===== -->
    <nav id="navbar"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/80 dark:bg-[#0f1117]/80 backdrop-blur-md">
        <div class="container mx-auto px-6 lg:px-10 py-5 flex items-center justify-between">
            <a href="index.php" class="flex items-center space-x-2 group">
                <img src="assets/logo_ss.svg" alt="Dizonli Logo" class="h-8 w-auto block dark:hidden">
                <img src="assets/logo.svg" alt="Dizonli Logo" class="h-8 w-auto hidden dark:block">
            </a>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="index.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium transition relative group">Accueil<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-dizo-green group-hover:w-full transition-all"></span></a>
                <a href="fonctionnalites.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium transition relative group">Fonctionnalités<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-dizo-green group-hover:w-full transition-all"></span></a>
                <a href="temoignages.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium transition relative group">Témoignages<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-dizo-green group-hover:w-full transition-all"></span></a>
                <a href="projet.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium transition relative group">Projet<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-dizo-green group-hover:w-full transition-all"></span></a>
                <a href="ressources.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium transition relative group">Ressources<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-dizo-green group-hover:w-full transition-all"></span></a>
                <a href="contact.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium transition relative group">Contact<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-dizo-green group-hover:w-full transition-all"></span></a>
                <a href="https://play.google.com/store/apps/details?id=com.dizonli.app" target="_blank"
                    class="btn-nav-download text-white px-5 py-2.5 rounded-full font-bold text-sm flex items-center gap-2 no-underline">
                    <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 16l-5-5h3V4h4v7h3l-5 5zm-6 2h12v2H6z" />
                    </svg>
                    <span>Télécharger</span>
                    <span
                        class="bg-white/25 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full leading-none">GRATUIT</span>
                </a>
            </div>

            <button id="mobileMenuBtn" class="lg:hidden text-gray-700 dark:text-slate-300 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu Mobile -->
        <div id="mobileMenu"
            class="mobile-menu lg:hidden fixed top-0 right-0 w-72 h-screen bg-white dark:bg-[#1a1f2e] shadow-2xl p-6 z-50">
            <div class="flex justify-between items-center mb-8">
                <img src="assets/logo_ss.svg" alt="Dizonli Logo" class="h-8 w-auto block dark:hidden">
                <img src="assets/logo.svg" alt="Dizonli Logo" class="h-8 w-auto hidden dark:block">
                <button id="closeMobileMenu" class="text-gray-700 dark:text-slate-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col space-y-5">
                <a href="index.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium">Accueil</a>
                <a href="fonctionnalites.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium">Fonctionnalités</a>
                <a href="temoignages.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium">Témoignages</a>
                <a href="projet.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium">Projet</a>
                <a href="ressources.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium">Ressources</a>
                <a href="contact.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-dizo-green font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- ===================================================================
     HERO BANNER — dégradé vert → orange
=================================================================== -->
    <section class="hero-bg relative pt-32 pb-16 overflow-hidden">
        <div class="deco-blob bg-dizo-green  w-96 h-96 -top-24 -left-24"></div>
        <div class="deco-blob bg-dizo-orange w-80 h-80 -bottom-20 -right-20"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center">
            <div style="animation:fadeUp 0.6s ease both">
                <span class="section-badge bg-green-100 dark:bg-green-900/40 text-dizo-green mb-4">COMMUNAUTÉ
                    DIZONLI</span>
            </div>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-black leading-tight mb-5"
                style="animation:fadeUp 0.6s 0.1s ease both">
                Partagez votre <span class="text-orange-500 font-bold">expérience</span><br>&amp; Écrivez-nous
            </h1>
            <p class="text-base sm:text-lg text-gray-600 dark:text-slate-400 max-w-2xl mx-auto"
                style="animation:fadeUp 0.6s 0.2s ease both">
                Découvrez ce que nos marcheurs disent de Dizonli, partagez votre témoignage et contactez-nous pour toute
                question.
            </p>
            <!-- Quick nav pills -->
            <div class="flex flex-wrap justify-center gap-3 mt-8" style="animation:fadeUp 0.6s 0.3s ease both">
                <a href="temoignages.php"
                    class="bg-white dark:bg-[#1e2535] text-dizo-green font-semibold px-5 py-2.5 rounded-full shadow-md border border-green-100 dark:border-green-900 hover:bg-dizo-green hover:text-white transition text-sm">
                    💬 Témoignages
                </a>
                <a href="#laisser-temoignage"
                    class="bg-white dark:bg-[#1e2535] text-dizo-orange font-semibold px-5 py-2.5 rounded-full shadow-md border border-orange-100 dark:border-orange-900 hover:bg-dizo-orange hover:text-white transition text-sm">
                    ✍️ Laisser un avis
                </a>
                <a href="contact.php"
                    class="bg-white dark:bg-[#1e2535] text-gray-700 dark:text-slate-300 font-semibold px-5 py-2.5 rounded-full shadow-md border border-gray-100 dark:border-gray-700 hover:bg-gray-900 hover:text-white transition text-sm">
                    📧 Nous contacter
                </a>
            </div>
        </div>
    </section>

    <!-- ===================================================================
     TÉMOIGNAGES — SLIDER
=================================================================== -->
    <section id="temoignages" class="py-16 sm:py-20 bg-white dark:bg-[#0f1117]">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <span class="section-badge bg-green-50 dark:bg-green-900/30 text-dizo-green mb-4">TÉMOIGNAGES</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4 mt-3">
                    Ils <span class="text-orange-500 font-bold">marchent</span> avec Dizonli
                </h2>
                <p class="text-base sm:text-lg text-gray-600 dark:text-slate-400">
                    Des milliers d'utilisateurs transforment leur quotidien. Voici leurs mots.
                </p>
            </div>

            <!-- Slider -->
            <div class="max-w-2xl mx-auto reveal mb-6">
                <!-- Progress vert → orange -->
                <div class="h-1 bg-gray-100 dark:bg-gray-800 rounded-full mb-6 overflow-hidden">
                    <div id="testiProgress" class="testi-progress-bar"></div>
                </div>
                <div class="testi-slider-wrap rounded-3xl">
                    <div class="testi-track" id="testiTrack">

                        <!-- Témoignage 1 -->
                        <div class="testi-slide">
                            <div
                                class="bg-green-50 dark:bg-[#0d1f13] p-7 sm:p-9 rounded-3xl shadow-md border border-green-100 dark:border-green-900">
                                <div class="flex text-yellow-400 mb-4 text-lg gap-0.5">★★★★★</div>
                                <p class="text-gray-700 dark:text-slate-300 mb-6 italic leading-relaxed text-base">
                                    "Depuis que j'utilise DIZONLI, je fais enfin mes 5000 pas par jour. Le suivi est
                                    simple, les défis hebdomadaires me motivent, et marcher avec mon équipe rend tout
                                    beaucoup plus fun."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-dizo-green flex items-center justify-center text-white font-bold mr-4 text-lg flex-shrink-0">
                                        A</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200">Aurore K. Dossou</div>
                                        <div class="text-sm text-gray-500 dark:text-slate-400">Chargée de programme,
                                            Ministère de la Santé</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Témoignage 2 -->
                        <div class="testi-slide">
                            <div
                                class="bg-orange-50 dark:bg-[#1f1008] p-7 sm:p-9 rounded-3xl shadow-md border border-orange-100 dark:border-orange-900">
                                <div class="flex text-yellow-400 mb-4 text-lg gap-0.5">★★★★★</div>
                                <p class="text-gray-700 dark:text-slate-300 mb-6 italic leading-relaxed text-base">
                                    "Nous avons lancé un Podothon interne et l'engagement des employés a été incroyable.
                                    Les classements et les certificats ont vraiment stimulé la participation."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-dizo-orange flex items-center justify-center text-white font-bold mr-4 text-lg flex-shrink-0">
                                        S</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200">Serge A.</div>
                                        <div class="text-sm text-gray-500 dark:text-slate-400">Directeur RH, Google
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Témoignage 3 -->
                        <div class="testi-slide">
                            <div
                                class="bg-green-50 dark:bg-[#0d1f13] p-7 sm:p-9 rounded-3xl shadow-md border border-green-100 dark:border-green-900">
                                <div class="flex text-yellow-400 mb-4 text-lg gap-0.5">★★★★★</div>
                                <p class="text-gray-700 dark:text-slate-300 mb-6 italic leading-relaxed text-base">
                                    "Mes collègues et moi avons formé un groupe au bureau. On marche ensemble pendant
                                    les pauses, c'est devenu notre rituel quotidien !"</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-dizo-green-light flex items-center justify-center text-white font-bold mr-4 text-lg flex-shrink-0">
                                        J</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200">Jules S.</div>
                                        <div class="text-sm text-gray-500 dark:text-slate-400">Développeur Web</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Témoignage 4 -->
                        <div class="testi-slide">
                            <div
                                class="bg-orange-50 dark:bg-[#1f1008] p-7 sm:p-9 rounded-3xl shadow-md border border-orange-100 dark:border-orange-900">
                                <div class="flex text-yellow-400 mb-4 text-lg gap-0.5">★★★★★</div>
                                <p class="text-gray-700 dark:text-slate-300 mb-6 italic leading-relaxed text-base">
                                    "L'interface est superbe et intuitive. Le podomètre est précis et les statistiques
                                    détaillées m'aident à comprendre mes progrès chaque jour."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-dizo-orange-dark flex items-center justify-center text-white font-bold mr-4 text-lg flex-shrink-0">
                                        B</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200">Bénédicte K.</div>
                                        <div class="text-sm text-gray-500 dark:text-slate-400">Community Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex items-center justify-between mt-5">
                    <button class="testi-arrow" id="testiPrev" aria-label="Précédent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <div class="flex gap-2 items-center" id="testiDots">
                        <button class="dot-btn active" data-idx="0"></button>
                        <button class="dot-btn" data-idx="1"></button>
                        <button class="dot-btn" data-idx="2"></button>
                        <button class="dot-btn" data-idx="3"></button>
                    </div>
                    <button class="testi-arrow" id="testiNext" aria-label="Suivant">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Static grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 reveal">
                <div
                    class="testi-card-static bg-green-50 dark:bg-[#0d1a10] border border-green-100 dark:border-green-900 rounded-2xl p-6 shadow-sm">
                    <div class="flex text-yellow-400 mb-3 text-base gap-0.5">★★★★★</div>
                    <p class="text-gray-600 dark:text-slate-400 text-sm italic mb-4 leading-relaxed">"Application très
                        bien faite, les défis quotidiens me maintiennent motivé. Je recommande à tous !"</p>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-dizo-green-light flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            M</div>
                        <div>
                            <div class="font-semibold text-gray-800 dark:text-slate-200 text-sm">Maxime T.</div>
                            <div class="text-xs text-gray-400">Enseignant</div>
                        </div>
                    </div>
                </div>
                <div
                    class="testi-card-static bg-orange-50 dark:bg-[#1f0e05] border border-orange-100 dark:border-orange-900 rounded-2xl p-6 shadow-sm">
                    <div class="flex text-yellow-400 mb-3 text-base gap-0.5">★★★★★</div>
                    <p class="text-gray-600 dark:text-slate-400 text-sm italic mb-4 leading-relaxed">"Parfait pour les
                        entreprises ! On a organisé un podothon inter-équipes et la cohésion a décuplé."</p>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-dizo-orange flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            F</div>
                        <div>
                            <div class="font-semibold text-gray-800 dark:text-slate-200 text-sm">Fatou D.</div>
                            <div class="text-xs text-gray-400">Chef de projet</div>
                        </div>
                    </div>
                </div>
                <div
                    class="testi-card-static bg-green-50 dark:bg-[#0d1a10] border border-green-100 dark:border-green-900 rounded-2xl p-6 shadow-sm sm:col-span-2 lg:col-span-1">
                    <div class="flex text-yellow-400 mb-3 text-base gap-0.5">★★★★☆</div>
                    <p class="text-gray-600 dark:text-slate-400 text-sm italic mb-4 leading-relaxed">"J'adore la
                        fonction groupes. Marcher avec ma famille chaque weekend est devenu une tradition grâce à
                        Dizonli !"</p>
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 rounded-full bg-dizo-green-dark flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            N</div>
                        <div>
                            <div class="font-semibold text-gray-800 dark:text-slate-200 text-sm">Nadège R.</div>
                            <div class="text-xs text-gray-400">Infirmière</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats bar — dégradé vert → orange -->
            <div class="bg-orange-500 mt-12 rounded-3xl p-8 flex flex-wrap justify-around gap-6 reveal shadow-xl">
                <div class="text-center text-white">
                    <div class="text-3xl sm:text-4xl font-black mb-1">
                        4.9<span class="text-yellow-300">★</span>
                    </div>
                    <div class="text-white/80 text-sm font-medium">Note moyenne</div>
                </div>
                <div class="w-px bg-white/20 hidden sm:block self-stretch"></div>
                <div class="text-center text-white">
                    <div class="text-3xl sm:text-4xl font-black mb-1">50K+</div>
                    <div class="text-white/80 text-sm font-medium">Avis utilisateurs</div>
                </div>
                <div class="w-px bg-white/20 hidden sm:block self-stretch"></div>
                <div class="text-center text-white">
                    <div class="text-3xl sm:text-4xl font-black mb-1">96%</div>
                    <div class="text-white/80 text-sm font-medium">Recommandent l'app</div>
                </div>
                <div class="w-px bg-white/20 hidden sm:block self-stretch"></div>
                <div class="text-center text-white">
                    <div class="text-3xl sm:text-4xl font-black mb-1">1 M+</div>
                    <div class="text-white/80 text-sm font-medium">de pas suivis</div>
                </div>
            </div>

        </div>
    </section>

    <!-- ===================================================================
     FORMULAIRE — LAISSER UN TÉMOIGNAGE
=================================================================== -->
    <section id="laisser-temoignage" class="py-16 sm:py-20 bg-green-50 dark:bg-[#0a140c] relative overflow-hidden">
        <div class="deco-blob bg-dizo-green  w-72 h-72 top-0 right-0 opacity-10"></div>
        <div class="deco-blob bg-dizo-orange w-60 h-60 bottom-0 left-0 opacity-8"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-10 reveal">
                <span class="section-badge bg-orange-100 dark:bg-orange-900/30 text-dizo-orange mb-4">VOTRE AVIS
                    COMPTE</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold mt-3 mb-3">Partagez votre <span
                        class="text-orange-500 font-bold">témoignage</span></h2>
                <p class="text-gray-600 dark:text-slate-400">Votre expérience inspire d'autres marcheurs. Racontez-nous
                    comment Dizonli a changé votre quotidien.</p>
            </div>

            <div class="max-w-xl mx-auto reveal">
                <!-- FORM -->
                <div id="testimonialForm"
                    class="bg-white dark:bg-[#1e2535] rounded-3xl shadow-xl border border-gray-100 dark:border-[#2d3748] p-7 sm:p-10">

                    <div class="grid sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="form-label" for="tPrenom">Prénom <span class="text-red-500">*</span></label>
                            <input id="tPrenom" type="text" placeholder="Ex: Aurore" class="form-input"
                                autocomplete="given-name">
                        </div>
                        <div>
                            <label class="form-label" for="tNom">Nom</label>
                            <input id="tNom" type="text" placeholder="Ex: Dossou" class="form-input"
                                autocomplete="family-name">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="tProfession">Profession / Organisation</label>
                        <input id="tProfession" type="text" placeholder="Ex: Enseignant, Ministère de la Santé…"
                            class="form-input">
                    </div>

                    <div class="mb-5">
                        <label class="form-label">Votre note <span class="text-red-500">*</span></label>
                        <div class="flex gap-1 mt-1" id="starContainer" role="group" aria-label="Note">
                            <span class="star-btn" data-star="1" style="color:#d1d5db;" aria-label="1 étoile">★</span>
                            <span class="star-btn" data-star="2" style="color:#d1d5db;" aria-label="2 étoiles">★</span>
                            <span class="star-btn" data-star="3" style="color:#d1d5db;" aria-label="3 étoiles">★</span>
                            <span class="star-btn" data-star="4" style="color:#d1d5db;" aria-label="4 étoiles">★</span>
                            <span class="star-btn" data-star="5" style="color:#d1d5db;" aria-label="5 étoiles">★</span>
                        </div>
                        <div id="starLabel" class="text-xs text-gray-400 mt-1 h-4 transition-all"></div>
                    </div>

                    <div class="mb-5">
                        <label class="form-label" for="tMessage">Votre témoignage <span
                                class="text-red-500">*</span></label>
                        <textarea id="tMessage" rows="5"
                            placeholder="Racontez-nous comment Dizonli a transformé votre quotidien…"
                            class="form-input resize-none"></textarea>
                        <div class="text-right text-xs text-gray-400 mt-1"><span id="charCount">0</span>/300</div>
                    </div>

                    <label class="flex items-start gap-3 mb-6 cursor-pointer group">
                        <input type="checkbox" id="tPermission" class="mt-1 w-4 h-4 accent-dizo-green flex-shrink-0">
                        <span
                            class="text-sm text-gray-600 dark:text-slate-400 group-hover:text-gray-800 dark:group-hover:text-slate-300 transition">
                            J'autorise Dizonli à publier mon témoignage sur le site et les réseaux sociaux.
                        </span>
                    </label>

                    <div id="testiError"
                        class="hidden bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 text-red-600 dark:text-red-400 text-sm rounded-xl px-4 py-3 mb-5">
                    </div>

                    <button id="submitTestimonial"
                        class="btn-orange w-full text-white py-4 rounded-2xl font-bold text-base flex items-center justify-center gap-3 shadow-lg group">
                        <svg id="sendIcon" class="w-5 h-5 transition-transform group-hover:rotate-45" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        <span>Envoyer mon témoignage</span>
                    </button>
                </div>

                <!-- SUCCESS STATE -->
                <div id="testiSuccess"
                    class="hidden bg-white dark:bg-[#1e2535] rounded-3xl shadow-xl border border-gray-100 dark:border-[#2d3748] p-10 text-center success-card">
                    <div
                        class="w-20 h-20 bg-green-100 dark:bg-green-900/40 rounded-full flex items-center justify-center mx-auto mb-5 success-icon">
                        <svg class="w-10 h-10 text-dizo-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-gray-800 dark:text-slate-200 mb-2">Merci beaucoup ! 🎉</h3>
                    <p class="text-gray-600 dark:text-slate-400 mb-7 leading-relaxed">Votre témoignage a bien été reçu.
                        Après validation, il sera affiché sur notre site pour inspirer d'autres marcheurs.</p>
                    <button id="newTestimonial"
                        class="btn-green text-white px-8 py-3 rounded-xl font-semibold shadow-md">
                        ✍️ Laisser un autre avis
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== DOWNLOAD BANNER — dégradé vert → orange ===== -->
    <!-- DOWNLOAD BANNER -->
    <section id="download" class="py-7 relative overflow-hidden">
        <div class="absolute inset-0" style="background:#16a34a;"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto text-center text-white">
                <h2 class="text-2xl sm:text-3xl font-extrabold mb-2">Prêt à commencer votre aventure ? </h2>
                <p class="text-sm sm:text-base mb-5 opacity-90">Téléchargez Dizonli et rejoignez des milliers
                    d'utilisateurs.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="https://play.google.com/store/apps/details?id=com.dizonli.app" target="_blank"
                        class="bg-white text-gray-900 px-5 py-2.5 rounded-xl font-semibold flex items-center justify-center space-x-2.5 shadow-lg hover:scale-105 transition">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#16a34a">
                            <path
                                d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                        </svg>
                        <div class="text-left leading-tight">
                            <div class="text-xs opacity-60">Télécharger sur</div>
                            <div class="text-sm font-bold">Google Play</div>
                        </div>
                    </a>
                    <a href="https://apps.apple.com/bj/app/dizonli/id6756833340?l=fr-FR" target="_blank"
                        class="bg-gray-900 text-white px-5 py-2.5 rounded-xl font-semibold flex items-center justify-center space-x-2.5 shadow-lg hover:scale-105 transition">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" />
                        </svg>
                        <div class="text-left leading-tight">
                            <div class="text-xs opacity-50">Télécharger sur</div>
                            <div class="text-sm font-bold">App Store</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== FOOTER ===== -->
    <footer id="contact" class="bg-gray-950 dark:bg-[#060810] text-white">
        <div class="container mx-auto px-4 lg:px-8 py-7">
            <div class="flex items-start justify-between gap-6 flex-wrap">
                <a href="index.php" class="flex items-center flex-shrink-0">
                    <img src="assets/logo.svg" alt="Logo Dizonli" class="w-20 h-10" />
                </a>
                <div class="flex flex-col items-center gap-2 flex-1">
                    <div class="flex flex-wrap justify-center gap-x-5 gap-y-1">
                        <a href="#" class="text-gray-500 text-sm hover:text-dizo-green transition">Confidentialité</a>
                        <a href="#" class="text-gray-500 text-sm hover:text-dizo-green transition">CGU</a>
                        <a href="#" class="text-gray-500 text-sm hover:text-dizo-green transition">Mentions légales</a>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-3 flex-shrink-0">
                    <div class="flex items-center gap-2 flex-wrap justify-end">
                        <a href="https://www.facebook.com/dizoonli" aria-label="Facebook"
                            class="w-8 h-8 bg-gray-800 hover:bg-green-500 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 2h-3a5 5 0 0 0-5 5v3H7v4h2v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/dizonli" aria-label="Instagram"
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-orange rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://x.com/dizonliapp" aria-label="Twitter/X"
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-green rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/dizonli/" aria-label="LinkedIn"
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-orange rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@dizonli" aria-label="TikTok"
                            class="w-8 h-8 bg-gray-800 hover:bg-black rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.75 2h2.5c.2 1.7 1.4 3.1 3.05 3.4v2.6c-1.3-.05-2.55-.45-3.55-1.15v6.4c0 3.1-2.5 5.75-5.75 5.75S3.25 16.35 3.25 13.25s2.5-5.75 5.75-5.75c.25 0 .5.02.75.07v2.7c-.24-.08-.49-.12-.75-.12-1.7 0-3.1 1.4-3.1 3.1s1.4 3.1 3.1 3.1 3.1-1.4 3.1-3.1V2z" />
                            </svg>
                        </a>
                        <a href="https://whatsapp.com/channel/0029VbBgoTs4IBhIx04Yt31o" aria-label="WhatsApp"
                            class="w-8 h-8 bg-gray-800 hover:bg-green-500 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.52 3.48A11.9 11.9 0 0012.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.16 1.6 5.97L0 24l6.3-1.64a11.9 11.9 0 005.75 1.46h.01c6.55 0 11.89-5.34 11.89-11.89 0-3.17-1.24-6.14-3.43-8.35z" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@dizonli-app" aria-label="YouTube"
                            class="w-8 h-8 bg-gray-800 hover:bg-red-600 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2 31.4 31.4 0 000 12a31.4 31.4 0 00.5 5.8 3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1A31.4 31.4 0 0024 12a31.4 31.4 0 00-.5-5.8zM9.6 15.5v-7l6.4 3.5-6.4 3.5z" />
                            </svg>
                        </a>
                    </div>
                    <span class="text-gray-600 text-xs">© 2026 Dizonli. Tous droits réservés.</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- ===== JS ===== -->
    <script>
    // ============================================================
    // DARK MODE — CORRIGÉ
    // ============================================================
    const htmlEl = document.documentElement; // ← variable correctement nommée
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');

    // Lire le thème sauvegardé (ou détecter la préférence système)
    const savedTheme = localStorage.getItem('dizonli-theme') ||
        (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

    if (savedTheme === 'dark') {
        htmlEl.classList.add('dark');
        themeIcon.textContent = '☀️';
    } else {
        htmlEl.classList.remove('dark');
        themeIcon.textContent = '🌙';
    }

    themeToggle.addEventListener('click', () => {
        htmlEl.classList.toggle('dark'); // ← utilise htmlEl, pas "html"
        const isDark = htmlEl.classList.contains('dark');
        themeIcon.textContent = isDark ? '☀️' : '🌙';
        localStorage.setItem('dizonli-theme', isDark ? 'dark' : 'light');
    });

    // ---- NAVBAR ----
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => navbar.classList.toggle('navbar-scrolled', window.scrollY > 50));

    // ---- MOBILE MENU ----
    document.getElementById('mobileMenuBtn').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.add('active'));
    document.getElementById('closeMobileMenu').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.remove('active'));
    document.querySelectorAll('#mobileMenu a').forEach(l =>
        l.addEventListener('click', () => document.getElementById('mobileMenu').classList.remove('active')));

    // ---- SCROLL ARROW ----
    const scrollArrow = document.getElementById('scrollArrow');
    const arrowIcon = document.getElementById('arrowIcon');
    const isNearBottom = () => window.scrollY > (document.documentElement.scrollHeight - window.innerHeight) * 0.7;

    function updateArrow() {
        scrollArrow.classList.toggle('visible', window.scrollY > 100);
        arrowIcon.innerHTML = isNearBottom() ?
            '<path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>' :
            '<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>';
    }
    window.addEventListener('scroll', updateArrow);
    scrollArrow.addEventListener('click', () =>
        window.scrollTo({
            top: isNearBottom() ? 0 : document.body.scrollHeight,
            behavior: 'smooth'
        }));

    // ---- REVEAL ON SCROLL ----
    const revObs = new IntersectionObserver(entries =>
        entries.forEach(e => {
            if (e.isIntersecting) e.target.classList.add('active');
        }), {
            threshold: 0.08
        });
    document.querySelectorAll('.reveal').forEach(r => revObs.observe(r));

    // ============================================================
    // TESTIMONIALS SLIDER
    // ============================================================
    const track = document.getElementById('testiTrack');
    const dots = document.querySelectorAll('.dot-btn');
    const progressEl = document.getElementById('testiProgress');
    const TOTAL = 4;
    let current = 0;
    let autoTimer = null;

    function resetProgress() {
        progressEl.style.animation = 'none';
        void progressEl.offsetWidth;
        progressEl.style.animation = 'progressBar 5s linear forwards';
    }

    function goTo(idx, dir) {
        const slides = track.querySelectorAll('.testi-slide');
        slides.forEach(s => s.classList.remove('animate-in-left', 'animate-in-right'));
        track.style.transform = `translateX(-${idx * 100}%)`;
        slides[idx].classList.add(dir > 0 ? 'animate-in-right' : 'animate-in-left');
        setTimeout(() => slides[idx].classList.remove('animate-in-left', 'animate-in-right'), 600);
        dots.forEach((d, i) => d.classList.toggle('active', i === idx));
        current = idx;
        resetProgress();
    }

    function next() {
        goTo((current + 1) % TOTAL, 1);
    }

    function prev() {
        goTo((current - 1 + TOTAL) % TOTAL, -1);
    }

    function startAuto() {
        stopAuto();
        autoTimer = setInterval(next, 5000);
    }

    function stopAuto() {
        if (autoTimer) clearInterval(autoTimer);
    }

    document.getElementById('testiNext').addEventListener('click', () => {
        next();
        startAuto();
    });
    document.getElementById('testiPrev').addEventListener('click', () => {
        prev();
        startAuto();
    });
    dots.forEach(d => d.addEventListener('click', () => {
        const idx = parseInt(d.dataset.idx);
        goTo(idx, idx > current ? 1 : -1);
        startAuto();
    }));

    let touchStartX = 0;
    track.addEventListener('touchstart', e => {
        touchStartX = e.touches[0].clientX;
        stopAuto();
    }, {
        passive: true
    });
    track.addEventListener('touchend', e => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) diff > 0 ? next() : prev();
        startAuto();
    }, {
        passive: true
    });
    track.parentElement.addEventListener('mouseenter', stopAuto);
    track.parentElement.addEventListener('mouseleave', startAuto);
    resetProgress();
    startAuto();

    // ============================================================
    // STAR RATING
    // ============================================================
    let selectedRating = 0;
    const stars = document.querySelectorAll('.star-btn');
    const starLabels = ['', 'Très mauvais 😞', 'Mauvais 😐', 'Moyen 🙂', 'Bien 😊', 'Excellent ! 🤩'];
    const starLabel = document.getElementById('starLabel');

    stars.forEach(star => {
        star.addEventListener('mouseover', () => {
            const val = parseInt(star.dataset.star);
            stars.forEach((s, i) => {
                s.style.color = i < val ? '#fbbf24' : '#d1d5db';
            });
            starLabel.textContent = starLabels[val];
        });
        star.addEventListener('mouseout', () => {
            stars.forEach((s, i) => {
                s.style.color = i < selectedRating ? '#fbbf24' : '#d1d5db';
            });
            starLabel.textContent = selectedRating ? starLabels[selectedRating] : '';
        });
        star.addEventListener('click', () => {
            selectedRating = parseInt(star.dataset.star);
            stars.forEach((s, i) => {
                s.style.color = i < selectedRating ? '#fbbf24' : '#d1d5db';
            });
            starLabel.textContent = starLabels[selectedRating];
            starLabel.style.color = '#f97316';
            starLabel.style.fontWeight = '600';
        });
    });

    // ---- CHAR COUNTER ----
    const tMessage = document.getElementById('tMessage');
    const charCount = document.getElementById('charCount');
    tMessage.addEventListener('input', () => {
        const len = tMessage.value.length;
        charCount.textContent = len;
        charCount.style.color = len > 280 ? '#ef4444' : '#9ca3af';
    });

    // ============================================================
    // TESTIMONIAL FORM SUBMIT
    // ============================================================
    document.getElementById('submitTestimonial').addEventListener('click', () => {
        const prenom = document.getElementById('tPrenom').value.trim();
        const message = document.getElementById('tMessage').value.trim();
        const err = document.getElementById('testiError');
        err.classList.add('hidden');

        if (!prenom) {
            err.textContent = '⚠️ Veuillez entrer votre prénom.';
            err.classList.remove('hidden');
            document.getElementById('tPrenom').classList.add('error');
            return;
        }
        if (!selectedRating) {
            err.textContent = '⚠️ Veuillez sélectionner une note.';
            err.classList.remove('hidden');
            return;
        }
        if (message.length < 20) {
            err.textContent = '⚠️ Votre témoignage doit faire au moins 20 caractères.';
            err.classList.remove('hidden');
            document.getElementById('tMessage').classList.add('error');
            return;
        }

        document.getElementById('testimonialForm').classList.add('hidden');
        const success = document.getElementById('testiSuccess');
        success.classList.remove('hidden');
        success.classList.add('success-card');
    });

    document.getElementById('newTestimonial').addEventListener('click', () => {
        document.getElementById('tPrenom').value = '';
        document.getElementById('tNom').value = '';
        document.getElementById('tProfession').value = '';
        document.getElementById('tMessage').value = '';
        document.getElementById('tPermission').checked = false;
        selectedRating = 0;
        stars.forEach(s => {
            s.style.color = '#d1d5db';
        });
        starLabel.textContent = '';
        charCount.textContent = '0';
        document.querySelectorAll('.form-input.error').forEach(i => i.classList.remove('error'));
        document.getElementById('testiSuccess').classList.add('hidden');
        document.getElementById('testimonialForm').classList.remove('hidden');
    });

    // Remove error class on input
    document.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('input', () => input.classList.remove('error'));
        input.addEventListener('change', () => input.classList.remove('error'));
    });
    </script>
</body>

</html>