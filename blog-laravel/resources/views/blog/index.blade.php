@extends('layouts.app')

@section('content')
  <div class="main-slider" >
			<div class="swiper-container position-static" >
				<div class="swiper-wrapper">
				@foreach ($categories as $category)
						<div class="swiper-slide">
							<a class="slider-category" href="{{ action('BlogController@category',$category->id) }}">
								<div class="blog-image"><img src="{{ $category->image }}" alt="Blog Image"></div>

								<div class="category">
									<div class="display-table center-text">
										<div class="display-table-cell">
											<h3><b>{{ $category->category_name }}</b></h3>
										</div>
									</div>
								</div>

							</a>
					  </div><!-- swiper-slide -->
				@endforeach
			
			
				</div><!-- swiper-wrapper -->

			</div><!-- swiper-container -->

	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">
				@foreach ($posts as $post)
						<div class="col-lg-4 col-md-6">
						<div class="card h-100">
							<div class="single-post post-style-1">

								<div class="blog-image"><img src="{{ $post->category->image }}" alt="{{ $post->category->category_name }}"></div>

								<a class="avatar" href="{{ action('BlogController@show',$post) }}"><img src="{{ $post->user->image }}" alt="Profile Image"></a>

								<div class="blog-info">

									<h4 class="title"><a href="{{ action('BlogController@show',$post) }}"><b>{{ $post->title }}</b></a></h4>

										{{-- <ul class="post-footer">
											<li><a href="#"><i class="ion-heart"></i>57</a></li>
											<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
											<li><a href="#"><i class="ion-eye"></i>138</a></li>
										</ul> --}}

								</div><!-- blog-info -->
							</div><!-- single-post -->
						</div><!-- card -->
					</div><!-- col-lg-4 col-md-6 -->
				@endforeach
			</div><!-- row -->

			　　　　{{ $posts->links() }}


		</div><!-- container -->
	</section><!-- section -->
	
</div>
@endsection
