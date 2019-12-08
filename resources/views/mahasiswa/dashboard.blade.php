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
			<h3 class="line-title center">About Me</h3>
			<p class="read">Computers have been my passion from ever. I could spend hours learning about coding and designing. However, this passion got wings when I grabbed a job as a UI/UX designer and developer. Though money cannot be totally ignored, even if it wasn’t there, I couldn’t be separated from designing and coding. I think I can totally relate to how
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
			<h3 class="line-title">Objective</h3>
			<article class="flex-group">
			
				<div class="full">
					
					<p class="read">I want to execute my ideas through my designing skills for benefit of my company. I have intuitive knowledge of designing which will help me to grow my career with my company.</p>
				</div>
			</article>
		</section>
			<section>

			<h3 class="line-title">Experience <small class="text-muted">(3 years)</small></h3>

			<article class="flex-group">

				<div class="short">
					<h4>Edunuts.com</h4>
					<p>
            Naurang House, 21 KG Marg Connaught Place, New Delhi -110001
         </p><hr class="garis">
         <small>
          1-1 -2015 to 4-11-2017
           
         </small>
        <p></p>
				</div>

				<div class="full">
					<a href="http://edunuts.com">Lead UI/UX Developer</a>
					<p class="read">
       I had done UI Development and UI Designing in the whole website. I had used Html5, Css3, Jquery, Javascript, Animate.css, Bootstrap.css, Green shock animation to develop the website dynamically and make it most user-friendly. I had given it graphics from Adobe Photoshop and Illustrator. I had made my best efforts to make it better than something most better.     
          </p>
				</div>
			</article>


        <article class="flex-group">
        <div class="short">
          <h4>bigly.io</h4>
          <p>
            
            Bigly Technologies Pvt. Ltd.
            N-21, Sec. 18, Noida, Uttar Pradesh: 201301
            </p><hr class="garis">
            <small>
              
            November-2017 - Currently
            </small>
          <p></p>
        </div>
        <div class="full">
          <a href="http://bigly.io">Lead UI/UX Developer </a>
          <p class="read">
            I had worked on two websites, E-Commerce Seller Service Provider &amp; Dropshipping. I had used same skills here to develop the whole business of team Bigly.
          </p>
        </div>
      </article>

		</section>


			<section>
			<h3 class="line-title">Project Completed</h3>
  			<article class="flex-group">
  				<div class="short">
  					<h4><a href="">Edunuts.com</a></h4>
  					<p>UI/Design &amp; Developer</p>
  				</div>
  				<div class="full">
  					
  					<p class="read">
              Edunuts is a mission to empower students, in making the best career decisions based on correct information and insights from data.     
            </p>
             <hr class="garis">
  				</div>
  			</article>

        
        <article class="flex-group">
          <div class="short">
            <h4><a href="">bigly.io</a></h4>
            <p>UI/Design &amp; Developer</p>
          </div>
          <div class="full">
            
            <p class="read">
              bigly.io is India's First platform to Import Products at  Online Store without Keeping Inventory.
            </p>
            <hr class="garis">
          </div>
        </article>

          <article class="flex-group">
          <div class="short">
            <h4><a href="">bigradar.io</a></h4>
            <p>UI/Design &amp; Developer</p>
          </div>
          <div class="full">
            
            <p class="read">
              
           BigRadar is a subsidiary company of Edunuts.com. I had done all the previous work here too by using Html5, Css3, Jquery, Javascript, Animate.css, Bootstrap.css &amp; Parallax. Js.


            </p>
          <hr class="garis">
          </div>
        </article>

        <article class="flex-group">
          <div class="short">
            <h4><a href="http://www.edunuts.com/academy/">Edunuts Academy</a></h4>
            <p>UI/Design &amp; Developer</p>
          </div>
          <div class="full">
            <p class="read">
              
           Edunuts Academy is a subsidiary company of Edunuts.com. I had done all the previous work here too by using Html5, Css3, Jquery, Javascript, Animate.css, Bootstrap.css  


            </p>
          <hr class="garis">
          </div>
        </article>

         <article class="flex-group">
          <div class="short">
            <h4><a href="http://www.sketchut.com/">Sketchut</a></h4>
            <p>UI/Design &amp; Developer</p>
          </div>
          <div class="full">
            <p class="read">
              </p><h1>&nbsp;</h1>
            <p></p>
          <hr class="garis">
          </div>
        </article>

  
        <article class="flex-group">
          <div class="short">
            <h4><a href="http://www.dmadelhi.com/">DMA Delhi</a></h4>
            <p>UI/Design &amp; Developer</p>
          </div>
          <div class="full">
            <p class="read">
              
            dmadelhi.com is a subsidiary company of Edunuts.com. I had done all the previous work here too by using Html5, Css3, Jquery, Javascript, Animate.css, Bootstrap.css &amp; Parallax. Js.

            </p>
          <hr class="garis">
          </div>
        </article>
       
        <article class="flex-group">
          <div class="short">
            <h4><a href="http://dropship.bigly.io">Bigly Dropship</a></h4>

            <p>UI/Design &amp; Developer</p>
          </div>
          <div class="full">
            <p class="read">
              </p><h1>&nbsp;</h1>
            <p></p>
          <hr class="garis">
          </div>
        </article>

        <article class="flex-group">
          <div class="short">
            <h4><a href="http://finishit.in">Finishit.in</a></h4>

            <p>UI/Design &amp; Developer</p>
          </div>
          <div class="full">
            <p class="read">When you don't know how to get things done,come to us Finish-It get things done for you,over a call or chat. It does a great job by making your life easier</p>
          <hr class="garis">
          </div>
        </article>

		</section>

    
	</main>
</div>
  
  </div>

</div>

@endsection