<?php 
define("URL", "http://localhost/pemrograman-web-2/pertemuan3/praktikum/admin/UTS/frontend/");
?>

<!doctype html>
<html class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= URL ?>src/output.css ?>" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Caveat:wght@400..700&family=Geist:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+MX+Guides&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>src/style.css">
    <title>Klinik Gigi Karhud</title>
    
</head>

<body class="font-geist">
  <nav class=" backdrop-blur-md bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">
        <div class="flex space-x-32">
          <div>
            <!-- Website Logo -->
            <a href="#" class="flex items-center py-4">
              <span class="font-semibold text-gray-500 text-lg"><img src="images/logo.png" class="w-[50px]" alt="" width="50"></span>
              <span class=" font-bold" style="color: #14cbc5;">Karhud</span>
            </a>
          </div>
          <!-- Primary Navbar items -->
          <div class="hidden lg:flex items-center space-x-1">
            <a href="#" class="py-4 px-2 text-purple border-b-4 border-green-500 font-semibold active">Home</a>
            <a href="#layanan" class="py-4 px-2 text-gray font-semibold hover:text-purple transition duration-300">Layanan</a>
            <a href="#fasilitas" class="py-4 px-2 text-gray font-semibold hover:text-purple transition duration-300">Fasilitas</a>
            <a href="#dokter" class="py-4 px-2 text-gray font-semibold hover:text-purple transition duration-300">Dokter</a>
            <a href="#tentang" class="py-4 px-2 text-gray font-semibold hover:text-purple transition duration-300">Tentang Kami</a>
            <a href="#daftar" class="py-4 px-2 text-gray font-semibold hover:text-purple transition duration-300">Daftar</a>
            <a href="#FAQ" class="py-4 px-2 text-gray font-semibold hover:text-purple transition duration-300">FAQ</a>
            <a href="#testimonials" class="py-4 px-2 text-gray font-semibold hover:text-purple transition duration-300">Testimonials</a>
          </div>
        </div>
        <!-- Secondary Navbar items -->
        <div class="hidden lg:flex items-center space-x-3">
          <a href="login.html" class="py-2 px-4 text-gray-500 font-medium hover:text-blue-500 transition duration-300 hover:text-purple">Login</a>
        </div>
        <!-- Mobile menu button -->
        <div class="lg:hidden flex items-center">
          <button class="outline-none mobile-menu-button" id="menuButton">
            <svg class="w-6 h-6 text-gray-500 hover:text-blue-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile menu -->
    <div class="mobile-menu lg:hidden max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <ul class="pt-4 pb-3">
        <li><a href="#" class="block w-[80px] text-purple active text-sm px-4 py-4 bg-blue-500 font-semibold transition-all duration-300">Home</a></li>
        <li><a href="#layanan" class="block w-[80px] text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">Layanan</a></li>
        <li><a href="#fasilitas" class="block w-[80px] text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">Fasilitas</a></li>
        <li><a href="#dokter" class="block w-[80px] text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">Dokter</a></li>
        <li><a href="#tentang" class="block w-[150px] text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">Tentang Kami</a></li>
        <li><a href="#daftar" class="block w-[80px] text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">Daftar</a></li>
        <li><a href="#FAQ" class="block w-[80px] text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">FAQ</a></li>
        <li><a href="#testimonials" class="block w-[80px] text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">Testimonials</a></li>
        <li><a href="login.html" class="block text-sm px-4 py-4  hover:bg-blue-500 hover:text-purple transition-all duration-300">Login</a></li>
      </ul>
    </div>
  </nav>

  <a href="https://wa.me/628889623663" target="_blank">
    <img src="<?= URL?>pages/images/wa.png" alt="" class="w-[80px] right-0 bottom-36  fixed" style="z-index: 9999;">
  </a>
  
  <!-- Spacer untuk menghindari konten tertutup navbar -->
  <div class="h-20"></div>
  <div class="container w-[95%] mx-auto" style="background-image: url(v90);">
    <div
      class="hero w-full mx-auto flex md:items-center md:justify-center flex-wrap bg-gradient-to-r from-blue to-gradient p-10 rounded-lg m-10">
      <div class="hero-content text-center md:text-left font-geist md:w-2/5 w-full">
        <h1 class="md:text-5xl text-3xl font-bold text-black">Perawatan gigi terbaik, <span
            class="bg-gradient-to-r from-purple to-orange bg-clip-text text-transparent ease-in-out duration-300" id="change-teks"><br>Dengan teknologi terkini</span></h1>
        <p class="mt-5">Pengalaman Perawatan Gigi yang Lebih Nyaman dengan Teknologi Terbaru.</p>
        <div class="mt-10 mb-10">
          <a href="#daftar" class="bg-purple py-3 px-4 rounded-3xl text-white">Registrasi <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="img-content w-full md:w-3/5 md:translate-y-10">
        <img src="<?= URL?>pages/images/gigi.png" alt="" class="w-full">
      </div>
    </div>
    <section class="servies mt-10 pt-32" id="layanan" data-aos="zoom-in" data-aos-duration="2000">
      <div class="container mx-auto px-4 md:w-3/4 flex justify-center flex-col">
          <h1 class="text-2xl md:text-4xl font-bold text-center">Layanan Terbaik dari Klinik Gigi Kami</h1>
  
          <!-- Button Container -->
          <div class="w-full mx-auto mt-6 md:mt-10 grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
              <div class="relative">
                  <button class="px-3 py-2 font-medium rounded-2xl border-2 border-purple bg-gradient-to-r from-purple to-blue text-sm md:text-base w-full" id="tombol1">Bedah Gigi</button>
              </div>
              <div class="relative">
                  <button class="px-3 py-2 font-medium rounded-2xl border-2 border-purple text-black text-sm md:text-base w-full" id="tombol2">Veneer Gigi</button>
              </div>
              <div class="relative">
                  <button class="px-3 py-2 font-medium rounded-2xl border-2 border-purple text-black text-sm md:text-base w-full" id="tombol3">Saluran Akar</button>
              </div>
              <div class="relative">
                  <button class="px-3 py-2 font-medium rounded-2xl border-2 border-purple text-black text-sm md:text-base w-full" id="tombol4">Polishing</button>
              </div>
          </div>
      </div>
      <div class="bg-purple w-full p-4 md:p-10 pb-0 mt-6 md:mt-10 rounded-2xl flex-col flex items-center justify-center md:h-full">
        <!-- Text Content -->
        <div class="text-center px-4">
            <h1 class="text-xl md:text-3xl text-white font-bold mb-2" id="title-1">Transformasi Senyum Anda dengan Bedah Mulut</h1>
            <p class="text-sm md:text-md text-white" id="paragraf">Bedah mulut membantu mengatasi berbagai masalah gigi dan mulut untuk kesehatan optimal dan senyum percaya diri.</p>
        </div>
    
        <!-- Cards Container -->
        <div class="p-4 md:p-10 pb-0 w-full mt-6 md:mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-gradient-to-b from-purple via-purple to-white p-5 rounded-lg">
                <div class="mb-4">
                    <h1 class="text-md font-bold text-center text-white" id="card-title-1">Bedah Gigi Bungsu</h1>
                </div>
                <div class="relative">
                    <img id="card-img-1" src="<?= URL?>pages/images/bedah-gigi-1.jpg" alt="Bedah Gigi Bungsu" class="rounded-md w-full object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-3 rounded-b-md">
                        <p id="price-1" class="text-white text-center font-bold">Mulai dari Rp 2.500.000</p>
                        <p id="note-1" class="text-white text-sm text-center mt-1">*Harga dapat bervariasi tergantung tingkat kesulitan</p>
                    </div>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-gradient-to-b from-purple via-purple to-white p-5 rounded-lg">
                <div class="mb-4">
                    <h1 id="card-title-2" class="text-md font-bold text-center text-white">Pemasangan Kawat Gigi</h1>
                </div>
                <div class="relative">
                    <img id="card-img-2" src="<?= URL?>pages/images/bedah-gigi-2.jpg" alt="Pemasangan Kawat Gigi" class="rounded-md w-full object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-3 rounded-b-md">
                        <p id="price-2" class="text-white text-center font-bold">Mulai dari Rp 15.000.000</p>
                        <p id="note-2" class="text-white text-sm text-center mt-1">*Termasuk konsultasi dan perawatan selama 1 tahun</p>
                    </div>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-gradient-to-b from-purple via-purple to-white p-5 rounded-lg">
                <div class="mb-4">
                    <h1 id="card-title-3" class="text-md font-bold text-center text-white">Scaling dan Polishing</h1>
                </div>
                <div class="relative">
                    <img id="card-img-3" src="<?= URL?>pages/images/bedah-gigi-3.jpg" alt="Scaling dan Polishing" class="rounded-md w-full object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-3 rounded-b-md">
                        <p id="price-3" class="text-white text-center font-bold">Mulai dari Rp 350.000</p>
                        <p id="note-3" class="text-white text-sm text-center mt-1">*Per sesi perawatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  

  <section id="fasilitas" class="py-10 md:py-20 mt-20" data-aos="zoom-in" data-aos-duration="2000">
    <div class="container">
      <div class="text-content text-center">
        <h3 class="text-base md:text-2xl font-medium">Fasilitas</h3>
        <h1 class="text-2xl md:text-5xl font-bold">Fasilitas Unggulan untuk Kesehatan dan Kenyamanan Anda</h1>
      </div>
      <div class="fasilitas-content flex flex-wrap w-full mt-10 justify-center gap-6">
        <div class="flex flex-col gap-4 w-full sm:max-w-[80%] md:max-w-[47%]">
          <div class="bg-gradient-to-t from-card-purple to-blue rounded-xl px-4 py-6 w-full shadow-xl">
            <div class="w-full mx-auto text-center">
              <h1 class="text-xl md:text-3xl font-bold">Ruang Perawatan Modern</h1>
              <p class="text-sm md:text-base mt-2">
                Dilengkapi dengan teknologi terkini untuk memberikan layanan perawatan gigi yang nyaman dan aman.
              </p>
            </div>
            <div class="w-full mx-auto flex justify-center mt-5">
              <img src="<?= URL?>pages/images/fasilitas-1.jpg" class="w-full" alt="Ruang Perawatan Modern">
            </div>
          </div>
          <div class="bg-gradient-to-t from-card-purple to-blue rounded-xl px-4 py-6 w-full shadow-xl">
            <div class="w-full mx-auto text-center">
              <h1 class="text-xl md:text-3xl font-bold">Sterilisasi Alat yang Terjamin</h1>
              <p class="text-sm md:text-base mt-2">
                Proses sterilisasi alat sesuai standar internasional untuk menjaga kebersihan dan kesehatan pasien.
              </p>
            </div>
            <div class="w-full mx-auto flex justify-center mt-5">
              <img src="<?= URL?>pages/images/fasilitas-3.jpg" class="w-full" alt="Sterilisasi Alat yang Terjamin">
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-4 w-full sm:max-w-[80%] md:max-w-[47%]">
          <div class="bg-gradient-to-t from-card-purple to-blue rounded-xl px-4 py-6 w-full shadow-xl">
            <div class="w-full mx-auto text-center">
              <h1 class="text-xl md:text-3xl font-bold">Ruang Tunggu Nyaman</h1>
              <p class="text-sm md:text-base mt-2">
                Ruang tunggu yang dirancang untuk memberikan kenyamanan dengan fasilitas Wi-Fi dan hiburan.
              </p>
            </div>
            <div class="w-full mx-auto flex justify-center mt-5">
              <img src="<?= URL?>pages/images/fasilitas-2.jpg" class="w-full" alt="Ruang Tunggu Nyaman">
            </div>
          </div>
          <div class="bg-gradient-to-t from-card-purple to-blue rounded-xl px-4 py-6 w-full shadow-xl">
            <div class="w-full mx-auto text-center">
              <h1 class="text-xl md:text-3xl font-bold">Teknologi Diagnostik Canggih</h1>
              <p class="text-sm md:text-base mt-2">
                Peralatan diagnostik seperti X-ray digital untuk membantu dokter dalam mendiagnosa dengan lebih tepat.
              </p>
            </div>
            <div class="w-full mx-auto flex justify-center mt-5">
              <img src="<?= URL?>pages/images/fasilitas-4.jpg" class="w-full" alt="Teknologi Diagnostik Canggih">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  


    <section id="dokter" class="mt-20 mb-40 pt-32" data-aos="zoom-in" data-aos-duration="2000">
      <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
            Tim Dokter Gigi Kami
        </h2>
        
       
        <div class="relative"> <!-- Added relative positioning for custom buttons -->
          <!-- Custom navigation buttons -->
          <div class="custom-nav-button custom-prev">❮</div>
          <div class="custom-nav-button custom-next">❯</div>
          
          <!-- Owl Carousel -->
          <div class="owl-carousel owl-theme">
               <!-- Dokter 1 -->
        <div class="item px-2">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
              <div class="relative">
                  <img
                      src="<?= URL?>pages/images/alfi.jpeg"
                      alt="Muhhamad Zakri Alfiansyah"
                      class="w-full h-64 object-cover"
                  />
                  <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                      Orthodontist
                  </div>
              </div>
              
              <div class="p-6">
                  <h3 class="text-xl font-bold text-gray-800 mb-2">
                      Drg. M. Zakri Alfiansyah
                  </h3>
                  
                  <div class="space-y-3">
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                          </svg>
                          <span>Pengalaman: 8 tahun</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                          </svg>
                          <span>STT Nurul Fikri</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <span class="text-sm">Senin - Jumat: 09.00 - 17.00</span>
                      </div>
                  </div>
                  
                  <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg transition-colors duration-300">
                      Buat Janji
                  </button>
              </div>
          </div>
      </div>

      <!-- Dokter 2 -->
      <div class="item px-2">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
              <div class="relative">
                  <img
                      src="<?= URL?>pages/images/raffa2.jpeg"
                      alt="Dr. David Chen"
                      class="w-full h-64 object-cover " style="background-position: 10%;"
                  />
                  <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                      Periodontist
                  </div>
              </div>
              
              <div class="p-6">
                  <h3 class="text-xl font-bold text-gray-800 mb-2">
                      Drg. Raffa Yuda Pratama
                  </h3>
                  
                  <div class="space-y-3">
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                          </svg>
                          <span>Pengalaman: 12 tahun</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                          </svg>
                          <span>STT Nurul Fikri</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <span class="text-sm">Selasa - Sabtu: 10.00 - 18.00</span>
                      </div>
                  </div>
                  
                  <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-300">
                      Buat Janji
                  </button>
              </div>
          </div>
      </div>

      <!-- Dokter 3 -->
      <div class="item px-2">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
              <div class="relative">
                  <img
                      src="<?= URL?>pages/images/razan.jpeg"
                      alt="Dr. Amanda Lee"
                      class="w-full h-64 object-cover"
                  />
                  <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                      Endodontist
                  </div>
              </div>
              
              <div class="p-6">
                  <h3 class="text-xl font-bold text-gray-800 mb-2">
                      Drg. Razan Muhammad Ihsan .R
                  </h3>
                  
                  <div class="space-y-3">
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                          </svg>
                          <span>Pengalaman: 10 tahun</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                          </svg>
                          <span>STT Nurul Fikri</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <span class="text-sm">Rabu - Sabtu: 10.00 - 20.00</span>
                      </div>
                  </div>
                  
                  <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-300">
                      Buat Janji
                  </button>
              </div>
          </div>
      </div>

      <!-- Dokter 4 -->
      <div class="item px-2">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ">
              <div class="relative">
                  <img
                      src="<?= URL?>pages/images/ayu.jpeg"
                      alt="Dr. Amanda Lee"
                      class="w-full h-64 object-cover"
                  />
                  <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                      Endodontist
                  </div>
              </div>
              
              <div class="p-6">
                  <h3 class="text-xl font-bold text-gray-800 mb-2">
                      Drg. Ayu Della Astuti
                  </h3>
                  
                  <div class="space-y-3">
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                          </svg>
                          <span>Pengalaman: 10 tahun</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                          </svg>
                          <span>STT Nurul Fikri</span>
                      </div>
                      
                      <div class="flex items-center text-gray-600">
                          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <span class="text-sm">Senin - Kamis: 08.00 - 16.00</span>
                      </div>
                  </div>
                  
                  <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-300">
                      Buat Janji
                  </button>
              </div>
          </div>
      </div>

      <!-- Dokter 1 -->
      <div class="item px-2">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="relative">
                <img
                    src="<?= URL?>pages/images/alfi.jpeg"
                    alt="Muhhamad Zakri Alfiansyah"
                    class="w-full h-64 object-cover"
                />
                <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                    Orthodontist
                </div>
            </div>
            
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-2">
                    Drg. M. Zakri Alfiansyah
                </h3>
                
                <div class="space-y-3">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Pengalaman: 8 tahun</span>
                    </div>
                    
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span>STT Nurul Fikri</span>
                    </div>
                    
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-sm">Senin - Jumat: 09.00 - 17.00</span>
                    </div>
                </div>
                
                <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg transition-colors duration-300">
                    Buat Janji
                </button>
            </div>
        </div>
    </div>

    <!-- Dokter 2 -->
    <div class="item px-2">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="relative">
                <img
                    src="<?= URL?>pages/images/raffa2.jpeg"
                    alt="Dr. David Chen"
                    class="w-full h-64 object-cover"
                />
                <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                    Periodontist
                </div>
            </div>
            
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-2">
                    Drg. Raffa Yuda Pratama
                </h3>
                
                <div class="space-y-3">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Pengalaman: 12 tahun</span>
                    </div>
                    
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span>STT Nurul Fikri</span>
                    </div>
                    
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-sm">Selasa - Sabtu: 10.00 - 18.00</span>
                    </div>
                </div>
                
                <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-300">
                    Buat Janji
                </button>
            </div>
        </div>
    </div>
    <!-- Dokter 3 -->
    <div class="item px-2">
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <div class="relative">
              <img
                  src="<?= URL?>pages/images/razan.jpeg"
                  alt="Dr. Amanda Lee"
                  class="w-full h-64 object-cover"
              />
              <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                  Endodontist
              </div>
          </div>
          
          <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                  Drg. Razan Muhammad Ihsan .R
              </h3>
              
              <div class="space-y-3">
                  <div class="flex items-center text-gray-600">
                      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                      <span>Pengalaman: 10 tahun</span>
                  </div>
                  
                  <div class="flex items-center text-gray-600">
                      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                      </svg>
                      <span>STT Nurul Fikri</span>
                  </div>
                  
                  <div class="flex items-center text-gray-600">
                      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span class="text-sm">Senin - Kamis: 08.00 - 16.00</span>
                  </div>
              </div>
              
              <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-300">
                  Buat Janji
              </button>
          </div>
      </div>
  </div>

  <!-- Dokter 4 -->
  <div class="item px-2">
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <div class="relative">
              <img
                  src="<?= URL?>pages/images/ayu.jpeg"
                  alt="Dr. Amanda Lee"
                  class="w-full h-64 object-cover"
              />
              <div class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-bl-lg bg-slate-400">
                  Endodontist
              </div>
          </div>
          
          <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                  Drg. Ayu Della Astuti
              </h3>
              
              <div class="space-y-3">
                  <div class="flex items-center text-gray-600">
                      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                      <span>Pengalaman: 10 tahun</span>
                  </div>
                  
                  <div class="flex items-center text-gray-600">
                      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                      </svg>
                      <span>STT Nurul Fikri</span>
                  </div>
                  
                  <div class="flex items-center text-gray-600">
                      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span class="text-sm">Senin - Kamis: 08.00 - 16.00</span>
                  </div>
              </div>
              
              <button class="mt-6 w-full bg-purple text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors duration-300">
                  Buat Janji
              </button>
          </div>
      </div>
  </div>
          </div>
    </div>
    </section>


    <section id="tentang" class="mx-auto pt-32 mb-32 w-full" data-aos="zoom-in" data-aos-duration="2000">
      <div class="container p-5 w-full">
        <h1 class="text-center font-bold text-4xl mb-10">Tentang Kami</h1>
        <div class="flex flex-wrap gap-5 lg:gap-0">
          <div class="w-full lg:w-[60%] md:w-[100%]  mx-auto lg:ml-10">
            <h1 class="text-md md:text-xl w-full font-semibold font-serif text-center lg:text-left"><span class="bg-gradient-to-r from-purple to-orange bg-clip-text text-transparent">Klinik Gigi Karhud</span> berdedikasi untuk Memberikan Perawatan Gigi Terbaik dengan Sentuhan Kekeluargaan, 
              Mengutamakan Kenyamanan dan Kepuasan Setiap Pasien.</h1>
          </div>
          <div class="flex flex-wrap w-full md:w-full">
            <div class="flex flex-wrap w-full mt-10 md:mt-20 justify-around">
              <div class="w-full md:w-[40%]">
                <div class="rounded-3xl px-5 py-10 mb-5 bg-gradient-to-r from-card-purple to-blue text-center h-[200px]">
                  <h3 class="text-xl font-bold md:text-xl">Penghargaan Klinik Terbaik 2022</h3>
                  <p class="text-xl">Asosiasi Dokter Gigi Indonesia</p>
                </div>
                <div class="rounded-3xl px-5 py-10 mb-5 bg-gradient-to-r from-card-purple to-blue text-center h-[200px]">
                  <h3 class="text-2xl font-bold md:text-xl">Pelayanan Pasien Terbaik</h3>
                  <p class="text-xl">Majalah Kesehatan</p>
                </div>
              </div>
              <div class="w-full md:w-[40%]">
                <div class="rounded-3xl px-5 py-10 mb-5 bg-gradient-to-r from-card-purple to-blue text-center h-[200px]">
                  <h3 class="text-2xl font-bold md:text-xl">Dokter Gigi Profesional dan Berbakat</h3>
                  <p class="text-xl">Pengakuan Nasional</p>
                </div>
                <div class="rounded-3xl px-5 py-10 mb-5 bg-gradient-to-r from-card-purple to-blue text-center h-[200px]">
                  <h3 class="text-2xl font-bold md:text-xl">Teknologi Terbaru dan Canggih</h3>
                  <p class="text-xl">Layanan Inovatif</p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="img-about w-full lg:w-[40%] h-full lg:translate-y-20 lg:h-[400px] md:w-full mx-auto lg:mx-0 mt-10 lg:mt-0">
            <img src="<?= URL?>pages/images/about.jpg" alt="Klinik Gigi Kami" class="w-full md:w-[90%] h-full mx-auto ">
          </div> -->
        </div>
      </div>
    </section>
    


    <section id="daftar" class="mx-auto my-16 pt-40 mb-32 w-full" data-aos="zoom-in" data-aos-duration="2000">
      <div class="container p-5 w-full bg-card-purple rounded-lg pb-40 relative">
        <div class="text">
          <h1 class="text-center font-bold text-4xl mb-10 text-white">Daftarkan Jadwal Anda</h1>
          <p class="text-lg text-white text-center">
            Daftarkan diri Anda sekarang untuk mendapatkan perawatan gigi berkualitas dari tim dokter gigi profesional kami. Kami siap memberikan pelayanan terbaik untuk kesehatan gigi Anda.
          </p>
        </div>
        <form>
          <div class="form rounded-xl p-5 w-full md:w-[50%] left-1/2 transform -translate-x-1/2 absolute bg-white md:top-44 shadow-lg">
            <div class="border-b-2 pb-3 mb-5">
              <h1 class="text-2xl font-bold text-gray-800">Isi form untuk mendaftar di klinik kami 😊</h1>
            </div>
            <div class="form-control space-y-4">
              <div class="flex gap-2">
                <div class="w-full">
                  <div>
                    <label for="nama" class="block font-medium text-gray-700">Nama Lengkap</label>
                    <input id="nama" type="text" placeholder="Nama Lengkap" class="border-gray-300 border-2 p-2 rounded-lg w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">
                  </div>
                  <div>
                    <label for="telepon" class="block font-medium text-gray-700">No Telepon</label>
                    <input id="telepon" type="text" placeholder="Nomor Telepon" class="border-gray-300 border-2 p-2 rounded-lg w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">
                  </div>
                  <div>
                </div>
                  <label for="email" class="block font-medium text-gray-700">Alamat Email</label>
                  <input id="email" type="email" placeholder="Alamat Email" class="border-gray-300 border-2 p-2 rounded-lg w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div class="w-full">
                  <div>
                    <label for="tanggal" class="block font-medium text-gray-700">Tanggal Kunjungan</label>
                    <input id="tanggal" type="date" class="border-gray-300 border-2 p-2 rounded-lg w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">
                  </div>
                  <div>
                    <label for="waktu" class="block font-medium text-gray-700">Waktu Kunjungan</label>
                    <select id="waktu" class="border-gray-300 border-2 p-2 rounded-lg w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">
                      <option value="">Pilih Waktu</option>
                      <option value="08:00">08:00 - 10:00</option>
                      <option value="10:00">10:00 - 12:00</option>
                      <option value="13:00">13:00 - 15:00</option>
                      <option value="15:00">15:00 - 17:00</option>
                    </select>
                  </div>
                  <div>
                    <label for="jenis" class="block font-medium text-gray-700">Jenis Perawatan</label>
                    <select id="jenis" class="border-gray-300 border-2 p-2 rounded-lg w-full focus:ring-2 focus:ring-blue-500 focus:outline-none">
                      <option value="">Pilih Perawatan</option>
                      <option value="konsultasi">Konsultasi</option>
                      <option value="tambal">Tambal Gigi</option>
                      <option value="cabut">Cabut Gigi</option>
                      <option value="pembersihan">Pembersihan Gigi</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="text-center mt-5">
                <button type="reset" onclick="alert('Terimakasih sudah mendaftar')" class="bg-purple w-full text-white font-bold py-2 px-5 rounded-lg hover:bg-blue-600 transition">Kirim</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    
    

    <section id="FAQ" class="mx-auto my-16 mt-96 mb-32 pt-40 w-full" data-aos="zoom-in" data-aos-duration="2000">
      <div class="container w-full">
          <div class="bg-purple p-5 w-full rounded-lg text-white">
              <div class="mb-10">
                  <h1 class="text-center font-bold text-4xl mb-10">FAQ</h1>
              </div>
              <div class="flex flex-col justify-center">
                  <div class="mb-10 w-[90%] mx-auto">
                      <h1 class="text-4xl md:text-6xl font-bold border-b-2 md:w-[25%] w-[30%]">General</h1>
                  </div>
                  <div class="flex flex-col italic gap-10 w-[90%] mx-auto">
                      <!-- FAQ Item 1 -->
                      <div class="faq-item">
                          <div class="flex gap-16 items-center cursor-pointer">
                              <p class="text-xl md:text-4xl font-medium border-b-2 md:w-[80%] pb-2">Apakah klinik memiliki program referensi pasien?</p>
                              <span class="transition-transform duration-300">
                                  <i class="fa-solid fa-arrow-down"></i>
                              </span>
                          </div>
                          <div class="faq-answer pl-4 text-gray-200">
                              <p class="py-4">Ya, kami memiliki program referensi pasien. Anda bisa mendapatkan manfaat khusus dengan merekomendasikan klinik kami kepada orang lain. Hubungi staf kami untuk informasi lebih lanjut.</p>
                          </div>
                      </div>
  
                      <!-- FAQ Item 2 -->
                      <div class="faq-item">
                          <div class="flex gap-16 items-center cursor-pointer">
                              <p class="text-xl md:text-4xl font-medium border-b-2 md:w-[80%] pb-2">Bagaimana cara membuat janji temu?</p>
                              <span class="transition-transform duration-300">
                                  <i class="fa-solid fa-arrow-down"></i>
                              </span>
                          </div>
                          <div class="faq-answer pl-4 text-gray-200">
                              <p class="py-4">Anda dapat membuat janji temu melalui situs web kami atau langsung menghubungi klinik. Kami menyediakan jadwal yang fleksibel untuk memenuhi kebutuhan Anda.</p>
                          </div>
                      </div>
  
                      <!-- FAQ Item 3 -->
                      <div class="faq-item">
                          <div class="flex gap-16 items-center cursor-pointer">
                              <p class="text-xl md:text-4xl font-medium border-b-2 md:w-[80%] pb-2">Apa jenis asuransi yang diterima oleh klinik?</p>
                              <span class="transition-transform duration-300">
                                  <i class="fa-solid fa-arrow-down"></i>
                              </span>
                          </div>
                          <div class="faq-answer pl-4 text-gray-200">
                              <p class="py-4">Klinik kami menerima berbagai jenis asuransi kesehatan. Silakan hubungi kami untuk memastikan apakah asuransi Anda dapat digunakan di klinik kami.</p>
                          </div>
                      </div>
  
                      <!-- FAQ Item 4 -->
                      <div class="faq-item">
                          <div class="flex gap-16 items-center cursor-pointer">
                              <p class="text-xl md:text-4xl font-medium border-b-2 md:w-[80%] pb-2">Apa jam operasional klinik?</p>
                              <span class="transition-transform duration-300">
                                  <i class="fa-solid fa-arrow-down"></i>
                              </span>
                          </div>
                          <div class="faq-answer pl-4 text-gray-200">
                              <p class="py-4">Klinik kami buka dari Senin hingga Jumat pukul 08.00 hingga 17.00, dan Sabtu pukul 08.00 hingga 13.00. Untuk layanan darurat, silakan hubungi nomor hotline kami.</p>
                          </div>
                      </div>
  
                      <!-- FAQ Item 5 -->
                      <div class="faq-item">
                          <div class="flex gap-16 items-center cursor-pointer">
                              <p class="text-xl md:text-4xl font-medium border-b-2 md:w-[80%] pb-2">Apakah klinik menyediakan layanan darurat?</p>
                              <span class="transition-transform duration-300">
                                  <i class="fa-solid fa-arrow-down"></i>
                              </span>
                          </div>
                          <div class="faq-answer pl-4 text-gray-200">
                              <p class="py-4">Ya, kami menyediakan layanan darurat untuk masalah gigi. Silakan hubungi hotline darurat kami untuk bantuan segera.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  
  <section id="testimonials" class="mx-auto my-16 mb-32 pt-40 w-full" data-aos="zoom-in" data-aos-duration="2000">
    <div class="container mx-auto px-4 py-16 w-full">
      <h1 class="text-4xl font-bold text-center mb-12">Testimonial Pasien</h1>
        
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Testimonial 1 -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
              <div class="flex items-center mb-4">
                  <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center mr-4 bg-purple">
                      <span class="text-white font-bold text-lg">AS</span>
                  </div>
                  <div>
                      <h3 class="font-semibold text-lg">Ahmad Suryono</h3>
                      <p class="text-gray-600 text-sm">Pasien Behel</p>
                  </div>
              </div>
              <p class="text-gray-700">"Dokter giginya sangat profesional dan ramah. Pemasangan behel saya berjalan lancar dan hasilnya memuaskan. Terima kasih Klinik!"</p>
          </div>

          <!-- Testimonial 2 -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
              <div class="flex items-center mb-4">
                  <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center mr-4">
                      <span class="text-white font-bold text-lg">SR</span>
                  </div>
                  <div>
                      <h3 class="font-semibold text-lg">Siti Rahayu</h3>
                      <p class="text-gray-600 text-sm">Pasien Scaling</p>
                  </div>
              </div>
              <p class="text-gray-700">"Pembersihan karang gigi di sini tidak sakit sama sekali. Dokternya sangat teliti dan hasil pembersihan maksimal. Gigi jadi lebih putih!"</p>
          </div>

          <!-- Testimonial 3 -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
              <div class="flex items-center mb-4">
                  <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center mr-4 bg-teal-500">
                      <span class="text-white font-bold text-lg">BS</span>
                  </div>
                  <div>
                      <h3 class="font-semibold text-lg">Budi Santoso</h3>
                      <p class="text-gray-600 text-sm">Pasien Tambal Gigi</p>
                  </div>
              </div>
              <p class="text-gray-700">"Pelayanan tambal gigi sangat cepat dan rapi. Dokternya detail menjelaskan prosedur dan sekarang gigi saya sudah tidak sensitif lagi."</p>
          </div>

          <!-- Testimonial 4 -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
              <div class="flex items-center mb-4">
                  <div class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center mr-4">
                      <span class="text-white font-bold text-lg">DP</span>
                  </div>
                  <div>
                      <h3 class="font-semibold text-lg">Diana Putri</h3>
                      <p class="text-gray-600 text-sm">Pasien Veneer</p>
                  </div>
              </div>
              <p class="text-gray-700">"Pemasangan veneer berjalan lancar dan hasilnya natural. Sekarang saya jadi lebih percaya diri saat tersenyum. Terima kasih dokter!"</p>
          </div>

          <!-- Testimonial 5 -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
              <div class="flex items-center mb-4">
                  <div class="w-12 h-12 rounded-full bg-yellow-500 flex items-center justify-center mr-4">
                      <span class="text-white font-bold text-lg">RA</span>
                  </div>
                  <div>
                      <h3 class="font-semibold text-lg">Rudi Atmaja</h3>
                      <p class="text-gray-600 text-sm">Pasien Pencabutan Gigi</p>
                  </div>
              </div>
              <p class="text-gray-700">"Pencabutan gigi bungsu berjalan lancar dan tidak sakit. Proses penyembuhan juga cepat berkat panduan yang detail dari dokter."</p>
          </div>

          <!-- Testimonial 6 -->
          <div class="bg-white p-6 rounded-lg shadow-lg">
              <div class="flex items-center mb-4">
                  <div class="w-12 h-12 rounded-full bg-pink-500 flex items-center justify-center mr-4">
                      <span class="text-white font-bold text-lg">LW</span>
                  </div>
                  <div>
                      <h3 class="font-semibold text-lg">Lisa Wijaya</h3>
                      <p class="text-gray-600 text-sm">Pasien Perawatan Saluran Akar</p>
                  </div>
              </div>
              <p class="text-gray-700">"Awalnya takut root canal, tapi ternyata prosesnya tidak menyakitkan. Dokternya sangat sabar dan profesional dalam menangani pasien."</p>
          </div>
      </div>
  </div>
