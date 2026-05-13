<?php

?>

<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ressources — Dizonli</title>
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
                    'dizo-green': '#16a34a',
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

    @keyframes float {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-10px)
        }
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

    @keyframes shimmer {
        0% {
            transform: translateX(-100%) skewX(-15deg)
        }

        100% {
            transform: translateX(250%) skewX(-15deg)
        }
    }

    @keyframes navBtnPulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.5), 0 0 0 0 rgba(22, 163, 74, 0.3);
        }

        50% {
            box-shadow: 0 0 0 6px rgba(22, 163, 74, 0), 0 0 0 12px rgba(22, 163, 74, 0);
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
            transform: scale(0.9);
            opacity: 0.8
        }

        100% {
            transform: scale(1.5);
            opacity: 0
        }
    }

    @keyframes slideLeft {
        from {
            opacity: 0;
            transform: translateX(-60px)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @keyframes slideRight {
        from {
            opacity: 0;
            transform: translateX(60px)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @keyframes tagPop {
        0% {
            transform: scale(1)
        }

        50% {
            transform: scale(1.12)
        }

        100% {
            transform: scale(1)
        }
    }

    @keyframes cardIn {
        from {
            opacity: 0;
            transform: translateY(24px) scale(0.97)
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1)
        }
    }

    @keyframes iconBounce {

        0%,
        100% {
            transform: translateY(0) scale(1)
        }

        50% {
            transform: translateY(-6px) scale(1.15)
        }
    }

    @keyframes progressBar {
        from {
            width: 0%
        }

        to {
            width: 100%
        }
    }

    @keyframes dotPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1
        }

        50% {
            transform: scale(1.4);
            opacity: 0.6
        }
    }

    .gradient-text {
        background: #16a34a;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .gradient-hero {
        background: #f0fdf4;
    }

    .btn-green {
        background: #16a34a;
        transition: all 0.3s ease;
    }

    .btn-green:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(22, 163, 74, 0.35);
    }

    .btn-orange {
        background: #f97316;
        transition: all 0.3s ease;
    }

    .btn-orange:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(249, 115, 22, 0.35);
    }

    .btn-nav-download {
        position: relative;
        overflow: hidden;
        background: #16a34a;
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
        box-shadow: 0 12px 30px rgba(22, 163, 74, 0.5);
        animation: none;
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
    }

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

    #scrollArrow svg {
        animation: bounceFade 1.5s ease-in-out infinite;
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

    .reveal-left {
        opacity: 0;
        transform: translateX(-50px);
        transition: all 0.8s ease-out;
    }

    .reveal-left.active {
        opacity: 1;
        transform: translateX(0);
    }

    .reveal-right {
        opacity: 0;
        transform: translateX(50px);
        transition: all 0.8s ease-out;
    }

    .reveal-right.active {
        opacity: 1;
        transform: translateX(0);
    }

    /* ===== LEFT SIDEBAR ANIMATED TABS ===== */
    .sidebar-tab {
        position: relative;
        cursor: pointer;
        padding: 14px 18px;
        border-radius: 14px;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 2px solid transparent;
    }

    .sidebar-tab:hover {
        transform: translateX(6px);
    }

    .sidebar-tab.active {
        background: rgba(22, 163, 74, 0.12);
        border-color: rgba(22, 163, 74, 0.3);
        transform: translateX(8px);
    }

    html.dark .sidebar-tab.active {
        background: rgba(22, 163, 74, 0.15);
        border-color: rgba(22, 163, 74, 0.4);
    }

    .sidebar-tab .tab-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .sidebar-tab.active .tab-dot {
        animation: dotPulse 1.5s ease-in-out infinite;
    }

    .sidebar-tab .tab-bar {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 0;
        border-radius: 0 4px 4px 0;
        background: #16a34a;
        transition: height 0.3s ease;
    }

    .sidebar-tab.active .tab-bar {
        height: 60%;
    }

    /* ===== RESOURCE CARDS ===== */
    .resource-card {
        border-radius: 22px;
        border: 1.5px solid #e5e7eb;
        background: white;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        display: none;
    }

    html.dark .resource-card {
        background: #1e2535;
        border-color: #2d3748;
    }

    .resource-card.visible {
        display: block;
        animation: cardIn 0.5s ease forwards;
    }

    .resource-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
    }

    html.dark .resource-card:hover {
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    }

    .resource-card .card-accent {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: #16a34a;
    }

    .category-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 99px;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    /* ===== READ MODAL ===== */
    .modal-overlay {
        position: fixed;
        inset: 0;
        z-index: 200;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(8px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .modal-overlay.open {
        opacity: 1;
        pointer-events: all;
    }

    .modal-box {
        background: white;
        border-radius: 28px;
        max-width: 700px;
        width: 100%;
        max-height: 85vh;
        overflow-y: auto;
        position: relative;
        transform: scale(0.9) translateY(30px);
        transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 40px 100px rgba(0, 0, 0, 0.25);
    }

    html.dark .modal-box {
        background: #1e2535;
    }

    .modal-overlay.open .modal-box {
        transform: scale(1) translateY(0);
    }

    /* ===== PROPOSE FORM ===== */
    .form-input {
        width: 100%;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 12px 16px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-input:focus {
        border-color: #16a34a;
        box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.15);
    }

    html.dark .form-input {
        background: #141824;
        border-color: #2d3748;
        color: #e2e8f0;
    }

    /* ===== BG DECORATION ===== */
    .bg-circle {
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
        opacity: 0.35;
        z-index: 0;
    }

    /* ===== FILTER TABS (top) ===== */
    .filter-tab {
        padding: 8px 20px;
        border-radius: 99px;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid #e5e7eb;
        background: white;
        color: #6b7280;
    }

    html.dark .filter-tab {
        background: #1e2535;
        border-color: #2d3748;
        color: #94a3b8;
    }

    .filter-tab.active {
        background: #16a34a;
        border-color: transparent;
        color: white;
        box-shadow: 0 4px 15px rgba(22, 163, 74, 0.3);
    }

    .filter-tab:hover:not(.active) {
        border-color: #16a34a;
        color: #16a34a;
        transform: translateY(-2px);
    }

    /* ===== FLOATING ICONS LEFT ===== */
    .float-icon {
        animation: float 4s ease-in-out infinite;
    }

    .float-icon:nth-child(2) {
        animation-delay: -1s;
    }

    .float-icon:nth-child(3) {
        animation-delay: -2s;
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

        footer .container>.flex>a:first-child {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        footer .container>.flex>div.flex-1 .flex {
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            justify-content: center !important;
            gap: 12px !important;
        }
    }

    @keyframes ticker {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
    </style>
</head>

<body class="bg-white text-gray-800 dark:bg-[#0f1117] dark:text-slate-200">

    <!-- DARK MODE TOGGLE -->
    <button id="themeToggle" aria-label="Basculer le mode sombre">
        <span id="themeIcon" style="font-size:1.1rem;">🌙</span>
    </button>

    <!-- SCROLL ARROW -->
    <button id="scrollArrow" aria-label="Défiler" class="btn-green text-white">
        <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- READ MODAL -->
    <div class="modal-overlay" id="readModal">
        <div class="modal-box">
            <div class="sticky top-0 z-10 flex items-center justify-between px-7 pt-7 pb-4 border-b border-gray-100 dark:border-gray-700"
                style="background:inherit;">
                <div>
                    <div id="modalBadge" class="category-badge mb-2"></div>
                    <h2 id="modalTitle" class="text-xl font-extrabold dark:text-slate-100 leading-tight pr-8"></h2>
                    <div id="modalDate" class="text-xs text-gray-400 dark:text-slate-500 mt-1"></div>
                </div>
                <button id="closeModal"
                    class="absolute top-6 right-6 w-9 h-9 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center hover:bg-red-100 dark:hover:bg-red-900/40 transition">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div id="modalContent"
                class="px-7 py-6 text-gray-700 dark:text-slate-300 leading-relaxed text-base space-y-4">
                <!-- injected by JS -->
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
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
    <!-- HERO SECTION -->
    <section class="relative pt-28 pb-16 overflow-hidden gradient-hero dark:bg-none dark:bg-[#0f1117]">
        <div class="bg-circle bg-dizo-green w-72 h-72 -top-20 -left-20 opacity-30 dark:opacity-15"></div>
        <div class="bg-circle bg-dizo-orange w-64 h-64 top-10 right-0 opacity-25 dark:opacity-10"></div>
        <div class="container mx-auto px-4 lg:px-10 relative z-10">
            <div class="text-center max-w-3xl mx-auto reveal">
                <span
                    class="inline-block bg-white/70 dark:bg-white/10 backdrop-blur-sm text-dizo-green px-5 py-2 rounded-full font-bold text-sm mb-5 border border-green-200 dark:border-green-800">
                    📚 BIBLIOTHÈQUE SCIENTIFIQUE
                </span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5">
                    Ressources <span class="text-orange-500 font-bold">Santé & Marche</span>

                </h1>
                <p class="text-base sm:text-lg text-gray-600 dark:text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    Retrouvez ici une sélection de ressources scientifiques, pratiques et pédagogiques sur la marche,
                    l'activité physique et la prévention des maladies non transmissibles. Vous pouvez également
                    contribuer en partageant vos ressources ou vos travaux.
                </p>
            </div>
        </div>
    </section>



    <!-- MAIN CONTENT -->
    <section class="py-16 bg-white dark:bg-[#0f1117] relative overflow-hidden">
        <div class="bg-circle bg-dizo-green w-96 h-96 bottom-0 -right-40 opacity-10 dark:opacity-5"></div>

        <div class="container mx-auto px-4 lg:px-10 relative z-10">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-16">

                <!-- LEFT SIDEBAR -->
                <div class="lg:w-80 flex-shrink-0 reveal-left">
                    <div class="mb-3">
                        <p
                            class="text-xs font-bold text-gray-400 dark:text-slate-500 uppercase tracking-widest mb-3 px-1">
                            Sections</p>
                        <div class="flex flex-col gap-2">

                            <div class="sidebar-tab active" data-filter="all" onclick="setFilter('all')">
                                <div class="tab-bar"></div>
                                <div class="flex items-center gap-3">
                                    <div class="tab-dot" style="background:#000703"></div>
                                    <div>
                                        <div class="font-bold text-sm text-gray-800 dark:text-slate-200">Tout afficher
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-tab" data-filter="epidemiologie" onclick="setFilter('epidemiologie')">
                                <div class="tab-bar"></div>
                                <div class="flex items-center gap-3">
                                    <div class="tab-dot" style="background:#16a34a"></div>
                                    <div>
                                        <div class="font-bold text-sm text-gray-800 dark:text-slate-200">Épidémiologie
                                        </div>
                                        <div class="text-xs text-gray-400 dark:text-slate-500">24 novembre 2025</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-tab" data-filter="metabolisme" onclick="setFilter('metabolisme')">
                                <div class="tab-bar"></div>
                                <div class="flex items-center gap-3">
                                    <div class="tab-dot" style="background:#f97316"></div>
                                    <div>
                                        <div class="font-bold text-sm text-gray-800 dark:text-slate-200">Métabolisme et
                                            Endocrinologie</div>
                                        <div class="text-xs text-gray-400 dark:text-slate-500">24 novembre 2025</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-tab" data-filter="neuropsychologie"
                                onclick="setFilter('neuropsychologie')">
                                <div class="tab-bar"></div>
                                <div class="flex items-center gap-3">
                                    <div class="tab-dot" style="background:#16a34a"></div>
                                    <div>
                                        <div class="font-bold text-sm text-gray-800 dark:text-slate-200">
                                            Neuropsychologie</div>
                                        <div class="text-xs text-gray-400 dark:text-slate-500">24 novembre 2025</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-tab" data-filter="psychologie" onclick="setFilter('psychologie')">
                                <div class="tab-bar"></div>
                                <div class="flex items-center gap-3">
                                    <div class="tab-dot" style="background:#f97316"></div>
                                    <div>
                                        <div class="font-bold text-sm text-gray-800 dark:text-slate-200">Psychologie
                                            Social</div>
                                        <div class="text-xs text-gray-400 dark:text-slate-500">24 novembre 2025</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Floating decorative icons -->
                    <div class="hidden lg:flex flex-col items-center gap-4 mt-10 opacity-40 dark:opacity-20">
                        <div class="float-icon text-4xl">🏃‍♂️</div>
                        <div class="float-icon text-3xl">🧬</div>
                        <div class="float-icon text-4xl">🧠</div>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="flex-1">
                    <!-- Cards grid -->
                    <div id="cardsGrid" class="flex flex-col gap-6">

                        <!-- CARD 1 -->
                        <div class="resource-card visible reveal" data-category="epidemiologie" id="res1">
                            <div class="card-accent" style="background:#16a34a;"></div>
                            <div class="p-7">
                                <div class="flex flex-wrap items-start justify-between gap-4 mb-5">
                                    <div class="flex-1">
                                        <div class="category-badge mb-3"
                                            style="background:rgba(22,163,74,0.1);color:#16a34a;">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z" />
                                            </svg>
                                            Épidémiologie
                                        </div>
                                        <h3
                                            class="text-lg sm:text-xl font-extrabold text-gray-900 dark:text-slate-100 leading-tight">
                                            <a href="https://www.dizonli.com/analyse-de-la-mortalite/" target="_blank"
                                                class="hover:text-dizo-green transition-colors">
                                                Au-delà du mythe des 10 000 pas : Une analyse de la mortalité toutes
                                                causes confondues
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-green-100 dark:bg-green-900/40 flex items-center justify-center"
                                        style="animation:iconBounce 3s ease-in-out infinite;">
                                        <svg class="w-6 h-6 text-dizo-green" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-5 line-clamp-3">
                                    Cette analyse approfondie remet en question le seuil arbitraire de 10 000 pas, en
                                    examinant les données épidémiologiques sur la mortalité toutes causes confondues. Le
                                    texte complet sera disponible après publication de l'article.
                                </p>
                                <div class="flex items-center justify-between flex-wrap gap-3">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 dark:text-slate-500">
                                        <span id="date1" class="font-medium"></span>
                                    </div>
                                    <button onclick="openModal('res1')"
                                        class="btn-green text-white px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2 group">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span>Lire</span>
                                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 2 -->
                        <div class="resource-card visible reveal" data-category="metabolisme" id="res2"
                            style="transition-delay:0.1s;">
                            <div class="card-accent" style="background:#f97316;"></div>
                            <div class="p-7">
                                <div class="flex flex-wrap items-start justify-between gap-4 mb-5">
                                    <div class="flex-1">
                                        <div class="category-badge mb-3"
                                            style="background:rgba(249,115,22,0.1);color:#f97316;">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M16,4C18.21,4 20,5.79 20,8C20,10.21 18.21,12 16,12C13.79,12 12,10.21 12,8C12,5.79 13.79,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M9,5C10.66,5 12,6.34 12,8C12,9.66 10.66,11 9,11C7.34,11 6,9.66 6,8C6,6.34 7.34,5 9,5M9,12C10.07,12 11.09,12.13 12,12.36C10.78,13.74 10,15.79 10,18V20H0V18C0,15.79 4.03,14 9,14V12Z" />
                                            </svg>
                                            Métabolisme
                                        </div>
                                        <h3
                                            class="text-lg sm:text-xl font-extrabold text-gray-900 dark:text-slate-100 leading-tight">
                                            Dynamique de Groupe et Adhérence Comportementale : L'Avantage des "Walking
                                            Groups"
                                        </h3>
                                    </div>
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-orange-100 dark:bg-orange-900/40 flex items-center justify-center"
                                        style="animation:iconBounce 3.5s ease-in-out infinite; animation-delay:-0.8s;">
                                        <svg class="w-6 h-6 text-dizo-orange" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-5 line-clamp-3">
                                    Cette étude analyse comment les dynamiques de groupe influencent l'adhérence aux
                                    comportements de marche sur le long terme, en s'appuyant sur les principes de la
                                    psychologie sociale et des sciences comportementales.
                                </p>
                                <div class="flex items-center justify-between flex-wrap gap-3">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 dark:text-slate-500">
                                        <span id="date2" class="font-medium"></span>
                                    </div>
                                    <button onclick="openModal('res2')"
                                        class="btn-orange text-white px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2 group">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span>Lire</span>
                                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 3 -->
                        <div class="resource-card visible reveal" data-category="neuropsychologie" id="res3"
                            style="transition-delay:0.2s;">
                            <div class="card-accent" style="background:#16a34a;"></div>
                            <div class="p-7">
                                <div class="flex flex-wrap items-start justify-between gap-4 mb-5">
                                    <div class="flex-1">
                                        <div class="category-badge mb-3"
                                            style="background:rgba(22,163,74,0.1);color:#16a34a;">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 17.93V18a1 1 0 0 0-2 0v1.93A8 8 0 0 1 4.07 13H6a1 1 0 0 0 0-2H4.07A8 8 0 0 1 11 4.07V6a1 1 0 0 0 2 0V4.07A8 8 0 0 1 19.93 11H18a1 1 0 0 0 0 2h1.93A8 8 0 0 1 13 19.93z" />
                                            </svg>
                                            Neuropsychologie
                                        </div>
                                        <h3
                                            class="text-lg sm:text-xl font-extrabold text-gray-900 dark:text-slate-100 leading-tight">
                                            <a href="https://www.dizonli.com/regulation-glycemique/" target="_blank"
                                                class="hover:text-dizo-green transition-colors">
                                                La Régulation Glycémique Postprandiale : L'Impact de la Marche sur le
                                                Diabète de Type 2
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center bg-green-100 dark:bg-green-900/40"
                                        style="animation:iconBounce 4s ease-in-out infinite; animation-delay:-1.5s;">
                                        <svg class="w-6 h-6 text-dizo-green" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M11 2v2.07A8.001 8.001 0 0 0 4.07 11H2v2h2.07A8.001 8.001 0 0 0 11 19.93V22h2v-2.07A8.001 8.001 0 0 0 19.93 13H22v-2h-2.07A8.001 8.001 0 0 0 13 4.07V2h-2zm1 4a6 6 0 1 1 0 12A6 6 0 0 1 12 6zm0 2a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm0 2a2 2 0 1 1 0 4 2 2 0 0 1 0-4z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-5 line-clamp-3">
                                    Une revue complète des mécanismes physiologiques par lesquels la marche
                                    postprandiale régule la glycémie chez les patients diabétiques de type 2, avec des
                                    implications cliniques pour les professionnels de santé.
                                </p>
                                <div class="flex items-center justify-between flex-wrap gap-3">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 dark:text-slate-500">
                                        <span id="date3" class="font-medium"></span>
                                    </div>
                                    <button onclick="openModal('res3')"
                                        class="btn-green text-white px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2 group transition hover:-translate-y-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span>Lire</span>
                                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 4 -->
                        <div class="resource-card visible reveal" data-category="psychologie" id="res4"
                            style="transition-delay:0.3s;">
                            <div class="card-accent" style="background:#f97316;"></div>
                            <div class="p-7">
                                <div class="flex flex-wrap items-start justify-between gap-4 mb-5">
                                    <div class="flex-1">
                                        <div class="category-badge mb-3"
                                            style="background:rgba(249,115,22,0.1);color:#f97316;">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zm1-11h-2v3H8v2h3v3h2v-3h3v-2h-3V8z" />
                                            </svg>
                                            Psychologie
                                        </div>
                                        <h3
                                            class="text-lg sm:text-xl font-extrabold text-gray-900 dark:text-slate-100 leading-tight">
                                            <a href="https://www.dizonli.com/effet-neuroprotecteur/" target="_blank"
                                                class="hover:text-dizo-orange transition-colors">
                                                L'Effet Neuroprotecteur de la Marche : Mécanismes Biologiques et
                                                Prévention de la Dépression
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center bg-orange-100 dark:bg-orange-900/40"
                                        style="animation:iconBounce 3.2s ease-in-out infinite; animation-delay:-2.2s;">
                                        <svg class="w-6 h-6 text-dizo-orange" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2a9 9 0 0 0-9 9c0 3.6 2.1 6.7 5.1 8.2L9 21h6l.9-1.8C18.9 17.7 21 14.6 21 11a9 9 0 0 0-9-9zm0 2c3.86 0 7 3.14 7 7 0 2.83-1.67 5.28-4.1 6.46l-.56.27L13.87 19h-3.73l-.47-1.27-.56-.27C6.67 16.28 5 13.83 5 11c0-3.86 3.14-7 7-7zm-1 3v5H9l3 4 3-4h-2V7h-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-5 line-clamp-3">
                                    Une synthèse des données neuroscientifiques sur les effets neuroprotecteurs de la
                                    marche régulière, couvrant les mécanismes moléculaires impliqués dans la
                                    neurogenèse, la régulation du cortisol et la prévention des troubles dépressifs.
                                </p>
                                <div class="flex items-center justify-between flex-wrap gap-3">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 dark:text-slate-500">
                                        <span id="date4" class="font-medium"></span>
                                    </div>
                                    <button onclick="openModal('res4')"
                                        class="btn-orange text-white px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2 group transition hover:-translate-y-0.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span>Lire</span>
                                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Empty state -->
                        <div id="emptyState" class="hidden text-center py-16">
                            <div class="text-6xl mb-4">🔍</div>
                            <h3 class="text-xl font-bold text-gray-500 dark:text-slate-400">Aucune ressource dans cette
                                catégorie</h3>
                            <p class="text-gray-400 dark:text-slate-500 text-sm mt-2">Sélectionnez une autre catégorie
                                ou revenez bientôt.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPOSER UNE RESSOURCE -->
    <section
        class="py-16 bg-green-50 dark:from-[#0d1a0f] dark:via-[#0f1117] dark:to-[#0d1a0f] relative overflow-hidden">
        <div class="bg-circle bg-dizo-green w-72 h-72 -top-20 -left-20 opacity-20"></div>
        <div class="bg-circle bg-dizo-green w-64 h-64 bottom-0 right-0 opacity-15"></div>

        <div class="container mx-auto px-4 lg:px-10 relative z-10">
            <div class="max-w-3xl mx-auto reveal">

                <!-- CTA Banner -->
                <div class="text-center mb-10">
                    <button id="openProposeForm"
                        class="inline-flex items-center gap-3 text-white font-bold text-lg px-8 py-4 rounded-2xl shadow-xl transition-all hover:-translate-y-1 hover:shadow-2xl"
                        style="background:#f97316;">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        Proposer une ressource
                    </button>
                </div>

                <!-- Appel à contribution card -->
                <div class="rounded-3xl overflow-hidden shadow-xl border border-green-100 dark:border-green-900">
                    <div class="p-1" style="background:#16a34a;">
                        <div class="bg-white dark:bg-[#1e2535] rounded-2xl p-7 sm:p-10">
                            <div class="flex flex-col sm:flex-row items-start gap-6">
                                <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg"
                                    style="background:#16a34a;">
                                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="inline-block text-xs font-bold uppercase tracking-widest mb-2"
                                        style="color:#f97316;">Appel à contribution</span>
                                    <h3
                                        class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-slate-100 mb-3">
                                        Partagez votre expertise
                                    </h3>
                                    <p class="text-gray-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed">
                                        Vous êtes médecin, chercheur ou spécialiste de santé publique ? Contribuez à la
                                        bibliothèque DIZONLI en envoyant vos ressources. Chaque contribution enrichit la
                                        communauté et favorise la promotion de la santé par la marche.
                                    </p>
                                    <div class="flex flex-wrap gap-3 mt-5">
                                        <span
                                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-green-50 dark:bg-green-900/30 text-dizo-green">📄
                                            Articles scientifiques</span>
                                        <span
                                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-orange-50 dark:bg-orange-900/30 text-dizo-orange">📊
                                            Études de cas</span>
                                        <span
                                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-green-50 dark:bg-green-900/30 text-dizo-green">🧠
                                            Guides pratiques</span>
                                        <span
                                            class="text-xs font-semibold px-3 py-1.5 rounded-full bg-orange-50 dark:bg-orange-900/30 text-dizo-orange">📁
                                            PDF téléchargeables</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Propose Form (hidden by default) -->
                <div id="proposeFormWrap"
                    class="hidden mt-8 bg-white dark:bg-[#1e2535] rounded-3xl p-7 sm:p-10 shadow-xl border border-gray-100 dark:border-[#2d3748]">
                    <h3 class="text-xl font-extrabold dark:text-slate-100 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-dizo-green" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zm-3-7h-2v2h-2v-2H9v-2h2v-2h2v2h2v2z" />
                        </svg>
                        Soumettre une ressource
                    </h3>
                    <div id="proposeFormInner">
                        <div class="grid sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 dark:text-slate-300 mb-1.5">Nom
                                    / Prénom *</label>
                                <input type="text" id="pNom" class="form-input" placeholder="Dr. Koffi Amavi">
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-semibold text-gray-700 dark:text-slate-300 mb-1.5">Institution
                                    / Spécialité</label>
                                <input type="text" id="pInstitution" class="form-input"
                                    placeholder="CHU de Cotonou, Cardiologie">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-slate-300 mb-1.5">Email
                                *</label>
                            <input type="email" id="pEmail" class="form-input" placeholder="votre@email.com">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-slate-300 mb-1.5">Titre de
                                la ressource *</label>
                            <input type="text" id="pTitre" class="form-input"
                                placeholder="Titre de votre article ou guide">
                        </div>
                        <div class="mb-4">
                            <label
                                class="block text-sm font-semibold text-gray-700 dark:text-slate-300 mb-1.5">Catégorie</label>
                            <select id="pCategorie" class="form-input">
                                <option value="">Sélectionner une catégorie</option>
                                <option value="epidemiologie">Épidémiologie</option>
                                <option value="metabolisme">Métabolisme</option>
                                <option value="neuropsychologie">Neuropsychologie</option>
                                <option value="psychologie">Psychologie</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-slate-300 mb-1.5">Résumé
                                ou description *</label>
                            <textarea id="pResume" rows="4" class="form-input resize-none"
                                placeholder="Décrivez brièvement votre ressource…"></textarea>
                        </div>
                        <div id="proposeError"
                            class="hidden bg-red-50 dark:bg-red-900/30 text-red-600 dark:text-red-400 text-sm px-4 py-3 rounded-xl mb-4">
                        </div>
                        <div class="flex gap-3 flex-wrap">
                            <button id="submitPropose"
                                class="btn-green text-white px-7 py-3 rounded-xl font-bold text-sm flex items-center gap-2 group flex-1 justify-center">
                                <span>Envoyer ma contribution</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </button>
                            <button onclick="document.getElementById('proposeFormWrap').classList.add('hidden')"
                                class="px-7 py-3 rounded-xl font-bold text-sm border-2 border-gray-200 dark:border-gray-600 text-gray-600 dark:text-gray-300 hover:border-red-300 hover:text-red-500 transition flex-shrink-0">
                                Annuler
                            </button>
                        </div>
                    </div>
                    <div id="proposeSuccess" class="hidden text-center py-8">
                        <div class="text-6xl mb-4">🎉</div>
                        <h4 class="text-xl font-bold dark:text-slate-100 mb-2">Merci pour votre contribution !</h4>
                        <p class="text-gray-500 dark:text-slate-400 text-sm">Votre ressource a bien été transmise à
                            l'équipe DIZONLI. Elle sera examinée et publiée après validation.</p>
                        <button id="newPropose"
                            class="mt-5 btn-orange text-white px-6 py-2.5 rounded-full font-semibold text-sm">Proposer
                            une autre ressource</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

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

    <!-- FOOTER -->
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

    <script>
    // =====================
    // DARK MODE
    // =====================
    const html = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const saved = localStorage.getItem('dizonli-theme') ||
        (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    if (saved === 'dark') {
        html.classList.add('dark');
        themeIcon.textContent = '☀️';
    }
    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        themeIcon.textContent = isDark ? '☀️' : '🌙';
        localStorage.setItem('dizonli-theme', isDark ? 'dark' : 'light');
    });

    // =====================
    // NAVBAR
    // =====================
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => navbar.classList.toggle('navbar-scrolled', window.scrollY > 50));
    document.getElementById('mobileMenuBtn').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.add('active'));
    document.getElementById('closeMobileMenu').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.remove('active'));

    // =====================
    // SCROLL ARROW
    // =====================
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

    // =====================
    // REVEAL
    // =====================
    const revObs = new IntersectionObserver(entries =>
        entries.forEach(e => {
            if (e.isIntersecting) e.target.classList.add('active');
        }), {
            threshold: 0.08
        });
    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(r => revObs.observe(r));

    // =====================
    // FILTER LOGIC
    // =====================
    let currentFilter = 'all';

    function setFilter(filter) {
        currentFilter = filter;

        document.querySelectorAll('.sidebar-tab').forEach(t =>
            t.classList.toggle('active', t.dataset.filter === filter));

        document.querySelectorAll('.filter-tab').forEach(t =>
            t.classList.toggle('active', t.dataset.filter === filter));

        const cards = document.querySelectorAll('.resource-card');
        let visible = 0;
        cards.forEach(card => {
            const match = filter === 'all' || card.dataset.category === filter;
            card.classList.remove('visible');
            if (match) {
                setTimeout(() => card.classList.add('visible'), 20);
                visible++;
            }
        });

        document.getElementById('emptyState').classList.toggle('hidden', visible > 0);
    }

    // =====================
    // MODAL DATA
    // =====================
    const modalData = {
        res1: {
            title: 'Au-delà du mythe des 10 000 pas : Une analyse de la mortalité toutes causes confondues',
            badge: {
                label: 'Épidémiologie',
                color: '#16a34a',
                bg: 'rgba(22,163,74,0.1)'
            },
            content: `<p class="text-gray-900 dark:text-slate-500 italic text-sm text-center py-8">📝 L'objectif des « 10 000 pas par jour » est ancré dans la culture populaire, mais son origine est marketing (un podomètre japonais des années 1960) plutôt que scientifique. Récemment, la communauté scientifique s'est attelée à définir avec précision la quantité optimale de marche nécessaire pour maximiser la longévité, à travers des études de cohortes à grande échelle.

Analyse des cohortes internationales
Une méta-analyse majeure publiée dans The Lancet Public Health a regroupé les données de 15 études couvrant près de 50 000 adultes sur quatre continents. 
L'objectif était de déterminer le point d'inflexion où les bénéfices de la marche sur le risque de mortalité plafonnent.
L'étude a révélé une corrélation inverse forte : plus le nombre de pas augmente, plus le risque de mortalité diminue, mais jusqu'à un certain seuil.

La stratification par âge
Les résultats montrent une distinction claire selon l'âge :

Pour les plus de 60 ans : Le risque de mortalité diminue progressivement jusqu'à atteindre un plateau entre 6 000 et 8 000 pas par jour. Au-delà, les bénéfices supplémentaires sur la longévité sont marginaux.

Pour les moins de 60 ans : Le plateau se situe plus haut, entre 8 000 et 10 000 pas par jour.

Ces données permettent de fixer des objectifs de santé publique plus réalistes et personnalisés.
 L'intensité de la marche (la cadence) apporte des bénéfices cardiovasculaires additionnels, mais le volume total reste le prédicteur le plus fiable de la survie.
 Le message scientifique est clair : chaque pas additionnel compte, bien avant d'atteindre la barre symbolique des 10 000.</p>`
        },
        res2: {
            title: 'Dynamique de Groupe et Adhérence Comportementale : L\'Avantage des "Walking Groups"',
            badge: {
                label: 'Métabolisme',
                color: '#f97316',
                bg: 'rgba(249,115,22,0.1)'
            },
            content: `<p class="text-gray-900 dark:text-slate-500 italic text-sm text-center py-8">📝 L'un des défis majeurs des politiques de santé est l'adhérence : comment faire en sorte que les individus maintiennent une activité physique sur le long terme ? La motivation individuelle s'épuise souvent après quelques semaines. La psychologie sociale examine comment les structures communautaires, telles que les groupes de marche, influencent la persévérance et le bien-être psychosocial.

 

Le mécanisme de la contagion sociale positive
Une revue systématique du British Journal of Sports Medicine a analysé l'efficacité des groupes de marche. Les résultats indiquent que les participants à des groupes structurés présentent des taux de rétention nettement supérieurs à ceux pratiquant la marche individuelle. Ce phénomène repose sur la théorie de l'autodétermination : le groupe satisfait le besoin fondamental de « connexion sociale » (relatedness).
La responsabilité partagée (« accountability ») crée une pression sociale positive : on ne marche plus seulement pour soi, mais pour ne pas faire défaut au groupe.

 

Bénéfices psychosociaux
Au-delà de la santé physique (réduction de la pression artérielle, du tour de taille), les membres de groupes de marche rapportent une diminution significative du sentiment de solitude et d'isolement social. Or, l'isolement est un facteur de comorbidité puissant dans les troubles anxieux et les rechutes addictives. Le groupe agit comme un « échafaudage social » (social scaffolding) qui soutient l'individu dans les moments de baisse de motivation.

 

L'approche communautaire transforme une activité physique en un rituel social. Les données suggèrent que pour maximiser l'impact de la marche sur la santé publique, il faut promouvoir non seulement l'activité elle-même, mais aussi le contexte social dans lequel elle s'exerce.</p>`
        },
        res3: {
            title: 'La Régulation Glycémique Postprandiale : L\'Impact de la Marche sur le Diabète de Type 2',
            badge: {
                label: 'Neuropsychologie',
                color: '#16a34a',
                bg: 'rgba(22,163,74,0.1)'
            },
            content: `<p class="text-gray-900 dark:text-slate-500 italic text-sm text-center py-8">📝 La gestion de la glycémie (taux de sucre dans le sang) est un enjeu de santé publique mondial. Les pics de glucose qui surviennent après les repas (hyperglycémie postprandiale) sont particulièrement dommageables pour les vaisseaux sanguins et constituent un précurseur du diabète de type 2. De nouvelles recherches en physiologie de l'exercice suggèrent que le « timing » de l'activité physique est aussi important que sa durée.

Le rôle du muscle soléaire
Le muscle soléaire, situé dans le mollet, possède des propriétés métaboliques uniques. Contrairement à d'autres muscles qui utilisent principalement le glycogène stocké, le soléaire est capable de puiser directement dans le glucose et les graisses circulant dans le sang pour fonctionner, et ce, pendant des heures sans fatigue.
La marche active ce « moteur métabolique ». Une étude publiée dans Sports Medicine a comparé les effets de la position assise prolongée versus de courtes périodes de marche légère après les repas.

Les données physiologiques
Les résultats sont sans appel : une marche de 2 à 5 minutes entreprise dans les 60 minutes suivant un repas lisse significativement la courbe glycémique. Les chercheurs ont observé une réduction des pics d'insuline et de glucose allant jusqu'à 17% par rapport au groupe témoin sédentaire. Ce phénomène s'explique par l'augmentation de la perméabilité membranaire des cellules musculaires au glucose, un processus indépendant de la sécrétion d'insuline.

 

L'intégration de « micro-sessions » de marche post-repas est une stratégie efficace pour améliorer la sensibilité à l'insuline. Il ne s'agit pas de brûler des calories massivement, mais d'activer la machinerie cellulaire au moment où le corps en a le plus besoin pour réguler son métabolisme.</p>`
        },
        res4: {
            title: 'L\'Effet Neuroprotecteur de la Marche : Mécanismes Biologiques et Prévention de la Dépression',
            badge: {
                label: 'Psychologie',
                color: '#f97316',
                bg: 'rgba(249,115,22,0.1)'
            },
            content: `<p class="text-gray-900 dark:text-slate-500 italic text-sm text-center py-8">📝 La sédentarité est désormais reconnue comme un facteur de risque majeur non seulement pour les maladies cardiovasculaires, mais aussi pour les troubles psychiatriques. Dans le contexte de la santé mentale et du rétablissement, l'activité physique n'est plus considérée comme un simple loisir, mais comme une intervention thérapeutique. Une méta-analyse récente publiée dans le JAMA Psychiatry a mis en lumière la relation dose-réponse entre le volume d'activité physique et l'incidence de la dépression majeure.

La plasticité cérébrale et le BDNF
Le mécanisme clé réside dans la neuroplasticité. L'exercice aérobie modéré, tel que la marche rapide, stimule la production d'une protéine essentielle : le facteur neurotrophique dérivé du cerveau (BDNF).
Le BDNF agit comme un « engrais » pour les neurones, favorisant la neurogenèse (création de nouvelles cellules) et la synaptogenèse (création de nouvelles connexions), particulièrement dans l'hippocampe. Cette région du cerveau, responsable de la mémoire et de la régulation émotionnelle, est souvent atrophiée chez les patients souffrant de dépression chronique ou de troubles liés à l'usage de substances.

Résultats cliniques : le seuil d'efficacité
L'analyse des données portant sur plus de 190 000 participants démontre qu'il n'est pas nécessaire d'atteindre l'épuisement pour obtenir des résultats. Un volume d'activité équivalent à 2,5 heures de marche rapide par semaine (soit environ 20 minutes par jour) est associé à une réduction de 25 % du risque de dépression. Au-delà de ce seuil, les bénéfices continuent d'augmenter, mais c'est le passage de « rien » à « un peu » qui offre le gain thérapeutique le plus spectaculaire.


La marche agit comme un antidépresseur endogène en modulant la chimie cérébrale et en réduisant l'inflammation systémique. Pour les programmes de santé publique, elle représente une stratégie préventive de premier ordre, accessible et sans effets secondaires indésirables.</p>`
        }
    };

    // =====================
    // OPEN / CLOSE MODAL
    // =====================
    function openModal(id) {
        const data = modalData[id];
        if (!data) return;

        document.getElementById('modalTitle').textContent = data.title;
        document.getElementById('modalDate').textContent = data.date || '';

        const badge = document.getElementById('modalBadge');
        badge.textContent = data.badge.label;
        badge.style.background = data.badge.bg;
        badge.style.color = data.badge.color;

        document.getElementById('modalContent').innerHTML = data.content;

        document.getElementById('readModal').classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    document.getElementById('closeModal').addEventListener('click', closeModal);
    document.getElementById('readModal').addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeModal();
    });

    function closeModal() {
        document.getElementById('readModal').classList.remove('open');
        document.body.style.overflow = '';
    }

    // =====================
    // PROPOSE FORM
    // =====================
    document.getElementById('openProposeForm').addEventListener('click', () => {
        const wrap = document.getElementById('proposeFormWrap');
        wrap.classList.toggle('hidden');
        if (!wrap.classList.contains('hidden')) {
            wrap.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });

    document.getElementById('submitPropose').addEventListener('click', () => {
        const nom = document.getElementById('pNom').value.trim();
        const email = document.getElementById('pEmail').value.trim();
        const titre = document.getElementById('pTitre').value.trim();
        const resume = document.getElementById('pResume').value.trim();
        const err = document.getElementById('proposeError');
        err.classList.add('hidden');

        if (!nom) {
            err.textContent = '⚠️ Veuillez entrer votre nom.';
            err.classList.remove('hidden');
            return;
        }
        if (!email || !email.includes('@')) {
            err.textContent = '⚠️ Veuillez entrer un email valide.';
            err.classList.remove('hidden');
            return;
        }
        if (!titre) {
            err.textContent = '⚠️ Veuillez entrer le titre de la ressource.';
            err.classList.remove('hidden');
            return;
        }
        if (resume.length < 20) {
            err.textContent = '⚠️ La description doit faire au moins 20 caractères.';
            err.classList.remove('hidden');
            return;
        }

        document.getElementById('proposeFormInner').classList.add('hidden');
        document.getElementById('proposeSuccess').classList.remove('hidden');
    });

    document.getElementById('newPropose').addEventListener('click', () => {
        ['pNom', 'pInstitution', 'pEmail', 'pTitre', 'pResume'].forEach(id =>
            document.getElementById(id).value = '');
        document.getElementById('pCategorie').value = '';
        document.getElementById('proposeSuccess').classList.add('hidden');
        document.getElementById('proposeFormInner').classList.remove('hidden');
    });
    </script>
</body>

</html>