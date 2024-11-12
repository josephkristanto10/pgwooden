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
		opacity:0;
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
	.gbr{
		height:200px !important;
	}
	.single-new-arrival-bg{
		min-height: 200px !important;
	}
	.single-new-arrival-bg .gbr{
		height: 200px !important;
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
		opacity:0;
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
	.gbr{
		height:200px !important;
	}
	.single-new-arrival-bg{
		min-height: 200px !important;
	}
	.single-new-arrival-bg .gbr{
		height: 200px !important;
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
	
		<header id="home" class="welcome-hero" style = "background:url({{asset('assets/images/mainhome_from_db/'.$mainhome[0]->img_slogan ) }});background-size:cover;background-repeat:no-repeat;">

			<div id="header-carousel" style = "height:100%;" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
				</ol><!-- /ol-->
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					<!-- .item -->
					<div class="item active">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										{{-- <div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/slider/slider1.png" alt="slider image">
												</div>
											</div>
										</div> --}}
										<div class="col-md-12">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt" style = "text-align:center;">
													<h1 id= "title_pg_wooden" style = "font-size:30px;color:white; text-shadow: 1px 1px #131312;opacity:0;transition:3s;">Welcome to PGD Wooden House</h1>
													<a href = "#sofa-collection"><button id= "button_pg_wooden" type="button" class="btn-cart welcome-add-cart" style = "opacity:0;">Create Furniture &nbsp;<i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
													</button>
												</a>
													{{-- <h4>PGD Wooden House</h4>
													<h2>Furniture Terbaik !</h2>
													<p>
														Pilihlah furniture yang berkualitas tinggi dengan harga yang terjangkau. 
													</p>
													
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
												
														See  <span>Product</span>
													</button>
													 --}}
												</div>
											</div>
										</div>
										{{-- <div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/slider/slider1.png" alt="slider image">
												</div>
											</div>
										</div> --}}
									</div>
								</div>
							</div>
						</div>

					</div>

				
				</div>

			</div>

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    {{-- <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> --}}
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            {{-- <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->
				                	<li class="nav-setting">
				                		<a href="#"><span class="lnr lnr-cog"></span></a>
				                	</li><!--/.search-->
				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1">2</span>
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">arm <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">single <br> armchair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">wooden arn <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="total">
				                                <span>Total: $0.00</span>
				                                <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
				                            </li>
				                        </ul>
				                    </li>
				                </ul>
				            </div> --}}
				           

				           @include('support/menu')
				        </div>
				    </nav>
				
				</div>
			    <div class="clearfix"></div>

			</div>

		</header>
		
		<section id="About Us" class="new-arrivals">
			<div class="container" style = "width:100%;">
				<div class="section-header">
					{{-- <h2>About Us</h2> --}}
				</div><!--/.section-header-->
				{{-- <div class="new-arrivals-content">
				
				</div> --}}
				<div class="row">
					<div class="col-md-12">
						<div class="single-populer-products">
							<div class="single-inner-populer-products">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="single-inner-populer-product-img">
											<img src="{{asset('assets/images/mainhome_from_db/'.$mainhome[0]->img_about_us )}}" alt="populer-products images">
										</div>
									</div>
									<div class="col-md-5 col-sm-12">
										<div class="single-inner-populer-product-txt">
											<h2>
												<a href="#" class = "judul_about_us" >
													 <span class = "hightlight_judul_aboutus">PGD WOODEN HOUSE</span>
												</a>
											</h2>
											<p style = "text-align: justify !important;">
												PGD Wooden House merupakan sebuah perusahaan custom <b>furniture</b> yang berlokasi di kota jepara, kami memberikan kenyamanan dan ke-fleksibelitasan untuk pelanggan Dari pemilihan desain, ukuran, hingga review finishing, setiap elemen dapat disesuaikan dengan selera dan kebutuhan ruang. Hal ini menjadikan setiap produk tidak hanya sebagai furnitur, tetapi juga sebagai karya seni yang memiliki cerita dan makna tersendiri. Dengan demikian, produksi PG Wooden House furniture menjadi pilihan yang menarik bagi mereka yang ingin menciptakan ruang yang unik dan personal.</p>
											{{-- <div class="populer-products-price">
												<h4>Sales Start from <span>$99.00</span></h4>
											</div> --}}
											<a href = "#Portofolio"><button class="btn-cart welcome-add-cart" style = "border-radius:50px;margin-top:10px;color:#131312;" onclick="window.location.href='#'">
												Lihat Portofolio
											</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div><!--/.container-->
		
		</section>

		<section id="Ringkasan Proyek" class="new-arrivals" style = "padding: 35px 0 10px;">
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
		
		</section>

		

		<section id="Portofolio" class="new-arrivals" style = "padding: 25px 0 20px;">
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
									<img class = "gbr" src="{{asset('assets/images/portofolio_from_db/'.$por->img)}}" style = "height:300px;" alt="new-arrivals images">
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

		<section id="populer-products" class="populer-products" style = "padding-top:20px;" >
			
			<div class="container">
				<div class="section-header">
					<h2>Produk Unggulan Kami</h2>
				</div>
				<div class="populer-products-content" style = "margin-top:50px;text-align:center;" >
					<div class="row">
						@foreach($bestseller as $bs)
						<div class = "col col-sm-4 col-md-4 col-xs-6 mt-5">
							<div class="" style = "margin-top: 30px;">
								<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$bs->img.'')}}" style = "height:300px;"  alt="populer-products images">
							</div>
							<h2><a href="https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20produknya%20dengan%20id%20{{$bs->id}}%20dan%20portofolio%22nya%20ya" style = "margin-top: 20px;">{{$bs->name}}</a></h2>
							<div class="caption_populer_product" style = "margin-top: 20px;">
								<p>{{$bs->description}}.</p>
							</div>
						</div>
						@endforeach
					
					</div>
				</div>
			</div>

		</section>



		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Produk Terbaru </h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
						@foreach($product as $pro)
						<div class = "col col-sm-4 col-md-4 col-xs-6 mt-5">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$pro->img)}}" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">Contact Whatsapp </a>
										</p>

									</div>
								</div>
								<h4><a href="#">{{$pro->name}}</a></h4>
								<p class="arrival-product-price">{{$pro->price}}</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div><!--/.container-->
		
		</section>

		<section id="sofa-collection" style = "z-index:0;">
			<div class="owl-carousel owl-theme" id="collection-carousel">
				<div class="sofa-collection collectionbg1" style = "background:url({{asset('assets/images/mainhome_from_db/'.$mainhome[0]->img_tagline ) }});background-size:cover;background-repeat:no-repeat;">
					<div class="container">
						<div class="sofa-collection-txt" style = "text-align:justify; " >
							<h2>Pelayanan Terbaik !</h2>
							<p>
								Kami mulai dengan mendengarkan ide dan harapan Anda. Tim ahli kami akan membantu merealisasikan desain yang sesuai dengan visi Anda.	Dengan menggunakan bahan berkualitas tinggi dan teknologi terkini, kami memastikan setiap produk yang kami buat memiliki daya tahan dan estetika yang luar biasa.						
							</p>
						
							<a  href = "https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20produk%20dan%20proyek%22nya%20ya"><button class="btn-cart welcome-add-cart sofa-collection-btn w-100" id = "button_hubungi_wa"  >
								Hubungi Kami Via WA &nbsp;<img src = "{{asset('assets/logo/logo_wa.png')}}" style = "width:25px;height:25px;display:inline-block;"/>
							</button></a>
						</div>
					</div>	
				</div>
		
			</div>

		</section>
	
		<section id="testimony" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>Testimoni Klien PGD Wooden House</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<div class="row">
						@foreach($testi as $t)
						<div class = "col col-sm-4 col-md-3 col-xs-6 mt-5">
							<div class="single-feature">
								<img class = "gbr" src="{{asset('assets/images/testimony_from_db/'.$t->img.'')}}" alt="feature image" style = "height:200px;width:100%;" >
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="feature-review">({{$t->rating}} review)</span>
									</p>
									<h3><a href="#">designed sofa</a></h3>
								</div>
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
		<a href = "https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20furniture"><img src = "{{asset('assets/logo/logo_wa.png')}}" style = "width:55px;height:55px;z-index:1000;position:fixed;bottom:85px;right:25px;"/></a>

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
							if(jumlah_client<{{$mainhome[0]->summary_client}}){
								jumlah_client+=5;
								$("#jumlah_client").text(jumlah_client+ "++");
							}
							if(jumlah_proyek<={{$mainhome[0]->summary_project}}){
								$("#jumlah_proyek").text(jumlah_proyek + "++");
								jumlah_proyek+=1;
							}
							if(jumlah_lokasi<{{$mainhome[0]->summary_location}}){
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