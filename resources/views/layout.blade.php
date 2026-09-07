<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Aphatsara</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sarabun:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            /* =========================
               PINK COLOR THEME
               ========================= */

            --primary: #EC4899;
            --primary-rgb: 236, 72, 153;

            --primary-dark: #BE185D;

            --primary-light: #FDF2F8;
            --primary-light-rgb: 253, 242, 248;

            --bg-cream: #FFF5F7;
            --border-cream: #FCE7EC;

            --slate-dark: #2B1D24;
            --slate-gray: #76646E;

            --font-main: 'Plus Jakarta Sans', 'Sarabun', 'Segoe UI',
                Tahoma, Geneva, Verdana, sans-serif;

            --font-mono: 'JetBrains Mono', monospace;
        }

        /* =========================
           BODY
           ========================= */

        body {
            font-family: var(--font-main);
            background-color: var(--bg-cream);
            color: var(--slate-dark);
            -webkit-font-smoothing: antialiased;
        }

        /* =========================
           NAVBAR
           ========================= */

        .custom-navbar {
            background-color: rgba(255, 245, 247, 0.88) !important;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid rgba(252, 231, 236, 0.8) !important;

            border-radius: 14px;
            margin: 15px auto;

            max-width: 1200px;
            width: calc(100% - 30px);

            left: 50% !important;
            transform: translateX(-50%);

            padding: 10px 24px;

            box-shadow:
                0 10px 30px rgba(190, 24, 93, 0.03),
                0 1px 3px rgba(190, 24, 93, 0.02);

            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .custom-navbar:hover {
            box-shadow:
                0 15px 35px rgba(236, 72, 153, 0.1),
                0 5px 15px rgba(236, 72, 153, 0.05);

            border-color: rgba(236, 72, 153, 0.3) !important;
        }

        /* =========================
           BRAND
           ========================= */

        .navbar-brand-custom {
            font-weight: 800;
            font-size: 1.2rem;

            color: var(--slate-dark);

            text-decoration: none;
            letter-spacing: -0.02em;

            display: flex;
            align-items: center;
            gap: 8px;

            font-family: var(--font-mono);

            transition: all 0.2s ease;
        }

        .navbar-brand-custom:hover {
            transform: scale(1.02);
            color: var(--primary);
        }

        /* ป้าย DEV */

        .navbar-brand-custom .brand-id {
            font-size: 0.62rem;
            font-weight: 600;
            letter-spacing: 0.04em;

            color: var(--primary-dark);

            border: 1px dashed var(--border-cream);
            border-radius: 999px;

            padding: 2px 9px;

            background-color: rgba(253, 242, 248, 0.85);
        }

        /* =========================
           NAV LINKS
           ========================= */

        .custom-navbar .nav-link {
            color: var(--slate-gray) !important;

            font-weight: 600;
            font-size: 0.9rem;

            font-family: var(--font-mono);

            padding: 8px 16px !important;

            border-radius: 999px;

            transition:
                all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Hover */

        .custom-navbar .nav-link:hover {
            color: var(--primary) !important;

            background-color:
                rgba(var(--primary-light-rgb), 0.75);

            transform: translateY(-1px);
        }

        /* Active สีส้ม */

        .custom-navbar .nav-link.active-green {
            color: var(--primary-dark) !important;

            background-color: var(--primary-light);

            font-weight: 700;

            box-shadow:
                inset 0 0 0 1px rgba(var(--primary-rgb), 0.15);

            position: relative;
        }

        /* จุดเล็ก ๆ สีส้มใต้ Active */

        .custom-navbar .nav-link.active-green::after {
            content: '';

            position: absolute;

            width: 5px;
            height: 5px;

            background-color: var(--primary);

            border-radius: 50%;

            bottom: 4px;
            left: 50%;

            transform: translateX(-50%);
        }

        /* =========================
           DISABLED
           ========================= */

        .custom-navbar .nav-link.disabled {
            color: #cbd5e1 !important;
            opacity: 0.6;
        }

        /* =========================
           NAVBAR TOGGLER
           ========================= */

        .navbar-toggler {
            color: var(--primary) !important;
        }

        .navbar-toggler:focus {
            box-shadow:
                0 0 0 3px rgba(var(--primary-rgb), 0.15) !important;
        }

        /* =========================
           MOBILE
           ========================= */

        @media (max-width: 991px) {

            .custom-navbar .nav-link {
                border-radius: 10px;
            }

            .custom-navbar .nav-link.active-green::after {
                display: none;
            }

        }

        /* =========================
           TEXT SELECTION
           ========================= */

        ::selection {
            background-color: var(--primary);
            color: #ffffff;
        }

        /* =========================
           LINKS
           ========================= */

        a {
            transition: color 0.2s ease;
        }

        /* =========================
           MAIN CONTENT
           ========================= */

        main {
            min-height: 100vh;
        }
    </style>
</head>

<body>

    <!-- =========================
         NAVBAR
         ========================= -->

    <nav class="navbar navbar-expand-lg custom-navbar fixed-top">

        <div class="container">

            <!-- Logo / Brand -->

            <a class="navbar-brand-custom" href="{{ url('/') }}">

                Aphatsara

                <span class="brand-id">
                    DEV
                </span>

            </a>


            <!-- Mobile Button -->

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- Navigation -->

            <div class="collapse navbar-collapse" id="navbarNav">

                <div class="navbar-nav ms-auto gap-1 mt-3 mt-lg-0">


                    <!-- หน้าแรก -->

                    <a class="nav-link {{ Request::is('/') ? 'active-green' : '' }}" href="{{ url('/') }}">

                        หน้าแรก

                    </a>


                    <!-- เกี่ยวกับ -->

                    <a class="nav-link {{ request()->routeIs('about') ? 'active-green' : '' }}"
                        href="{{ route('about') }}">

                        เกี่ยวกับ

                    </a>


                    <!-- บทความ -->

                    <a class="nav-link {{ request()->routeIs('blog') || request()->routeIs('blog2') ? 'active-green' : '' }}"
                        href="{{ route('blog') }}">

                        บทความ

                    </a>


                    <!-- เขียนบทความ -->

                    <a class="nav-link {{ request()->routeIs('from') || Request::is('create') ? 'active-green' : '' }}"
                        href="{{ route('from') }}">

                        เขียนบทความ

                    </a>


                    <!-- นักศึกษา -->

                    <a class="nav-link {{ Request::is('student*') ? 'active-green' : '' }}"
                        href="{{ url('/student/1') }}">

                        นักศึกษา

                    </a>


                    <!-- แจ้งเคลม -->

                    <a class="nav-link {{ request()->routeIs('claim*') ? 'active-green' : '' }}"
                        href="{{ route('claim.create') }}">

                        แจ้งเคลม

                    </a>


                </div>

            </div>

        </div>

    </nav>


    <!-- =========================
         MAIN CONTENT
         ========================= -->

    <main>

        @yield('content')

    </main>


    <!-- Bootstrap 5 JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