</section>


<section id="lokasi" class="mx-auto my-16 mb-32 w-full" data-aos="zoom-in" data-aos-duration="2000">
  <div class="container p-5 w-full h-fit rounded-lg bg-gradient-to-tr from-purple to-blue">
    <h1 class="text-center font-bold text-4xl mb-10 text-white">Lokasi</h1>
    <div class="flex flex-wrap justify-center gap-5">
      <div class="teks-lokasi w-full md:w-[48%] bg-white p-5 rounded-lg">
        <div class="img">
          <img src="<?= URL?>pages/images/lokasi.jpg" alt="" class="w-full h-full">
        </div>
      </div>
      <div class="map md:w-[48%] w-full">
        <iframe class="w-full md:h-full h-96 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.298131667851!2d106.80133647399411!3d-6.609829093384158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e859ea83dd%3A0x8b65bbe235674c30!2sSURYA%20KENCANA%2C%20Jl.%20Suryakencana%20No.260B%2C%20RT.01%2FRW.05%2C%20Gudang%2C%20Kecamatan%20Bogor%20Tengah%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016123!5e0!3m2!1sid!2sid!4v1736561666174!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<section class="py-20 px-4">
  <div class="max-w-6xl mx-auto text-center">
      <h1 class="text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
          Meet Our Team
      </h1>
      <p class="text-slate-600 text-lg mb-16">Kelompok 2 TI08 - Proyek Klinik Gigi</p>
  </div>
