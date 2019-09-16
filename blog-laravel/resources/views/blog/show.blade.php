@extends('layouts.app')

@section('content')
<div class="slider">

	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

						<div class="post-top-area">

							<h5 class="pre-title">FASHION</h5>

							<h3 class="title"><a href="#"><b>{{ $post->title }}</b></a></h3>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="{{ $post->user->image }}" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>{{ $post->user->name }}</b></a>
									<h6 class="date"></h6>
								</div>

							</div><!-- post-info -->

							<p class="para">{{ $post->content }}</p>

						</div><!-- post-top-area -->


						{{-- <div class="post-bottom-area">
							<ul class="tags">
								<li><a href="#">Mnual</a></li>
								<li><a href="#">Liberty</a></li>
								<li><a href="#">Recommendation</a></li>
								<li><a href="#">Inspiration</a></li>
							</ul>
							<div class="post-icons-area">
								<ul class="post-icons">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>
								<ul class="icons">
									<li>SHARE : </li>
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
								</ul>
							</div>
							<div class="post-footer post-info">
								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>
								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>
							</div><!-- post-info -->
						</div><!-- post-bottom-area --> --}}

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->


	<section class="comment-section center-text">
		<div class="container">
      <h4><b>POST COMMENT</b></h4>
      <div class="row">
          <div class="col-lg-1 col-md-0"></div>
          <div class="col-lg-10 col-md-12">
              <div class="comment-form">
                  @guest
                      <p>ログインしてください <a href="{{ route('login') }}">Login</a></p>
                  @else
                      <form method="post" action="{{ action('BlogController@commentStore',$post ) }}">
                          @csrf
                          <div class="row">
                              <div class="col-sm-12">
                                  <textarea name="comment" rows="2" class="text-area-messge form-control"
                                            placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
                              </div><!-- col-sm-12 -->
                              <div class="col-sm-12">
                                  <button class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b></button>
                              </div><!-- col-sm-12 -->

                          </div><!-- row -->
                      </form>
                  @endguest
              </div><!-- comment-form -->
　　　　　　
              <h4><b>COMMENTS({{ $post->comments()->count() }})</b></h4>
              @if($post->comments->count()> 0)
                  @foreach($post->comments as $comment)
                        <div class="commnets-area ">

                            <div class="comment">

                                <div class="post-info">

                                    <div class="left-area">
                                        <a class="avatar" href="#"><img src="{{ $comment->user->image }}" alt="Profile Image"></a>
                                    </div>

                                    <div class="middle-area">
                                        <a class="name" href="#"><b>{{ $comment->user->name }}</b></a>
                                        <h6 class="date">on {{ $comment->created_at->diffForHumans()}} </h6>
                                    </div>

                                </div><!-- post-info -->

                                <p>{{ $comment->comment }}</p>

                            </div>

                        </div><!-- commnets-area -->
                  @endforeach
              @else

                <div class="commnets-area ">

                    <div class="comment">
                        <p>コメントはありません</p>
                    </div>
                </div>

              @endif

          </div><!-- col-lg-8 col-md-12 -->

      </div><!-- row -->

		</div><!-- container -->
	</section>
@endsection
