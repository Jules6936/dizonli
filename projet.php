<?php

?>

<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizonli — Le Projet</title>
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

    html.dark .dm-bg-2 {
        background: #141824;
    }

    html.dark .dm-card {
        background: #1e2535;
        border-color: #2d3748;
    }

    html.dark .dm-text {
        color: #cbd5e1;
    }

    html.dark .dm-text-muted {
        color: #94a3b8;
    }

    html.dark .dm-border {
        border-color: #2d3748;
    }

    html.dark .navbar-light {
        background: rgba(15, 17, 23, 0.9);
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

    @keyframes walk {

        0%,
        100% {
            transform: translateY(0) rotate(0deg)
        }

        50% {
            transform: translateY(-8px) rotate(2deg)
        }
    }

    @keyframes walkAcross {
        0% {
            transform: translateX(-120px)
        }

        100% {
            transform: translateX(calc(100vw + 120px))
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
            box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.5), 0 0 0 0 rgba(22, 163, 74, 0.3);
        }

        50% {
            box-shadow: 0 0 0 6px rgba(249, 115, 22, 0), 0 0 0 12px rgba(22, 163, 74, 0);
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(0.8);
            opacity: 0.8
        }

        100% {
            transform: scale(1.5);
            opacity: 0
        }
    }

    @keyframes stepWalk {
        0% {
            transform: translateX(0) scaleX(1);
        }

        49% {
            transform: translateX(18px) scaleX(1);
        }

        50% {
            transform: translateX(18px) scaleX(-1);
        }

        99% {
            transform: translateX(0) scaleX(-1);
        }

        100% {
            transform: translateX(0) scaleX(1);
        }
    }

    @keyframes legSwingFront {

        0%,
        100% {
            transform: rotate(-25deg)
        }

        50% {
            transform: rotate(25deg)
        }
    }

    @keyframes legSwingBack {

        0%,
        100% {
            transform: rotate(25deg)
        }

        50% {
            transform: rotate(-25deg)
        }
    }

    @keyframes armSwingFront {

        0%,
        100% {
            transform: rotate(20deg)
        }

        50% {
            transform: rotate(-20deg)
        }
    }

    @keyframes armSwingBack {

        0%,
        100% {
            transform: rotate(-20deg)
        }

        50% {
            transform: rotate(20deg)
        }
    }

    @keyframes bodyBob {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(3px)
        }
    }

    @keyframes cardHover {
        0% {
            transform: translateY(0) scale(1)
        }

        50% {
            transform: translateY(-6px) scale(1.01)
        }

        100% {
            transform: translateY(-4px) scale(1.01)
        }
    }

    @keyframes flipIn {
        0% {
            transform: rotateY(90deg);
            opacity: 0
        }

        100% {
            transform: rotateY(0deg);
            opacity: 1
        }
    }

    @keyframes glowPulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.3)
        }

        50% {
            box-shadow: 0 0 20px 8px rgba(22, 163, 74, 0.1)
        }
    }

    @keyframes expandLine {
        from {
            width: 0
        }

        to {
            width: 100%
        }
    }

    @keyframes fadeSlideIn {
        from {
            opacity: 0;
            transform: translateY(16px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes rotateIn {
        from {
            opacity: 0;
            transform: rotate(-10deg) scale(0.8)
        }

        to {
            opacity: 1;
            transform: rotate(0) scale(1)
        }
    }

    /* ✅ gradient-text → couleur verte unie */
    .gradient-text {
        color: #16a34a;
    }

    /* ✅ btn-green → vert uni */
    .btn-green {
        background: #16a34a;
        transition: all 0.3s ease;
    }

    .btn-green:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(22, 163, 74, 0.4);
    }

    /* ✅ btn-orange → orange uni */
    .btn-orange {
        background: #f97316;
        transition: all 0.3s ease;
    }

    .btn-orange:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(249, 115, 22, 0.4);
    }

    /* ✅ btn-nav-download → orange uni */
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

    .mobile-menu {
        transform: translateX(100%);
        transition: transform 0.3s ease;
    }

    .mobile-menu.active {
        transform: translateX(0);
    }

    .bg-circle {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.4;
        z-index: 0;
    }

    /* ---- Dark Mode Toggle ---- */
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
        /* ✅ orange uni */
        background: #f97316;
        border: none;
        box-shadow: -3px 0 15px rgba(22, 163, 74, 0.3);
    }

    #themeToggle:hover {
        width: 46px;
    }

    #themeIcon {
        font-size: 1.1rem;
    }

    /* ---- HERO WALKER ---- */
    .hero-walker-scene {
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .walker-container {
        position: relative;
        width: 200px;
        height: 200px;
    }

    .walker-figure {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        animation: stepWalk 3s ease-in-out infinite;
    }

    .walker-body {
        animation: bodyBob 0.5s ease-in-out infinite;
    }

    .walker-leg-front {
        transform-origin: top center;
        animation: legSwingFront 0.5s ease-in-out infinite;
    }

    .walker-leg-back {
        transform-origin: top center;
        animation: legSwingBack 0.5s ease-in-out infinite;
    }

    .walker-arm-front {
        transform-origin: top center;
        animation: armSwingFront 0.5s ease-in-out infinite;
    }

    .walker-arm-back {
        transform-origin: top center;
        animation: armSwingBack 0.5s ease-in-out infinite;
    }

    /* ---- PILLAR CARDS ---- */
    .pillar-card {
        background: white;
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.07);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        cursor: default;
    }

    html.dark .pillar-card {
        background: #1e2535;
        border: 1px solid #2d3748;
    }

    .pillar-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.13);
    }

    .pillar-card::before {
        content: '';
        position: absolute;
        top: -40px;
        right: -40px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        opacity: 0.12;
        transition: transform 0.5s;
    }

    .pillar-card:hover::before {
        transform: scale(1.5);
    }

    .pillar-card.green::before {
        background: #16a34a;
    }

    .pillar-card.orange::before {
        background: #f97316;
    }

    /* ✅ mixed → vert uni */
    .pillar-card.mixed::before {
        background: #16a34a;
    }

    .pillar-icon {
        width: 56px;
        height: 56px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.2rem;
        position: relative;
        overflow: hidden;
    }

    .pillar-icon::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(255, 255, 255, 0.15);
        animation: shimmer 3s ease-in-out infinite;
    }

    .pillar-number {
        position: absolute;
        top: 1.2rem;
        right: 1.2rem;
        font-size: 4rem;
        font-weight: 900;
        opacity: 0.06;
        line-height: 1;
        color: #000;
    }

    html.dark .pillar-number {
        color: #fff;
    }

    /* ---- SCIENCE FLIP CARDS ---- */
    .flip-card-container {
        perspective: 1000px;
        cursor: pointer;
        height: 180px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .flip-card-container.flipped .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-face {
        position: absolute;
        inset: 0;
        backface-visibility: hidden;
        border-radius: 20px;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    /* ✅ flip-front green → vert clair uni */
    .flip-front {
        background: #f0fdf4;
        border: 2px solid #bbf7d0;
    }

    html.dark .flip-front {
        background: #0d1f13;
        border-color: #166534;
    }

    /* ✅ flip-back green → vert uni */
    .flip-back {
        background: #16a34a;
        transform: rotateY(180deg);
    }

    /* ✅ flip-front orange → orange clair uni */
    .flip-card-container:nth-child(2) .flip-front {
        background: #fff7ed;
        border-color: #fed7aa;
    }

    html.dark .flip-card-container:nth-child(2) .flip-front {
        background: #1f1008;
        border-color: #9a3412;
    }

    /* ✅ flip-back orange → orange uni */
    .flip-card-container:nth-child(2) .flip-back {
        background: #f97316;
    }

    .flip-hint {
        font-size: 0.7rem;
        opacity: 0.6;
        margin-top: 0.4rem;
        animation: bounceFade 2s ease-in-out infinite;
    }

    /* ---- FAQ ---- */
    .faq-item {
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 12px;
    }

    .faq-question {
        width: 100%;
        text-align: left;
        padding: 1.1rem 1.4rem;
        background: #f9fafb;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        font-weight: 600;
        color: #1f2937;
        transition: background 0.2s;
    }

    html.dark .faq-question {
        background: #1e2535;
        color: #e2e8f0;
    }

    .faq-question:hover {
        background: #f0fdf4;
    }

    html.dark .faq-question:hover {
        background: #243040;
    }

    .faq-question.open {
        background: #f0fdf4;
        color: #16a34a;
    }

    html.dark .faq-question.open {
        background: #0d1f13;
        color: #4ade80;
    }

    /* ✅ faq-icon → vert uni */
    .faq-icon {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #16a34a;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: transform 0.3s;
    }

    .faq-question.open .faq-icon {
        transform: rotate(45deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.45s ease, padding 0.3s;
        background: white;
        padding: 0 1.4rem;
    }

    html.dark .faq-answer {
        background: #141824;
    }

    .faq-answer.open {
        max-height: 300px;
        padding: 1rem 1.4rem 1.2rem;
        animation: fadeSlideIn 0.4s ease forwards;
    }

    .faq-answer p {
        font-size: 0.9rem;
        color: #6b7280;
        line-height: 1.7;
    }

    html.dark .faq-answer p {
        color: #94a3b8;
    }

    /* ---- STEP DOTS (path) ---- */
    .step-dot {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.1rem;
        color: white;
        flex-shrink: 0;
        animation: glowPulse 3s ease-in-out infinite;
    }

    /* scroll arrow */
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

    .hero-ground-line {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        /* ✅ vert uni */
        background: rgba(22, 163, 74, 0.3);
    }

    .step-spark {
        position: absolute;
        bottom: 8px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        animation: fadeUp 0.4s ease forwards;
    }

    /* Responsive navbar fix */
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

    /* Blob decorations */
    .blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.25;
        z-index: 0;
        animation: float 8s ease-in-out infinite;
    }

    /* Animated walking figure styles */
    .walk-hero-wrap {
        position: relative;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        height: 260px;
        overflow: hidden;
    }

    .walk-figure-group {
        position: relative;
        display: flex;
        align-items: flex-end;
        gap: 40px;
    }

    .person-svg {
        filter: drop-shadow(0 8px 24px rgba(0, 0, 0, 0.12));
    }

    .person-man {
        animation: bodyBob 0.45s ease-in-out infinite;
    }

    .person-woman {
        animation: bodyBob 0.45s ease-in-out 0.22s infinite;
    }

    /* ✅ Step line → vert uni */
    .step-line {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: rgba(22, 163, 74, 0.4);
        border-radius: 4px;
    }

    /* Stats badge */
    .stats-badge {
        background: white;
        border-radius: 20px;
        padding: 10px 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 8px;
        animation: float 4s ease-in-out infinite;
        position: absolute;
    }

    html.dark .stats-badge {
        background: #1e2535;
    }

    /* section tag */
    .section-tag {
        display: inline-block;
        padding: 6px 16px;
        border-radius: 99px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }
    </style>
</head>

<body class="bg-white text-gray-800 dark:bg-[#0f1117] dark:text-slate-200">

    <!-- ===== DARK MODE TOGGLE ===== -->
    <button id="themeToggle" aria-label="Basculer le mode sombre">
        <span id="themeIcon">🌙</span>
    </button>

    <!-- ===== scroll fleche ===== -->
    <button id="scrollArrow" class="btn-green text-white" aria-label="Défiler">
        <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
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



    <!-- ======================================================
     HERO — IMAGE D'ACCUEIL AVEC MARCHEURS ANIMÉS
     ====================================================== -->
    <section id="projet-hero" class="relative min-h-screen overflow-hidden pt-24 pb-16" style="background: #dcfce7;">
        <!-- Dark mode override -->
        <style>
        html.dark #projet-hero {
            background: #0d1a0f !important;
        }
        </style>

        <!-- Blobs de fond -->
        <div class="blob bg-dizo-green w-80 h-80 -top-20 -left-20" style="animation-delay:0s;"></div>
        <div class="blob bg-dizo-orange w-96 h-96 top-1/3 -right-24" style="animation-delay:2s;"></div>
        <div class="blob bg-dizo-green w-64 h-64 bottom-10 left-1/3" style="animation-delay:4s; opacity:0.15;"></div>

        <div class="container mx-auto px-4 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center min-h-[80vh]">

                <!-- TEXTE GAUCHE -->
                <div class="reveal">
                    <span class="section-tag bg-green-100 dark:bg-green-900/40 text-dizo-green">Le Projet Dizonli</span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
                        Chaque pas compte,<br>
                        <span class="text-orange-600">marchons ensemble.</span>
                    </h1>
                    <div
                        class="bg-white/70 dark:bg-white/5 backdrop-blur-sm border border-green-200/60 dark:border-green-800/40 rounded-2xl p-5 mb-8 shadow-sm">
                        <p class="text-gray-700 dark:text-slate-300 text-base sm:text-lg leading-relaxed">
                            La sédentarité est aujourd'hui un facteur de risque majeur pour notre santé.
                            <span class="text-orange-600">L'OMS recommande 10 000 pas par jour</span>,
                            mais il est souvent difficile d'atteindre cet objectif seul.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <a href="#nos-piliers"
                            class="border-2 border-dizo-green text-dizo-green px-7 py-3.5 rounded-full font-bold text-base hover:bg-green-50 dark:hover:bg-green-900/20 transition flex items-center gap-2">
                            Découvrir le projet
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- ======================================================
     NOS PILIERS
     ====================================================== -->
    <section id="nos-piliers" class="py-20 bg-white dark:bg-[#0f1117] relative overflow-hidden">
        <div class="blob bg-dizo-orange w-72 h-72 top-10 -right-20 opacity-10" style="animation-delay:1s;"></div>

        <div class="container mx-auto px-4 lg:px-10 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-14 reveal">
                <span class="section-tag bg-orange-50 dark:bg-orange-900/30 text-dizo-orange">Notre vision</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4">
                    Nos <span class="text-orange-600">Piliers</span>
                </h2>
                <p class="text-gray-500 dark:text-slate-400 text-base sm:text-lg">Les trois valeurs fondatrices qui
                    guident chaque pas de notre démarche.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <!-- Carte 1 : Force du Collectif -->
                <div class="pillar-card green reveal" style="transition-delay:0s;">
                    <div class="pillar-number"></div>
                    <!-- ✅ pillar-icon → vert uni -->
                    <div class="pillar-icon bg-dizo-green shadow-lg shadow-green-200 dark:shadow-green-900/30">
                        <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M16,4C18.21,4 20,5.79 20,8C20,10.21 18.21,12 16,12C13.79,12 12,10.21 12,8C12,5.79 13.79,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M9,5C10.66,5 12,6.34 12,8C12,9.66 10.66,11 9,11C7.34,11 6,9.66 6,8C6,6.34 7.34,5 9,5M9,12C10.07,12 11.09,12.13 12,12.36C10.78,13.74 10,15.79 10,18V20H0V18C0,15.79 4.03,14 9,14V12Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold mb-3 dark:text-slate-100">La Force du Collectif</h3>
                    <p class="text-gray-600 dark:text-slate-400 text-sm leading-relaxed">
                        Nous croyons que la motivation vient des autres. Que vous marchiez pour votre quartier, votre
                        entreprise ou votre ministère, chaque pas contribue à un objectif commun. L'application permet
                        de créer des dynamiques de groupe stimulantes et solidaires.
                    </p>
                    <div class="mt-5 flex items-center gap-2">
                        <div class="flex -space-x-2">
                            <div
                                class="w-7 h-7 rounded-full bg-green-400 border-2 border-white flex items-center justify-center text-[10px] text-white font-bold">
                                A</div>
                            <div
                                class="w-7 h-7 rounded-full bg-green-500 border-2 border-white flex items-center justify-center text-[10px] text-white font-bold">
                                B</div>
                            <div
                                class="w-7 h-7 rounded-full bg-green-600 border-2 border-white flex items-center justify-center text-[10px] text-white font-bold">
                                C</div>
                        </div>
                        <span class="text-xs text-gray-500 dark:text-slate-400 font-medium">+2 500 groupes actifs</span>
                    </div>
                </div>

                <!-- Carte 2 : Gamification -->
                <div class="pillar-card orange reveal" style="transition-delay:0.15s;">
                    <div class="pillar-number"></div>
                    <!-- ✅ pillar-icon → orange uni -->
                    <div class="pillar-icon bg-dizo-orange shadow-lg shadow-orange-200 dark:shadow-orange-900/30">
                        <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M11.5 2C6.81 2 3 5.81 3 10.5S6.81 19 11.5 19h.5v3c4.86-2.34 8-7 8-11.5C20 5.81 16.19 2 11.5 2zm1 14.5h-2v-2h2v2zm0-4h-2c0-3.25 3-3 3-5 0-1.1-.9-2-2-2s-2 .9-2 2h-2c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold mb-3 dark:text-slate-100">La Gamification Motivante</h3>
                    <p class="text-gray-600 dark:text-slate-400 text-sm leading-relaxed">
                        Pour rendre l'effort ludique, nous avons intégré un système de badges, de certificats et de
                        classements. Vos efforts sont toujours récompensés, que ce soit par la satisfaction personnelle
                        ou par la reconnaissance de votre groupe.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span
                            class="inline-flex items-center gap-1 bg-orange-50 dark:bg-orange-900/20 text-dizo-orange text-xs font-semibold px-2.5 py-1 rounded-full">🥇
                            Badges</span>
                        <span
                            class="inline-flex items-center gap-1 bg-orange-50 dark:bg-orange-900/20 text-dizo-orange text-xs font-semibold px-2.5 py-1 rounded-full">🏆
                            Classements</span>
                        <span
                            class="inline-flex items-center gap-1 bg-orange-50 dark:bg-orange-900/20 text-dizo-orange text-xs font-semibold px-2.5 py-1 rounded-full">📜
                            Certificats</span>
                    </div>
                </div>

                <!-- Carte 3 : Podothons -->
                <div class="pillar-card mixed reveal sm:col-span-2 lg:col-span-1" style="transition-delay:0.3s;">
                    <div class="pillar-number"></div>
                    <!-- ✅ pillar-icon → vert uni -->
                    <div class="pillar-icon bg-dizo-green shadow-lg shadow-green-200 dark:shadow-green-900/30">
                        <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold mb-3 dark:text-slate-100">Les Podothons</h3>
                    <p class="text-gray-600 dark:text-slate-400 text-sm leading-relaxed">
                        Notre innovation majeure est l'organisation de « marathons de pas ». Ces événements spéciaux
                        permettent aux institutions de lancer des défis collectifs, soit pour la compétition, soit pour
                        le simple plaisir de la cohésion.
                    </p>
                    <div class="mt-5">
                        <div class="flex items-center gap-2 bg-green-50 dark:bg-green-900/20 rounded-xl px-3 py-2">
                            <span class="text-xl">🏃‍♂️</span>
                            <div>
                                <div class="text-xs font-bold text-gray-700 dark:text-slate-300">Prochain Podothon</div>
                                <div class="text-xs text-gray-500 dark:text-slate-400">Challenge Entreprise —
                                    Rejoignez-nous !</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================================================
     APPROCHE SCIENTIFIQUE & SÉCURISÉE
     ====================================================== -->
    <section id="science" class="py-20 relative overflow-hidden" style="background: #f0fdf4;">
        <style>
        html.dark #science {
            background: #0d1a0f !important;
        }
        </style>

        <div class="blob bg-dizo-green w-64 h-64 -top-10 -left-16 opacity-15" style="animation-delay:0.5s;"></div>
        <div class="blob bg-dizo-orange w-48 h-48 bottom-10 -right-10 opacity-15" style="animation-delay:2s;"></div>

        <div class="container mx-auto px-4 lg:px-10 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-14 reveal">
                <span class="section-tag bg-green-100 dark:bg-green-900/40 text-dizo-green">Confiance & Rigueur</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4">
                    Une Approche <span class="text-orange-600">Scientifique & Sécurisée</span>
                </h2>
                <p class="text-gray-600 dark:text-slate-400 text-base sm:text-lg leading-relaxed">
                    Chez DIZONLI, nous ne laissons rien au hasard. Notre développement s'appuie sur une expertise
                    réelle.
                </p>
            </div>

            <!-- CARTES FLIP -->
            <div class="max-w-2xl mx-auto reveal">
                <p class="text-center text-xs text-gray-400 dark:text-slate-500 mb-5 italic">
                    👆 Cliquez sur une carte pour en savoir plus
                </p>
                <div class="grid sm:grid-cols-2 gap-6">

                    <!-- Flip 1 : Santé Publique -->
                    <div class="flip-card-container" id="flipCard1">
                        <div class="flip-card-inner">
                            <div class="flip-face flip-front">
                                <!-- ✅ icône → vert uni -->
                                <div
                                    class="w-14 h-14 rounded-2xl bg-dizo-green flex items-center justify-center mb-4 shadow-lg shadow-green-200 dark:shadow-green-900/30">
                                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M10.5 13H8v-3h2.5V7.5h3V10H16v3h-2.5v2.5h-3V13zM12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3z" />
                                    </svg>
                                </div>
                                <h3 class="font-extrabold text-lg text-gray-800 dark:text-slate-100 mb-1">Expertise
                                    Santé Publique</h3>
                                <p class="flip-hint text-gray-500 dark:text-slate-400">Cliquez pour en savoir plus ↺</p>
                            </div>
                            <div class="flip-face flip-back">
                                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mb-3">
                                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M10.5 13H8v-3h2.5V7.5h3V10H16v3h-2.5v2.5h-3V13zM12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3z" />
                                    </svg>
                                </div>
                                <p class="text-white text-sm leading-relaxed text-center">
                                    Notre équipe intègre des experts en santé publique pour valider les seuils
                                    d'activité et s'assurer que nos activités respectent les recommandations sanitaires.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Flip 2 : Protection des Données -->
                    <div class="flip-card-container" id="flipCard2">
                        <div class="flip-card-inner">
                            <div class="flip-face flip-front">
                                <!-- ✅ icône → orange uni -->
                                <div
                                    class="w-14 h-14 rounded-2xl bg-dizo-orange flex items-center justify-center mb-4 shadow-lg shadow-orange-200 dark:shadow-orange-900/30">
                                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                                    </svg>
                                </div>
                                <h3 class="font-extrabold text-lg text-gray-800 dark:text-slate-100 mb-1">Protection des
                                    Données</h3>
                                <p class="flip-hint text-gray-500 dark:text-slate-400">Cliquez pour en savoir plus ↺</p>
                            </div>
                            <div class="flip-face flip-back">
                                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mb-3">
                                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                                    </svg>
                                </div>
                                <p class="text-white text-sm leading-relaxed text-center">
                                    Nous prenons votre vie privée au sérieux. L'application est conçue pour être
                                    conforme aux standards de protection des données, avec des données chiffrées et
                                    sécurisées.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ======================================================
     FAQ
     ====================================================== -->
    <section id="faq" class="py-20 bg-white dark:bg-[#0f1117]">
        <div class="container mx-auto px-4 lg:px-10">
            <div class="text-center max-w-2xl mx-auto mb-14 reveal">
                <span class="section-tag bg-green-50 dark:bg-green-900/30 text-dizo-green">Questions fréquentes</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4">
                    <span span class="text-orange-500 font-bold">FAQ</span>
                </h2>
                <p class="text-gray-500 dark:text-slate-400">Tout ce que vous souhaitez savoir sur Dizonli.</p>
            </div>

            <div class="max-w-3xl mx-auto reveal">

                <!-- Question 1 -->
                <div class="faq-item">
                    <button class="faq-question" data-faq="1">
                        <span>Comment l'application compte-t-elle mes pas ?</span>
                        <div class="faq-icon">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" data-faq-answer="1">
                        <p>L'application utilise automatiquement les capteurs
                            intégrés de votre smartphone pour détecter vos mouvements.
                            Pour garantir une précision maximale, DIZONLI se
                            synchronise également avec Google Fit (sur Android) et
                            Apple HealthKit (sur iOS). </p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-item">
                    <button class="faq-question" data-faq="2">
                        <span>Qu'est-ce qu'un « Podothon » ?</span>
                        <div class="faq-icon">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" data-faq-answer="2">
                        <p>C'est une exclusivité de DIZONLI ! Un Podothon est un
                            événement collectif (sorte de marathon de pas) lancé par un
                            groupe ou une institution. Il peut s'agir d'une compétition pour
                            gagner des récompenses ou simplement d'un défi « plaisir »
                            pour renforcer la cohésion d'équipe et sensibiliser à la santé.</p>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-item">
                    <button class="faq-question" data-faq="3">
                        <span>Puis-je participer avec mon entreprise ou mon ministère ?</span>
                        <div class="faq-icon">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" data-faq-answer="3">
                        <p>Absolument. L'application est spécialement conçue pour
                            gérer des groupes institutionnels comme des ministères,
                            des administrations ou des entreprises privées.
                            Vous pourrez rejoindre le groupe de votre organisation
                            pour participer à des classements internes ou défier
                            d'autres institutions (ex: Ministère A vs Ministère B).</p>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-item">
                    <button class="faq-question" data-faq="4">
                        <span>Mes données personnelles sont-elles protégées ?</span>
                        <div class="faq-icon">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer" data-faq-answer="4">
                        <p>La sécurité est notre priorité. L'application respecte les
                            standards de protection des données (RGPD-friendly) et toutes
                            vos informations sont chiffrées. De plus, lors des comparaisons
                            entre groupes, il est possible d'anonymiser les données
                            pour préserver la confidentialité de chacun.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================================================
     BANNER TÉLÉCHARGEMENT
     ====================================================== -->
    <section class="py-8 relative overflow-hidden">
        <!-- ✅ fond → vert uni -->
        <div class="absolute inset-0 bg-dizo-green"></div>
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

    <!-- ===== FOOTER ===== -->
    <footer id="contact" class="bg-gray-950 dark:bg-[#060810] text-white">
        <div class="container mx-auto px-4 lg:px-8 py-7">
            <div class="flex items-start justify-between gap-6 flex-wrap">
                <a href="#accueil" class="flex items-center flex-shrink-0">
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
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-green rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
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
                            class="w-8 h-8 bg-gray-800 hover:bg-dizo-green rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.52 3.48A11.9 11.9 0 0012.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.16 1.6 5.97L0 24l6.3-1.64a11.9 11.9 0 005.75 1.46h.01c6.55 0 11.89-5.34 11.89-11.89 0-3.17-1.24-6.14-3.43-8.35z" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@dizonli-app"
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
    // ---- DARK MODE ----
    const html = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const savedTheme = localStorage.getItem('dizonli-theme') ||
        (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    if (savedTheme === 'dark') {
        html.classList.add('dark');
        themeIcon.textContent = '☀️';
    }
    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        themeIcon.textContent = isDark ? '☀️' : '🌙';
        localStorage.setItem('dizonli-theme', isDark ? 'dark' : 'light');
    });

    // ---- NAVBAR ----
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => navbar.classList.toggle('navbar-scrolled', window.scrollY > 50));
    const navbarScrolledStyle = document.createElement('style');
    navbarScrolledStyle.textContent =
        '.navbar-scrolled { backdrop-filter: blur(20px); box-shadow: 0 4px 20px rgba(0,0,0,0.05); }';
    document.head.appendChild(navbarScrolledStyle);

    // ---- MOBILE MENU ----
    document.getElementById('mobileMenuBtn').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.add('active'));
    document.getElementById('closeMobileMenu').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.remove('active'));
    document.querySelectorAll('#mobileMenu a').forEach(link =>
        link.addEventListener('click', () => document.getElementById('mobileMenu').classList.remove('active')));

    // ---- SCROLL ARROW ----
    const scrollArrow = document.getElementById('scrollArrow');
    const arrowIcon = document.getElementById('arrowIcon');
    const totalHeight = () => document.documentElement.scrollHeight - window.innerHeight;
    const isNearBottom = () => window.scrollY > totalHeight() * 0.7;

    function updateArrow() {
        scrollArrow.classList.toggle('visible', window.scrollY > 100);
        const goUp = isNearBottom();
        arrowIcon.innerHTML = goUp ?
            '<path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>' :
            '<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>';
    }
    window.addEventListener('scroll', updateArrow);
    scrollArrow.addEventListener('click', () => {
        window.scrollTo({
            top: isNearBottom() ? 0 : document.body.scrollHeight,
            behavior: 'smooth'
        });
    });

    // ---- REVEAL ON SCROLL ----
    const reveals = document.querySelectorAll('.reveal');
    const revObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) e.target.classList.add('active');
        });
    }, {
        threshold: 0.08
    });
    reveals.forEach(r => revObs.observe(r));

    // ---- HERO STEP COUNTER ----
    let steps = 8452;
    const heroSteps = document.getElementById('heroSteps');
    setInterval(() => {
        steps += Math.floor(Math.random() * 4) + 1;
        if (steps > 10000) steps = 10000;
        if (heroSteps) heroSteps.textContent = steps.toLocaleString('fr-FR') + ' pas';
    }, 1800);

    // ---- FLIP CARDS ----
    document.getElementById('flipCard1').addEventListener('click', function() {
        this.classList.toggle('flipped');
    });
    document.getElementById('flipCard2').addEventListener('click', function() {
        this.classList.toggle('flipped');
    });

    // ---- FAQ ACCORDION ----
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.faq;
            const answer = document.querySelector(`[data-faq-answer="${id}"]`);
            const isOpen = btn.classList.contains('open');

            document.querySelectorAll('.faq-question').forEach(b => b.classList.remove('open'));
            document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));

            if (!isOpen) {
                btn.classList.add('open');
                answer.classList.add('open');
            }
        });
    });
    </script>
</body>

</html>