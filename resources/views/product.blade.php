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

	.single-new-arrival-bg .gbr{
		height: 300px !important;
	}
	.populer-products-content img{
		height: 300px !important;
	}
	.single-new-arrival-bg img{
		height: 300px !important;
		animation: fadeIn 1s;
		/* transition: all 1.5s; */
	}
	@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

	#home{
		height:0px !important;
	
	}
@media (max-width: 576px) { 
	#home{
		height:0px;
	
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
	.single-new-arrival-bg .gbr{
		height: 200px !important;
	}
	.single-new-arrival-bg img{
		height: 200px !important;
	}
	.populer-products-content img{
		height: 200px !important;
	}
	.navbar-header a.navbar-brand, .navbar-header a.navbar-brand:hover, .navbar-header a.navbar-brand:focus {
  display: inline-block;
  color: #131312;
  font-size: 17px;
  font-weight: 500;
  padding: 25px 0px;
  text-transform: capitalize;
}
}


@media (max-width: 768px) { 
	#home{
		height:0px;
	
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
	.single-new-arrival-bg .gbr{
		height: 200px !important;
	}
	.single-new-arrival-bg img{
		height: 200px !important;
	}
	.populer-products-content img{
		height: 200px !important;
	}
	.navbar-header a.navbar-brand, .navbar-header a.navbar-brand:hover, .navbar-header a.navbar-brand:focus {
  display: inline-block;
  color: #131312;
  font-size: 17px;
  font-weight: 500;
  padding: 25px 0px;
  text-transform: capitalize;
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

 .single-new-arrival-bg:hover img{
	transform: scale(1);
 }
 .owl-nav{
	display: none;
 }
 .owl-dots{
	display: none;
 }
 .animated_underline {

  display: inline-block;
  transition:all 2.5s;
 
}

.animated_underline:hover {

	font-weight:bold;
	font-size:16px;
}

.animated_underline::after {
	font-weight:bold;

  content: '';
  width: 0px;
  height: 2px;
  display: block;
  background: black;
  transition: 800ms;
}

.animated_underline:hover::after {

  width: 100%;
}
		</style>
    </head>
	
	<body>
	
		<header id="home" class="welcome-hero" style = "z-index:30000;" style = "background:url({{asset('assets/images/slider/background_slider.jpg')}});background-size:cover;background-repeat:no-repeat;">

			
			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area" style = "z-index:30000;">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" style = "z-index:30000;"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

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
		
		

	

	

		{{-- <section id="populer-products" class="populer-products"  style="margin-top:30px;">
			
			<div class="container">
				<div class="section-header">
					<h2>Produk Spesial Buat Kamu</h2>
				</div>
				<div class="populer-products-content" style = "margin-top:50px;text-align:center;" >
					@foreach($bestseller as $bs)
						<div class = "col col-sm-4 col-md-4 col-xs-6 mt-5">
							<div class="" style = "margin-top: 30px;">
								<img src="{{asset('assets/images/product_from_db/'.$bs->img.'')}}" style = "height:300px;"  alt="populer-products images">
							</div>
							<h2><a href="https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20produknya%20dengan%20id%20{{$bs->id}}%20dan%20portofolio%22nya%20ya" style = "margin-top: 20px;">{{$bs->name}}</a></h2>
							<div class="caption_populer_product" style = "margin-top: 20px;">
								<p>{{$bs->description}}.</p>
							</div>
						</div>
						@endforeach
				</div>
			</div>

		</section> --}}
		
		<section id="populer-productss" class="populer-products"  style="margin-top:50px;">
			
			<div class="container">
				<div class="section-header">
					<h2>Daftar Produk Kami</h2>
				</div>
				
				<div class = "row" style = "margin-top:35px;padding-left:15px;padding-right:15px;">
					<div class = "col-md-8" style = "box-shadow: #f3f3f3 0px 7px 29px 0px;border: 1px solid #f1f1f1; border-radius:15px;padding:15px;height:75px;">
						<div class="owl-carousel owl-theme carousel_category" style = "padding-top:10px;">
							<div class="item" style = "color:#131312;" onclick = "change_category(0)"><span class = "animated_underline ">Semua</span></div>

							@foreach($category as $key => $c)
							
							<div class="item" style = "color:#131312;" onclick = "change_category({{$c->category_id}})"><span class = "animated_underline @if($key == 0)  @endif">{{$c->name}}</span></div>
							@endforeach
							{{-- <div class="item">		<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$pro->img)}}" alt="new-arrivals images"></div>
							<div class="item">		<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$pro->img_second)}}" alt="new-arrivals images"></div>
							<div class="item">		<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$pro->img_third)}}" alt="new-arrivals images"></div> --}}
						</div>
					</div>
					<div class = "col-md-4" style = "box-shadow: #f3f3f3 0px 7px 29px 0px;border: 1px solid #f1f1f1; border-radius:15px;padding:15px;height:75px;"><div><input class = "form-control" id = "keyword_product" style = "border:0px;float:left;width:85%;" placeholder="Cari Disini ..."> <div id = "search_button" onclick = search_button() style = "height:30px;width:30px;border-radius:40px;background-color:#d8924c;float:left;margin-top:5px;margin-left:5px;color:white;"><i class="fa fa-search" aria-hidden="true" style = "margin-left:8px;margin-top:5px;"></i>
					</div> </div>
				</div>
				
				
			</div>

		</section>


		<section id="new-arrivals" class="new-arrivals" style = "padding-left:10px;padding-right:10px;padding-top:10px;margin-top: 20px !important;">
			<div class="container" style = "padding:0px;">
				<div class="section-header">
					{{-- <h2>Produk Kami</h2> --}}
				</div><!--/.section-header-->
				<div class="new-arrivals-content" style = "margin-top: 20px !important;">
					<div class="row" id = "replace_product">
						@include('product_card')
					</div>
				</div>
			</div><!--/.container-->
		
		</section>


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

var data_pilihan_category = 0;
var keywords= "";
$(document).on('click', '.mylinks a', function(event){
 
 event.preventDefault(); 
 var page = $(this).attr('href').split('page=')[1];

 fetch_data(page);
});

function fetch_data(page)
{
 $.ajax({
  url:"/pagination/fetch_data_index?page="+page,
  data:{"category" : data_pilihan_category, "keyword" : keywords},
  success:function(data)
  {
   $('#replace_product').html(data);

   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
  }
 });
 
}
function search_button(){
	 keywords = $("#keyword_product").val();
	 fetch_data(1);
}
function change_category(id_category){
	$("#keyword_product").val("");
	data_pilihan_category = id_category;
	keywords = "";
	fetch_data(1);
}
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

$('.product').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.carousel_category').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});



		});
	</script>
	
</html>