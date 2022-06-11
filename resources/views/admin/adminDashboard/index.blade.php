@extends('dashboard.layouts.main')

@section('container')
 <!-- Vendor CSS Files -->
 <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="css/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="css/swiper/swiper-bundle.min.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="css/dashboard.css" rel="stylesheet">
<style>
 body {
}

</style>
</head>

<body>
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">


     <div class="container">
       <div class="container pt-5">
         <div class="section-title">
           <h2>Dashboard</h2>
           <p>Selamat Datang, {{auth()->user()->name}}</p>
       </div>
       </div>

       <div class="row portfolio-container">

         <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
           <div class="portfolio-wrap">
             <figure>
               <img src="img/portfolio-1.jpg" class="img-fluid" alt="">
               <i class="bookmarks"></i>
               <a href="img/portfolio-1.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
             </figure>

             <div class="portfolio-info">
               <h4><a href="/admin/biodata">Biodata</a></h4>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
           <div class="portfolio-wrap">
             <figure>
               <img src="img/portfolio-02.jpg" class="img-fluid" alt="">
               <a href="img/portfolio-02.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
               <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
             </figure>

             <div class="portfolio-info">
               <h4><a href="/admin/transkrip">Transkrip</a></h4>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
           <div class="portfolio-wrap" >
             <figure>
               <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
               <i class="bi bi-bank"></i>
               <a href="img/portfolio-03.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
             </figure>

             <div class="portfolio-info">
               <h4><a href="/admin-kurikulum">Daftar Mata Kuliah</a></h4>
             </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap" >
              <figure>
                <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
                <i class="bi bi-bank"></i>
                <a href="img/portfolio-03.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="/admin/schedule">Jadwal Kuliah Mahasiswa</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap" >
              <figure>
                <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
                <i class="bi bi-bank"></i>
                <a href="img/portfolio-03.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="/admin/kelas">Kelas</a></h4>
              </div>
            </div>
          </div>
       </div>

     </div>

   </section><!-- End Portfolio Section -->
</body>
@endsection
