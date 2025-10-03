<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Rabanton Maju Joyo Abadi</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                     <a href="{{ url('/') }}" class="logo">
    <img src="{{ asset('images/friscoy.jpg') }}" alt="Yufa Logo" style="height: 50px;">
</a> 
                     <!-- <a href="index.html" class="logo">
                        <h1>Yufa Tech Co., Ltd.</h1>
                    </a> 
                     -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                      <li class="scroll-to-section"><a href="#services">Layanan</a></li>
                      <li class="scroll-to-section"><a href="#courses">Produk</a></li>
                      <li class="scroll-to-section"><a href="#team">Highlight</a></li>
                      @auth 
                      <li class="scroll-to-section"><a href="/admin/dashboard">Admin</a></li>
                      @else
                      <li class="scroll-to-section"><a href="/login">Masuk</a></li>
                      @endauth 
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


 <div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-banner">
                    @foreach ($sliders as $slider)
                        <div class="item" style="
                            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('{{ asset($slider->gambar) }}');
                            background-size: cover;
                            background-position: center;
                            min-height: 600px;
                            border-radius: 20px;
                            display: flex;
                            align-items: center;
                            padding: 40px;">
                            
                            <div class="header-text text-white" style="max-width: 600px;">
                                <!-- <span class="text-sm uppercase tracking-widest text-yellow-400 font-semibold">Featured</span> -->
                                <h2 class="text-4xl font-bold leading-tight mb-4 drop-shadow-lg">
                                    {{ $slider->headline }}
                                </h2>
                                <p class="text-lg text-gray-100 mb-6 drop-shadow-sm">
                                    {{ $slider->desc }}
                                </p>
                                <div class="flex space-x-4">
                                    <!-- <a href="#about" class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg font-semibold transition-all duration-300 shadow-md">
                                        Get to Know Us
                                    </a> -->
                                    <a href="https://youtube.com/@RabantonFranchise" target="_blank" class="flex items-center gap-2 text-white border border-white hover:bg-white hover:text-red-600 px-4 py-2 rounded-lg transition duration-300">
                                        <i class="fa fa-play"></i> Our Youtube
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


  
    <div class="services section" id="services">
      <div class="container">
        <div class="row">
          @foreach ($service as $item)
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
              <!-- <div class="icon">
                <i class="{{ $item->icon }} fa-3x" aria-hidden="true"></i>
              </div> -->
              <div class="icon mb-4" style="
               width: 150px;
               height: 150px;
               background-color: #000000;
               border-radius: 50%;
               display: flex;
               align-items: center;
               justify-content: center;
               margin: 0 auto 20px auto;
               color: white;
               ">
               <i class="{{ $item->icon }}" style="font-size: 60px;"></i>
               </div>
                <div class="main-content">
                  <h4>{{ $item->title }}</h4>
                  <p>{{ $item->desc }}</p>
                  <div class="main-button">
                    <a href="#">Layanan Kami</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Visi
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Menjadi perusahaan terdepan dalam pembangunan dan produksi beton pracetak yang inovatif, berkualitas, dan terjangkau, dengan mengedepankan kepuasan pelanggan serta keberlanjutan lingkungan.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Misi
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Berkomitmen pada inovasi berkelanjutan yang ramah lingkungan dan mendukung pembangunan berkelanjutan.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Inovasi Berkelanjutan
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami percaya bahwa pembangunan yang baik harus sejalan dengan keberlanjutan. Dengan mengadopsi teknologi ramah lingkungan, efisiensi penggunaan bahan baku, serta inovasi dalam desain dan produksi beton pracetak, kami berkomitmen untuk menghadirkan solusi konstruksi yang tidak hanya kuat dan tahan lama, tetapi juga mendukung pelestarian lingkungan untuk generasi mendatang.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Keahlian & Pengalaman Industri
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dengan pengalaman bertahun-tahun dalam industri percetakan beton, kami memahami secara mendalam kebutuhan pasar konstruksi. Didukung oleh mesin berteknologi modern, tenaga kerja profesional, serta pengawasan mutu yang ketat, kami memiliki keahlian industri yang mumpuni untuk menghadirkan produk unggul, tepat waktu, dan sesuai standar terbaik di bidangnya.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
        <div class="section-heading">
          <h6>Tentang Kami</h6>
              <h2>Rabanton: Inovasi Solusi Beton Pracetak</h2>
              <img src="/{{ $about->cover }}" alt="About Us Image" style="width: 100%; max-width: 500px; margin: 20px 0;">
              <p style="margin-bottom: 10px;">{{$about->desc}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" style="margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h6>Produk Unggulan</h6>
                    <h2>Produk Terbaru Kami</h2>
                </div>
            </div>
        </div>
        <!-- <ul class="event_filter">
            <li>
                <a class="is_active" href="#!" data-filter="*">List dari Produk:</a>
            </li>
        </ul>-->
        <div class="row event_box">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer">
                    <div class="events_item">
                        <div class="thumb">
                            <!-- Tambahkan href ke halaman detail produk -->
                            <a href="{{ route('product.detail', $product->id) }}">
                                <img src="{{ asset($product->picture) }}" alt="{{ $product->title }}" style="height: 200px; width: 100%; object-fit: cover;">
                            </a>
                        </div>
                        <div class="down-content">
                            <span class="author">Yufa Tech</span> <!-- Bisa diambil dari database jika ada -->
                            <!-- Tambahkan href ke halaman detail produk -->
                            <h4><a href="{{ route('product.detail', $product->id) }}">{{ $product->title }}</a></h4>
                            <p>{{ Str::limit($product->description, 50, '...') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<div class="team section" id="team">
  <div class="container">
      <div class="row">
          @foreach ($highlights as $highlight)
              <div class="col-lg-3 col-md-6">
                  <div class="team-member">
                      <div class="main-content">
                          @if ($highlight->picture)
                              <img src="{{ asset($highlight->picture) }}" alt="{{ $highlight->title }}" style="height: 200px; width: 100%; object-fit: cover;">
                          @else
                              <img src="{{ asset('path/to/default-image.jpg') }}" alt="Default Image" style="height: 200px; width: 100%; object-fit: cover;">
                          @endif
                          <span class="category">{{ $highlight->description }}</span>
                          <h4>{{ $highlight->title }}</h4>
                          <ul class="social-icons">

                              <li><a href="https://www.youtube.com/channel/UCkZHjUZHVADRps-kJiZ9o-g/videos"><i class="fab fa-youtube"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</div>git

 <div class="section testimonials py-16 bg-gray-50">
    <div class="container">
        <div class="row">
            <!-- Bagian Carousel Berita -->
            <div class="col-lg-7">
                <div class="owl-carousel owl-testimonials">
                    @foreach ($news as $item)
                        <div class="item bg-blue-700 text-white rounded-lg overflow-hidden shadow-md">
                            <!-- Gambar -->
                            <div class="image" style="height: 250px; overflow: hidden;">
                                <img src="{{ asset($item->cover) }}" alt="{{ $item->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <!-- Konten -->
                            <div class="content p-4">
                                <h4 class="text-xl font-semibold mb-2 text-white hover:underline">
                                    <a href="{{ route('news.detail', $item->id) }}" class="text-white">{{ $item->title }}</a>
                                </h4>
                                <p class="text-gray-200 text-sm mb-3">
                                    {{ Str::limit(strip_tags($item->body), 150, '...') }}
                                </p>
                                <p class="text-gray-300 text-xs">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('F d, Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Bagian Judul & Deskripsi -->
            <div class="col-lg-5 align-self-center">
                <div class="section-heading">
                    <h6 class="text-red-600 text-sm font-semibold uppercase">BERITA</h6>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Apa Yang Terjadi di Perusahaan Kami?</h2>
                    <p class="text-gray-600">
                        Temukan berbagai informasi terbaru seputar proyek dan inovasi kami melalui rilis berita yang menarik. Kami selalu siap menjawab pertanyaan Anda, jadi jangan ragu untuk menghubungi kami!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Hubungi Kami</h6>
            <h2>Bisa kontak kami kapanpun itu, kami siap untuk membantu.</h2>
            <!-- <p>Our team is ready to assist with any inquiries, product information, or service requests.<br><br> -->
             <p class="no-bold"> <strong>Telefon </strong>(0333) – 511 333<br>
             <strong>Email:</strong> <a href="mailto:rabantonmja@gmail.com">rabantonmja@gmail.com</a><br>
             <strong>Instagram: </strong> rabanton_mja <br>
             <strong>Alamat:</strong> JL. Raya Situbondo – Banyuwangi No. 77, Ketapang, Banyuwangi<br>
             
             <!-- <strong>AGV & Automation Inquiries:</strong> <a href="mailto:sales5@newyuming.com.tw">sales5@newyuming.com.tw</a>
          </p>-->
            <!-- <div class="special-offer">
              <span class="offer">Send<br><em>US</em></span>
              <h6>Yufa Technology</em></h6>
              <h4>We’ll respond with care.</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="/contact/send" method="post">
              <!-- INGAT MODEL PESAN --> 
              @csrf 
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama anda..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" id="message" placeholder="Pesan anda..." required></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email anda..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Kirim Pesan Sekarang</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2025 PT Rabanton Maju Joyo Abadi. All rights reserved.</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  @include('sweetalert::alert')

  </body>
</html>