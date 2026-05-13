<?php

?>

<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctionnalités - Dizonli</title>
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

    html.dark .dm-bg {
        background: #1a1f2e;
    }

    html.dark .dm-card {
        background: #1e2535;
        border-color: #2d3748;
    }

    html.dark .navbar-light {
        background: rgba(15, 17, 23, 0.9);
    }

    html.dark .footer-bg {
        background: #060810;
    }

    html.dark .feature-section-alt {
        background: #0d1a0f;
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
            transform: translateY(-15px)
        }
    }

    @keyframes floatSmall {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-8px)
        }
    }

    @keyframes walkAcross {
        0% {
            transform: translateX(-100px)
        }

        100% {
            transform: translateX(calc(100vw + 100px))
        }
    }

    @keyframes walk {

        0%,
        100% {
            transform: translateY(0) rotate(0deg)
        }

        50% {
            transform: translateY(-8px) rotate(2deg)
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(0.8);
            opacity: 0.8
        }

        100% {
            transform: scale(1.8);
            opacity: 0
        }
    }

    @keyframes bounceFade {

        0%,
        100% {
            transform: translateY(0);
            opacity: 1
        }

        50% {
            transform: translateY(8px);
            opacity: 0.6
        }
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    @keyframes reverse-spin {
        from {
            transform: rotate(360deg)
        }

        to {
            transform: rotate(0deg)
        }
    }

    @keyframes drawPath {
        to {
            stroke-dashoffset: 0
        }
    }

    @keyframes fillBar {
        from {
            width: 0%
        }

        to {
            width: var(--target, 80%)
        }
    }

    @keyframes popIn {
        0% {
            transform: scale(0);
            opacity: 0
        }

        60% {
            transform: scale(1.2);
            opacity: 1
        }

        100% {
            transform: scale(1);
            opacity: 1
        }
    }

    @keyframes countBounce {

        0%,
        100% {
            transform: scale(1)
        }

        50% {
            transform: scale(1.08)
        }
    }

    @keyframes confetti {
        0% {
            transform: translateY(-20px) rotate(0);
            opacity: 1
        }

        100% {
            transform: translateY(200px) rotate(720deg);
            opacity: 0
        }
    }

    @keyframes shine {
        0% {
            transform: translateX(-150%) skewX(-20deg)
        }

        100% {
            transform: translateX(250%) skewX(-20deg)
        }
    }

    @keyframes glowPulse {

        0%,
        100% {
            filter: drop-shadow(0 0 8px rgba(22, 163, 74, 0.5))
        }

        50% {
            filter: drop-shadow(0 0 20px rgba(22, 163, 74, 0.8))
        }
    }

    @keyframes glowPulseOrange {

        0%,
        100% {
            filter: drop-shadow(0 0 8px rgba(249, 115, 22, 0.5))
        }

        50% {
            filter: drop-shadow(0 0 20px rgba(249, 115, 22, 0.8))
        }
    }

    @keyframes heartBeat {

        0%,
        100% {
            transform: scale(1)
        }

        25% {
            transform: scale(1.15)
        }

        50% {
            transform: scale(1)
        }

        75% {
            transform: scale(1.1)
        }
    }

    @keyframes navBtnPulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.5), 0 0 0 0 rgba(22, 163, 74, 0.3);
        }

        50% {
            box-shadow: 0 0 0 6px rgba(249, 115, 22, 0), 0 0 0 12px rgba(22, 163, 74, 0);
        }
    }

    @keyframes shimmer {
        0% {
            transform: translateX(-100%) skewX(-15deg);
        }

        100% {
            transform: translateX(250%) skewX(-15deg);
        }
    }

    @keyframes floatPhone {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-10px)
        }
    }

    .gradient-hero {
        background: #dcfce7;
    }

    html.dark .gradient-hero {
        background: #0f2419;
    }

    .gradient-text {
        color: #16a34a;
    }

    .btn-green {
        background: #16a34a;
        transition: all 0.3s ease;
    }

    .btn-green:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(22, 163, 74, 0.4);
    }

    .btn-orange {
        background: #f97316;
        transition: all 0.3s ease;
    }

    .btn-orange:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(249, 115, 22, 0.4);
    }

    .walking-person {
        position: absolute;
        bottom: 20px;
        animation: walkAcross 18s linear infinite;
    }

    .walking-person .body {
        animation: walk 0.6s ease-in-out infinite;
    }

    .bg-circle {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.4;
        z-index: 0;
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

    .mobile-menu {
        transform: translateX(100%);
        transition: transform 0.3s ease;
    }

    .mobile-menu.active {
        transform: translateX(0);
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
        box-shadow: 0 12px 30px rgba(249, 115, 22, 0.5), 0 4px 12px rgba(22, 163, 74, 0.3);
        animation: none;
    }

    /* ===== FEATURE ILLUSTRATIONS ===== */
    .feature-illustration {
        position: relative;
        width: 100%;
        max-width: 420px;
        aspect-ratio: 1 / 1;
        margin: 0 auto;
    }

    .feature-illustration:hover .illus-float {
        animation-play-state: paused;
    }

    .illus-float {
        animation: float 4s ease-in-out infinite;
    }

    .illus-float-delay {
        animation: float 4s ease-in-out infinite;
        animation-delay: 1s;
    }

    .illus-bg-circle {
        position: absolute;
        inset: 10%;
        border-radius: 50%;
        background: rgba(22, 163, 74, 0.10);
    }

    html.dark .illus-bg-circle {
        background: rgba(22, 163, 74, 0.18);
    }

    .illus-ring {
        position: absolute;
        inset: 15%;
        border: 2px dashed rgba(22, 163, 74, 0.3);
        border-radius: 50%;
        animation: spin-slow 25s linear infinite;
    }

    .illus-ring-2 {
        position: absolute;
        inset: 5%;
        border: 2px dashed rgba(249, 115, 22, 0.25);
        border-radius: 50%;
        animation: reverse-spin 30s linear infinite;
    }

    .pulse-ring {
        position: absolute;
        inset: 20%;
        border: 3px solid #16a34a;
        border-radius: 50%;
        animation: pulseRing 2.5s ease-out infinite;
    }

    .pulse-ring-orange {
        position: absolute;
        inset: 20%;
        border: 3px solid #f97316;
        border-radius: 50%;
        animation: pulseRing 2.5s ease-out infinite;
        animation-delay: 1s;
    }

    /* ===== PHONE ===== */
    .illus-phone-wrap {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding-top: 30px;
        z-index: 10;
    }

    .mini-phone {
        width: 42%;
        aspect-ratio: 9/16;
        background: #1a1a1a;
        border-radius: 1.5rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        padding: 0.5rem;
        overflow: hidden;
        animation: floatPhone 4s ease-in-out infinite;
    }

    .mini-phone-screen {
        background: #111;
        border-radius: 1.2rem;
        height: 100%;
        padding: 0.5rem;
        display: flex;
        flex-direction: column;
    }

    .float-badge {
        position: absolute;
        background: white;
        border-radius: 1rem;
        padding: 0.6rem 0.9rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        display: flex;
        align-items: center;
        gap: 0.5rem;
        z-index: 5;
    }

    html.dark .float-badge {
        background: #1e2535;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    .check-list li {
        display: flex;
        align-items: flex-start;
        gap: 0.6rem;
        padding: 0.5rem 0;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.5s ease;
    }

    .check-list.active li {
        opacity: 1;
        transform: translateX(0);
    }

    .check-list.active li:nth-child(1) {
        transition-delay: 0.1s;
    }

    .check-list.active li:nth-child(2) {
        transition-delay: 0.2s;
    }

    .check-list.active li:nth-child(3) {
        transition-delay: 0.3s;
    }

    .check-list.active li:nth-child(4) {
        transition-delay: 0.4s;
    }

    .check-list.active li:nth-child(5) {
        transition-delay: 0.5s;
    }

    .check-list.active li:nth-child(6) {
        transition-delay: 0.6s;
    }

    .check-list .check-icon {
        flex-shrink: 0;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2px;
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
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
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

    .navbar-scrolled {
        backdrop-filter: blur(20px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .group-orbit {
        position: absolute;
        width: 100%;
        height: 100%;
        animation: spin-slow 20s linear infinite;
    }

    .group-avatar {
        position: absolute;
        width: 16%;
        aspect-ratio: 1;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 0.9rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        animation: reverse-spin 20s linear infinite;
    }

    .leaderboard {
        position: absolute;
        background: white;
        border-radius: 1rem;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        padding: 0.75rem;
        width: 60%;
    }

    html.dark .leaderboard {
        background: #1e2535;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
    }

    .leader-row {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.35rem 0;
        font-size: 0.75rem;
    }

    .leader-rank {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
        font-size: 0.7rem;
    }

    .badge-medal {
        position: absolute;
        width: 25%;
        aspect-ratio: 1;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .badge-medal::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        animation: shine 3s ease-in-out infinite;
    }

    .social-icon-link {
        width: 52px;
        height: 52px;
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .social-icon-link:hover {
        transform: translateY(-6px) scale(1.1);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
    }

    .social-icon-link::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(255, 255, 255, 0.15);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .social-icon-link:hover::before {
        opacity: 1;
    }

    .cta-card {
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .cta-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(22, 163, 74, 0.3);
    }

    @media (max-width:767px) {
        .hero-title-sub {
            font-size: 2.25rem !important;
        }

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

        footer .container>.flex>div.flex-1 .flex a {
            font-size: 0.7rem !important;
            white-space: nowrap;
        }

        footer .w-8.h-8 {
            width: 26px !important;
            height: 26px !important;
        }

        footer .w-8.h-8 svg {
            width: 12px !important;
            height: 12px !important;
        }
    }
    </style>
</head>

<body class="bg-white text-gray-800 dark:bg-[#0f1117] dark:text-slate-200">

    <button id="themeToggle" aria-label="Basculer le mode sombre"><span id="themeIcon">🌙</span></button>

    <button id="scrollArrow" aria-label="Défiler" class="btn-green text-white">
        <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </button>

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

    <!-- HERO -->
    <section class="relative overflow-hidden pt-32 pb-16 sm:pb-20 bg-white dark:bg-green-950">
        <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center">

            <h1 class="hero-title-sub text-4xl sm:text-5xl md:text-6xl font-extrabold mb-5 reveal">
                Tout ce qu'il faut pour <br class="hidden sm:block" />
                <span class="text-orange-600">marcher plus</span>
            </h1>
            <p class="text-base sm:text-lg text-gray-700 dark:text-slate-300 max-w-2xl mx-auto reveal">
                Découvrez les fonctionnalités qui rendent <strong>Dizonli</strong> unique : suivi intelligent,
                communautés engagées, événements collectifs et gamification motivante.
            </p>
        </div>
    </section>



    <!-- ============================================================
     FEATURE 1 — PODOMÈTRE INTELLIGENT
     ============================================================ -->
    <section class="py-16 sm:py-24 bg-white dark:bg-[#0f1117] relative overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- TEXT -->
                <div class="reveal-left order-2 lg:order-1">
                    <span class="">
                        <span class="w-2 h-2 rounded-full bg-dizo-green animate-pulse"></span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4 leading-tight">
                        Podomètre intelligent <br />
                        <span>& suivi quotidien</span>
                    </h2>
                    <p class="text-gray-600 dark:text-slate-400 text-base sm:text-lg leading-relaxed mb-6">
                        <strong>DIZONLI</strong> compte automatiquement vos pas grâce aux capteurs de votre smartphone
                        et synchronise vos données avec <strong class="text-dizo-green">Google Fit</strong> (Android) et
                        <strong class="text-dizo-orange">Apple Health</strong> (iOS). Suivez votre objectif quotidien,
                        vos statistiques journalières, hebdomadaires et mensuelles en un coup d'œil.
                    </p>
                    <ul class="check-list space-y-1">
                        <li>
                            <span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                            <span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Comptage automatique
                                des pas</span>
                        </li>
                        <li>
                            <span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                            <span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Synchronisation Google
                                Fit / Apple Health</span>
                        </li>
                        <li>
                            <span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                            <span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Objectifs journaliers
                                personnalisés</span>
                        </li>
                        <li>
                            <span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                            <span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Statistiques : jour,
                                semaine, mois</span>
                        </li>
                        <li>
                            <span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span>
                            <span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Distance parcourue &
                                calories brûlées</span>
                        </li>
                    </ul>
                </div>

                <!-- ILLUSTRATION -->
                <div class="reveal-right order-1 lg:order-2">
                    <div class="feature-illustration">
                        <div class="illus-bg-circle"></div>
                        <div class="illus-ring"></div>
                        <div class="illus-ring-2"></div>
                        <div class="pulse-ring"></div>

                        <div class="illus-phone-wrap">
                            <div class="mini-phone">
                                <div class="mini-phone-screen">
                                    <div class="flex justify-between items-center px-1 pb-1">
                                        <span class="text-white text-[9px] font-bold">08:20</span>
                                        <div class="flex items-center gap-0.5">
                                            <div class="w-0.5 h-2 bg-white rounded-sm"></div>
                                            <div class="w-0.5 h-2.5 bg-white rounded-sm"></div>
                                            <div class="w-0.5 h-3 bg-white rounded-sm"></div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-dizo-green rounded-xl p-2 flex-1 flex flex-col items-center justify-center">
                                        <svg class="w-6 h-6 text-white mb-1" viewBox="0 0 24 24" fill="currentColor"
                                            style="animation:walk 1s ease-in-out infinite;">
                                            <path
                                                d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7" />
                                        </svg>
                                        <div class="text-white font-black text-xl leading-none" id="feat1Steps">8 452
                                        </div>
                                        <div class="text-white/80 text-[8px] mt-0.5">/ 10 000 pas</div>
                                        <div class="w-full bg-white/30 rounded-full h-1 mt-2 overflow-hidden">
                                            <div id="feat1Bar" class="bg-white h-full rounded-full transition-all"
                                                style="width:84%"></div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-1 mt-2">
                                        <div class="bg-white/10 rounded p-1 text-center">
                                            <div class="text-white text-[8px] font-bold">5.2</div>
                                            <div class="text-white/60 text-[6px]">km</div>
                                        </div>
                                        <div class="bg-white/10 rounded p-1 text-center">
                                            <div class="text-white text-[8px] font-bold">42</div>
                                            <div class="text-white/60 text-[6px]">min</div>
                                        </div>
                                        <div class="bg-white/10 rounded p-1 text-center">
                                            <div class="text-white text-[8px] font-bold">320</div>
                                            <div class="text-white/60 text-[6px]">cal</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating badges -->
                        <div class="float-badge illus-float" style="top:10%; left:0%; animation-delay:0.5s;">
                            <div
                                class="w-8 h-8 rounded-lg bg-green-100 dark:bg-green-900/40 flex items-center justify-center">
                                <svg class="w-4 h-4 text-dizo-green" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Google Fit</div>
                                <div class="text-[11px] font-bold text-gray-800 dark:text-slate-200 leading-tight">
                                    Synchronisé</div>
                            </div>
                        </div>

                        <div class="float-badge illus-float-delay" style="bottom:12%; right:0%;">
                            <div
                                class="w-8 h-8 rounded-lg bg-orange-100 dark:bg-orange-900/40 flex items-center justify-center">
                                <svg class="w-4 h-4 text-dizo-orange" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.5.67s.74 2.65.74 4.8c0 2.06-1.35 3.73-3.41 3.73-2.07 0-3.63-1.67-3.63-3.73l.03-.36C5.21 7.51 4 10.62 4 14c0 4.42 3.58 8 8 8s8-3.58 8-8C20 8.61 17.41 3.8 13.5.67z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Calories</div>
                                <div class="text-[11px] font-bold text-dizo-orange leading-tight">+320 cal</div>
                            </div>
                        </div>

                        <div class="float-badge illus-float" style="top:45%; right:-5%; animation-delay:1.2s;">
                            <div
                                class="w-8 h-8 rounded-lg bg-green-100 dark:bg-green-900/40 flex items-center justify-center text-lg">
                                🎯</div>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Objectif</div>
                                <div class="text-[11px] font-bold text-dizo-green leading-tight">84%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     FEATURE 2 — GROUPES & COMMUNAUTÉS
     ============================================================ -->
    <section class="py-16 sm:py-24 feature-section-alt bg-green-50 dark:bg-[#0d1a0f] relative overflow-hidden">
        <div class="absolute top-10 left-10 text-7xl sm:text-9xl opacity-5">👥</div>
        <div class="absolute bottom-10 right-10 text-7xl sm:text-9xl opacity-5">🤝</div>
        <div class="container mx-auto px-4 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="reveal-left">
                    <div class="feature-illustration">
                        <div class="illus-bg-circle"></div>
                        <div class="illus-ring"></div>
                        <div class="pulse-ring-orange"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/3 
          aspect-square rounded-full bg-dizo-green flex items-center justify-center shadow-2xl 
          z-10 illus-float">
                            <svg class="w-1/2 h-1/2 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M16,4C18.21,4 20,5.79 20,8C20,10.21 18.21,12 16,12C13.79,12 12,10.21 12,8C12,5.79 13.79,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M9,5C10.66,5 12,6.34 12,8C12,9.66 10.66,11 9,11C7.34,11 6,9.66 6,8C6,6.34 7.34,5 9,5M9,12C10.07,12 11.09,12.13 12,12.36C10.78,13.74 10,15.79 10,18V20H0V18C0,15.79 4.03,14 9,14V12Z" />
                            </svg>
                        </div>
                        <div class="group-orbit">
                            <div class="group-avatar bg-dizo-green" style="top:2%; left:42%;">A</div>
                            <div class="group-avatar bg-dizo-orange" style="top:42%; right:2%;">S</div>
                            <div class="group-avatar bg-dizo-green" style="bottom:2%; left:42%;">J</div>
                            <div class="group-avatar bg-dizo-orange" style="top:42%; left:2%;">B</div>
                        </div>
                        <div class="float-badge illus-float" style="top:5%; right:-5%; animation-delay:0.3s;">
                            <span class="text-lg">🏛️</span>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Ministère</div>
                                <div class="text-[11px] font-bold text-gray-800 dark:text-slate-200 leading-tight">+250
                                    pas/j</div>
                            </div>
                        </div>
                        <div class="float-badge illus-float-delay" style="bottom:8%; left:-5%;">
                            <span class="text-lg">👨‍👩‍👧‍👦</span>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Famille</div>
                                <div class="text-[11px] font-bold text-dizo-green leading-tight">8 membres</div>
                            </div>
                        </div>
                        <div class="float-badge illus-float" style="bottom:45%; right:-8%; animation-delay:1.5s;">
                            <span class="text-lg">🏢</span>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Entreprise</div>
                                <div class="text-[11px] font-bold text-dizo-orange leading-tight">125K pas</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal-right">
                    <span class="">
                        <span class="w-2 h-2 rounded-full bg-dizo-orange animate-pulse"></span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4 leading-tight">Groupes
                        <strong class="text-orange-600">& Communautés</strong>
                    </h2>
                    <p class="text-gray-600 dark:text-slate-400 text-base sm:text-lg leading-relaxed mb-6">
                        <strong>DIZONLI</strong> vous permet de marcher en équipe. Créez ou rejoignez une communauté :
                        famille, amis, quartier, ville, région, ministère, administration ou entreprise.
                    </p>
                    <ul class="check-list space-y-1">
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Création de groupes
                                personnalisés</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Groupes communautaires :
                                famille, amis, quartiers, villes, régions</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Groupes institutionnels :
                                administrations, ministères, entreprises</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Gestion complète des
                                membres</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Vue du
                                total de pas collectifs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     FEATURE 3 — PODOTHONS
     ============================================================ -->
    <section class="py-16 sm:py-24 bg-white dark:bg-[#0f1117] relative overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="reveal-left order-2 lg:order-1">
                    <span class="">
                        <span class="w-2 h-2 rounded-full bg-dizo-green animate-pulse"></span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4 leading-tight">Podothons <br /><span
                            class="text-orange-600">(Événements collectifs)</span></h2>
                    <p class="text-gray-600 dark:text-slate-400 text-base sm:text-lg leading-relaxed mb-6">Les
                        <strong>Podothons</strong> sont des événements collectifs organisés par les groupes,
                        institutions ou entreprises. Ils encouragent la marche à travers des objectifs communs ou des
                        compétitions motivantes.
                    </p>
                    <ul class="check-list space-y-1">
                        <li><span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Mode
                                Compétition : classement des participants</span></li>
                        <li><span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Mode
                                Plaisir : objectif collectif sans compétition</span></li>
                        <li><span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Durée
                                configurable : 1 jour, 1 semaine, 1 mois</span></li>
                        <li><span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Objectifs collectifs
                                (total de pas)</span></li>
                        <li><span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Certificats numériques
                                pour les participants</span></li>
                        <li><span class="check-icon bg-green-100 dark:bg-green-900/40 text-dizo-green"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Partage des résultats sur
                                les réseaux sociaux</span></li>
                    </ul>
                </div>
                <div class="reveal-right order-1 lg:order-2">
                    <div class="feature-illustration">
                        <div class="illus-bg-circle"></div>
                        <div class="illus-ring"></div>
                        <div class="illus-ring-2"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 illus-float z-10"
                            style="animation: float 4s ease-in-out infinite, glowPulse 3s ease-in-out infinite;">
                            <svg class="w-32 h-32 sm:w-40 sm:h-40" viewBox="0 0 100 100">
                                <path d="M30 20 L70 20 L68 45 Q60 60 50 60 Q40 60 32 45 Z" fill="#f97316"
                                    stroke="#ea580c" stroke-width="1.5" />
                                <rect x="45" y="60" width="10" height="15" fill="#f97316" />
                                <rect x="35" y="75" width="30" height="8" rx="2" fill="#f97316" stroke="#ea580c"
                                    stroke-width="1" />
                                <path d="M30 25 Q18 28 18 40 Q18 48 28 48" fill="none" stroke="#f97316" stroke-width="3"
                                    stroke-linecap="round" />
                                <path d="M70 25 Q82 28 82 40 Q82 48 72 48" fill="none" stroke="#f97316" stroke-width="3"
                                    stroke-linecap="round" />
                                <text x="50" y="45" text-anchor="middle" fill="white" font-size="12"
                                    font-weight="bold">1</text>
                            </svg>
                        </div>
                        <div class="absolute w-2 h-2 rounded-full bg-dizo-green"
                            style="top:15%; left:20%; animation: confetti 3s ease-in infinite;"></div>
                        <div class="absolute w-2 h-2 rounded-full bg-dizo-orange"
                            style="top:10%; right:25%; animation: confetti 3.5s ease-in infinite 0.5s;"></div>
                        <div class="absolute w-1.5 h-1.5 rounded-full bg-yellow-400"
                            style="top:20%; left:75%; animation: confetti 2.8s ease-in infinite 1s;"></div>
                        <div class="absolute w-2 h-2 rounded-full bg-dizo-green"
                            style="top:5%; left:55%; animation: confetti 3.2s ease-in infinite 1.5s;"></div>
                        <div class="leaderboard illus-float-delay" style="bottom:8%; left:5%;">
                            <div class="text-[10px] font-bold text-gray-800 dark:text-slate-200 mb-1">🏆 Classement
                            </div>
                            <div class="leader-row">
                                <div class="leader-rank bg-yellow-400">1</div>
                                <div class="flex-1 text-gray-700 dark:text-slate-300 font-semibold">Équipe A</div>
                                <div class="text-dizo-green font-bold">45K</div>
                            </div>
                            <div class="leader-row">
                                <div class="leader-rank bg-gray-400">2</div>
                                <div class="flex-1 text-gray-700 dark:text-slate-300 font-semibold">Équipe B</div>
                                <div class="text-dizo-orange font-bold">38K</div>
                            </div>
                            <div class="leader-row">
                                <div class="leader-rank" style="background:#cd7f32;">3</div>
                                <div class="flex-1 text-gray-700 dark:text-slate-300 font-semibold">Équipe C</div>
                                <div class="text-gray-600 dark:text-slate-400 font-bold">32K</div>
                            </div>
                        </div>
                        <div class="float-badge illus-float" style="top:5%; right:0%; animation-delay:0.8s;">
                            <span class="text-lg">📜</span>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Certificat</div>
                                <div class="text-[11px] font-bold text-dizo-green leading-tight">Obtenu !</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     FEATURE 4 — GAMIFICATION
     ============================================================ -->
    <section class="py-16 sm:py-24 bg-orange-50 dark:bg-[#0f1117] relative overflow-hidden">
        <div class="absolute top-10 right-10 text-7xl sm:text-9xl opacity-5">🏅</div>
        <div class="absolute bottom-10 left-10 text-7xl sm:text-9xl opacity-5">🎖️</div>
        <div class="container mx-auto px-4 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="reveal-left">
                    <div class="feature-illustration">
                        <div class="illus-bg-circle"></div>
                        <div class="illus-ring"></div>
                        <div class="illus-ring-2"></div>
                        <div class="badge-medal illus-float"
                            style="top:10%; left:12%; background:#cd7f32; animation: float 4s ease-in-out infinite, glowPulseOrange 3s infinite;">
                            <svg class="w-2/3 h-2/3 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l2.4 7.4H22l-6.2 4.5L18.2 21 12 16.5 5.8 21l2.4-7.1L2 9.4h7.6L12 2z" />
                            </svg>
                            <div
                                class="absolute -bottom-1 left-1/2 -translate-x-1/2 bg-white dark:bg-[#1e2535] text-dizo-orange font-bold text-[8px] px-2 py-0.5 rounded-full shadow">
                                Bronze</div>
                        </div>
                        <div class="badge-medal illus-float-delay"
                            style="top:30%; right:10%; width:28%; background:#9ca3af; animation: float 4s ease-in-out infinite 0.8s;">
                            <svg class="w-2/3 h-2/3 text-gray-700 relative z-10" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M12 2l2.4 7.4H22l-6.2 4.5L18.2 21 12 16.5 5.8 21l2.4-7.1L2 9.4h7.6L12 2z" />
                            </svg>
                            <div
                                class="absolute -bottom-1 left-1/2 -translate-x-1/2 bg-white dark:bg-[#1e2535] text-gray-600 dark:text-slate-300 font-bold text-[8px] px-2 py-0.5 rounded-full shadow">
                                Argent</div>
                        </div>
                        <div class="illus-float absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                            style="animation: float 4s ease-in-out infinite, glowPulse 3s infinite; z-index:10;">
                            <div class="relative" style="width:130px; height:130px;">
                                <div class="absolute inset-0 rounded-full"
                                    style="background:#f59e0b; box-shadow: 0 15px 40px rgba(251,191,36,0.5); overflow:hidden;">
                                    <div class="absolute inset-0"
                                        style="background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent); animation: shine 3s ease-in-out infinite;">
                                    </div>
                                </div>
                                <div
                                    class="absolute inset-2 rounded-full border-4 border-yellow-600 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white relative z-10" fill="currentColor"
                                        viewBox="0 0 24 24" style="animation: heartBeat 2s ease-in-out infinite;">
                                        <path
                                            d="M12 2l2.4 7.4H22l-6.2 4.5L18.2 21 12 16.5 5.8 21l2.4-7.1L2 9.4h7.6L12 2z" />
                                    </svg>
                                </div>
                                <div
                                    class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-white dark:bg-[#1e2535] text-yellow-600 font-bold text-xs px-3 py-1 rounded-full shadow-lg">
                                    OR 🥇</div>
                            </div>
                        </div>
                        <div class="float-badge illus-float" style="bottom:5%; left:5%; animation-delay:0.5s;">
                            <span class="text-lg">⭐</span>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Niveau</div>
                                <div class="text-[11px] font-bold text-dizo-orange leading-tight">Niv. 12</div>
                            </div>
                        </div>
                        <div class="float-badge illus-float-delay" style="bottom:15%; right:2%;">
                            <span class="text-lg">🔥</span>
                            <div>
                                <div class="text-[9px] text-gray-500 dark:text-slate-400 leading-none">Défi</div>
                                <div class="text-[11px] font-bold text-dizo-green leading-tight">7 jours</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal-right">
                    <span class="">
                        <span class="w-2 h-2 rounded-full bg-dizo-orange animate-pulse"></span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4 leading-tight">Gamification <span
                            class="text-orange-600">& Récompenses</span></h2>
                    <p class="text-gray-600 dark:text-slate-400 text-base sm:text-lg leading-relaxed mb-6">
                        <strong>DIZONLI</strong> rend la marche plus ludique grâce à des badges, défis, récompenses et
                        certificats numériques.
                    </p>
                    <ul class="check-list space-y-1">
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Badges
                                individuels (Bronze, Argent, Or)</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Défis
                                hebdomadaires & mensuels</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Certificats numériques
                                (Podothons, performances individuelles)</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Galerie de badges
                                obtenus</span></li>
                        <li><span class="check-icon bg-orange-100 dark:bg-orange-900/40 text-dizo-orange"><svg
                                    class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></span><span
                                class="text-gray-700 dark:text-slate-300 text-sm sm:text-base">Système de niveaux</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- CTA BANNER -->
    <section id="download" class="py-7 relative overflow-hidden">
        <div class="absolute inset-0 bg-green-600"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto text-center text-white reveal">
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
                            class="w-8 h-8 bg-gray-800 hover:bg-green-500 rounded-full flex items-center justify-center transition hover:-translate-y-0.5"><svg
                                class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 2h-3a5 5 0 0 0-5 5v3H7v4h2v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg></a>
                        <a href="https://www.instagram.com/dizonli" aria-label="Instagram"
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-orange rounded-full flex items-center justify-center transition hover:-translate-y-0.5"><svg
                                class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg></a>
                        <a href="https://x.com/dizonliapp" aria-label="Twitter/X"
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-green rounded-full flex items-center justify-center transition hover:-translate-y-0.5"><svg
                                class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg></a>
                        <a href="https://www.linkedin.com/company/dizonli/" aria-label="LinkedIn"
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-orange rounded-full flex items-center justify-center transition hover:-translate-y-0.5"><svg
                                class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg></a>
                        <a href="https://www.tiktok.com/@dizonli" aria-label="TikTok"
                            class="w-8 h-8 bg-gray-800 hover:bg-black rounded-full flex items-center justify-center transition hover:-translate-y-0.5"><svg
                                class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.75 2h2.5c.2 1.7 1.4 3.1 3.05 3.4v2.6c-1.3-.05-2.55-.45-3.55-1.15v6.4c0 3.1-2.5 5.75-5.75 5.75S3.25 16.35 3.25 13.25s2.5-5.75 5.75-5.75c.25 0 .5.02.75.07v2.7c-.24-.08-.49-.12-.75-.12-1.7 0-3.1 1.4-3.1 3.1s1.4 3.1 3.1 3.1 3.1-1.4 3.1-3.1V2z" />
                            </svg></a>
                        <a href="https://whatsapp.com/channel/0029VbBgoTs4IBhIx04Yt31o" aria-label="WhatsApp"
                            class="w-8 h-8 bg-gray-800 hover:bg-green-500 rounded-full flex items-center justify-center transition hover:-translate-y-0.5"><svg
                                class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.52 3.48A11.9 11.9 0 0012.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.16 1.6 5.97L0 24l6.3-1.64a11.9 11.9 0 005.75 1.46h.01c6.55 0 11.89-5.34 11.89-11.89 0-3.17-1.24-6.14-3.43-8.35z" />
                            </svg></a>
                        <a href="https://www.youtube.com/@dizonli-app"
                            class="w-8 h-8 bg-gray-800 hover:bg-red-600 rounded-full flex items-center justify-center transition hover:-translate-y-0.5"><svg
                                class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2 31.4 31.4 0 000 12a31.4 31.4 0 00.5 5.8 3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1A31.4 31.4 0 0024 12a31.4 31.4 0 00-.5-5.8zM9.6 15.5v-7l6.4 3.5-6.4 3.5z" />
                            </svg></a>
                    </div>
                    <span class="text-gray-600 text-xs">© 2026 Dizonli. Tous droits réservés.</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
    const html = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    let savedTheme = 'light';
    try {
        savedTheme = localStorage.getItem('dizonli-theme') || (window.matchMedia('(prefers-color-scheme: dark)')
            .matches ? 'dark' : 'light');
    } catch (e) {}
    if (savedTheme === 'dark') {
        html.classList.add('dark');
        themeIcon.textContent = '☀️';
    }
    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        themeIcon.textContent = isDark ? '☀️' : '🌙';
        try {
            localStorage.setItem('dizonli-theme', isDark ? 'dark' : 'light');
        } catch (e) {}
    });

    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => navbar.classList.toggle('navbar-scrolled', window.scrollY > 50));

    document.getElementById('mobileMenuBtn').addEventListener('click', () => document.getElementById('mobileMenu')
        .classList.add('active'));
    document.getElementById('closeMobileMenu').addEventListener('click', () => document.getElementById('mobileMenu')
        .classList.remove('active'));
    document.querySelectorAll('#mobileMenu a').forEach(l => l.addEventListener('click', () => document.getElementById(
        'mobileMenu').classList.remove('active')));

    const scrollArrow = document.getElementById('scrollArrow');
    const arrowIcon = document.getElementById('arrowIcon');
    const totalHeight = () => document.documentElement.scrollHeight - window.innerHeight;
    const isNearBottom = () => window.scrollY > totalHeight() * 0.7;

    function updateArrow() {
        scrollArrow.classList.toggle('visible', window.scrollY > 100);
        const goUp = isNearBottom();
        arrowIcon.innerHTML = goUp ? '<path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>' :
            '<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>';
    }
    window.addEventListener('scroll', updateArrow);
    scrollArrow.addEventListener('click', () => window.scrollTo({
        top: isNearBottom() ? 0 : document.body.scrollHeight,
        behavior: 'smooth'
    }));

    const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    const revObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('active');
                const list = e.target.querySelector('.check-list');
                if (list) list.classList.add('active');
            }
        });
    }, {
        threshold: 0.1
    });
    reveals.forEach(r => revObs.observe(r));

    const feat1Steps = document.getElementById('feat1Steps');
    const feat1Bar = document.getElementById('feat1Bar');
    let steps1 = 8452;
    const GOAL = 10000;
    setInterval(() => {
        steps1 += Math.floor(Math.random() * 3) + 1;
        if (steps1 > GOAL) steps1 = 8400;
        if (feat1Steps) feat1Steps.textContent = steps1.toLocaleString('fr-FR');
        if (feat1Bar) feat1Bar.style.width = Math.round((steps1 / GOAL) * 100) + '%';
    }, 1500);
    </script>
</body>

</html>