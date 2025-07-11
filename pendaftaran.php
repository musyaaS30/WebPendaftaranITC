<?php
require 'functions/crud.php';

if (isset($_POST['daftar'])) {
    $result = createData();

    if ($result === true) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Pendaftaran berhasil dikirim!',
                    icon: 'success',
                    confirmButtonColor: '#3ABEF9'
                });
                document.querySelector('form').reset();
            });
        </script>";
    } elseif ($result === 'duplicate') {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: 'Data Sudah Terdaftar',
                    text: 'Email atau No. Telepon sudah digunakan. Silakan gunakan yang lain.',
                    icon: 'info',
                    confirmButtonColor: '#3ABEF9'
                });
            });
        </script>";
    } else {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat menyimpan data.',
                    icon: 'error',
                    confirmButtonColor: '#3ABEF9'
                });
            });
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran | IT Club</title>
    <link rel="shortcut icon" href="img/semecha3.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #050C9C 0%, #3572EF 50%, #3ABEF9 100%);
        }

        .card-shadow {
            box-shadow: 0 25px 50px -12px rgba(5, 12, 156, 0.15);
        }

        .input-focus:focus {
            border-color: #3ABEF9;
            box-shadow: 0 0 0 3px rgba(58, 190, 249, 0.1);
        }

        .btn-hover:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 15px 35px rgba(5, 12, 156, 0.3);
        }

        .section-hover:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(5, 12, 156, 0.08);
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

        .pulse-border {
            animation: pulseBorder 2s infinite;
        }

        @keyframes pulseBorder {

            0%,
            100% {
                border-color: #3ABEF9;
                box-shadow: 0 0 0 0 rgba(58, 190, 249, 0.4);
            }

            50% {
                border-color: #3572EF;
                box-shadow: 0 0 0 8px rgba(58, 190, 249, 0);
            }
        }
    </style>
</head>

