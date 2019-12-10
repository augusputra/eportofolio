@extends('mahasiswa.mahasiswa_layout')
@section('content')

<div class="container-fluid">

<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
       <meta name="language" content="English">
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta property="og:locale" content="en_US">
          <meta property="og:type" content="website">

          <meta name="description" content="Are you looking for creative Website Design Company in Delhi? Get user friendly professional and E-commerce web development services. Join the innovators.">

                    

      <meta name="keywords" content="web designing Delhi, website design Delhi, web Design Company in Delhi, web designing companies in Delhi, md aqil">


      <meta property="og:title" content="Are you looking for creative Website Design Company in Delhi? Get user friendly professional and E-commerce web development services.">

      <meta property="og:description" content="Are you looking for creative Website Design Company in Delhi? Get user friendly professional and E-commerce web development services. Join the innovators.
    ">
      <meta property="og:url" content="https://mdaqil.tk/">

      <meta property="og:image" content="https://mdaqil.tk/img/main-screen.jpg">





    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-111268069-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-111268069-2');
    </script>

</head>

  
  <body>
  
  <div class="resmue-container">
<div style="display: flex;">
	<aside>
    <section class="text-center" style="padding:0">
      <?php
          $data = DB::table('mahasiswa')->where('id', Session::get('id'))->first();
      ?>
			<img class="porfile-pic" src="{{URL::to('uploads/'.$data->foto)}}" alt="">
			<h2 style="margin-bottom: 5px">{{$data->nama}}</h2>
			<small class="text-muted" style="text-transform: uppercase;">{{$data->program_keahlian}}</small>
			<small class="text-muted" style="text-transform: uppercase;">{{$data->fakultas}}</small>
      <p class="text-muted">
         <small>
        <b>Phone:</b> {{$data->telp}}</small>
      </p>
     <p class="text-muted">
        <small>
        <b>Email:</b> {{$data->email}}
          
        </small>
     </p>
       
      
		</section>
		
	   <section>
        <h3 class="line-title center">Skills</h3>
        <ul class="skill-list">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>SASS</li>
                    <li>JavaScript</li>
                    <li>jQuery</li>
                    <li>AJAX</li>
                    <li>Bootstrap</li>
                    <li>Materialize</li>
                    <li>Wordpress</li>
                   <li>Photoshop</li>
                   <li>Illustrator</li>
                   <li>adobe premiere pro</li>

                         <li> CSS3 Keyframe</li>
                      <li>
                      Greensock/GSAP
                      </li>
                      <li>SVG and Canvas</li>
                      <li> Animate.css, wow.js, scrollMagic</li>

                      <li>
                        <b>Understanding</b> of (PHP, MYSQL, Gulp)
                      </li>

                  </ul>
 
      </section>
      <section> 
          <h3 class="line-title center">Education</h3>
        <p class="read">
          R. B. Jalan College, Mithila University
          Darbhanga, Bihar
          Bachelor of Arts
          Pursuing B.A. at Mithila University.
        </p>

      </section>
	</aside>
	<main>
	
		<section>
		  <h3 class="line-title">Project Completed</h3>

      <?php
          $pengalaman_proyek_info = DB::table('pengalaman_proyek')->where('mahasiswa_id', Session::get('id'))->get();
          foreach($pengalaman_proyek_info as $key_proy){
      ?>

        <article class="flex-group">
          <div class="short">
            <h4><a href="">{{ $key_proy->nama_proyek }}</a></h4>
            <p>{{ $key_proy->kegiatan_matakuliah }} - {{ $key_proy->tahun }}</p>
          </div>
          <div class="full">
          
            <p class="read">
            {{ $key_proy->deskripsi }}     
            </p>
            <hr class="garis">
          </div>
        </article>

      <?php } ?>

		</section>

    <section>
		  <h3 class="line-title">Training Seminars and Workshops</h3>

      <?php
          $pelatihan_seminar_info = DB::table('pelatihan_seminar')->where('mahasiswa_id', Session::get('id'))->get();
          foreach($pelatihan_seminar_info as $key_sem){
      ?>

        <article class="flex-group">
          <div class="short">
            <h4><a href="">{{ $key_sem->nama_kegiatan }}</a></h4>
            <p>{{ $key_sem->tanggal }} , {{ $key_sem->tempat }}</p>
          </div>
          <div class="full">
          
            <p class="read">
            {{ $key_sem->status }}     
            </p>
            <a href="{{URL::to('uploads/'.$key_sem->file_sertifikat)}}">{{ $key_sem->file_sertifikat }}</a>
            <hr class="garis">
          </div>
        </article>

      <?php } ?>

		</section>
    
    <section>

			<h3 class="line-title">Training Seminars and Workshops</h3>
      
      <?php
          $pelatihan_seminar_info = DB::table('pelatihan_seminar')->where('mahasiswa_id', Session::get('id'))->get();
          foreach($pelatihan_seminar_info as $key_sem){
      ?>

			<article class="flex-group">

				<div class="short">
					<h4>{{ $key_sem->nama_kegiatan }}</h4>
					<p>
            {{ $key_sem->tanggal }}
         </p><hr class="garis">
         <small>
         {{ $key_sem->status }}
           
         </small>
				</div>

				<div class="full">
					<a href="http://edunuts.com">Lead UI/UX Developer</a>
					<p class="read">
       I had done UI Development and UI Designing in the whole website. I had used Html5, Css3, Jquery, Javascript, Animate.css, Bootstrap.css, Green shock animation to develop the website dynamically and make it most user-friendly. I had given it graphics from Adobe Photoshop and Illustrator. I had made my best efforts to make it better than something most better.     
          </p>
				</div>
			</article>

      <?php } ?>

		</section>
    
	</main>
</div>
  
  </div>

</div>

@endsection