</section>

<!-- Team Members Grid -->
<section class="px-4 pb-20" id="testimonials">
  <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Team Member 1 -->
          <div class="group">
              <div class="bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-300 group-hover:-translate-y-2">
                  <div class="relative">
                      <img src="<?= URL?>pages/images/raffa2.jpeg" alt="Raffa" class="w-full h-64 object-cover">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                      <div class="absolute bottom-4 left-4 text-white">
                          <h3 class="font-bold text-xl">Raffa Yuda Pratama</h3>
                          <p class="text-sm text-gray-300">Full-stack Developer</p>
                      </div>
                  </div>
                  <div class="p-6">
                      <div class="flex items-center mb-4">
                          <div class="bg-blue-100 rounded-lg p-2">
                              <i class="fas fa-code text-blue-600"></i>
                          </div>
                          <div class="ml-4">
                              <p class="text-sm text-gray-600">NIM: 0110224081
                            </p>
                              <p class="text-sm text-gray-600">Teknik Informatika</p>
                          </div>
                      </div>
                      <div class="flex justify-center space-x-4">
                          <a href="https://github.com/raffayuda" class="text-gray-400 hover:text-blue-500 transition-colors">
                              <i class="fab fa-github text-lg"></i>
                          </a>
                          <a href="https://www.linkedin.com/in/raffa-yuda-468228250" class="text-gray-400 hover:text-blue-500 transition-colors">
                              <i class="fab fa-linkedin text-lg"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Team Member 2 -->
          <div class="group">
              <div class="bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-300 group-hover:-translate-y-2">
                  <div class="relative">
                      <img src="<?= URL?>pages/images/razan.jpeg" alt="Razzan" class="w-full h-64 object-cover">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                      <div class="absolute bottom-4 left-4 text-white">
                          <h3 class="font-bold text-xl">Razan Muhammad Ihsan .R</h3>
                          <p class="text-sm text-gray-300">Back-end Developer</p>
                      </div>
                  </div>
                  <div class="p-6">
                      <div class="flex items-center mb-4">
                          <div class="bg-purple-100 rounded-lg p-2">
                              <i class="fas fa-database text-purple-600"></i>
                          </div>
                          <div class="ml-4">
                              <p class="text-sm text-gray-600">NIM: 0110224158</p>
                              <p class="text-sm text-gray-600">Teknik Informatika</p>
                          </div>
                      </div>
                      <div class="flex justify-center space-x-4">
                          <a href="https://github.com/ZanIhsan2" class="text-gray-400 hover:text-purple-500 transition-colors">
                              <i class="fab fa-github text-lg"></i>
                          </a>
                          <a href="#" class="text-gray-400 hover:text-purple-500 transition-colors">
                              <i class="fab fa-linkedin text-lg"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Team Member 3 -->
          <div class="group">
              <div class="bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-300 group-hover:-translate-y-2">
                  <div class="relative">
                      <img src="<?= URL?>pages/images/alfi.jpeg" alt="Zakri" class="w-full h-64 object-cover">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                      <div class="absolute bottom-4 left-4 text-white">
                          <h3 class="font-bold text-xl">M. Zakri Alfiansyah</h3>
                          <p class="text-sm text-gray-300">Front-end Developer</p>
                      </div>
                  </div>
                  <div class="p-6">
                      <div class="flex items-center mb-4">
                          <div class="bg-green-100 rounded-lg p-2">
                              <i class="fas fa-palette text-green-600"></i>
                          </div>
                          <div class="ml-4">
                              <p class="text-sm text-gray-600">NIM: 0110224153</p>
                              <p class="text-sm text-gray-600">Teknik Informatika</p>
                          </div>
                      </div>
                      <div class="flex justify-center space-x-4">
                          <a href="#" class="text-gray-400 hover:text-green-500 transition-colors">
                              <i class="fab fa-github text-lg"></i>
                          </a>
                          <a href="#" class="text-gray-400 hover:text-green-500 transition-colors">
                              <i class="fab fa-linkedin text-lg"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Team Member 4 -->
          <div class="group">
              <div class="bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-300 group-hover:-translate-y-2">
                  <div class="relative">
                      <img src="<?= URL?>pages/images/ayu.jpeg" alt="Ayu" class="w-full h-64 object-cover">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                      <div class="absolute bottom-4 left-4 text-white">
                          <h3 class="font-bold text-xl">Ayu Della Astuti</h3>
                          <p class="text-sm text-gray-300">UI/UX Designer</p>
                      </div>
                  </div>
                  <div class="p-6">
                      <div class="flex items-center mb-4">
                          <div class="bg-red-100 rounded-lg p-2">
                              <i class="fas fa-laptop-code text-red-600"></i>
                          </div>
                          <div class="ml-4">
                              <p class="text-sm text-gray-600">NIM: 0110224116</p>
                              <p class="text-sm text-gray-600">Teknik Informatika</p>
                          </div>
                      </div>
                      <div class="flex justify-center space-x-4">
                          <a href="https://github.com/aydellast" class="text-gray-400 hover:text-red-500 transition-colors">
                              <i class="fab fa-github text-lg"></i>
                          </a>
                          <a href="https://id.linkedin.com/in/ayu-della-astuti-b6010b335" class="text-gray-400 hover:text-red-500 transition-colors">
                              <i class="fab fa-linkedin text-lg"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
    
  </div>
  
  <section id="footer" class="bg-black p-10 w-full text-white">
    <div class="container w-full">
      <div class="flex flex-wrap justify-between">
        <div class="md:w-[40%] mb-5">
          
          <div class="teks ">
            <h2 class="text-lg font-semibold mb-3">Jam Operasional</h2>
            <ul class="space-y-2">
              <li class="flex gap-10">
                <span>Senin - Jumat</span>
                <span>08:00 - 20:00 WIB</span>
              </li>
              <li class="flex gap-[100px]">
                <span>Sabtu</span>
                <span>08:00 - 17:00 WIB</span>
              </li>
              <li class="flex gap-[90px]">
                <span>Minggu</span>
                <span>10:00 - 15:00 WIB</span>
              </li>
              <li class="text-yellow-400 text-sm mt-2">*Hari libur nasional tetap buka (09:00 - 15:00 WIB)</li>
            </ul>
          </div>
        </div>
        <!-- Bagian lainnya tetap sama -->
        <div class="md:w-[15%] mb-5 w-full">
          <h1 class="text-lg font-semibold">Layanan</h1>
          <ul class="w-full">
            <div>
              <li>Bedah Gigi</li>
              <li>Veneer Gigi</li>
              <li>Pemasangan Kawat</li>
              <li>Scaling dan Polishing</li>
              <li>Pencegahan Karies</li>
            </div>
          </ul>
        </div>
        <div class="md:w-[15%] mb-5">
          <h1 class="text-lg font-semibold">Sosial Media</h1>
          <ul class="w-full flex gap-5">
            <div class="text-xl">
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </div>
            <div class="text-xl">
              <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </div>
           
          </ul>
        </div>
        <div class="md:w-[20%]">
          <h1 class="text-lg font-semibold">Alamat</h1>
          <ul class="w-full flex gap-5">
            <div>
              <li>Jl. Suryakencana No.260B, RT.01/RW.05, Gudang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16123</li>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <footer class="border-t-2 pt-5 mt-5">
      <h1 class="text-base md:text-xl text-center">Copyright &copy; Raffa Yuda Pratama <script>document.write(new Date().getFullYear());</script> All Right Reserved</h1>
    </footer>
  </section>

  <script src="<?= URL ?>src/index.js"></script>
  <script src="<?= URL ?>src/carousel.js"></script>
  <script src="<?= URL ?>src/faq.js"></script>
  <script src="<?= URL ?>src/navbar.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  
</body>

</html>