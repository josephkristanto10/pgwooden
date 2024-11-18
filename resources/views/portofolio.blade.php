<!doctype html>
<html class="no-js" lang="en">

    <head>
      
		@include('support/header')

		<style>
			.judul_about_us{
				font-size:18px !important;
				margin-top:15px !important;
			}
			.hightlight_judul_aboutus{
				font-size:30px !important;
				text-transform: uppercase !important;
				color:#131312;
			}
			.single-populer-products{
				background:none !important;
			
			}
			.portocontainer {
  display: flex;
  width: 100%;
  padding: 4% 2%;
  box-sizing: border-box;
  height: 80vh;
}

.box {
  flex: 1;
  overflow: hidden;
  transition: .5s;
  margin: 0 2%;
  box-shadow: 0 20px 30px rgba(0,0,0,.1);
  line-height: 0;
}

.box > img {
  width: 200%;
  height: 100%;
  object-fit: cover; 
  transition: .5s;
}

.box > span {
  font-size: 3.8vh;
  display: block;
  text-align: center;
  height: 0vh;
  line-height: 2.6;
}

.box:hover { flex: 1 1 10%; }
.box:hover > img {
  width: 100%;
  height: 100%;
}

nav.navbar.bootsnav{
	background-color:#f1f1f1 !important;
	box-shadow: 0 2px 5px rgba(0,0,0,.2);
}
.btn-cart {
  display: flex;
  justify-content: center;
  align-items: center;
  background: transparent;
  border: 1px solid #ffffff;
  width: 80px;
  height: 30px;
  white-space: nowrap;
  color: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,.2);
  font-size: 12px;
  font-weight: 500;
  text-transform: capitalize;
  border-radius: 3px;
}
.btn-cart.welcome-add-cart:hover {
	color: #131312;
  background: #f1f1f1;
  border: 1px solid #f1f1f1;
}

.wrap-sticky nav.navbar.bootsnav {
	height:75px;
}
.wrap-sticky nav.navbar.bootsnav.sticked{
	height:100px;
}
.wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand, .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:hover, .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:focus {
	padding:40px;
}
.navbar-header a.navbar-brand, .navbar-header a.navbar-brand:hover, .navbar-header a.navbar-brand:focus {
  display: inline-block;
  color: #616060;
  font-size: 24px;
  font-weight: 500;
  padding: 25px 0px;
  text-transform: capitalize;
}
.wrap-sticky nav.navbar.bootsnav.sticked ul.nav > li > a {
  padding: 40px 25px;
}
nav.navbar.bootsnav ul.nav > li > a {
  padding-top:30px;
  padding-bottom:20px;
}

/* .single-inner-populer-products{
	padding: 0px !important;
} */
#button_hubungi_wa{
		width:100% !important;
		padding-left:10px;
		padding-right:10px;
	}

	#home{
		height:0px !important;
	
	}
@media (max-width: 576px) { 
	#home{
		height:700px;
	
	}
	.single-inner-populer-products {
		padding: 0px !important;
	}

	#title_pg_wooden{
		font-size:25px !important;
	}
	#button_pg_wooden{
		font-size:12px !important;
		padding: 0px;
		width: 130px;
		height: 50px;
		margin-top:20px;
	}
	.welcome-hero-txt{
		margin-top:35%;
	}
	.btn-cart.welcome-add-cart, .btn-cart.welcome-add-cart.welcome-more-info{
		line-height:0px;
	}
	nav{
		opacity:1;
		transition: 1s;
	}
	.sticked{
		opacity:1;
	}
	.wrap-sticky nav.navbar.bootsnav.sticked {
	height:65px;
	}
	.wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand, .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:hover, .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:focus{
		padding:10px;
	}
	.mobile_toogle{display:inline-block !important;}
	.wrap-sticky nav.navbar.bootsnav.sticked ul.nav > li > a {padding:20px;}
	.menu-ui-design{
		height:100% !important;
		text-align: center;
	}
	.desktoponly{
		display: none !important;
	}
	.box > img{
		height:300px;
	}
	.portocontainer{
		height : 50vh;
	}
	#Portofolio{
		padding:0px !important;
	}
	.populer-products{
		padding-top:25px !important;
	}
	.caption_populer_product p{
		font-size:12px !important;
	}
	.sofa-collection::before, .sofa-collection::after{
		width:100% !important;
	}
	.navbar-header a.navbar-brand, .navbar-header a.navbar-brand:hover, .navbar-header a.navbar-brand:focus {
  display: inline-block;
  color: #131312;
  font-size: 17px;
  font-weight: 500;
  padding: 25px 0px;
  text-transform: capitalize;
}

