<?php


?>

<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizonli</title>
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
    /* =============================================
       FONTS
    ============================================= */
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

    /* =============================================
       BASE
    ============================================= */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
        transition: background-color 0.3s, color 0.3s;
        font-family: 'Poppins', sans-serif;
    }

    /* =============================================
       DARK MODE
    ============================================= */
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

    html.dark .feature-card {
        background: #1e2535;
    }

    html.dark .mini-stat {
        background: #2d3748;
    }

    html.dark .form-card {
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

    html.dark .footer-bg {
        background: #060810;
    }

    html.dark .footer-border {
        border-color: #1e2535;
    }

    html.dark .about-section {
        background: #0f1117;
    }

    /* =============================================
       ANIMATIONS
    ============================================= */
    @keyframes walk {

        0%,
        100% {
            transform: translateY(0) rotate(0deg)
        }

        50% {
            transform: translateY(-8px) rotate(2deg)
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

    @keyframes navBtnPulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(249, 115, 22, .5)
        }

        50% {
            box-shadow: 0 0 0 6px rgba(249, 115, 22, 0)
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

    @keyframes cardBurst {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(22, 163, 74, 0)
        }

        30% {
            transform: scale(1.07) rotate(-1deg);
            box-shadow: 0 0 0 20px rgba(22, 163, 74, .15)
        }

        60% {
            transform: scale(0.97) rotate(1deg);
            box-shadow: 0 0 0 35px rgba(22, 163, 74, 0)
        }

        100% {
            transform: scale(1) rotate(0deg);
            box-shadow: none
        }
    }

    @keyframes cardBurstOrange {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(249, 115, 22, 0)
        }

        30% {
            transform: scale(1.07) rotate(1deg);
            box-shadow: 0 0 0 20px rgba(249, 115, 22, .15)
        }

        60% {
            transform: scale(0.97) rotate(-1deg);
            box-shadow: 0 0 0 35px rgba(249, 115, 22, 0)
        }

        100% {
            transform: scale(1) rotate(0deg);
            box-shadow: none
        }
    }

    @keyframes iconBounce {

        0%,
        100% {
            transform: scale(1) translateY(0)
        }

        30% {
            transform: scale(1.4) translateY(-6px)
        }

        60% {
            transform: scale(0.9) translateY(2px)
        }
    }

    @keyframes particleFly {
        0% {
            opacity: 1;
            transform: translate(0, 0) scale(1)
        }

        100% {
            opacity: 0;
            transform: translate(var(--dx), var(--dy)) scale(0)
        }
    }

    @keyframes rippleOut {
        0% {
            transform: scale(0);
            opacity: 0.8
        }

        100% {
            transform: scale(4);
            opacity: 0
        }
    }

    @keyframes textPop {
        0% {
            transform: scale(1)
        }

        40% {
            transform: scale(1.08)
        }

        100% {
            transform: scale(1)
        }
    }

    @keyframes heroProgress {
        from {
            width: 0%
        }

        to {
            width: 100%
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

    /* =============================================
       FEATURE CARDS — CLICK EFFECTS
    ============================================= */
    .feature-card.clicked {
        animation: cardBurst 0.6s cubic-bezier(0.175, .885, .32, 1.275) forwards
    }

    .feature-card.clicked-orange {
        animation: cardBurstOrange 0.6s cubic-bezier(0.175, .885, .32, 1.275) forwards
    }

    .feature-card.clicked .card-icon,
    .feature-card.clicked-orange .card-icon {
        animation: iconBounce 0.5s ease forwards
    }

    .feature-card.clicked h3 {
        animation: textPop 0.4s ease forwards
    }

    .ripple-effect {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(22, 163, 74, .3), transparent);
        pointer-events: none;
        animation: rippleOut 0.7s ease forwards;
        width: 60px;
        height: 60px;
        margin-left: -30px;
        margin-top: -30px;
        z-index: 20;
    }

    .ripple-orange {
        background: radial-gradient(circle, rgba(249, 115, 22, .3), transparent)
    }

    .particle {
        position: absolute;
        border-radius: 50%;
        width: 8px;
        height: 8px;
        pointer-events: none;
        animation: particleFly 0.7s ease forwards;
        z-index: 20;
    }

    /* =============================================
       BUTTONS
    ============================================= */
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
        box-shadow: 0 12px 30px rgba(249, 115, 22, .5);
        animation: none;
        background: #ea580c;
    }

    .btn-green {
        background: #16a34a;
        transition: all 0.3s ease;
    }

    .btn-green:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(22, 163, 74, .4);
        background: #15803d;
    }

    .btn-orange {
        background: #f97316;
        transition: all 0.3s ease;
    }

    .btn-orange:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(249, 115, 22, .4);
        background: #ea580c;
    }

    /* =============================================
       COUNTERS
    ============================================= */
    .counter-number {
        color: #16a34a !important;
        -webkit-text-fill-color: #16a34a !important;
        background: none !important;
        font-weight: 900;
        text-shadow: 0 1px 4px rgba(22, 163, 74, .15);
    }

    .stat-circle-orange .counter-number {
        color: #f97316 !important;
        -webkit-text-fill-color: #f97316 !important;
        text-shadow: 0 1px 4px rgba(249, 115, 22, .15);
    }

    html.dark .counter-number {
        color: #4ade80 !important;
        -webkit-text-fill-color: #4ade80 !important;
    }

    html.dark .stat-circle-orange .counter-number {
        color: #fb923c !important;
        -webkit-text-fill-color: #fb923c !important;
    }

    /* =============================================
       FEATURE CARDS
    ============================================= */
    .feature-card {
        transition: all 0.4s cubic-bezier(0.175, .885, .32, 1.275);
        background: white;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .feature-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 25px 50px rgba(0, 0, 0, .15);
    }

    /* =============================================
       STAT CIRCLE
    ============================================= */
    .stat-circle {
        position: relative;
        overflow: hidden;
    }

    .stat-circle::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(34, 197, 94, .1), rgba(249, 115, 22, .1));
        opacity: 0;
        transition: opacity 0.3s;
    }

    .stat-circle:hover::before {
        opacity: 1;
    }

    /* =============================================
       NAVBAR
    ============================================= */
    .navbar-scrolled {
        backdrop-filter: blur(20px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, .05);
    }

    /* =============================================
       MISC
    ============================================= */
    .glow {
        box-shadow: 0 0 40px rgba(22, 163, 74, .3), 0 0 80px rgba(249, 115, 22, .2);
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

    /* =============================================
       DARK MODE TOGGLE — FIX: repositionné pour ne
       pas couvrir le contenu sur mobile
    ============================================= */
    #themeToggle {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        z-index: 60;
        width: 36px;
        height: 36px;
        border-radius: 8px 0 0 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s;
        background: #16a34a;
        border: none;
        box-shadow: -3px 0 15px rgba(22, 163, 74, .3);
    }

    #themeToggle:hover {
        width: 42px;
        background: #f97316;
    }

    #themeIcon {
        font-size: 1rem;
    }

    /* Sur mobile : remonter le toggle pour ne pas chevaucher le scroll arrow */
    @media (max-width:767px) {
        #themeToggle {
            top: auto;
            bottom: 90px;
            transform: none;
        }
    }

    /* =============================================
       SCROLL ARROW
    ============================================= */
    #scrollArrow {
        position: fixed;
        bottom: 28px;
        right: 28px;
        z-index: 999;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s;
        opacity: 0;
        pointer-events: none;
        box-shadow: 0 4px 20px rgba(22, 163, 74, .4);
    }

    #scrollArrow.visible {
        opacity: 1;
        pointer-events: all;
    }

    #scrollArrow svg {
        animation: bounceFade 1.5s ease-in-out infinite;
    }

    /* =============================================
       HERO SLIDER
    ============================================= */
    .hero-slider-wrap {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .hero-slides-track {
        display: flex;
        transition: transform 0.7s cubic-bezier(0.77, 0, .175, 1);
        will-change: transform;
    }

    .hero-slide {
        min-width: 100%;
        position: relative;
    }

    /* ---- Slide 1 — Vidéo ---- */
    .slide-video {
        width: 100%;
        height: calc(100svh - 64px);
        min-height: 480px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .slide-video video {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 0;
    }

    .slide-video-content {
        position: relative;
        z-index: 2;
        text-align: center;
        width: 100%;
        padding: 1.5rem 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .slide-video-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 35%;
        background: linear-gradient(to top, rgba(0, 0, 0, .88) 0%, transparent 100%);
        z-index: 1;
    }

    /* ---- Slide 2 — App Showcase ---- */
    .slide-app {
        width: 100%;
        min-height: calc(100svh - 64px);
        background: #f0fdf4;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    html.dark .slide-app {
        background: #0f1117;
    }

    .slide2-inner {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1.25rem;
        padding: 2rem 1rem 5rem;
        text-align: center;
    }

    .s2-title {
        order: 1;
    }

    .s2-phone {
        order: 2;
    }

    .s2-btns {
        order: 3;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .s2-avatars {
        order: 4;
    }

    /* Tablette (768px–1023px) : 2 colonnes asymétriques */
    @media (min-width:768px) and (max-width:1023px) {
        .slide2-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "title  phone"
                "btns   phone"
                "avatars phone";
            gap: 1.25rem 2rem;
            align-items: center;
            padding: 2rem 2rem 5rem;
            text-align: left;
        }

        .s2-title {
            grid-area: title;
            order: unset;
        }

        .s2-phone {
            grid-area: phone;
            order: unset;
            display: flex !important;
            justify-content: center;
            align-self: center;
        }

        .s2-btns {
            grid-area: btns;
            order: unset;
            justify-content: flex-start;
        }

        .s2-avatars {
            grid-area: avatars;
            order: unset;
        }
    }

    /* Desktop (≥1024px) */
    @media (min-width:1024px) {
        .slide2-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "title  phone"
                "btns   phone"
                "avatars phone";
            gap: 1.5rem 3rem;
            align-items: center;
            padding: 3rem 4rem 5rem;
            text-align: left;
        }

        .s2-title {
            grid-area: title;
            order: unset;
        }

        .s2-phone {
            grid-area: phone;
            order: unset;
            display: flex !important;
            justify-content: center;
            align-self: center;
        }

        .s2-btns {
            grid-area: btns;
            order: unset;
            justify-content: flex-start;
        }

        .s2-avatars {
            grid-area: avatars;
            order: unset;
        }
    }

    /* ---- Slide 3 — Article ---- */
    .slide-article {
        width: 100%;
        min-height: calc(100svh - 64px);
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    html.dark .slide-article {
        background: #0f1117;
    }

    .slide-article-pattern {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
    }

    .slide-article-pattern svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
    }

    .slide-article-accent {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 6px;
        background: #16a34a;
        z-index: 2;
    }

    @media (max-width:767px) {
        .slide-article-accent {
            display: none;
        }
    }

    .slide-article-inner {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 2.5rem 1.25rem 5rem;
        display: flex;
        flex-direction: column;
        gap: 2rem;
        align-items: flex-start;
    }

    /* Tablette */
    @media (min-width:768px) {
        .slide-article-inner {
            padding: 3rem 2.5rem 5rem;
            flex-direction: row;
            align-items: center;
            gap: 2.5rem;
        }
    }

    /* Desktop */
    @media (min-width:1024px) {
        .slide-article-inner {
            padding: 4rem 5rem 5rem;
            gap: 5rem;
        }
    }

    .slide-article-left {
        flex: 1.1;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .slide-article-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .slide-article-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #f0fdf4;
        border: 1.5px solid #bbf7d0;
        color: #16a34a;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        padding: 6px 14px;
        border-radius: 99px;
    }

    html.dark .slide-article-tag {
        background: #052e16;
        border-color: #166534;
        color: #4ade80;
    }

    .slide-article-tag span.dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #16a34a;
        display: inline-block;
        animation: bounceFade 2s ease-in-out infinite;
    }

    html.dark .slide-article-tag span.dot {
        background: #4ade80;
    }

    .slide-article-title {
        font-size: clamp(1.5rem, 3.5vw, 3rem);
        font-weight: 900;
        line-height: 1.15;
        color: #111827;
        letter-spacing: -.02em;
    }

    html.dark .slide-article-title {
        color: #f1f5f9;
    }

    .slide-article-title em {
        font-style: normal;
        color: #f97316;
    }

    .slide-article-summary {
        font-size: clamp(.85rem, 1.4vw, 1.05rem);
        color: #4b5563;
        line-height: 1.75;
        max-width: 540px;
    }

    html.dark .slide-article-summary {
        color: #94a3b8;
    }

    .slide-article-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .slide-article-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #16a34a;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 800;
        font-size: .9rem;
        flex-shrink: 0;
    }

    .slide-article-meta-text {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .slide-article-meta-text strong {
        font-size: .85rem;
        color: #111827;
        font-weight: 700;
    }

    html.dark .slide-article-meta-text strong {
        color: #e2e8f0;
    }

    .slide-article-meta-text span {
        font-size: .75rem;
        color: #9ca3af;
    }

    .slide-article-divider {
        width: 48px;
        height: 3px;
        background: #16a34a;
        border-radius: 99px;
    }

    .slide-article-cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #16a34a;
        color: white;
        font-weight: 700;
        font-size: .95rem;
        padding: 13px 24px;
        border-radius: 14px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        align-self: flex-start;
    }

    .slide-article-cta:hover {
        background: white;
        color: #16a34a;
        border-color: #16a34a;
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(22, 163, 74, .25);
    }

    html.dark .slide-article-cta:hover {
        background: #0f1117;
        color: #4ade80;
        border-color: #4ade80;
    }

    .slide-article-cta svg {
        transition: transform 0.3s ease;
    }

    .slide-article-cta:hover svg {
        transform: translateX(4px);
    }

    .slide-article-card {
        background: #f9fafb;
        border: 1.5px solid #e5e7eb;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0, 0, 0, .07);
        transition: box-shadow .3s ease, transform .3s ease;
    }

    html.dark .slide-article-card {
        background: #1e2535;
        border-color: #2d3748;
        box-shadow: 0 8px 32px rgba(0, 0, 0, .3);
    }

    .slide-article-card:hover {
        box-shadow: 0 16px 48px rgba(0, 0, 0, .12);
        transform: translateY(-4px);
    }

    .slide-article-card-img {
        width: 100%;
        height: 160px;
        background: #dcfce7;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    html.dark .slide-article-card-img {
        background: #052e16;
    }

    @media (min-width:768px) {
        .slide-article-card-img {
            height: 190px;
        }
    }

    .slide-article-card-img-icon {
        font-size: 3.5rem;
        opacity: .35;
        animation: float 5s ease-in-out infinite;
    }

    .slide-article-card-img-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        background: #f97316;
        color: white;
        font-size: .7rem;
        font-weight: 700;
        letter-spacing: .06em;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 99px;
    }

    .slide-article-card-img-read {
        position: absolute;
        bottom: 14px;
        right: 14px;
        background: white;
        color: #374151;
        font-size: .72rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 99px;
        display: flex;
        align-items: center;
        gap: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
    }

    html.dark .slide-article-card-img-read {
        background: #1e2535;
        color: #cbd5e1;
    }

    .slide-article-card-body {
        padding: 1.1rem 1.25rem 1.4rem;
    }

    .slide-article-card-category {
        font-size: .7rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #f97316;
        margin-bottom: 8px;
    }

    .slide-article-card-title {
        font-size: 1rem;
        font-weight: 800;
        color: #111827;
        line-height: 1.4;
        margin-bottom: 8px;
    }

    html.dark .slide-article-card-title {
        color: #f1f5f9;
    }

    .slide-article-card-excerpt {
        font-size: .82rem;
        color: #6b7280;
        line-height: 1.6;
        margin-bottom: 14px;
    }

    html.dark .slide-article-card-excerpt {
        color: #94a3b8;
    }

    .slide-article-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 8px;
    }

    .slide-article-card-tags {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
    }

    .slide-article-card-tag {
        background: #f0fdf4;
        color: #15803d;
        font-size: .68rem;
        font-weight: 600;
        padding: 3px 8px;
        border-radius: 99px;
        border: 1px solid #bbf7d0;
    }

    html.dark .slide-article-card-tag {
        background: #052e16;
        color: #4ade80;
        border-color: #166534;
    }

    .slide-article-card-link {
        font-size: .8rem;
        font-weight: 700;
        color: #16a34a;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 4px;
        transition: gap .2s ease;
    }

    .slide-article-card-link:hover {
        gap: 8px;
    }

    html.dark .slide-article-card-link {
        color: #4ade80;
    }

    .slide-article-stats {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .slide-article-stat {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #f9fafb;
        border: 1.5px solid #e5e7eb;
        border-radius: 12px;
        padding: 9px 12px;
        flex: 1;
        min-width: 100px;
    }

    html.dark .slide-article-stat {
        background: #1e2535;
        border-color: #2d3748;
    }

    .slide-article-stat-icon {
        width: 32px;
        height: 32px;
        border-radius: 9px;
        background: #f0fdf4;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    html.dark .slide-article-stat-icon {
        background: #052e16;
    }

    .slide-article-stat-val {
        font-size: .95rem;
        font-weight: 900;
        color: #16a34a;
        line-height: 1;
    }

    html.dark .slide-article-stat-val {
        color: #4ade80;
    }

    .slide-article-stat-lbl {
        font-size: .68rem;
        color: #9ca3af;
        margin-top: 2px;
    }

    .slide-article-scroll {
        position: absolute;
        bottom: 22px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 5;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #f0fdf4;
        border: 1.5px solid #bbf7d0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        animation: bounceFade 1.5s ease-in-out infinite;
        transition: background .2s;
    }

    html.dark .slide-article-scroll {
        background: #1e2535;
        border-color: #2d3748;
    }

    .slide-article-scroll:hover {
        background: #dcfce7;
    }

    html.dark .slide-article-scroll:hover {
        background: #052e16;
    }

    /* =============================================
       HERO DOTS & PROGRESS
    ============================================= */
    .hero-dot {
        width: 10px;
        height: 10px;
        border-radius: 99px;
        background: rgba(255, 255, 255, .45);
        cursor: pointer;
        transition: all .3s;
        border: 1px solid rgba(0, 0, 0, .15);
    }

    .hero-dot.active {
        background: white;
        width: 28px;
    }

    .hero-slider-wrap.slide3-active .hero-dot {
        background: rgba(22, 163, 74, .3);
        border-color: rgba(22, 163, 74, .4);
    }

    .hero-slider-wrap.slide3-active .hero-dot.active {
        background: #16a34a;
    }

    /* =============================================
       HERO ARROWS
    ============================================= */
    .hero-arrow {
        position: absolute;
        top: 50%;
        z-index: 10;
        transform: translateY(-50%);
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: rgba(0, 0, 0, .50);
        backdrop-filter: blur(6px);
        border: 2px solid rgba(255, 255, 255, .65);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all .25s;
        box-shadow: 0 4px 16px rgba(0, 0, 0, .3);
    }

    .hero-arrow:hover {
        background: #16a34a;
        border-color: white;
        transform: translateY(-50%) scale(1.1);
    }

    .hero-arrow-left {
        left: 12px;
    }

    .hero-arrow-right {
        right: 12px;
    }

    /* Tablette+ */
    @media (min-width:768px) {
        .hero-arrow-left {
            left: 20px;
        }

        .hero-arrow-right {
            right: 20px;
        }
    }

    .hero-slider-wrap.slide3-active .hero-arrow {
        background: rgba(22, 163, 74, .12);
        border-color: rgba(22, 163, 74, .5);
    }

    .hero-slider-wrap.slide3-active .hero-arrow svg {
        color: #16a34a;
    }

    html.dark .hero-slider-wrap.slide3-active .hero-arrow {
        background: rgba(255, 255, 255, .08);
        border-color: rgba(255, 255, 255, .2);
    }

    html.dark .hero-slider-wrap.slide3-active .hero-arrow svg {
        color: #e2e8f0;
    }

    .hero-progress-bar {
        height: 3px;
        background: rgba(255, 255, 255, .9);
        border-radius: 99px;
        animation: heroProgress 7s linear forwards;
    }

    .hero-progress-wrap {
        width: 80px;
        height: 3px;
        background: rgba(0, 0, 0, .2);
        border-radius: 99px;
        overflow: hidden;
    }

    .hero-slider-wrap.slide3-active .hero-progress-bar {
        background: #16a34a;
    }

    .hero-slider-wrap.slide3-active .hero-progress-wrap {
        background: rgba(22, 163, 74, .18);
    }

    /* =============================================
       TESTIMONIALS
    ============================================= */
    .testi-slider-wrap {
        overflow: hidden;
        position: relative;
    }

    .testi-track {
        display: flex;
        transition: transform .55s cubic-bezier(0.77, 0, .175, 1);
        will-change: transform;
    }

    .testi-slide {
        min-width: 100%;
        padding: 0 2px;
        box-sizing: border-box;
    }

    .testi-slide.animate-in-left {
        animation: slideInLeft .5s ease forwards;
    }

    .testi-slide.animate-in-right {
        animation: slideInRight .5s ease forwards;
    }

    .dot-btn {
        width: 10px;
        height: 10px;
        border-radius: 99px;
        background: #d1d5db;
        transition: all .3s ease;
        cursor: pointer;
        border: none;
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
        transition: all .25s ease;
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
        transition: color .25s;
    }

    .testi-progress-bar {
        height: 3px;
        background: #16a34a;
        border-radius: 99px;
        animation: progressBar 5s linear forwards;
    }

    /* =============================================
       VIDEO FALLBACK
    ============================================= */
    .video-fallback {
        position: absolute;
        inset: 0;
        z-index: 0;
        background: linear-gradient(135deg, #052e16 0%, #1a1208 50%, #431407 100%);
    }

    .video-fallback-particles {
        position: absolute;
        inset: 0;
        z-index: 0;
        overflow: hidden;
    }

    .vfp {
        position: absolute;
        border-radius: 50%;
        opacity: .15;
    }

    /* =============================================
       STATS SECTION — TABLETTE FIX
       Sur tablette on garde 3 colonnes mais les
       cercles sont légèrement réduits
    ============================================= */
    @media (min-width:640px) and (max-width:900px) {
        .stat-circle {
            width: 120px !important;
            height: 120px !important;
        }

        .stat-circle .counter-number {
            font-size: 1.6rem !important;
        }
    }

    /* =============================================
       MOBILE — OVERRIDES GLOBAUX
    ============================================= */
    @media (max-width:639px) {

        /* Slide 1 hero : espacement vertical */
        .slide-video-content {
            padding: 1rem 0.75rem;
            gap: 0;
        }

        .slide-video-content h6 {
            font-size: 1.8rem;
            margin-bottom: 0.75rem;
        }

        .slide-video-content p {
            font-size: .85rem;
            margin-bottom: 1rem;
        }

        /* Slide 1 : boutons store empilés proprement */
        .slide-video-content .flex.flex-col {
            gap: 0.75rem;
        }

        /* Stats inline slide 1 */
        .slide-video-content .flex.items-center.gap-6 {
            gap: 0.75rem;
        }

        .slide-video-content .flex.items-center.gap-6 .text-2xl {
            font-size: 1.3rem;
        }

        /* Slide 2 téléphone : taille réduite */
        .s2-phone>div>div {
            width: 200px !important;
            height: 460px !important;
        }

        /* Slide 3 : cta full width */
        .slide-article-cta {
            align-self: stretch;
            justify-content: center;
        }

        /* Download banner */
        #download h2 {
            font-size: 1.1rem !important;
        }

        #download p {
            font-size: .8rem !important;
        }

        /* Footer : 1 colonne centré */
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

        /* Footer liens légaux sur 1 ligne */
        footer .container>.flex>div.flex-1 .flex {
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            justify-content: center !important;
            gap: 10px !important;
        }

        footer .container>.flex>div.flex-1 .flex a {
            font-size: .68rem !important;
            white-space: nowrap;
        }

        /* Footer droite centré */
        footer .container>.flex>div:last-child {
            align-items: center !important;
        }
    }

    /* =============================================
       TABLETTE GÉNÉRALE (768px–1023px)
    ============================================= */
    @media (min-width:768px) and (max-width:1023px) {

        /* Download banner : 2 boutons côte à côte */
        #download .flex {
            flex-direction: row !important;
            justify-content: center;
        }

        /* Feature cards : 3 colonnes qui fonctionnent */
        #fonctionnalites .grid {
            grid-template-columns: repeat(3, 1fr) !important;
        }

        /* Témoignages : padding adapté */
        .testi-slide>div {
            padding: 1.5rem 2rem !important;
        }
    }

    /* =============================================
       DESKTOP WIDE (≥1280px)
    ============================================= */
    @media (min-width:1280px) {
        .slide-article-inner {
            max-width: 1280px;
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
    <button id="scrollArrow" aria-label="Défiler" class="btn-green text-white">
        <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- ===== NAVBAR ===== -->
    <nav id="navbar"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/80 dark:bg-[#0f1117]/80 backdrop-blur-md">
        <div class="container mx-auto px-4 sm:px-6 lg:px-10 py-4 flex items-center justify-between">

            <!-- LOGO — centré sur mobile via flex justify-between + logo absolu -->
            <a href="index.php" class="flex items-center space-x-2 group z-10">
                <img src="assets/logo_ss.svg" alt="Dizonli Logo" class="h-8 w-auto block dark:hidden">
                <img src="assets/logo.svg" alt="Dizonli Logo" class="h-8 w-auto hidden dark:block">
            </a>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                <a href="index.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium transition relative group text-sm xl:text-base">Accueil<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all"></span></a>
                <a href="fonctionnalites.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium transition relative group text-sm xl:text-base">Fonctionnalités<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all"></span></a>
                <a href="temoignages.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium transition relative group text-sm xl:text-base">Témoignages<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all"></span></a>
                <a href="projet.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium transition relative group text-sm xl:text-base">Projet<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all"></span></a>
                <a href="ressources.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium transition relative group text-sm xl:text-base">Ressources<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all"></span></a>
                <a href="contact.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium transition relative group text-sm xl:text-base">Contact<span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all"></span></a>
                <a href="https://play.google.com/store/apps/details?id=com.dizonli.app" target="_blank"
                    class="btn-nav-download text-white px-4 py-2.5 rounded-full font-bold text-sm flex items-center gap-2 no-underline whitespace-nowrap">
                    <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 16l-5-5h3V4h4v7h3l-5 5zm-6 2h12v2H6z" />
                    </svg>
                    <span>Télécharger</span>
                    <span
                        class="bg-white/25 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full leading-none">GRATUIT</span>
                </a>
            </div>

            <!-- Hamburger -->
            <button id="mobileMenuBtn" class="lg:hidden text-gray-700 dark:text-slate-300 p-2 -mr-1 z-10"
                aria-label="Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu Mobile (drawer) -->
        <div id="mobileMenu"
            class="mobile-menu lg:hidden fixed top-0 right-0 w-72 max-w-[85vw] h-screen bg-white dark:bg-[#1a1f2e] shadow-2xl p-6 z-50 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <img src="assets/logo_ss.svg" alt="Dizonli Logo" class="h-8 w-auto block dark:hidden">
                <img src="assets/logo.svg" alt="Dizonli Logo" class="h-8 w-auto hidden dark:block">
                <button id="closeMobileMenu" class="text-gray-700 dark:text-slate-300 p-1" aria-label="Fermer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col space-y-5">
                <a href="index.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium py-1">Accueil</a>
                <a href="fonctionnalites.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium py-1">Fonctionnalités</a>
                <a href="temoignages.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium py-1">Témoignages</a>
                <a href="projet.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium py-1">Projet</a>
                <a href="ressources.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium py-1">Ressources</a>
                <a href="contact.php"
                    class="text-gray-700 dark:text-slate-300 hover:text-green-600 font-medium py-1">Contact</a>
                <a href="https://play.google.com/store/apps/details?id=com.dizonli.app" target="_blank"
                    class="btn-nav-download text-white px-4 py-3 rounded-full font-bold text-sm flex items-center justify-center gap-2 mt-4">
                    <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 16l-5-5h3V4h4v7h3l-5 5zm-6 2h12v2H6z" />
                    </svg>
                    Télécharger gratuitement
                </a>
            </div>
        </div>
    </nav>

    <!-- ===== HERO SECTION — SLIDER 3 SLIDES ===== -->
    <section id="accueil" class="hero-slider-wrap">

        <button class="hero-arrow hero-arrow-left" id="heroArrowLeft" aria-label="Slide précédent">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button class="hero-arrow hero-arrow-right" id="heroArrowRight" aria-label="Slide suivant">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Dots + progress -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2">
            <div class="flex items-center gap-2">
                <button class="hero-dot active" data-idx="0" aria-label="Slide 1"></button>
                <button class="hero-dot" data-idx="1" aria-label="Slide 2"></button>
                <button class="hero-dot" data-idx="2" aria-label="Slide 3"></button>
            </div>
            <div class="hero-progress-wrap">
                <div class="hero-progress-bar" id="heroProgressBar"></div>
            </div>
        </div>

        <div class="hero-slides-track" id="heroTrack">

            <!-- ===== SLIDE 1 — VIDEO BG ===== -->
            <div class="hero-slide slide-video">
                <div class="video-fallback">
                    <div class="video-fallback-particles">
                        <div class="vfp bg-green-600"
                            style="width:400px;height:400px;top:-100px;left:-100px;filter:blur(80px);"></div>
                        <div class="vfp bg-orange-500"
                            style="width:500px;height:500px;bottom:-150px;right:-100px;filter:blur(100px);"></div>
                        <div class="vfp bg-green-400"
                            style="width:200px;height:200px;top:40%;left:40%;filter:blur(60px);"></div>
                    </div>
                </div>
                <video autoplay muted loop playsinline class="hidden" id="heroVideo">
                    <source src="assets/Accueil.mp4" type="video/mp4">
                </video>

                <div class="absolute inset-0 z-1 overflow-hidden pointer-events-none">
                    <div
                        style="position:absolute;width:6px;height:6px;border-radius:50%;background:rgba(255,255,255,.4);top:20%;left:15%;animation:bounceFade 3s infinite;">
                    </div>
                    <div
                        style="position:absolute;width:4px;height:4px;border-radius:50%;background:rgba(255,255,255,.3);top:60%;left:25%;animation:bounceFade 4s 1s infinite;">
                    </div>
                    <div
                        style="position:absolute;width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.2);top:35%;right:20%;animation:float 5s infinite;">
                    </div>
                    <div
                        style="position:absolute;width:5px;height:5px;border-radius:50%;background:rgba(255,255,255,.35);bottom:30%;right:30%;animation:bounceFade 3.5s .5s infinite;">
                    </div>
                </div>

                <div class="slide-video-content">
                    <h6 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-4 sm:mb-5 text-center"
                        style="animation:fadeUp .6s .1s ease both;text-shadow:0 4px 30px rgba(0,0,0,.5);">
                        <span style="color:#4ade80;">Marchez, Progressez Ensemble</span>
                    </h6>

                    <p class="text-white/90 text-sm sm:text-lg md:text-xl max-w-xl text-center mb-6 sm:mb-8 leading-relaxed"
                        style="animation:fadeUp .6s .2s ease both;text-shadow:0 2px 10px rgba(0,0,0,.5);">
                        Dizonli transforme chaque pas en victoire. Suivez vos progrès, rejoignez des communautés et
                        participez aux Podothons.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center mb-6 sm:mb-8"
                        style="animation:fadeUp .6s .3s ease both;">
                        <a href="https://play.google.com/store/apps/details?id=com.dizonli.app" target="_blank"
                            class="bg-white text-gray-900 rounded-2xl font-bold flex items-center justify-center gap-3 shadow-2xl px-5 sm:px-7 py-3.5 sm:py-4 hover:scale-105 transition w-full sm:w-auto max-w-[260px]">
                            <svg class="w-6 sm:w-7 h-6 sm:h-7 flex-shrink-0 text-green-600" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                            </svg>
                            <div class="text-left">
                                <div class="text-xs text-gray-500 leading-none mb-0.5">Télécharger sur</div>
                                <div class="text-sm sm:text-base font-extrabold leading-tight">Google Play</div>
                            </div>
                        </a>

                        <a href="https://apps.apple.com/bj/app/dizonli/id6756833340?l=fr-FR" target="_blank"
                            class="bg-gray-900 text-white rounded-2xl font-bold flex items-center justify-center gap-3 shadow-2xl px-5 sm:px-7 py-3.5 sm:py-4 hover:scale-105 transition w-full sm:w-auto max-w-[260px] border border-white/20">
                            <svg class="w-6 sm:w-7 h-6 sm:h-7 flex-shrink-0 text-white" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" />
                            </svg>
                            <div class="text-left">
                                <div class="text-xs text-white/60 leading-none mb-0.5">Télécharger sur</div>
                                <div class="text-sm sm:text-base font-extrabold leading-tight">App Store</div>
                            </div>
                        </a>
                    </div>

                    <div class="flex items-center gap-4 sm:gap-8 justify-center"
                        style="animation:fadeUp .6s .4s ease both;">
                        <div class="text-center">
                            <div class="text-white font-black text-xl sm:text-3xl"
                                style="text-shadow:0 2px 10px rgba(0,0,0,.5);">50K+</div>
                            <div class="text-white/80 text-xs">Utilisateurs</div>
                        </div>
                        <div class="w-px h-8 bg-white/30"></div>
                        <div class="text-center">
                            <div class="text-white font-black text-xl sm:text-3xl"
                                style="text-shadow:0 2px 10px rgba(0,0,0,.5);">4.9</div>
                            <div class="text-white/80 text-xs">Note moyenne</div>
                        </div>
                        <div class="w-px h-8 bg-white/30"></div>
                        <div class="text-center">
                            <div class="text-white font-black text-xl sm:text-3xl"
                                style="text-shadow:0 2px 10px rgba(0,0,0,.5);">500+</div>
                            <div class="text-white/80 text-xs">Défis</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== SLIDE 2 — APP SHOWCASE ===== -->
            <div class="hero-slide slide-app">
                <div class="slide2-inner">

                    <div class="s2-title reveal">
                        <h1 class="font-extrabold leading-tight text-gray-800 dark:text-slate-100"
                            style="font-size:clamp(1.4rem,3.5vw,3.5rem);">
                            Une application qui<br>
                            <span class="text-orange-500">change votre vie</span>
                        </h1>
                    </div>

                    <div class="s2-phone reveal" style="transition-delay:.1s;">
                        <div class="relative" style="animation:float 4s ease-in-out infinite;">
                            <div class="relative bg-[#1a1a1a] rounded-[3rem] shadow-2xl glow overflow-hidden"
                                style="width:220px;height:490px;">

                                <div class="flex justify-between items-center px-5 pt-4 pb-1 bg-[#111]">
                                    <span class="text-white text-xs font-bold">08:20</span>
                                    <div class="flex items-center gap-1">
                                        <div class="flex items-center gap-0.5">
                                            <div class="w-1 h-2 bg-white rounded-sm opacity-50"></div>
                                            <div class="w-1 h-2.5 bg-white rounded-sm opacity-70"></div>
                                            <div class="w-1 h-3 bg-white rounded-sm opacity-90"></div>
                                            <div class="w-1 h-3.5 bg-white rounded-sm"></div>
                                        </div>
                                        <div class="flex items-center border border-white/40 rounded-sm px-0.5 ml-1">
                                            <div class="w-4 h-2 bg-[#4ade80] rounded-sm"></div>
                                            <div class="w-0.5 h-1 bg-white/40 rounded-r-sm ml-0.5"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-[#111] h-full overflow-hidden">
                                    <div class="flex items-center justify-between px-4 py-2 bg-[#111]">
                                        <span class="text-white font-bold text-sm">Dizonli</span>
                                        <div class="flex items-center gap-3">
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z" />
                                            </svg>
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="flex border-b border-[#2a2a2a] bg-[#111]">
                                        <div
                                            class="flex-1 flex flex-col items-center py-1.5 border-b-2 border-[#4ade80]">
                                            <svg class="w-4 h-4 text-[#4ade80]" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                                            </svg>
                                            <span class="text-[#4ade80] text-[9px] mt-0.5 font-semibold">Accueil</span>
                                        </div>
                                        <div class="flex-1 flex flex-col items-center py-1.5">
                                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z" />
                                            </svg>
                                            <span class="text-gray-500 text-[9px] mt-0.5">Challenges</span>
                                        </div>
                                        <div class="flex-1 flex flex-col items-center py-1.5">
                                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                                            </svg>
                                            <span class="text-gray-500 text-[9px] mt-0.5">Stats</span>
                                        </div>
                                        <div class="flex-1 flex flex-col items-center py-1.5">
                                            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                            </svg>
                                            <span class="text-gray-500 text-[9px] mt-0.5">Communauté</span>
                                        </div>
                                    </div>

                                    <div class="mx-3 mt-3 bg-[#4ade80] rounded-2xl p-3">
                                        <div class="text-center my-1">
                                            <div class="text-white font-black text-2xl leading-tight" id="phoneSteps">8
                                                452</div>
                                            <div class="text-white/80 text-[10px]">/ 10 000 pas</div>
                                        </div>
                                        <div class="mt-2 mb-1">
                                            <div class="flex justify-between text-white/80 text-[9px] mb-1">
                                                <span>Progression</span><span id="progressPct">84%</span>
                                            </div>
                                            <div class="w-full h-2 bg-white/30 rounded-full overflow-hidden">
                                                <div id="progressBar"
                                                    class="h-full bg-white rounded-full transition-all duration-700"
                                                    style="width:84%"></div>
                                            </div>
                                        </div>
                                        <div class="bg-white/20 rounded-full px-2 py-1 text-center mt-2">
                                            <span class="text-white text-[9px] font-medium">🏃 C'est parti ! Votre santé
                                                vous remerciera !</span>
                                        </div>
                                        <div class="grid grid-cols-3 gap-1 mt-2">
                                            <div class="text-center">
                                                <div class="text-white font-bold text-xs">5.2 km</div>
                                                <div class="text-white/60 text-[8px]">Distance</div>
                                            </div>
                                            <div class="text-center">
                                                <div class="text-white font-bold text-xs">42 min</div>
                                                <div class="text-white/60 text-[8px]">Temps</div>
                                            </div>
                                            <div class="text-center">
                                                <div class="text-white font-bold text-xs">320 cal</div>
                                                <div class="text-white/60 text-[8px]">Calories</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mx-3 mt-3 bg-[#1e1e1e] rounded-2xl p-3">
                                        <span class="text-white text-xs font-semibold mb-2 block">Cette Semaine</span>
                                        <div class="relative" style="height:60px;">
                                            <div
                                                class="absolute inset-y-0 left-0 right-0 flex items-end justify-around gap-1">
                                                <div class="flex-1">
                                                    <div class="w-full bg-[#4ade80] rounded-t-sm"
                                                        style="height:62%;opacity:.7;"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="w-full bg-[#4ade80] rounded-t-sm"
                                                        style="height:80%;opacity:.7;"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="w-full bg-[#4ade80] rounded-t-sm"
                                                        style="height:45%;opacity:.7;"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="w-full bg-[#4ade80] rounded-t-sm"
                                                        style="height:95%;opacity:.7;"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="w-full bg-[#4ade80] rounded-t-sm"
                                                        style="height:70%;opacity:.7;"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="w-full bg-[#4ade80] rounded-t-sm"
                                                        style="height:55%;opacity:.7;"></div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="w-full bg-[#4ade80] rounded-t-sm border border-white/40"
                                                        style="height:84%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-around mt-1">
                                            <span class="text-gray-500 text-[8px] flex-1 text-center">Lun</span>
                                            <span class="text-gray-500 text-[8px] flex-1 text-center">Mar</span>
                                            <span class="text-gray-500 text-[8px] flex-1 text-center">Mer</span>
                                            <span class="text-gray-500 text-[8px] flex-1 text-center">Jeu</span>
                                            <span class="text-gray-500 text-[8px] flex-1 text-center">Ven</span>
                                            <span class="text-gray-500 text-[8px] flex-1 text-center">Sam</span>
                                            <span class="text-white text-[8px] font-bold flex-1 text-center">Dim</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute -top-3 -right-6 bg-white dark:bg-[#1e2535] rounded-2xl p-2.5 shadow-xl"
                                    style="animation:bounceFade 3s ease-in-out infinite;">
                                    <div class="flex items-center space-x-2">
                                        <div class="text-lg">🏃‍♀️</div>
                                        <div>
                                            <div class="text-xs text-gray-500 dark:text-slate-400">Objectif</div>
                                            <div class="text-sm font-bold text-green-600">84%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute -bottom-3 -left-6 bg-white dark:bg-[#1e2535] rounded-2xl p-2.5 shadow-xl"
                                    style="animation:float 4s ease-in-out 1s infinite;">
                                    <div class="flex items-center space-x-2">
                                        <div class="text-lg">🏅</div>
                                        <div>
                                            <div class="text-xs text-gray-500 dark:text-slate-400">Badge</div>
                                            <div class="text-sm font-bold text-orange-500">Marathonien</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="s2-btns reveal" style="transition-delay:.2s;">
                        <a href="https://play.google.com/store/apps/details?id=com.dizonli.app" target="_blank"
                            class="btn-green text-white rounded-xl font-bold flex items-center justify-center gap-2 shadow-lg px-4 sm:px-5 py-2.5 sm:py-3">
                            <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                            </svg>
                            <div class="text-left">
                                <div class="text-[10px] opacity-90 leading-none mb-0.5">Télécharger sur</div>
                                <div class="text-sm font-extrabold leading-tight">Google Play</div>
                            </div>
                        </a>
                        <a href="https://apps.apple.com/bj/app/dizonli/id6756833340?l=fr-FR" target="_blank"
                            class="btn-orange text-white rounded-xl font-bold flex items-center justify-center gap-2 shadow-lg px-4 sm:px-5 py-2.5 sm:py-3">
                            <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18.71,19.5C17.88,20.74 17,21.95 15.66,21.97C14.32,22 13.89,21.18 12.37,21.18C10.84,21.18 10.37,21.95 9.1,22C7.79,22.05 6.8,20.68 5.96,19.47C4.25,17 2.94,12.45 4.7,9.39C5.57,7.87 7.13,6.91 8.82,6.88C10.1,6.86 11.32,7.75 12.11,7.75C12.89,7.75 14.37,6.68 15.92,6.84C16.57,6.87 18.39,7.1 19.56,8.82C19.47,8.88 17.39,10.1 17.41,12.63C17.44,15.65 20.06,16.66 20.09,16.67C20.06,16.74 19.67,18.11 18.71,19.5M13,3.5C13.73,2.67 14.94,2.04 15.94,2C16.07,3.17 15.6,4.35 14.9,5.19C14.21,6.04 13.07,6.7 11.95,6.61C11.8,5.46 12.36,4.26 13,3.5Z" />
                            </svg>
                            <div class="text-left">
                                <div class="text-[10px] opacity-90 leading-none mb-0.5">Télécharger sur</div>
                                <div class="text-sm font-extrabold leading-tight">App Store</div>
                            </div>
                        </a>
                    </div>

                    <div class="s2-avatars reveal" style="transition-delay:.3s;">
                        <div class="flex items-center gap-3 sm:gap-4 justify-center lg:justify-start">
                            <div class="flex -space-x-2.5">
                                <div
                                    class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-green-600 border-4 border-white dark:border-[#0f1117] flex items-center justify-center text-white font-bold text-sm">
                                    A</div>
                                <div
                                    class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-orange-500 border-4 border-white dark:border-[#0f1117] flex items-center justify-center text-white font-bold text-sm">
                                    S</div>
                                <div
                                    class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-green-700 border-4 border-white dark:border-[#0f1117] flex items-center justify-center text-white font-bold text-sm">
                                    J</div>
                                <div
                                    class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-orange-700 border-4 border-white dark:border-[#0f1117] flex items-center justify-center text-white font-bold text-sm">
                                    +</div>
                            </div>
                            <div>
                                <div class="font-bold text-gray-800 dark:text-slate-200 text-sm sm:text-base">+50 000
                                    utilisateurs</div>
                                <div
                                    class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 flex items-center gap-1">
                                    <span class="text-yellow-500">★★★★★</span>
                                    <span>4.9 de note moyenne</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===== SLIDE 3 — ARTICLE RESSOURCES ===== -->
            <div class="hero-slide slide-article">

                <div class="slide-article-pattern" aria-hidden="true">
                    <svg viewBox="0 0 1440 800" preserveAspectRatio="xMidYMid slice" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1200" cy="100" r="220" stroke="#16a34a" stroke-width="1" stroke-dasharray="8 12"
                            opacity=".12" />
                        <circle cx="1200" cy="100" r="340" stroke="#16a34a" stroke-width="1" stroke-dasharray="4 16"
                            opacity=".08" />
                        <circle cx="1200" cy="100" r="460" stroke="#16a34a" stroke-width="1" stroke-dasharray="2 20"
                            opacity=".05" />
                        <pattern id="dots3" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="1.5" fill="#16a34a" opacity=".12" />
                        </pattern>
                        <rect width="1440" height="800" fill="url(#dots3)" />
                        <line x1="0" y1="800" x2="400" y2="0" stroke="#f97316" stroke-width="1" opacity=".06" />
                        <line x1="200" y1="800" x2="600" y2="0" stroke="#f97316" stroke-width="1" opacity=".04" />
                        <rect x="1100" y="550" width="200" height="200" rx="24" stroke="#16a34a" stroke-width="1.5"
                            opacity=".08" fill="none" />
                        <rect x="1130" y="580" width="140" height="140" rx="16" stroke="#16a34a" stroke-width="1"
                            opacity=".06" fill="none" />
                    </svg>
                </div>

                <div class="slide-article-accent"></div>

                <div class="slide-article-inner">

                    <div class="slide-article-left">
                        <div>
                            <span class="slide-article-tag">
                                <span class="dot"></span>
                                Ressources &amp; Santé
                            </span>
                        </div>
                        <h2 class="slide-article-title">
                            Marcher pour vivre<br>
                            <em>mieux</em> — nos guides<br>
                            pour vous accompagner
                        </h2>
                        <div class="slide-article-divider"></div>
                        <p class="slide-article-summary">
                            Conseils santé, plans d'entraînement, fiches pratiques sur la marche active… Nos ressources
                            sont conçues par des experts pour vous aider à bouger plus, mieux et en toute sécurité,
                            chaque jour.
                        </p>
                        <div class="slide-article-meta">
                            <div class="slide-article-avatar">D</div>
                            <div class="slide-article-meta-text">
                                <strong>Équipe Dizonli</strong>
                                <span>Experts santé &amp; bien-être · Mis à jour mai 2026</span>
                            </div>
                        </div>
                        <a href="ressources.php" class="slide-article-cta">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            Voir toutes les ressources
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>

                    <div class="slide-article-right">
                        <div class="slide-article-card">
                            <div class="slide-article-card-img">
                                <div class="slide-article-card-img-icon">🚶</div>
                                <span class="slide-article-card-img-badge">Guide pratique</span>
                                <span class="slide-article-card-img-read">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="2">
                                        <circle cx="12" cy="12" r="10" />
                                        <path stroke-linecap="round" d="M12 6v6l4 2" />
                                    </svg>
                                    5 min de lecture
                                </span>
                            </div>
                            <div class="slide-article-card-body">
                                <div class="slide-article-card-category">Santé · Marche active</div>
                                <div class="slide-article-card-title">10 000 pas par jour : mythe ou réalité&nbsp;?
                                </div>
                                <p class="slide-article-card-excerpt">
                                    Découvrez ce que dit la science sur l'objectif des 10 000 pas, comment l'adapter à
                                    votre rythme et quels bénéfices concrets vous pouvez attendre dès la première
                                    semaine.
                                </p>
                                <div class="slide-article-card-footer">
                                    <div class="slide-article-card-tags">
                                        <span class="slide-article-card-tag">Podothon</span>
                                        <span class="slide-article-card-tag">Cardio</span>
                                        <span class="slide-article-card-tag">Bien-être</span>
                                    </div>
                                    <a href="ressources.php" class="slide-article-card-link">
                                        Lire
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="slide-article-stats">
                            <div class="slide-article-stat">
                                <div class="slide-article-stat-icon">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="slide-article-stat-val">24+</div>
                                    <div class="slide-article-stat-lbl">Articles publiés</div>
                                </div>
                            </div>
                            <div class="slide-article-stat">
                                <div class="slide-article-stat-icon">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="slide-article-stat-val">8</div>
                                    <div class="slide-article-stat-lbl">Experts santé</div>
                                </div>
                            </div>
                            <div class="slide-article-stat">
                                <div class="slide-article-stat-icon">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="slide-article-stat-val">100%</div>
                                    <div class="slide-article-stat-lbl">Gratuit</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="slide-article-scroll" aria-label="Défiler vers le bas"
                    onclick="document.getElementById('statsAnchor')?.scrollIntoView({behavior:'smooth',block:'start'})">
                    <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

        </div>
    </section>

    <!-- ===== STATS ===== -->
    <div id="statsAnchor"></div>

    <section class="py-14 sm:py-20 bg-white dark:bg-[#0f1117] about-section">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 reveal">
                <span
                    class="inline-block bg-green-50 dark:bg-green-900/30 text-green-700 px-4 py-2 rounded-full font-semibold text-sm mb-4">À
                    PROPOS DE DIZONLI</span>
                <p class="text-base sm:text-lg text-gray-600 dark:text-slate-400 leading-relaxed">Dizonli vous
                    accompagne au quotidien pour transformer chaque pas en victoire. En solo, en famille ou en
                    communauté.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8">

                <div class="reveal text-center group">
                    <div
                        class="stat-circle relative w-36 h-36 sm:w-44 sm:h-44 mx-auto mb-4 sm:mb-5 rounded-full bg-green-50 dark:bg-green-900/20 flex flex-col items-center justify-center shadow-lg group-hover:shadow-2xl transition border-4 border-green-200 dark:border-green-800">
                        <div
                            class="absolute inset-3 rounded-full border-4 border-dashed border-green-600 opacity-30 animate-pulse">
                        </div>
                        <svg class="w-8 sm:w-9 h-8 sm:h-9 text-green-600 mb-1"
                            style="animation:walk 1s ease-in-out infinite;" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7" />
                        </svg>
                        <div class="text-2xl sm:text-4xl font-black counter-number" data-count="1000000">0</div>
                        <div class="text-[11px] text-gray-600 dark:text-slate-400 mt-1 font-semibold">pas suivis</div>
                    </div>
                    <h3 class="text-base sm:text-xl font-bold mb-2 dark:text-slate-200">Suivi Quotidien de Pas</h3>
                    <p class="text-gray-600 dark:text-slate-400 text-sm">Comptez chaque pas avec précision et atteignez
                        vos objectifs jour après jour.</p>
                </div>

                <div class="reveal text-center group" style="transition-delay:.2s;">
                    <div
                        class="stat-circle stat-circle-orange relative w-36 h-36 sm:w-44 sm:h-44 mx-auto mb-4 sm:mb-5 rounded-full bg-orange-50 dark:bg-orange-900/20 flex flex-col items-center justify-center shadow-lg group-hover:shadow-2xl transition border-4 border-orange-200 dark:border-orange-800">
                        <div
                            class="absolute inset-3 rounded-full border-4 border-dashed border-orange-500 opacity-30 animate-pulse">
                        </div>
                        <svg class="w-8 sm:w-9 h-8 sm:h-9 text-orange-500 mb-1"
                            style="animation:bounceFade 3s infinite;" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M16,4C18.21,4 20,5.79 20,8C20,10.21 18.21,12 16,12C13.79,12 12,10.21 12,8C12,5.79 13.79,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M9,5C10.66,5 12,6.34 12,8C12,9.66 10.66,11 9,11C7.34,11 6,9.66 6,8C6,6.34 7.34,5 9,5M9,12C10.07,12 11.09,12.13 12,12.36C10.78,13.74 10,15.79 10,18V20H0V18C0,15.79 4.03,14 9,14V12Z" />
                        </svg>
                        <div class="text-2xl sm:text-4xl font-black counter-number" data-count="2500">0</div>
                        <div class="text-[11px] text-gray-600 dark:text-slate-400 mt-1 font-semibold">groupes actifs
                        </div>
                    </div>
                    <h3 class="text-base sm:text-xl font-bold mb-2 dark:text-slate-200">Groupes &amp; Communautés</h3>
                    <p class="text-gray-600 dark:text-slate-400 text-sm">Rejoignez des communautés engagées et marchez
                        ensemble vers vos objectifs.</p>
                </div>

                <div class="reveal text-center group" style="transition-delay:.4s;">
                    <div
                        class="stat-circle relative w-36 h-36 sm:w-44 sm:h-44 mx-auto mb-4 sm:mb-5 rounded-full bg-green-50 dark:bg-green-900/20 flex flex-col items-center justify-center shadow-lg group-hover:shadow-2xl transition border-4 border-green-200 dark:border-green-800">
                        <div
                            class="absolute inset-3 rounded-full border-4 border-dashed border-green-600 opacity-30 animate-pulse">
                        </div>
                        <svg class="w-8 sm:w-9 h-8 sm:h-9 text-green-600 mb-1"
                            style="animation:float 4s ease-in-out infinite;" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z" />
                        </svg>
                        <div class="text-2xl sm:text-4xl font-black counter-number" data-count="500">0</div>
                        <div class="text-[11px] text-gray-600 dark:text-slate-400 mt-1 font-semibold">défis &amp;
                            événements</div>
                    </div>
                    <h3 class="text-base sm:text-xl font-bold mb-2 dark:text-slate-200">Défis &amp; Événements</h3>
                    <p class="text-gray-600 dark:text-slate-400 text-sm">Participez à des podothons et des défis pour
                        bouger plus et gagner des récompenses.</p>
                </div>

            </div>
            <div class="text-center mt-10 sm:mt-12 reveal">
                <a href="temoignages.php"
                    class="inline-flex items-center btn-orange text-white px-7 sm:px-8 py-3.5 sm:py-4 rounded-full font-bold text-base sm:text-lg shadow-lg group">
                    <span>Voir les témoignages</span>
                    <svg class="ml-3 w-5 h-5 group-hover:translate-x-2 transition" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== FONCTIONNALITÉS ===== -->
    <section id="fonctionnalites" class="py-14 sm:py-20 bg-green-50 dark:bg-[#0d1a0f] relative overflow-hidden">
        <div class="absolute top-10 left-10 text-7xl sm:text-9xl opacity-5 select-none" aria-hidden="true">🏃</div>
        <div class="absolute bottom-10 right-10 text-7xl sm:text-9xl opacity-5 select-none" aria-hidden="true">🌳</div>
        <div class="container mx-auto px-4 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 reveal">
                <span
                    class="inline-block bg-orange-50 dark:bg-orange-900/30 text-orange-600 px-4 py-2 rounded-full font-semibold text-sm mb-4">FONCTIONNALITÉS</span>
                <h2 class="text-2xl sm:text-4xl md:text-5xl font-extrabold mb-5">Des fonctionnalités <span
                        class="text-orange-500 font-bold">majeures</span> pour vous</h2>
                <p class="text-base sm:text-lg text-gray-600 dark:text-slate-400">Tout ce dont vous avez besoin pour
                    rester actif et motivé chaque jour.</p>
            </div>
            <!-- 3 colonnes fixes — 1 colonne sur mobile, 2 sur sm, 3 sur md -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 sm:gap-6 md:gap-8 mb-10">

                <div class="feature-card dark:bg-[#1e2535] rounded-3xl p-6 sm:p-7 shadow-lg group reveal" id="card1">
                    <div
                        class="absolute top-0 right-0 w-28 h-28 bg-green-100 dark:bg-green-900/30 rounded-full -mr-14 -mt-14 opacity-50 group-hover:scale-150 transition-transform duration-700 pointer-events-none">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-12 sm:w-14 h-12 sm:h-14 bg-green-600 rounded-2xl flex items-center justify-center mb-4 sm:mb-5 shadow-lg card-icon">
                            <svg class="w-7 sm:w-8 h-7 sm:h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 dark:text-slate-200">Podomètre Intelligent</h3>
                        <p class="text-gray-600 dark:text-slate-400 mb-4 sm:mb-5 text-sm">Compte automatiquement vos pas
                            avec une précision exceptionnelle, sans effort.</p>
                        <div class="flex items-center text-green-600 font-semibold text-sm">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="feature-card dark:bg-[#1e2535] rounded-3xl p-6 sm:p-7 shadow-lg group reveal" id="card2"
                    style="transition-delay:.15s;">
                    <div
                        class="absolute top-0 right-0 w-28 h-28 bg-orange-100 dark:bg-orange-900/30 rounded-full -mr-14 -mt-14 opacity-50 group-hover:scale-150 transition-transform duration-700 pointer-events-none">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-12 sm:w-14 h-12 sm:h-14 bg-orange-500 rounded-2xl flex items-center justify-center mb-4 sm:mb-5 shadow-lg card-icon">
                            <svg class="w-7 sm:w-8 h-7 sm:h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M16,4C18.21,4 20,5.79 20,8C20,10.21 18.21,12 16,12C13.79,12 12,10.21 12,8C12,5.79 13.79,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M9,5C10.66,5 12,6.34 12,8C12,9.66 10.66,11 9,11C7.34,11 6,9.66 6,8C6,6.34 7.34,5 9,5M9,12C10.07,12 11.09,12.13 12,12.36C10.78,13.74 10,15.79 10,18V20H0V18C0,15.79 4.03,14 9,14V12Z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 dark:text-slate-200">Groupes Communautaires</h3>
                        <p class="text-gray-600 dark:text-slate-400 mb-4 sm:mb-5 text-sm">Marchez avec votre famille,
                            vos amis et créez des liens qui durent.</p>
                        <div class="flex items-center text-orange-500 font-semibold text-sm">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Sur sm : centrer la 3e carte dans la grille 2 colonnes -->
                <div class="feature-card dark:bg-[#1e2535] rounded-3xl p-6 sm:p-7 shadow-lg group reveal sm:col-start-1 sm:col-end-3 md:col-start-auto md:col-end-auto md:col-span-1"
                    id="card3" style="transition-delay:.3s;">
                    <div
                        class="absolute top-0 right-0 w-28 h-28 bg-green-100 dark:bg-green-900/20 rounded-full -mr-14 -mt-14 opacity-50 group-hover:scale-150 transition-transform duration-700 pointer-events-none">
                    </div>
                    <div class="relative z-10 sm:max-w-md sm:mx-auto md:max-w-none md:mx-0">
                        <div
                            class="w-12 sm:w-14 h-12 sm:h-14 bg-green-600 rounded-2xl flex items-center justify-center mb-4 sm:mb-5 shadow-lg card-icon">
                            <svg class="w-7 sm:w-8 h-7 sm:h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94.63 1.5 1.98 2.63 3.61 2.96V19H7v2h10v-2h-4v-3.1c1.63-.33 2.98-1.46 3.61-2.96C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM5 8V7h2v3.82C5.84 10.4 5 9.3 5 8zm14 0c0 1.3-.84 2.4-2 2.82V7h2v1z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 dark:text-slate-200">Événements Podothons</h3>
                        <p class="text-gray-600 dark:text-slate-400 mb-4 sm:mb-5 text-sm">Participez à des défis
                            exclusifs et gagnez des récompenses motivantes.</p>
                        <div class="flex items-center text-green-600 font-semibold text-sm">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-4 h-4 text-orange-500 group-hover:translate-x-1 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== TÉMOIGNAGES ===== -->
    <section id="temoignages" class="py-14 sm:py-20 bg-white dark:bg-[#0f1117]">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-16 reveal">
                <span
                    class="inline-block bg-green-50 dark:bg-green-900/30 text-green-700 px-4 py-2 rounded-full font-semibold text-sm mb-4">TÉMOIGNAGES</span>
                <h2 class="text-2xl sm:text-4xl md:text-5xl font-extrabold mb-5">Ils <span
                        class="text-orange-500 font-bold">marchent</span> avec Dizonli</h2>
                <p class="text-base sm:text-lg text-gray-600 dark:text-slate-400">Découvrez ce que nos utilisateurs
                    disent de leur expérience.</p>
            </div>

            <div class="max-w-2xl mx-auto reveal mb-14 sm:mb-16">
                <div class="h-1 bg-gray-100 dark:bg-gray-800 rounded-full mb-5 sm:mb-6 overflow-hidden">
                    <div id="testiProgress" class="testi-progress-bar"></div>
                </div>

                <div class="testi-slider-wrap rounded-3xl">
                    <div class="testi-track" id="testiTrack">

                        <div class="testi-slide">
                            <div
                                class="bg-green-50 dark:bg-[#0d1f13] p-6 sm:p-9 rounded-3xl shadow-md border border-green-100 dark:border-green-900">
                                <div class="flex text-yellow-400 mb-3 sm:mb-4 text-lg">★★★★★</div>
                                <p
                                    class="text-gray-700 dark:text-slate-300 mb-5 sm:mb-6 italic leading-relaxed text-sm sm:text-base">
                                    "Depuis que j'utilise DIZONLI, je fais enfin mes 5000 pas par jour. Le suivi est
                                    simple, les défis hebdomadaires me motivent, et marcher avec mon équipe rend tout
                                    beaucoup plus fun."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-green-600 flex items-center justify-center text-white font-bold mr-3 sm:mr-4 text-base sm:text-lg flex-shrink-0">
                                        A</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200 text-sm sm:text-base">
                                            Aurore K. Dossou</div>
                                        <div class="text-xs sm:text-sm text-gray-500 dark:text-slate-400">Chargée de
                                            programme, Ministère de la Santé</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <div
                                class="bg-orange-50 dark:bg-[#1f1008] p-6 sm:p-9 rounded-3xl shadow-md border border-orange-100 dark:border-orange-900">
                                <div class="flex text-yellow-400 mb-3 sm:mb-4 text-lg">★★★★★</div>
                                <p
                                    class="text-gray-700 dark:text-slate-300 mb-5 sm:mb-6 italic leading-relaxed text-sm sm:text-base">
                                    "Nous avons lancé un Podothon interne et l'engagement des employés a été incroyable.
                                    Les classements et les certificats ont vraiment stimulé la participation."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-500 flex items-center justify-center text-white font-bold mr-3 sm:mr-4 text-base sm:text-lg flex-shrink-0">
                                        S</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200 text-sm sm:text-base">
                                            Serge A.</div>
                                        <div class="text-xs sm:text-sm text-gray-500 dark:text-slate-400">Directeur RH,
                                            Google</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <div
                                class="bg-green-50 dark:bg-[#0d1f13] p-6 sm:p-9 rounded-3xl shadow-md border border-green-100 dark:border-green-900">
                                <div class="flex text-yellow-400 mb-3 sm:mb-4 text-lg">★★★★★</div>
                                <p
                                    class="text-gray-700 dark:text-slate-300 mb-5 sm:mb-6 italic leading-relaxed text-sm sm:text-base">
                                    "Mes collègues et moi avons formé un groupe au bureau. On marche ensemble pendant
                                    les pauses, c'est devenu notre rituel quotidien !"</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-green-700 flex items-center justify-center text-white font-bold mr-3 sm:mr-4 text-base sm:text-lg flex-shrink-0">
                                        J</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200 text-sm sm:text-base">
                                            Jules S.</div>
                                        <div class="text-xs sm:text-sm text-gray-500 dark:text-slate-400">Développeur
                                            Web</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <div
                                class="bg-orange-50 dark:bg-[#1f1008] p-6 sm:p-9 rounded-3xl shadow-md border border-orange-100 dark:border-orange-900">
                                <div class="flex text-yellow-400 mb-3 sm:mb-4 text-lg">★★★★★</div>
                                <p
                                    class="text-gray-700 dark:text-slate-300 mb-5 sm:mb-6 italic leading-relaxed text-sm sm:text-base">
                                    "L'interface est superbe et intuitive. Le podomètre est précis et les statistiques
                                    détaillées m'aident à comprendre mes progrès chaque jour."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-700 flex items-center justify-center text-white font-bold mr-3 sm:mr-4 text-base sm:text-lg flex-shrink-0">
                                        B</div>
                                    <div>
                                        <div class="font-bold text-gray-800 dark:text-slate-200 text-sm sm:text-base">
                                            Bénédicte K.</div>
                                        <div class="text-xs sm:text-sm text-gray-500 dark:text-slate-400">Community
                                            Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex items-center justify-between mt-5 sm:mt-6">
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
        </div>
    </section>

    <!-- ===== DOWNLOAD BANNER ===== -->
    <section id="download" class="py-8 sm:py-10 relative overflow-hidden">
        <div class="absolute inset-0 bg-green-600"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto text-center text-white reveal">
                <h2 class="text-xl sm:text-3xl font-extrabold mb-2">Prêt à commencer votre aventure ?</h2>
                <p class="text-sm sm:text-base mb-5 opacity-90">Téléchargez Dizonli et rejoignez des milliers
                    d'utilisateurs.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                    <a href="https://play.google.com/store/apps/details?id=com.dizonli.app" target="_blank"
                        class="bg-white text-gray-900 px-5 py-3 rounded-xl font-semibold flex items-center justify-center gap-2.5 shadow-lg hover:scale-105 transition w-full sm:w-auto max-w-[240px]">
                        <svg class="w-6 h-6 flex-shrink-0" viewBox="0 0 24 24" fill="#16a34a">
                            <path
                                d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                        </svg>
                        <div class="text-left leading-tight">
                            <div class="text-xs opacity-60">Télécharger sur</div>
                            <div class="text-sm font-bold">Google Play</div>
                        </div>
                    </a>
                    <a href="https://apps.apple.com/bj/app/dizonli/id6756833340?l=fr-FR" target="_blank"
                        class="bg-gray-900 text-white px-5 py-3 rounded-xl font-semibold flex items-center justify-center gap-2.5 shadow-lg hover:scale-105 transition w-full sm:w-auto max-w-[240px]">
                        <svg class="w-6 h-6 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
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
        <div class="container mx-auto px-4 lg:px-8 py-8">

            <!-- Layout : colonne sur mobile, flex-row sur md+ -->
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">

                <!-- Logo -->
                <a href="index.php" class="flex items-center justify-center md:justify-start flex-shrink-0">
                    <img src="assets/logo.svg" alt="Logo Dizonli" class="w-20 h-10" />
                </a>

                <!-- Liens légaux — centré sur mobile, centré sur md aussi -->
                <div class="flex flex-col items-center gap-2 flex-1">
                    <div class="flex flex-wrap justify-center gap-x-4 gap-y-1">
                        <a href="#" class="text-gray-500 text-sm hover:text-green-500 transition">Confidentialité</a>
                        <a href="#" class="text-gray-500 text-sm hover:text-green-500 transition">CGU</a>
                        <a href="#" class="text-gray-500 text-sm hover:text-green-500 transition">Mentions légales</a>
                    </div>
                </div>

                <!-- Réseaux sociaux + copyright -->
                <div class="flex flex-col items-center md:items-end gap-3 flex-shrink-0">
                    <!-- Icônes sociales : 2 lignes si besoin sur mobile -->
                    <div class="flex items-center flex-wrap justify-center md:justify-end gap-2">
                        <a href="https://www.facebook.com/dizoonli" aria-label="Facebook"
                            class="w-8 h-8 bg-gray-800 hover:bg-green-600 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 2h-3a5 5 0 0 0-5 5v3H7v4h2v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/dizonli" aria-label="Instagram"
                            class="w-8 h-8 bg-gray-800 hover:bg-orange-500 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://x.com/dizonliapp" aria-label="Twitter/X"
                            class="w-8 h-8 bg-gray-800 hover:bg-green-600 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/dizonli/" aria-label="LinkedIn"
                            class="w-8 h-8 bg-gray-800 hover:bg-orange-500 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@dizonli" aria-label="TikTok"
                            class="w-8 h-8 bg-gray-800 hover:bg-black rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.75 2h2.5c.2 1.7 1.4 3.1 3.05 3.4v2.6c-1.3-.05-2.55-.45-3.55-1.15v6.4c0 3.1-2.5 5.75-5.75 5.75S3.25 16.35 3.25 13.25s2.5-5.75 5.75-5.75c.25 0 .5.02.75.07v2.7c-.24-.08-.49-.12-.75-.12-1.7 0-3.1 1.4-3.1 3.1s1.4 3.1 3.1 3.1 3.1-1.4 3.1-3.1V2z" />
                            </svg>
                        </a>
                        <a href="https://whatsapp.com/channel/0029VbBgoTs4IBhIx04Yt31o" aria-label="WhatsApp"
                            class="w-8 h-8 bg-gray-800 hover:bg-green-600 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.52 3.48A11.9 11.9 0 0012.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.16 1.6 5.97L0 24l6.3-1.64a11.9 11.9 0 005.75 1.46h.01c6.55 0 11.89-5.34 11.89-11.89 0-3.17-1.24-6.14-3.43-8.35z" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@dizonli-app" aria-label="YouTube"
                            class="w-8 h-8 bg-gray-800 hover:bg-red-600 rounded-full flex items-center justify-center transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2 31.4 31.4 0 000 12a31.4 31.4 0 00.5 5.8 3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1A31.4 31.4 0 0024 12a31.4 31.4 0 00-.5-5.8zM9.6 15.5v-7l6.4 3.5-6.4 3.5z" />
                            </svg>
                        </a>
                    </div>
                    <span class="text-gray-600 text-xs text-center">© 2026 Dizonli. Tous droits réservés.</span>
                </div>

            </div>
        </div>
    </footer>

    <!-- ===== JAVASCRIPT ===== -->
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

    // ---- NAVBAR HEIGHT → sync margin-top of slider ----
    function syncSliderOffset() {
        const navH = document.getElementById('navbar').offsetHeight;
        document.querySelector('.hero-slider-wrap').style.marginTop = navH + 'px';
    }
    window.addEventListener('resize', syncSliderOffset);
    syncSliderOffset();

    // ---- NAVBAR scroll class ----
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => navbar.classList.toggle('navbar-scrolled', window.scrollY > 50));

    // ---- MOBILE MENU ----
    document.getElementById('mobileMenuBtn').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.add('active'));
    document.getElementById('closeMobileMenu').addEventListener('click', () =>
        document.getElementById('mobileMenu').classList.remove('active'));
    document.querySelectorAll('#mobileMenu a').forEach(link =>
        link.addEventListener('click', () => document.getElementById('mobileMenu').classList.remove('active')));

    // Fermer menu en cliquant dehors
    document.addEventListener('click', (e) => {
        const menu = document.getElementById('mobileMenu');
        const btn = document.getElementById('mobileMenuBtn');
        if (menu.classList.contains('active') && !menu.contains(e.target) && !btn.contains(e.target)) {
            menu.classList.remove('active');
        }
    });

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

    // ---- REVEAL ----
    const reveals = document.querySelectorAll('.reveal');
    const revObs = new IntersectionObserver(
        entries => entries.forEach(e => {
            if (e.isIntersecting) e.target.classList.add('active');
        }), {
            threshold: 0.05
        }
    );
    reveals.forEach(r => revObs.observe(r));

    // ---- COUNTERS ----
    const counters = document.querySelectorAll('.counter-number');
    const counterObs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const target = parseInt(el.dataset.count);
            const duration = 2000;
            const start = performance.now();
            const animate = (now) => {
                const p = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - p, 3);
                const val = Math.floor(target * eased);
                el.textContent = target >= 1000000 ? (val / 1000000).toFixed(1) + 'M+' :
                    target >= 1000 ? (val / 1000).toFixed(1) + 'K+' : val + '+';
                if (p < 1) requestAnimationFrame(animate);
            };
            requestAnimationFrame(animate);
            counterObs.unobserve(el);
        });
    }, {
        threshold: 0.5
    });
    counters.forEach(c => counterObs.observe(c));

    // ---- STEPS COUNTER (phone mock) ----
    const phoneSteps = document.getElementById('phoneSteps');
    const progressBar = document.getElementById('progressBar');
    const progressPct = document.getElementById('progressPct');
    const GOAL = 10000;
    let steps = 8452;

    function updateSteps() {
        steps += Math.floor(Math.random() * 3) + 1;
        if (steps > GOAL) steps = GOAL;
        if (phoneSteps) phoneSteps.textContent = steps.toLocaleString('fr-FR');
        const pct = Math.round((steps / GOAL) * 100);
        if (progressBar) progressBar.style.width = pct + '%';
        if (progressPct) progressPct.textContent = pct + '%';
    }
    setInterval(updateSteps, 1500);

    // ---- HERO SLIDER ----
    const heroTrack = document.getElementById('heroTrack');
    const heroDots = document.querySelectorAll('.hero-dot');
    const heroProgressBar = document.getElementById('heroProgressBar');
    const heroSliderWrap = document.querySelector('.hero-slider-wrap');
    let heroIdx = 0;
    const HERO_TOTAL = 3;
    let heroAutoTimer = null;

    function resetHeroProgress() {
        heroProgressBar.style.animation = 'none';
        void heroProgressBar.offsetWidth;
        heroProgressBar.style.animation = 'heroProgress 7s linear forwards';
    }

    function goHero(idx) {
        heroTrack.style.transform = `translateX(-${idx * 100}%)`;
        heroDots.forEach((d, i) => d.classList.toggle('active', i === idx));
        heroIdx = idx;
        resetHeroProgress();
        heroSliderWrap.classList.toggle('slide3-active', idx === 2);
    }

    function nextHero() {
        goHero((heroIdx + 1) % HERO_TOTAL);
    }

    function prevHero() {
        goHero((heroIdx - 1 + HERO_TOTAL) % HERO_TOTAL);
    }

    function startHeroAuto() {
        stopHeroAuto();
        heroAutoTimer = setInterval(nextHero, 7000);
    }

    function stopHeroAuto() {
        if (heroAutoTimer) clearInterval(heroAutoTimer);
    }

    document.getElementById('heroArrowRight').addEventListener('click', () => {
        nextHero();
        startHeroAuto();
    });
    document.getElementById('heroArrowLeft').addEventListener('click', () => {
        prevHero();
        startHeroAuto();
    });
    heroDots.forEach(d => d.addEventListener('click', () => {
        goHero(parseInt(d.dataset.idx));
        startHeroAuto();
    }));

    let heroTouchX = 0;
    heroTrack.addEventListener('touchstart', e => {
        heroTouchX = e.touches[0].clientX;
        stopHeroAuto();
    }, {
        passive: true
    });
    heroTrack.addEventListener('touchend', e => {
        const diff = heroTouchX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) diff > 0 ? nextHero() : prevHero();
        startHeroAuto();
    }, {
        passive: true
    });

    resetHeroProgress();
    startHeroAuto();

    // Afficher vidéo si disponible
    const heroVideo = document.getElementById('heroVideo');
    if (heroVideo) {
        heroVideo.addEventListener('canplay', () => heroVideo.classList.remove('hidden'));
        heroVideo.load();
    }

    // ---- FEATURE CARDS ----
    function spawnParticles(card, isGreen) {
        const colors = isGreen ?
            ['#16a34a', '#22c55e', '#4ade80', '#bbf7d0'] :
            ['#f97316', '#fb923c', '#fdba74', '#fed7aa'];
        for (let i = 0; i < 10; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            const angle = (Math.PI * 2 / 10) * i;
            const dist = 40 + Math.random() * 50;
            p.style.setProperty('--dx', Math.cos(angle) * dist + 'px');
            p.style.setProperty('--dy', Math.sin(angle) * dist + 'px');
            p.style.background = colors[Math.floor(Math.random() * colors.length)];
            p.style.left = (card.offsetWidth / 2) + 'px';
            p.style.top = (card.offsetHeight / 2) + 'px';
            p.style.animationDelay = (Math.random() * .15) + 's';
            p.style.animationDuration = (.5 + Math.random() * .4) + 's';
            card.appendChild(p);
            setTimeout(() => p.remove(), 900);
        }
    }

    function spawnRipple(card, e, isGreen) {
        const rect = card.getBoundingClientRect();
        const r = document.createElement('div');
        r.className = 'ripple-effect' + (isGreen ? '' : ' ripple-orange');
        r.style.left = (e.clientX - rect.left) + 'px';
        r.style.top = (e.clientY - rect.top) + 'px';
        card.appendChild(r);
        setTimeout(() => r.remove(), 800);
    }

    function animateCard(card, isGreen) {
        const cls = isGreen ? 'clicked' : 'clicked-orange';
        card.classList.remove('clicked', 'clicked-orange');
        void card.offsetWidth;
        card.classList.add(cls);
        setTimeout(() => card.classList.remove(cls), 700);
    }
    document.getElementById('card1').addEventListener('click', function(e) {
        animateCard(this, true);
        spawnRipple(this, e, true);
        spawnParticles(this, true);
    });
    document.getElementById('card2').addEventListener('click', function(e) {
        animateCard(this, false);
        spawnRipple(this, e, false);
        spawnParticles(this, false);
    });
    document.getElementById('card3').addEventListener('click', function(e) {
        animateCard(this, true);
        spawnRipple(this, e, true);
        spawnParticles(this, true);
    });

    // ---- TESTIMONIALS SLIDER ----
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
        if (Math.abs(diff) > 40) diff > 0 ? next() : prev();
        startAuto();
    }, {
        passive: true
    });

    track.parentElement.addEventListener('mouseenter', stopAuto);
    track.parentElement.addEventListener('mouseleave', startAuto);

    resetProgress();
    startAuto();
    </script>
</body>

</html>