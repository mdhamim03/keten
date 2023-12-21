@extends('layouts.frontendLayout')
@section('contant')
    
	<!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('frontend')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('PostCate.all',$posts->category->slug)}}">{{$posts->category->title}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$posts->title}}</li>
                </ol>
            </nav>

			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">{{$posts->title}}</h1>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="blog-single.html#"><img style="width: 50px;height:50px;border-radius:50%" src="{{$posts->user->profile_img_url ? $posts->user->profile_img_url : env('AVATER_API').$posts->user->name}}" class="author" alt="author"/>{{$posts->user->name}}</a></li>
								<li class="list-inline-item"><a href="="{{route('PostCate.all',$posts->category->slug)}}">{{$posts->category->title}}</a></li>
								<li class="list-inline-item">{{Carbon\Carbon::parse($posts->create_at)->format('d M Y')}}</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{$posts->featured_img_url}}" alt="post-title" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
							{{$posts->content}}
						</div>
						<!-- post bottom section -->
						<div class="post-bottom">
							<div class="row d-flex align-items-center">
								<div class="col-md-6 col-12 text-center text-md-start">
									<!-- tags -->
                                    @foreach ($extraPost as $extraPosts)
									<a href="{{route('PostCate.all',$extraPosts->category->slug)}}" class="tag">#{{$extraPosts->category->title}}</a>
                                        
                                    @endforeach
								</div>
								<div class="col-md-6 col-12">
									<!-- social icons -->
									@include('layouts.utility.frontendSocialIcon')
								</div>
							</div>
						</div>

                    </div>

					<div class="spacer" data-height="50"></div>

					<div class="about-author padding-30 rounded">
						<div class="thumb">
							<img src="images/other/avatar-about.png" alt="Katen Doe" />
						</div>
						<div class="details">
							<h4 class="name"><a href="blog-single.html#">Katen Doe</a></h4>
							<p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
							<!-- social icons -->
							<ul class="social-icons list-unstyled list-inline mb-0">
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Comments ({{$posts->totalCount}})</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- post comments -->
					<div class="comments bordered padding-30 rounded">

						<ul class="comments">
							@foreach ($posts->comments as $cmt)
								
							<!-- comment item -->
							<li class="comment rounded">
								<div class="thumb">
									<img style="width: 40px;height:40px;border-radius:50%;" src="{{$cmt->user->profile_img_url ? $cmt->user->profile_img_url : env('AVATER_API').$cmt->user->name}}" alt="John Doe" />
								</div>
								<div class="details">
									<h4 class="name"><a href="blog-single.html#">{{$cmt->user->name}}</a></h4>
									<span class="date">{{Carbon\Carbon::parse($cmt->created_at)->format('d M Y')}}</span>
									<p>{{$cmt->content}}</p>
									<a href="#comment-form" data-parent-id="{{$cmt->id}}" data-name="{{$cmt->user->name}}" class="replyBtns btn btn-default btn-sm">Reply</a>
								</div>
							</li>
							<!-- comment item -->
							@if (count($cmt->replyes)>0)
								@foreach ($cmt->replyes as $reply)
									<!-- reply comment item -->
									<li class="comment rounded child">
										<div class="thumb">
											<img style="width: 40px;height:40px;border-radius:50%;" src="{{$reply->user->profile_img_url ? $reply->user->profile_img_url : env('AVATER_API').$reply->user->name}}" alt="John Doe" />
										</div>
										<div class="details">
											<h4 class="name"><a href="blog-single.html#">{{$reply->user->name}}</a></h4>
											<span class="date">{{Carbon\Carbon::parse($reply->created_at)->format('d M Y')}}</span>
											<p>{{$reply->content}}</p>
											<a href="#comment-form" data-parent-id="{{$reply->id}}" data-name="{{$reply->user->name}}" class="replyBtns btn btn-default btn-sm">Reply</a>
										</div>
									</li>
									<!-- reply comment item -->
									@include('layouts.utility.Comment')
								@endforeach
							@endif
							@endforeach

						</ul>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title comment_title">Leave Comment</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- comment form -->
					<div class="comment-form rounded bordered padding-30">
						@auth
							<form action="{{route('comment.store')}}" id="comment-form" class="comment-form" method="post">
								@csrf
								<div class="messages"></div>
								
								<div class="row">

									<div class="column col-md-12">
										<!-- Comment textarea -->
										<input name="post_id" type="hidden" value="{{$posts->id}}">
										<input name="parent_id" type="hidden" value="">
										<div class="form-group">
											<textarea name="content" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
										</div>
								</div>
							
								</div>
		
								<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
		
							</form>
							@else
							<a href="{{route('login')}}">
								<p style="text-align: center; font-size:20px large;">Please Login to leave a comment</p>
							</a>
						@endauth
						
					</div>
                </div>

				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">
						<!-- widget about -->
						<div class="widget rounded">
							<div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
								<img src="images/logo.svg" alt="logo" class="mb-4" />
								<p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
								<ul class="social-icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-medium"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- widget popular posts -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Popular Posts</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
                                @foreach ($extraPost as $key=>$extraPoste)
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">{{++$key}}</span>
										<a href="{{route('blog.post.details',$extraPoste->slug)}}">
											<div class="inner">
												<img style="width: 50px;height:50px;border-radius:50%;" src="{{$extraPoste->featured_img_url}}" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="{{route('blog.post.details',$extraPoste->slug)}}">{{$extraPoste->title}}</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">{{Carbon\Carbon::parse($extraPoste->create_at)->format('d M Y')}}</li>
										</ul>
									</div>
								</div>
                                @endforeach
							</div>		
						</div>

						<!-- widget categories -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Explore Topics</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<ul class="list">
                                    @foreach ($exploreTopics as $exploreTopic)
									<li><a href="blog-single.html#">{{$exploreTopic->title}}</a><span>({{$exploreTopic->totalCount}})</span></li>
                                    @endforeach
								</ul>
							</div>
							
						</div>

						<!-- widget newsletter -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Newsletter</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
								<form>
									<div class="mb-2">
										<input class="form-control w-100 text-center" placeholder="Email address…" type="email">
									</div>
									<button class="btn btn-default btn-full" type="submit">Sign Up</button>
								</form>
								<span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="blog-single.html#">Privacy Policy</a></span>
							</div>		
						</div>

						<!-- widget post carousel -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Celebration</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<div class="post-carousel-widget">
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">Trending</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-2.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">Master The Art Of Nature With These 7 Tips</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- carousel arrows -->
								<div class="slick-arrows-bot">
									<button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
									<button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
								</div>
							</div>		
						</div>

						<!-- widget advertisement -->
						<div class="widget no-container rounded text-md-center">
							<span class="ads-title">- Sponsored Ad -</span>
							<a href="blog-single.html#" class="widget-ads">
								<img src="images/ads/ad-360.png" alt="Advertisement" />	
							</a>
						</div>

						<!-- widget tags -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Tag Clouds</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<a href="blog-single.html#" class="tag">#Trending</a>
								<a href="blog-single.html#" class="tag">#Video</a>
								<a href="blog-single.html#" class="tag">#Featured</a>
								<a href="blog-single.html#" class="tag">#Gallery</a>
								<a href="blog-single.html#" class="tag">#Celebrities</a>
							</div>		
						</div>

					</div>

				</div>

			</div>

		</div>
	</section>

	<!-- instagram feed -->
	<div class="instagram">
		<div class="container-xl">
			<!-- button -->
			<a href="blog-single.html#" class="btn btn-default btn-instagram">@Katen on Instagram</a>
			<!-- images -->
			<div class="instagram-feed d-flex flex-wrap">
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="blog-single.html#">
						<img src="images/insta/insta-1.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="blog-single.html#">
						<img src="images/insta/insta-2.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="blog-single.html#">
						<img src="images/insta/insta-3.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="blog-single.html#">
						<img src="images/insta/insta-4.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="blog-single.html#">
						<img src="images/insta/insta-5.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="blog-single.html#">
						<img src="images/insta/insta-6.jpg" alt="insta-title" />
					</a>
				</div>
			</div>
		</div>
	</div>
   @endsection
   @push('frontendJs')
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	   <script>
		function replyingComment(){
			let userName = $(this).attr('data-name')
			let parentId = $(this).attr('data-parent-id')
			 $('.comment_title').html(`Replying To ${userName}`)
			 $('input[name="parent_id"]').val(parentId)
		}
		$('.replyBtns').click(replyingComment)
	   </script>
   @endpush