<body class="min-h-screen gradient-bg py-6 px-4 sm:py-12">
    <!-- Header Section -->
    <div class="max-w-6xl mx-auto mb-8 fade-in">
        <div class="text-center">
            <div class="floating-animation mb-6">
                <div class="w-32 h-32 sm:w-40 sm:h-40 mx-auto bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/30">
                    <img src="image/semecha5.png" alt="">
                </div>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-3 tracking-tight">IT Club</h1>
            <p class="text-light text-xl sm:text-2xl font-light">Bergabunglah dengan Ekstrakurikuler IT Club</p>


            <?php if (!empty($alertMessage)): ?>
                <div><?= $alertMessage ?></div>
            <?php endif; ?>




            <div class="mt-4 inline-flex items-center px-4 py-2 bg-white/10 rounded-full backdrop-blur-sm border border-white/20">
                <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                </svg>
                <span class="text-white text-sm font-medium">Form Pendaftaran Resmi</span>
            </div>
        </div>
    </div>

    <!-- Main Form Container -->
    <div class="max-w-5xl mx-auto fade-in">
        <div class="bg-white rounded-3xl card-shadow overflow-hidden section-hover transition-all duration-300">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-primary via-secondary to-accent px-6 sm:px-8 py-8 relative overflow-hidden">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white text-center mb-2">Formulir Pendaftaran</h2>
                    <p class="text-light text-center text-lg">Isi data diri Anda dengan lengkap dan benar</p>
                </div>
                <!-- Decorative elements -->
                <div class="absolute top-4 left-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                <div class="absolute bottom-4 right-4 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
            </div>

            <!-- Form Content -->
            <div class="p-6 sm:p-8 lg:p-12">
                <form action="" method="POST" enctype="multipart/form-data" class="space-y-8">
                    <!-- Personal Information Section -->
                    <div class="border-b border-gray-100 pb-8">
                        <h3 class="text-2xl font-bold text-primary mb-6 flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-primary to-accent rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </div>
                            Informasi Pribadi
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama -->
                            <div class="group">
                                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-3">Nama Lengkap *</label>
                                <input type="text" id="nama" name="nama" required
                                    class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 input-focus transition-all duration-300 hover:border-accent text-gray-800 font-medium"
                                    placeholder="Masukkan nama lengkap Anda" />
                            </div>

                            <!-- Jurusan -->
                            <div class="group">
                                <label for="jurusan" class="block text-sm font-semibold text-gray-700 mb-3">Jurusan *</label>
                                <select id="jurusan" name="jurusan" required
                                    class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 input-focus transition-all duration-300 hover:border-accent text-gray-800 font-medium bg-white">
                                    <option value="">Pilih Jurusan</option>
                                    <option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
                                    <option value="AK">Akuntansi (AK)</option>
                                    <option value="BR">Bisnis Ritel (BR)</option>
                                    <option value="MP">Manajemen Perkantoran (MP)</option>
                                </select>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="group">
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Jenis Kelamin *</label>
                                <div class="flex items-center gap-8 mt-4">
                                    <label class="inline-flex items-center cursor-pointer group">
                                        <input type="radio" name="kelamin" value="Laki-laki" required
                                            class="w-5 h-5 text-accent border-2 border-gray-300 focus:ring-accent focus:ring-2" />
                                        <span class="ml-3 text-gray-700 font-medium group-hover:text-accent transition-colors">Laki-laki</span>
                                    </label>
                                    <label class="inline-flex items-center cursor-pointer group">
                                        <input type="radio" name="kelamin" value="Perempuan" required
                                            class="w-5 h-5 text-accent border-2 border-gray-300 focus:ring-accent focus:ring-2" />
                                        <span class="ml-3 text-gray-700 font-medium group-hover:text-accent transition-colors">Perempuan</span>
                                    </label>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Contact Information Section -->
                    <div class="border-b border-gray-100 pb-8">
                        <h3 class="text-2xl font-bold text-primary mb-6 flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-secondary to-accent rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                </svg>
                            </div>
                            Informasi Kontak
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Email -->
                            <div class="group">
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">Email *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 input-focus transition-all duration-300 hover:border-accent text-gray-800 font-medium"
                                    placeholder="contoh@email.com" />
                            </div>

                            <!-- No Telp -->
                            <div class="group">
                                <label for="telepon" class="block text-sm font-semibold text-gray-700 mb-3">No. Telepon *</label>
                                <input type="tel" id="no_telp" name="telepon" required
                                    class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 input-focus transition-all duration-300 hover:border-accent text-gray-800 font-medium"
                                    placeholder="08xxxxxxxxxx" />
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="group mt-6">
                            <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-3">Alamat Lengkap</label>
                            <textarea id="alamat" name="alamat" rows="4"
                                class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 input-focus transition-all duration-300 hover:border-accent resize-none text-gray-800 font-medium"
                                placeholder="Masukkan alamat lengkap Anda"></textarea>
                        </div>
                    </div>

                    <!-- Division & Motivation Section -->
                    <div class="pb-6">
                        <h3 class="text-2xl font-bold text-primary mb-6 flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                            Divisi & Motivasi
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Divisi -->
                            <div class="group">
                                <label for="divisi" class="block text-sm font-semibold text-gray-700 mb-3">Divisi yang Diminati *</label>
                                <select id="divisi" name="divisi" required
                                    class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 input-focus transition-all duration-300 hover:border-accent text-gray-800 font-medium bg-white">
                                    <option value="" disabled selected>Pilih Divisi</option>
                                    <option value="web">Web Development</option>
                                    <option value="design">Design & UI/UX</option>
                                    <option value="robotic">Robotic</option>
                                </select>
                            </div>
                        </div>

                        <!-- Alasan -->
                        <div class="group">
                            <label for="alasan" class="block text-sm font-semibold text-gray-700 mb-3">Alasan Bergabung dengan IT Club *</label>
                            <textarea id="alasan" name="alasan" rows="5" required
                                class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 input-focus transition-all duration-300 hover:border-accent resize-none text-gray-800 font-medium"
                                placeholder="Ceritakan alasan dan motivasi Anda untuk bergabung dengan IT Club, serta apa yang ingin Anda capai..."></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-6">
                        <button type="submit" name="daftar"
                            class="bg-gradient-to-r from-primary via-secondary to-accent text-white font-bold px-12 py-5 rounded-xl btn-hover transition-all duration-300 shadow-xl hover:shadow-2xl min-w-[250px] text-lg">
                            <svg class="w-6 h-6 inline mr-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                            </svg>
                            Kirim Pendaftaran
                        </button>
                        <p class="text-sm text-gray-600 mt-4 max-w-md mx-auto">
                            * Pastikan semua data yang diisi sudah benar sebelum mengirim. Data Anda akan kami jaga kerahasiaannya.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="max-w-5xl mx-auto mt-12 text-center fade-in">
        <div class="border-white/20">
            <p class="text-white text-lg font-medium opacity-90 mb-2">
                © 2024 IT Club - Semua hak dilindungi
            </p>
            <p class="text-light text-sm opacity-75">
                Bergabunglah dengan komunitas teknologi terdepan di sekolah
            </p>
        </div>
    </div>

</body>

<script>
        const telpInput = document.getElementById("no_telp");

    telpInput.addEventListener("input", function(e) {
        // Ambil angka saja
        let raw = e.target.value.replace(/\D/g, "");

        // Batasi maksimal 14 digit
        if (raw.length > 14) raw = raw.slice(0, 14);

        // Format jadi 1234-1234-1234-12
        let formatted = raw.match(/^(\d{0,4})(\d{0,4})(\d{0,4})(\d{0,2})$/);

        if (formatted) {
            // Gabungkan dengan strip
            let result = [formatted[1]];
            if (formatted[2]) result.push(formatted[2]);
            if (formatted[3]) result.push(formatted[3]);
            if (formatted[4]) result.push(formatted[4]);

            e.target.value = result.join("-");
        }
    });

    telpInput.addEventListener("keydown", function(e) {
        const allowed = ["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Tab"];
        if (!/[0-9]/.test(e.key) && !allowed.includes(e.key)) {
            e.preventDefault();
        }
    });

</script>

</html>