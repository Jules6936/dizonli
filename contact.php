<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom    = htmlspecialchars(trim($_POST['prenom'] ?? ''));
    $nom       = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $telephone = htmlspecialchars(trim($_POST['telephone'] ?? ''));
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $sujet     = htmlspecialchars(trim($_POST['sujet'] ?? ''));
    $message   = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$prenom || !$nom || !$email || !$sujet || !$message) {
        echo json_encode(['success' => false, 'message' => 'Champs requis manquants.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.dizonli.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@dizonli.com';
        $mail->Password   = 'TON_MOT_DE_PASSE';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('contact@dizonli.com', 'Formulaire Dizonli');
        $mail->addAddress('contact@dizonli.com');

        if ($email) {
            $mail->addReplyTo($email, $prenom . ' ' . $nom);
        }

        $mail->isHTML(false);
        $mail->Subject = "Nouveau message : $sujet";
        $mail->Body    = "Prénom: $prenom\nNom: $nom\nTéléphone: $telephone\nEmail: $email\n\nMessage:\n$message";

        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Message envoyé avec succès.']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => "Erreur SMTP: {$mail->ErrorInfo}"]);
    }
}

?>


<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact — Dizonli</title>
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

    html.dark .navbar-light {
        background: rgba(15, 17, 23, 0.9);
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(24px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
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

    @keyframes navBtnPulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.5), 0 0 0 0 rgba(22, 163, 74, 0.3);
        }

        50% {
            box-shadow: 0 0 0 6px rgba(249, 115, 22, 0), 0 0 0 12px rgba(22, 163, 74, 0);
        }
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes checkPop {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        70% {
            transform: scale(1.2);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 1;
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

    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.7s ease-out;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    .navbar-scrolled {
        backdrop-filter: blur(20px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .mobile-menu {
        transform: translateX(100%);
        transition: transform 0.3s ease;
    }

    .mobile-menu.active {
        transform: translateX(0);
    }

    /* Theme toggle */
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

    /* Scroll arrow */
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

    /* Nav download button */
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

    /* Form */
    .form-field {
        position: relative;
    }

    .form-input {
        width: 100%;
        border: 2px solid #e5e7eb;
        border-radius: 14px;
        padding: 14px 18px 14px 50px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        outline: none;
        transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
        background: #fff;
        color: #1f2937;
    }

    html.dark .form-input {
        background: #141824;
        border-color: #2d3748;
        color: #e2e8f0;
    }

    .form-input:focus {
        border-color: #16a34a;
        box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.1);
    }

    html.dark .form-input:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.12);
    }

    .form-input::placeholder {
        color: #9ca3af;
    }

    .form-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
        transition: color 0.25s;
        pointer-events: none;
    }

    .form-field:focus-within .form-icon {
        color: #16a34a;
    }

    .form-label {
        display: block;
        font-size: 0.8rem;
        font-weight: 600;
        color: #374151;
        margin-bottom: 6px;
        letter-spacing: 0.02em;
    }

    html.dark .form-label {
        color: #cbd5e1;
    }

    textarea.form-input {
        resize: vertical;
        min-height: 130px;
        padding-top: 14px;
    }

    .textarea-icon {
        top: 18px;
        transform: none;
    }

    /* Send button */
    .btn-send {
        background: #16a34a;
        color: white;
        border: none;
        border-radius: 14px;
        padding: 15px 36px;
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .btn-send::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 35%;
        height: 100%;
        background: rgba(255, 255, 255, 0.18);
        animation: shimmer 2.8s ease-in-out infinite;
        pointer-events: none;
    }

    .btn-send:hover:not(:disabled) {
        background: #15803d;
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(22, 163, 74, 0.35);
    }

    .btn-send:active:not(:disabled) {
        transform: translateY(0);
    }

    .btn-send:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    .btn-send .spinner {
        width: 20px;
        height: 20px;
        border: 2.5px solid rgba(255, 255, 255, 0.4);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    /* Success state */
    .success-box {
        display: none;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 3rem 2rem;
    }

    .success-box.show {
        display: flex;
        animation: fadeUp 0.5s ease both;
    }

    .success-check {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: #dcfce7;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        animation: checkPop 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
    }

    html.dark .success-check {
        background: #14532d;
    }

    /* Error message */
    .field-error {
        font-size: 0.75rem;
        color: #dc2626;
        margin-top: 5px;
        display: none;
    }

    .field-error.show {
        display: block;
    }

    .form-input.error {
        border-color: #dc2626;
        box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
    }

    /* Alert box */
    .alert-box {
        border-radius: 12px;
        padding: 14px 18px;
        font-size: 0.875rem;
        display: none;
        margin-bottom: 1rem;
        font-weight: 500;
        align-items: center;
        gap: 10px;
    }

    .alert-box.show {
        display: flex;
        animation: fadeUp 0.4s ease both;
    }

    .alert-error {
        background: #fef2f2;
        border: 1px solid #fecaca;
        color: #b91c1c;
    }

    html.dark .alert-error {
        background: #450a0a;
        border-color: #7f1d1d;
        color: #fca5a5;
    }

    /* Contact info cards */
    .info-card {
        border-radius: 16px;
        padding: 20px 24px;
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 16px;
    }

    html.dark .info-card {
        background: #1e2535;
        border-color: #2d3748;
    }

    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .info-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* Section hero contact */
    .contact-hero {
        background: #f0fdf4;
        border-bottom: 1px solid #dcfce7;
    }

    html.dark .contact-hero {
        background: #0d1a0f;
        border-bottom-color: #14532d;
    }

    @media (max-width:640px) {
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
    }
    </style>
</head>

<body class="bg-white text-gray-800 dark:bg-[#0f1117] dark:text-slate-200">

    <!-- ===== DARK MODE TOGGLE ===== -->
    <button id="themeToggle" aria-label="Basculer le mode sombre">
        <span id="themeIcon">🌙</span>
    </button>

    <!-- ===== SCROLL ARROW ===== -->
    <button id="scrollArrow" class="bg-dizo-green text-white" aria-label="Défiler">
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

    <!-- ===== HERO CONTACT ===== -->
    <section class="contact-hero pt-32 pb-14 px-4">
        <div class="container mx-auto max-w-2xl text-center reveal">
            <span
                class="inline-block bg-white dark:bg-[#1e2535] border border-green-200 dark:border-green-900 text-dizo-green px-4 py-1.5 rounded-full font-semibold text-sm mb-5 shadow-sm">NOUS
                CONTACTER</span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4 leading-tight dark:text-slate-100">
                Une question ? <span class="text-orange-600">Écrivez-nous</span>
            </h1>
            <p class="text-gray-500 dark:text-slate-400 text-base sm:text-lg leading-relaxed">
                Notre équipe vous répond dans les plus brefs délais. Remplissez le formulaire ci-dessous et nous vous
                recontacterons.
            </p>
        </div>
    </section>

    <!-- ===== MAIN CONTENT ===== -->
    <section class="py-12 px-4 bg-white dark:bg-[#0f1117]">
        <div class="container mx-auto max-w-5xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 items-start">

                <!-- ===== INFO CARDS ===== -->
                <div class="lg:col-span-1 flex flex-col gap-5 reveal">

                    <div class="info-card">
                        <div class="info-icon bg-green-50 dark:bg-green-900/30">
                            <svg class="w-6 h-6 text-dizo-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <div
                                class="text-xs font-semibold text-gray-400 dark:text-slate-500 uppercase tracking-wider mb-0.5">
                                Email</div>
                            <div class="text-sm font-semibold text-gray-800 dark:text-slate-200">contact@dizonli.com
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon bg-orange-50 dark:bg-orange-900/30">
                            <svg class="w-6 h-6 text-dizo-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <div
                                class="text-xs font-semibold text-gray-400 dark:text-slate-500 uppercase tracking-wider mb-0.5">
                                Localisation</div>
                            <div class="text-sm font-semibold text-gray-800 dark:text-slate-200">Cotonou, Bénin
                            </div>
                        </div>
                    </div>




                </div>

                <!-- ===== FORM CARD ===== -->
                <div class="lg:col-span-2 reveal" style="transition-delay: 0.15s;">
                    <div
                        class="bg-white dark:bg-[#1e2535] rounded-3xl shadow-lg border border-gray-100 dark:border-[#2d3748] p-7 sm:p-10">

                        <!-- Alert erreur serveur -->
                        <div class="alert-box alert-error" id="alertError">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                            </svg>
                            <span id="alertErrorText">Une erreur est survenue. Veuillez réessayer.</span>
                        </div>

                        <!-- Formulaire -->
                        <div id="formWrap">
                            <h2 class="text-xl sm:text-2xl font-bold mb-7 dark:text-slate-100">Envoyez-nous un
                                message
                            </h2>

                            <!-- Nom + Prénom -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                                <div>
                                    <label class="form-label" for="prenom">Prénom <span
                                            class="text-red-500">*</span></label>
                                    <div class="form-field">
                                        <svg class="form-icon w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <input type="text" id="prenom" name="prenom" class="form-input"
                                            placeholder="Votre prénom" autocomplete="given-name">
                                    </div>
                                    <p class="field-error" id="err-prenom">Ce champ est requis.</p>
                                </div>
                                <div>
                                    <label class="form-label" for="nom">Nom <span class="text-red-500">*</span></label>
                                    <div class="form-field">
                                        <svg class="form-icon w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <input type="text" id="nom" name="nom" class="form-input"
                                            placeholder="Votre nom" autocomplete="family-name">
                                    </div>
                                    <p class="field-error" id="err-nom">Ce champ est requis.</p>
                                </div>
                            </div>

                            <!-- Tel + Email -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                                <div>
                                    <label class="form-label" for="telephone">Numéro de téléphone</label>
                                    <div class="form-field">
                                        <svg class="form-icon w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <input type="tel" id="telephone" name="telephone" class="form-input"
                                            placeholder="+229 XX XX XX XX" autocomplete="tel">
                                    </div>
                                    <p class="field-error" id="err-telephone"></p>
                                </div>
                                <div>
                                    <label class="form-label" for="email">Adresse e-mail <span
                                            class="text-red-500">*</span></label>
                                    <div class="form-field">
                                        <svg class="form-icon w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <input type="email" id="email" name="email" class="form-input"
                                            placeholder="vous@exemple.com" autocomplete="email">
                                    </div>
                                    <p class="field-error" id="err-email">Adresse e-mail invalide.</p>
                                </div>
                            </div>

                            <!-- Sujet -->
                            <div class="mb-5">
                                <label class="form-label" for="sujet">Sujet <span class="text-red-500">*</span></label>
                                <div class="form-field">
                                    <svg class="form-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                    <input type="text" id="sujet" name="sujet" class="form-input"
                                        placeholder="Objet de votre message">
                                </div>
                                <p class="field-error" id="err-sujet">Ce champ est requis.</p>
                            </div>

                            <!-- Message -->
                            <div class="mb-7">
                                <label class="form-label" for="message">Message <span
                                        class="text-red-500">*</span></label>
                                <div class="form-field">
                                    <svg class="form-icon textarea-icon w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    <textarea id="message" name="message" class="form-input"
                                        placeholder="Décrivez votre demande en détail…" rows="5"></textarea>
                                </div>
                                <p class="field-error" id="err-message">Ce champ est requis.</p>
                            </div>

                            <!-- Bouton -->
                            <button type="button" class="btn-send" id="btnSend">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                <span id="btnText">Envoyer le message</span>
                            </button>
                        </div>

                        <!-- Succès -->
                        <div class="success-box" id="successBox">
                            <div class="success-check">
                                <svg class="w-8 h-8 text-dizo-green" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-slate-100 mb-2">Message envoyé !
                            </h3>
                            <p class="text-gray-500 dark:text-slate-400 text-sm max-w-xs leading-relaxed">Merci de
                                nous
                                avoir contactés. Notre équipe vous répondra dans les plus brefs délais.</p>
                            <button onclick="resetForm()"
                                class="mt-6 px-6 py-2.5 rounded-xl border-2 border-dizo-green text-dizo-green font-semibold text-sm hover:bg-dizo-green hover:text-white transition">
                                Envoyer un autre message
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <!--=====FOOTER=====-->
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
                        <a href="#" class="text-gray-500 text-sm hover:text-dizo-green transition">Mentions
                            légales</a>
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
    const isNearBottom = () => window.scrollY > (document.documentElement.scrollHeight - window.innerHeight) * 0.7;
    window.addEventListener('scroll', () => {
        scrollArrow.classList.toggle('visible', window.scrollY > 100);
        arrowIcon.innerHTML = isNearBottom() ?
            '<path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>' :
            '<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>';
    });
    scrollArrow.addEventListener('click', () => {
        window.scrollTo({
            top: isNearBottom() ? 0 : document.body.scrollHeight,
            behavior: 'smooth'
        });
    });

    // ---- REVEAL ----
    const reveals = document.querySelectorAll('.reveal');
    const revObs = new IntersectionObserver(
        entries => entries.forEach(e => {
            if (e.isIntersecting) e.target.classList.add('active');
        }), {
            threshold: 0.08
        }
    );
    reveals.forEach(r => revObs.observe(r));



    // Effacer erreur au focus
    ['prenom', 'nom', 'email', 'telephone', 'sujet', 'message'].forEach(id => {
        document.getElementById(id).addEventListener('input', () => {
            document.getElementById(id).classList.remove('error');
            const err = document.getElementById('err-' + id);
            if (err) err.classList.remove('show');
        });
    });

    document.getElementById('btnSend').addEventListener('click', async () => {
        if (!validateForm()) return;

        const btn = document.getElementById('btnSend');
        const btnText = document.getElementById('btnText');
        const alertEl = document.getElementById('alertError');
        alertEl.classList.remove('show');

        // État chargement
        btn.disabled = true;
        btn.innerHTML = '<div class="spinner"></div><span>Envoi en cours…</span>';

        const payload = {
            prenom: getVal('prenom'),
            nom: getVal('nom'),
            telephone: getVal('telephone'),
            email: getVal('email'),
            sujet: getVal('sujet'),
            message: getVal('message'),
        };

        try {
            const res = await fetch(MAIL_ENDPOINT, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload),
            });
            const data = await res.json();

            if (res.ok && data.success) {
                // Succès
                document.getElementById('formWrap').style.display = 'none';
                document.getElementById('successBox').classList.add('show');
            } else {
                throw new Error(data.message || 'Erreur serveur.');
            }
        } catch (err) {
            document.getElementById('alertErrorText').textContent =
                err.message || 'Une erreur est survenue. Veuillez réessayer.';
            alertEl.classList.add('show');
            btn.disabled = false;
            btn.innerHTML = `
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
        </svg>
        <span>Envoyer le message</span>`;
        }
    });

    function resetForm() {
        ['prenom', 'nom', 'telephone', 'email', 'sujet', 'message'].forEach(id => {
            document.getElementById(id).value = '';
            document.getElementById(id).classList.remove('error');
        });
        document.querySelectorAll('.field-error').forEach(e => e.classList.remove('show'));
        document.getElementById('alertError').classList.remove('show');
        document.getElementById('successBox').classList.remove('show');
        document.getElementById('formWrap').style.display = '';

        const btn = document.getElementById('btnSend');
        btn.disabled = false;
        btn.innerHTML = `
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
      </svg>
      <span>Envoyer le message</span>`;
    }
    </script>
</body>

</html>