.single-new-arrival-bg img{
		height: 200px !important;
	}
	
}


@media (max-width: 768px) { 
	#home{
		height:700px;
	}
	.single-inner-populer-products {
		padding: 0px !important;
	}
	#title_pg_wooden{
		font-size:25px !important;
	}
	#button_pg_wooden{
		font-size:12px !important;
		padding: 0px;
		width: 130px;
		height: 50px;
		margin-top:20px;
	}
	.welcome-hero-txt{
		margin-top:40%;
	}
	.btn-cart.welcome-add-cart, .btn-cart.welcome-add-cart.welcome-more-info{
		line-height:0px;
	}
	nav{
		opacity:1;
	}
	.sticked{
		opacity:1;
	}
	.wrap-sticky nav.navbar.bootsnav.sticked{
	height:65px;	
	}
	.wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand, .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:hover, .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:focus{
		padding-top:20px;
		color:#131312;
		font-size:17px;
	}
	.mobile_toogle{display:inline-block !important;}
	.wrap-sticky nav.navbar.bootsnav.sticked ul.nav > li > a {padding:20px;}
	.menu-ui-design{
		height:100% !important;
	}
	.menu-ui-design{
		height:100% !important;
		text-align: center;
	}
	.desktoponly{
		display: none;
	}
	.box > img{
		height:300px;
	}
	.portocontainer{
		height : 50vh;
	}
	#Portofolio{
		padding:0px !important;
	}
	.populer-products{
		padding-top:45px !important;
	}
	.caption_populer_product p{
		font-size:12px !important;
	}
	.sofa-collection::before, .sofa-collection::after{
		width:100% !important;
	}
	.navbar-header a.navbar-brand, .navbar-header a.navbar-brand:hover, .navbar-header a.navbar-brand:focus {
  display: inline-block;
  color: #131312;
  font-size: 17px;
  font-weight: 500;
  padding: 25px 0px;
  text-transform: capitalize;
}

.single-new-arrival-bg img{
		height: 200px !important;
	}
 }


@media (max-width: 992px) { 
	.desktoponly{
		display: block ;
	}
 }


@media (max-width: 1200px) { 
	.desktoponly{
		display: block ;
	}
}


