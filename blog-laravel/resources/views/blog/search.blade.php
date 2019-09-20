@extends('layouts.app')

@section('content')
<div class="category-slider display-table center-text">
		<h1 class="category-title display-table-cell"><b>{{ $keyword }}の結果{{ $posts->count() }}件</b></h1>
	</div><!-- slider -->

	<section class="blog-area section">

		<div class="container">

			<div class="row">
				@foreach ($posts as $post)
						<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="{{ $post->category->image }}" alt="Blog Image"></div>

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

			<a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

		</div><!-- container -->
	</section><!-- section -->

  
@endsection
