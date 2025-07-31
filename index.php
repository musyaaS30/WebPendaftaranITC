<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT Club - SMK Negeri 12 Jakarta</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/img/semecha3.png    " type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#050C9C',
                        'secondary': '#3572EF',
                        'accent': '#3ABEF9',
                        'light': '#A7E6FF',
                        'white': '#FFFFFF'
                    }
                }
            }
        }
    </script>
</head>

<body class="gradient-bg text-white">
    <!-- Navbar -->
    <header class="bg-white text-gray-900 shadow-md fixed top-0 left-0 w-full z-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo - Tampil di semua device -->
                <div class="flex items-center">
                    <img class="w-8" src="image/img/semecha3.png" alt="IT Club Logo">
                    <!-- Text hanya tampil di desktop -->
                    <span class="font-bold text-xl ml-2 hidden md:inline">IT Club SMK Negeri 12 Jakarta</span>
                </div>

                <!-- Desktop Navigation - Tampil hanya di desktop -->
                <nav class="hidden md:flex space-x-6 font-medium">
                    <a href="#" class="hover:text-indigo-600 transition-colors py-2 px-1">Beranda</a>
                    <a href="#tentang" class="hover:text-indigo-600 transition-colors py-2 px-1">Tentang</a>
                    <a href="#daftar" class="hover:text-indigo-600 transition-colors py-2 px-1">Daftar</a>
                    <a href="#kontak" class="hover:text-indigo-600 transition-colors py-2 px-1">Kontak</a>
                </nav>

                <!-- Mobile Menu Button - Tampil hanya di mobile -->
                <button id="mobileMenuButton" class="md:hidden text-indigo-600 focus:outline-none p-2">
                    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menuPath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="md:hidden overflow-hidden transition-all duration-300 max-h-0">
                <div class="flex flex-col space-y-1 pb-2">
                    <a href="#" class="block px-3 py-2 hover:bg-gray-100 hover:text-indigo-600 rounded transition-colors text-sm">Beranda</a>
                    <a href="#tentang" class="block px-3 py-2 hover:bg-gray-100 hover:text-indigo-600 rounded transition-colors text-sm">Tentang</a>
                    <a href="#daftar" class="block px-3 py-2 hover:bg-gray-100 hover:text-indigo-600 rounded transition-colors text-sm">Daftar</a>
                    <a href="#kontak" class="block px-3 py-2 hover:bg-gray-100 hover:text-indigo-600 rounded transition-colors text-sm">Kontak</a>
                </div>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('menuIcon');

            if (menu.classList.contains('max-h-0')) {
                menu.classList.remove('max-h-0');
                menu.classList.add('max-h-96');
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
            } else {
                menu.classList.add('max-h-0');
                menu.classList.remove('max-h-96');
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            }
        });
    </script>

    <!-- Hero Section -->
    <section class="pt-28 pb-16 px-6 md:px-20 lg:px-15 min-h-screen flex items-center">
        <div class="flex flex-col-reverse md:flex-row justify-between items-center w-full gap-8">
            <!-- Left Text -->
            <div class="md:w-1/2" data-aos="fade-right">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                    Wujudkan Kreativitas<br />Digital Anda!
                </h1>
                <p class="text-lg text-gray-100 mb-6">
                    Bergabunglah dengan IT Club SMK Negeri 12 Jakarta dan kembangkan passion Anda di bidang web coding dan desain.
                    Khusus untuk siswa RPL dan terbuka untuk semua jurusan yang memiliki minat di dunia teknologi digital.
                </p>
                <div class="flex gap-4" data-aos="fade-right">
                    <a href="#tentang"
                        class="border border-white text-white font-semibold py-2 px-6 rounded-full hover:bg-white hover:text-indigo-600 transition">Pelajari
                        Lebih Lanjut</a>
                    <!-- <a href="#daftar"
                        class="border bg-white border-white text-blue-700 font-semibold py-2 px-6 rounded-full hover:bg-white hover:text-indigo-600 transition">Daftar Sekarang</a> -->
                </div>
            </div>

            <!-- Right Box -->
            <div class="md:w-1/2" data-aos="fade-left">
                <div class="bg-transparent bg-opacity-10 backdrop-blur-md rounded-xl p-10 text-center">
                    <div class="text-5xl mb-4">
                        <img src="image/img/semecha3.png" alt="Logo IT Club">
                    </div>
                    <h2 class="text-2xl font-bold mb-2">Coding & Design Hub</h2>
                    <p class="text-gray-200">
                        Tempat berkreasi, belajar, dan mengembangkan skill teknologi untuk masa depan yang lebih cerah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0373fc" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,122.7C384,128,480,160,576,186.7C672,213,768,235,864,224C960,213,1056,171,1152,138.7C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <!-- Section About IT Club -->
    <section id="tentang" class="bg-[#F9FAFB] py-20 px-6 md:px-20 lg:px-36 text-gray-800 h-500">
        <div class="max-w-5xl mx-auto text-center" data-aos="zoom-in-up">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-indigo-600">Tentang IT Club SMKN 12 Jakarta</h2>
            <p class="text-lg text-gray-600 mb-10">
                IT Club adalah ekstrakurikuler unggulan SMK Negeri 12 Jakarta yang fokus pada pengembangan
                kemampuan web coding dan desain digital. Dirancang khusus untuk siswa RPL, namun terbuka
                untuk seluruh siswa yang memiliki passion di bidang teknologi informasi.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mt-10">
            <!-- Card 1 -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow transition hover-card" data-aos="zoom-in-right">
                <div class="text-4xl mb-4">
                    <img class="rounded-xl card-img" src="image/img/webDev.jpg" alt="Web Development">
                </div>
                <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                <p class="text-gray-700">
                    Belajar HTML, CSS, JavaScript, dan framework modern untuk membangun website dan aplikasi web
                    yang responsif dan interaktif.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow hover-card transition" data-aos="zoom-out">
                <div class="text-4xl mb-4 text-indigo-600">
                    <img class="rounded-xl card-img" src="image/img/Design.jpg" alt="UI/UX Design">
                </div>
                <h3 class="text-xl font-semibold mb-2">UI/UX Design</h3>
                <p class="text-gray-700">
                    Pelajari prinsip desain user interface dan user experience menggunakan tools seperti
                    Figma, Adobe XD, dan Canva untuk menciptakan desain yang menarik.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-indigo-50 p-6 rounded-xl shadow hover-card transition" data-aos="zoom-in-left">
                <div class="text-4xl mb-4 text-indigo-600">
                    <img class="rounded-xl" src="image/img/Portfolio.jpg" alt="Project Portfolio">
                </div>
                <h3 class="text-xl font-semibold mb-2">Project Portfolio</h3>
                <p class="text-gray-700">
                    Kerjakan proyek nyata seperti website sekolah, aplikasi mobile, dan portofolio digital
                    yang bisa digunakan untuk melanjutkan kuliah atau berkarir.
                </p>
            </div>
        </div>
    </section>

    <!-- Pendaftaran -->
    <section id="daftar" class="py-20 px-6 md:px-20 lg:px-36 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span class="text-accent font-bold">PENDAFTARAN</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-black font-heading">Bergabung dengan IT Club SMKN 12</h2>
                    <div class="w-20 h-1 bg-accent mb-6"></div>
                    <p class="text-lg text-gray-600 mb-6">
                        Siap mengembangkan skill coding, desain dan robotik bersama teman-teman yang memiliki passion sama?
                    </p>
                    <p class="text-md text-gray-600 mb-8">
                        <strong class="text-primary">Prioritas untuk siswa RPL</strong> • Semua jurusan dipersilakan bergabung •
                        Tidak ada biaya pendaftaran • Pelatihan gratis
                    </p>

                    <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-accent mb-8">
                        <h4 class="font-bold text-black mb-2">Persyaratan Pendaftaran:</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent mr-2 mt-1"></i>
                                <span>Siswa aktif SMKN 12 Jakarta</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent mr-2 mt-1"></i>
                                <span>Memiliki minat di bidang IT</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent mr-2 mt-1"></i>
                                <span>Bersedia mengikuti kegiatan rutin</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent mr-2 mt-1"></i>
                                <span>Membawa laptop sendiri (jika ada)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="./pendaftaran.php" class="bg-primary text-white font-semibold py-3 px-8 rounded-full hover:bg-blue-900 transition transform hover:scale-105 shadow-lg">
                            Daftar Online
                        </a>
                        <a href="#kontak" class="border-2 border-primary text-primary font-semibold py-3 px-8 rounded-full hover:bg-primary hover:text-white transition transform hover:scale-105">
                            Tanya Admin
                        </a>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <img src="image/kegiatan.jpg" alt="Team Collaboration" class="rounded-xl shadow-xl w-full">
                    <div class="absolute -bottom-6 -left-6 bg-primary p-6 rounded-xl shadow-lg text-white w-3/4 hidden md:block">
                        <h3 class="font-bold mb-2">Mentor Berpengalaman</h3>
                        <p class="text-sm">Dibimbing oleh siswa senior dan alumni yang kompeten di bidangnya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#0F172A]" id="kontak">
        <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-deep-purple-accent-400"
            preserveAspectRatio="none" viewBox="0 0 1440 54">
            <path fill="#0F172A"
                d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z">
            </path>
        </svg>
        <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
                <div class="md:max-w-md lg:col-span-2">
                    <a href="/" aria-label="Go home" title="IT Club" class="inline-flex items-center">
                        <img class="w-20" src="image/img/semecha3.png" alt="Logo IT Club">
                        <span class="ml-2 text-xl font-bold tracking-wide text-white uppercase">IT CLUB</span>
                    </a>
                    <div class="mt-4 lg:max-w-sm text-gray-400">
                        <p class="text-sm">
                            <b class="text-blue-500">IT Club SMK Negeri 12 Jakarta</b> adalah wadah untuk mengembangkan kreativitas
                            dan kemampuan teknologi siswa di bidang web development dan desain digital.
                        </p>
                        <p class="mt-4 text-sm">
                            Bergabunglah dengan komunitas passionate young developers dan designers
                            untuk membangun masa depan digital yang lebih baik.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">

                    <!-- Footer Program -->
                    <div>
                        <p class="font-bold tracking-wide text-white">
                            Program
                        </p>
                        <ul class="mt-2 space-y-2 text-gray-400">
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Web Development</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">UI/UX Design</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Frontend</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Backend</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Footer Kegiatan -->
                    <div>
                        <p class="font-bold tracking-wide text-white">Kegiatan</p>
                        <ul class="mt-2 space-y-2 text-gray-400">
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Pelatihan Web Development</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Pelatihan desain</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Belajar robotik</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Lomba</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Footer Jurusan -->
                    <div>
                        <p class="font-bold tracking-wide text-white">Jurusan</p>
                        <ul class="mt-2 space-y-2 text-gray-400">
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">RPL (Prioritas)</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">BR</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">MP</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">AKL</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Footer Kontak -->
                    <div>
                        <p class="font-bold tracking-wide text-white">
                            Kontak
                        </p>
                        <ul class="mt-2 space-y-2 text-gray-400">
                            <li>
                                <a href="#daftar" class="transition-colors duration-300 hover:text-blue-500">Pendaftaran</a>
                            </li>
                            <li>
                                <a href="#" class="transition-colors duration-300 hover:text-blue-500">Informasi</a>
                            </li>
                            <li>
                                <a href="https://wa.me/6285183006904?text=Halo%20Daftar%20ITC%20Dong" class="transition-colors duration-300 hover:text-blue-500">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
                <p class="text-sm text-gray-500">
                    &copy; 2025 IT Club SMK Negeri 12 Jakarta. All rights reserved.
                </p>
            </div>
        </div>
    </footer>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            disable: window.innerWidth < 768 // Nonaktifkan AOS di layar < 768px (mobile)
        });
    </script>

    <!-- <script src="js/script.js"></script> -->

</body>

</html>