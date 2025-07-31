<?php
ob_start();
session_start();

    $divisi = isset($_SESSION['divisi']) ? $_SESSION['divisi'] : '';
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Pengguna';

    unset($_SESSION['divisi']);
    unset($_SESSION['username']);

    $whatsapp_links = [
        'web' => 'https://chat.whatsapp.com/FRwvhYkkmeW9PrvBIq6N6L',
        'design' => 'https://chat.whatsapp.com/Lvf24MAc8UYEmH3hz7nJpE',
        'robotic' => 'https://chat.whatsapp.com/B5OzQxDmYJlH3VF9RO74qg'
    ];

    $divisi_names = [
        'web' => 'Web Development',
        'design' => 'Design & UI/UX',
        'robotic' => 'Robotic'
    ];

    $divisi_link = isset($whatsapp_links[$divisi]) ? $whatsapp_links[$divisi] : '';
    $divisi_name = isset($divisi_names[$divisi]) ? $divisi_names[$divisi] : '';
    ?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Berhasil | IT Club</title>
    <link rel="shortcut icon" href="image/img/semecha3.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#050C9C',
                        'secondary': '#3572EF',
                        'accent': '#3ABEF9',
                        'light': '#A7E6FF',
                        'white': '#FFFFFF',
                        'dark': '#0A0F5C'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'heading': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@600;700;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #050C9C 0%, #3572EF 50%, #3ABEF9 100%);
        }

        .gradient-text {
            background: linear-gradient(90deg, #3ABEF9 0%, #FFFFFF 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-shadow {
            box-shadow: 0 25px 50px -12px rgba(5, 12, 156, 0.15);
        }

        .floating-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-hover {
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .btn-hover:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 15px 35px rgba(5, 12, 156, 0.3);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
            color: rgba(255, 255, 255, 0.7);
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .divider::before {
            margin-right: 1em;
        }

        .divider::after {
            margin-left: 1em;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(58, 190, 249, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(58, 190, 249, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(58, 190, 249, 0);
            }
        }

        .step-item {
            position: relative;
            padding-left: 2.5rem;
            counter-increment: step;
        }

        .step-item:not(:last-child):after {
            content: "";
            position: absolute;
            left: 1.25rem;
            top: 2.5rem;
            height: calc(100% - 1rem);
            width: 1px;
            background: rgba(5, 12, 156, 0.2);
        }

        .step-item:before {
            content: counter(step);
            position: absolute;
            left: 0;
            top: 0;
            width: 2rem;
            height: 2rem;
            line-height: 2rem;
            border-radius: 50%;
            background: #3ABEF9;
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 0.875rem;
        }
    </style>
</head>

<body class="min-h-screen gradient-bg py-6 px-4 sm:py-12">

    <!-- Header Section -->
    <div class="max-w-6xl mx-auto mb-8 fade-in">
        <div class="text-center">
            <div class="floating-animation mb-6">
                <div class="w-32 h-32 sm:w-40 sm:h-40 mx-auto bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm border-2 border-white/30 pulse">
                    <img src="image/semecha5.png" alt="Logo IT Club" class="w-3/4 h-3/4 object-contain">
                </div>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-3 tracking-tight font-heading">Pendaftaran Berhasil!</h1>
            <p class="text-light text-xl sm:text-2xl font-light max-w-2xl mx-auto">Selamat <span class="gradient-text font-bold"><?php echo htmlspecialchars($username); ?></span>, Anda sekarang resmi menjadi bagian dari IT Club</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-5xl mx-auto fade-in">
        <div class="bg-white rounded-3xl card-shadow overflow-hidden transition-all duration-300 hover:shadow-xl">
            <!-- Header -->
            <div class="bg-gradient-to-r from-primary via-secondary to-accent px-6 sm:px-8 py-8 relative overflow-hidden">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white text-center mb-2 font-heading">Selamat Bergabung!</h2>
                    <p class="text-light text-center text-lg">Ikuti langkah berikut untuk memulai perjalanan Anda</p>
                </div>
                <!-- Decorative elements -->
                <div class="absolute top-4 left-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                <div class="absolute bottom-4 right-4 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
            </div>

            <!-- Content -->
            <div class="p-6 sm:p-8 lg:p-12">
                <!-- Steps -->
                <div class="space-y-8 mb-10">
                    <div class="step-item">
                        <h3 class="text-lg font-bold text-primary mb-1">1. Gabung Grup Komunitas</h3>
                        <p class="text-gray-600 mb-4">Grup utama untuk semua anggota IT Club</p>
                        <a href="https://chat.whatsapp.com/HBoJXiBCiWq2DW4WmoNxug?mode=ac_t"
                            class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold px-6 py-3 rounded-lg btn-hover transition-all duration-300 flex items-center justify-center gap-2"
                            target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            Gabung Grup Utama
                        </a>
                    </div>

                    <?php if ($divisi_link): ?>
                        <div class="step-item">
                            <h3 class="text-lg font-bold text-primary mb-1">2. Gabung Grup Divisi <?php echo $divisi_name; ?></h3>
                            <p class="text-gray-600 mb-4">Grup khusus untuk anggota divisi <?php echo $divisi_name; ?></p>
                            <a href="<?php echo $divisi_link; ?>"
                                class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold px-6 py-3 rounded-lg btn-hover transition-all duration-300 flex items-center justify-center gap-2"
                                target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                Gabung Grup Divisi
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="step-item">
                        <h3 class="text-lg font-bold text-primary mb-1">3. Perkenalkan Diri Anda</h3>
                        <p class="text-gray-600 mb-4">Sampaikan salam perkenalan di grup sesuai format yang disediakan</p>
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-100">
                            <p class="text-sm text-gray-700 font-medium mb-1">Format perkenalan:</p>
                            <p class="text-sm text-gray-600">Halo semua! Saya <?php echo htmlspecialchars($username); ?> dari divisi <?php echo $divisi_name ?: '[Divisi Anda]'; ?>. Senang bisa bergabung dengan IT Club!</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
                    <h3 class="text-xl font-bold text-primary mb-3 flex items-center gap-2">
                        <i class="fas fa-info-circle"></i> Informasi Penting
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Pastikan Anda telah bergabung ke kedua grup WhatsApp di atas</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Periksa grup secara berkala untuk informasi terbaru</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <span>Jika link tidak bekerja, segera hubungi admin IT Club</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Next Steps -->
    <div class="max-w-5xl mx-auto mt-8 bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 fade-in">
        <h3 class="text-xl font-bold text-white mb-4 text-center font-heading">Apa Selanjutnya?</h3>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white/5 p-4 rounded-lg border border-white/10">
                <div class="w-12 h-12 bg-accent/20 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-calendar-check text-accent text-xl"></i>
                </div>
                <h4 class="font-bold text-white text-center mb-2">Pertemuan</h4>
                <p class="text-light text-sm text-center">Jadwal pertemuan & pembelajaran akan diumumkan melalui grup WhatsApp</p>
            </div>
            <div class="bg-white/5 p-4 rounded-lg border border-white/10">
                <div class="w-12 h-12 bg-accent/20 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-tasks text-accent text-xl"></i>
                </div>
                <h4 class="font-bold text-white text-center mb-2">Tugas Awal</h4>
                <p class="text-light text-sm text-center">Persiapkan diri untuk tugas onboarding yang akan diberikan</p>
            </div>
            <div class="bg-white/5 p-4 rounded-lg border border-white/10">
                <div class="w-12 h-12 bg-accent/20 rounded-full flex items-center justify-center mb-3 mx-auto">
                    <i class="fas fa-users text-accent text-xl"></i>
                </div>
                <h4 class="font-bold text-white text-center mb-2">Kenali Anggota</h4>
                <p class="text-light text-sm text-center">Mulai berinteraksi dengan anggota lain di grup WhatsApp</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="max-w-5xl mx-auto mt-12 text-center fade-in">
        <div class="divider">IT CLUB</div>
        <p class="text-light text-sm opacity-75">
            Membangun komunitas teknologi masa depan sejak
        </p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInUp');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>

</html>