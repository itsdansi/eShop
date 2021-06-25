@extends('index')

@section('menu')
	@include('includes/menu')
@endsection

@section('content')
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>UP TO 50% OFF </span>{{$product->prod_name}}</h1>
										<p>{{$product->prod_desc}}</p>
										<p>Rs. {{$product->price}}</p>
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
											<a href="/product">Go to home</a>
										</div>
                                        <div class="button">
                                       
										</div>
                                       
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
    
@endsection