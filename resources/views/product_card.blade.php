@foreach($products as $pro)
						<div class = "col col-sm-4 col-md-4 col-xs-6 mt-5">
							<div class="single-new-arrival">
									
								<div class="single-new-arrival-bg">
									<div class="owl-carousel owl-theme product">
										<div class="item">		<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$pro->img)}}" alt="new-arrivals images"></div>
										<div class="item">		<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$pro->img_second)}}" alt="new-arrivals images"></div>
										<div class="item">		<img class = "gbr" src="{{asset('assets/images/product_from_db/'.$pro->img_third)}}" alt="new-arrivals images"></div>
									</div>
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1" style = "z-index:2;">
										<p>sale</p>
									</div>
									<div class="new-arrival-cart" style = "z-index: 3;">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20produknya%20dengan%20id%20{{$pro->id}}%20dan%20portofolio%22nya%20ya">Contact Whatsapp </a>
										</p>

									</div>
								</div>
								<h4><a href="https://wa.me/+6281328835401?text=Halo%20PGD%20Wooden%20House%20Furniture%2C%20Saya%20dapat%20ini%20dari%20website.%20Saya%20ingin%20tanya%20tanya%20tentang%20produknya%20dengan%20id%20{{$pro->id}}%20dan%20portofolio%22nya%20ya">{{$pro->name}}</a></h4>
								<p class="arrival-product-price">{{$pro->price}}</p>
						
							</div>
						</div>
@endforeach
<div style = "clear:both;"></div>
<div class = "row  justify-content-center" style = "overflow-x: auto;">
    <div class = "mylinks" style = "margin:auto;" >
		{!! $products->links("pagination::bootstrap-4") !!}
      </div>
</div>
   