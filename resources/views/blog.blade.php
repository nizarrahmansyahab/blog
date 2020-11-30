@extends('template_blog.content')
	
@section('isi')
			<!-- row -->
			<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{ asset('public/frontend/img/2.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Pendidikan</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html"> Judul Artikel 1</a></h3>
							<ul class="post-meta">
								<li><a href="#">NIZARRHMNSYB</a></li>
								<li>2 DAYS AGO</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{ asset('public/frontend/img/1.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Cuaca</a>
							</div>
							<h3 class="post-title"><a href="#"> Judul Artikel 2</a></h3>
							<ul class="post-meta">
								<li><a href="#">NIZARRHMNSYB</a></li>
								<li>2 DAYS AGO</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{ asset('public/frontend/img/3.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Pendidikan</a>
							</div>
							<h3 class="post-title"><a href="#">Judul Artikel 3</a></h3>
							<ul class="post-meta">
								<li><a href="#">NIZARRHMNSYB</a></li>
								<li>2 DAYS AGO</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
	
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar}}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->category->name}}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul}}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name}}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans () }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<!-- /post -->

						<!-- post -->
					
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					
					<!-- /row -->

					<!-- row -->
					
					<!-- /row -->

					<!-- row -->
					
					<!-- /row -->
				</div>
				
		
			<!-- /row -->
	@endsection

	