@media (max-width: 1400px) { 
	.desktoponly{
		display: block ;
	}
 }
		</style>
    </head>
	
	<body>
	
		<header id="home" class="welcome-hero" style = "background:url({{asset('assets/images/slider/background_slider.jpg')}});background-size:cover;background-repeat:no-repeat;">

			
			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				    
				                </div>
				            </div>
				        </div>
				   

				        <div class="container">            
				       
				           

				           @include('support/menu')
				        </div>
				    </nav>
				
				</div>
			    <div class="clearfix"></div>

			</div>

		</header>
		
		

		{{-- <section id="Ringkasan Proyek" class="new-arrivals" style = "padding: 35px 0 10px;">
			<div class="container">
				<div class="section-header">
					<h2>Summary Proyek</h2>
				</div>
				<div class="container " style = "margin-top:30px;">
					<div class="populer-products-content">
						<div class="row">
							<div class="col-md-4">
								<div class="single-populer-products">
									
									<h2><a href="#">Client</a></h2>
									<h1 ><a href="#" style = "font-size:40px !important;"><span id = "jumlah_client">0</span></a></h1><br>
									<div class="single-populer-products-para">
										<p>Jumlah klien kami sampai detik ini yang kami layani untuk pembuatan custom furniture.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-populer-products">
									<h2><a href="#">Proyek</a></h2>
									<h1 ><a href="#" style = "font-size:40px !important;"><span id = "jumlah_proyek">153++</span></a></h1><br>
									<div class="single-populer-products-para">
										<p>Beberapa Proyek yang sudah kami terima dan kami kerjakan, baik secara B2B, maupun B2C</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-populer-products">
									<h2><a href="#">Lokasi</a></h2>
									<h1 ><a href="#" style = "font-size:40px !important;"><span id = "jumlah_lokasi">10++</span></a></h1><br>
									<div class="single-populer-products-para">
										<p>Beberapa proyek kami sudah tersebar di beberapa lokasi. Proyek kami tersebar
											di kota jepara, surabaya, jakarta dan lain lain.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section> --}}

	



		<section id="new-arrivals" class="new-arrivals" style = "margin-top:20px;">
			<div class="container">
				<div class="section-header">
					<h2>Portofolio Terbaik Kami</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
						@foreach($portofolio as $por)
						<div class = "col col-sm-4 col-md-4 col-xs-6 mt-5">
							<div class="single-new-arrival">
								<a href = "https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20portofolio%20dengan%20id%20{{$por->id}}%20dan%20portofolio%22nya%20ya">
									<div class="single-new-arrival-bg">
									<img src="{{asset('assets/images/portofolio_from_db/'.$por->img)}}" style = "height:300px;" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
								<a href = "https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20portofolio%20dengan%20id%20{{$por->id}}%20dan%20portofolio%22nya%20ya">Contact Whatsapp</a>
											</p>
									</div>
								</div>
								</a>
								{{-- <h4><a href="#">{{$pro->name}}</a></h4>
								<p class="arrival-product-price">{{$pro->price}}</p> --}}
							</div>
						</div>
						@endforeach
	
					</div>
				</div>
			</div><!--/.container-->
		
		</section>



		
	
	

		{{-- <section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>latest blog</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/b1.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/b2.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/b3.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section>

		<section id="clients"  class="clients">
			<div class="container">
				<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c1.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c2.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c3.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c4.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c5.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->

			</div><!--/.container-->

		</section> --}}

		<section id="newsletter" style = "padding-bottom:3px !important;"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-5 col-sm-6  col-xs-12">
							<div class="hm-footer-widget" style = "text-align:center;">
								<div class="hm-foot-title" sty;e = "text-align:center;width:100%;">
									{{-- <h4>newsletter</h4> --}}
									<img src = "{{asset('assets/logo/logo_pg_wooden.png')}}" style = "margin:auto;"/>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										<div class="footer-social" style = "text-align:center;">
											<a href="#"><i class="fa fa-facebook"></i></a>	
											<a href="#"><i class="fa fa-instagram"></i></a>
											<a href="#"><i class="fa fa-linkedin"></i></a>
											<a href="#"><i class="fa fa-pinterest"></i></a>
											<a href="#"><i class="fa fa-behance"></i></a>	
										</div>
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-email">
									<div class="foot-email-box">
										{{-- <input type="text" class="form-control" placeholder="Enter Email Here...."> --}}
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										{{-- <span><i class="fa fa-location-arrow"></i></span> --}}
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div>
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Menu</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#home">Home</a></li><!--/li-->
										<li><a href="#new-arrivals">Product</a></li><!--/li-->
										<li><a href="#About Us">About Us</a></li><!--/li-->
										
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Section</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#home">Landing Page</a></li>
										<li><a href="#About Us">About Us</a></li>
										<li><a href="#Ringkasan Proyek">Summary Proyek</a></li>
										<li><a href="#Portofolio">Portofolio</a></li>
										<li><a href="#populer-products">Produk Unggulan</a></li>
										<li><a href="#new-arrivals">Produk Baru</a></li>
										<li><a href="#testimony">Testimony</a></li>
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
							
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
								
								</div>
							</div>
						</div>
					
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section>

		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					{{-- <div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div> --}}
					<p>
						&copy;copyright. designed and developed by <a href="https://www.themesine.com/">PGD Wooden House</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer>
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="{{asset('assets/js/jquery.js')}}"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		
		<!-- bootsnav js -->
		<script src="{{asset('assets/js/bootsnav.js')}}"></script>

		<!--owl.carousel.js-->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="{{asset('assets/js/custom.js')}}"></script>
        
    </body>
	<script>
		$(document).ready(function () {
			$("#title_pg_wooden").css("opacity","1");
			$("#button_pg_wooden").css("opacity","1");
			var status_animasi_summary = "on";
			var jumlah_client = 0;
			var jumlah_proyek = 0;
			var jumlah_lokasi = 0;
			$(window).scroll(function(){
				var aTop = $('#Ringkasan Proyek').height();
				if($(this).scrollTop()>=aTop){
					
					
					// alert('header just passed.');
					// instead of alert you can use to show your ad
					// something like $('#footAd').slideup();
					if(status_animasi_summary == "on"){
						setInterval(() => {
							if(jumlah_client<1000){
								jumlah_client+=5;
								$("#jumlah_client").text(jumlah_client+ "++");
							}
							if(jumlah_proyek<=250){
								$("#jumlah_proyek").text(jumlah_proyek + "++");
								jumlah_proyek+=1;
							}
							if(jumlah_lokasi<100){
								jumlah_lokasi+=1;
								$("#jumlah_lokasi").text(jumlah_lokasi + "++");
							}
						

						}, 1);
						status_animasi_summary = "off";
					}
				}
			});
// 			jumlah_client
// jumlah_proyek
// jumlah_lokasi
		});
	</script>
	
</html>