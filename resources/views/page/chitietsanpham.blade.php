@extends('master')
@section('content')
<div class="banner1">
			<div class="container">
				<h3><a href="{{route('trang-chu')}}">Trang Chủ</a> / <span>Thông Tin Chi Tiết Sản Phẩm</span></h3>
			</div>
</div>
	<!--banner-->

	<!--content-->
<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-9 single-grid">
							<div clas="single-top">
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="sourch/image/product/{{$sanpham->image}}">
												<div class="thumb-image"> <img src="sourch/image/product/{{$sanpham->image}}" data-imagezoom="true" class="img-responsive"> </div>
											</li>
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<h4>Sản Phẩm {{$sanpham->name}}</h4>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<p >
										@if($sanpham->promotion == 0)
																
											<em class="item_price">{{$sanpham->unit_price}}</em>
										@else
											<del>{{$sanpham->unit_price}}</del>
											<em class="item_price">{{$sanpham->promotion_price}}</em>
										@endif

									</p>
									<div class="description">
										<p><span>Mô Tả: </span>{{$sanpham->description}}</p>
									</div>
									<div class="color-quality">
										<h6>Quality :</h6>
											<div class="quantity"> 
												<div class="quantity-select">                           
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>1</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>
											</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
									</div>
									<div class="women">
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 single-grid1">
							<h3>Sản Phẩm Tương Tự</h3>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="sourch/images/r.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 29.00</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="sourch/images/r1.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 19.00</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="sourch/images/r2.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 19.00</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="sourch/images/r3.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div> 
									<span class=" price-in1">$ 45.00</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--Product Description-->
					
					<!--Product Description-->
				</div>
			</div>
			<!--single-->
			<!--new-arrivals-->
</div>

<!-- <div class="new-arrivals-w3agile">
	<div class="container">
		<h3 class="tittle1">Sản Phẩm Tương Tự</h3>
		
		<div class="arrivals-grids">
		@foreach($sp_tuongtu as $sp)
			<div class="col-md-3 arrival-grid simpleCart_shelfItem">
				<div class="grid-arr">
					<div  class="grid-arrival">
						<figure>		
							<a href="{{route('loai_san_pham','$sp->id')}}">
								<div class="grid-img">
									<img  src="sourch/image/product/{{$sp->image}}" class="img-responsive" alt="">
								</div>
								<div class="grid-img">
									<img  src="sourch/image/product/{{$sp->image}}" class="img-responsive"  alt="">
								</div>			
							</a>		
						</figure>	
					</div>
					<div class="ribben">
						<p>NEW</p>
					</div>
					<div class="ribben1">
						<p>SALE</p>
					</div>
					<div class="block">
						<div class="starbox small ghosting"> </div>
					</div>
					<div class="women">
						<h6><a href="single.html">{{$sp->name}}</a></h6>
						<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
						<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
					</div>
				</div>
			</div>
		@endforeach
			<div class="clearfix"></div>
		</div>
		
	</div>
</div> -->

								

@endsection