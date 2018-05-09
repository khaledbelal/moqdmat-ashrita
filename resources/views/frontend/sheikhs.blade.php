@extends('layouts.remix')

@section('title')
    قائمة الشيوخ 
@endsection

@section('content')
<div class="under_header">
	<img src="images/assets/breadcrumbs10.png" alt="#">
</div><!-- under header -->

<div class="page-content back_to_up">
	<div class="row clearfix mb">
		<div class="Alphabet">
			<ul>
				<li><a href="{{route('all-sheikhs')}}"> مشاهدة الكل </a></li>
				<li><a href="{{route('sheikh-filter',['ا'])}}"> ا </a></li>
				<li><a href="{{route('sheikh-filter',['ب'])}}"> ب </a></li>
				<li><a href="{{route('sheikh-filter',['ت'])}}"> ت </a></li>
				<li><a href="{{route('sheikh-filter',['ث'])}}"> ث </a></li>
				<li><a href="{{route('sheikh-filter',['ج'])}}"> ج </a></li>
				<li><a href="{{route('sheikh-filter',['ح'])}}"> ح </a></li>
				<li><a href="{{route('sheikh-filter',['خ'])}}"> خ </a></li>
				<li><a href="{{route('sheikh-filter',['د'])}}"> د </a></li>
				<li><a href="{{route('sheikh-filter',['ذ'])}}"> ذ </a></li>
				<li><a href="{{route('sheikh-filter',['ر'])}}"> ر </a></li>
				<li><a href="{{route('sheikh-filter',['ز'])}}"> ز </a></li>
				<li><a href="{{route('sheikh-filter',['س'])}}"> س </a></li>
				<li><a href="{{route('sheikh-filter',['ش'])}}"> ش </a></li>
				<li><a href="{{route('sheikh-filter',['ص'])}}"> ص </a></li>
				<li><a href="{{route('sheikh-filter',['ض'])}}"> ض </a></li>
				<li><a href="{{route('sheikh-filter',['ط'])}}"> ط </a></li>
				<li><a href="{{route('sheikh-filter',['ظ'])}}"> ظ </a></li>
				<li><a href="{{route('sheikh-filter',['ع'])}}"> ع </a></li>
				<li><a href="{{route('sheikh-filter',['غ'])}}"> غ </a></li>
				<li><a href="{{route('sheikh-filter',['ف'])}}"> ف </a></li>
				<li><a href="{{route('sheikh-filter',['ق'])}}"> ق </a></li>
				<li><a href="{{route('sheikh-filter',['ك'])}}"> ك </a></li>
				<li><a href="{{route('sheikh-filter',['ل'])}}"> ل </a></li>
				<li><a href="{{route('sheikh-filter',['م'])}}"> م </a></li>
				<li><a href="{{route('sheikh-filter',['ن'])}}"> ن </a></li>
				<li><a href="{{route('sheikh-filter',['ه'])}}"> ه </a></li>
				<li><a href="{{route('sheikh-filter',['و'])}}"> و </a></li>
				<li><a href="{{route('sheikh-filter',['ي'])}}"> ي </a></li> 
				<li><a href="{{route('sheikh-filter',['0-9'])}}"> 0-9 </a></li> 
			</ul>
		</div><!-- breadcrumb -->
	</div><!-- row -->

	<div class="row row-fluid clearfix mbf">

		<div class="span4 sidebar">
			<!-- <div class="def-block widget">
				<h4> Ads </h4><span class="liner"></span>
				<div class="widget-content tac">
					<a href="#" title="Advertise"><img src="images/ads1.gif" alt="#"></a>
				</div> 
			</div>  -->

			<div class="def-block widget">
				<h4> Featured Videos </h4><span class="liner"></span>
				<div class="widget-content row-fluid">
					<div class="videos clearfix flexslider">
						<ul class="slides">
							<li class="featured-video">
								<a href="video_single_wide.html">
									<img src="images/assets/video1.jpg" alt="#">
									<i class="icon-play-sign"></i>
									<h3>I Know You Want Me</h3>
									<span>Fitbull</span>
								</a>
							</li><!-- slide -->
							<li class="featured-video">
								<a href="video_single_wide.html">
									<img src="images/assets/video2.jpg" alt="#">
									<i class="icon-play-sign"></i>
									<h3>I Like It</h3>
									<span>Enrique</span>
								</a>
							</li><!-- slide -->
							<li class="featured-video">
								<a href="video_single_wide.html">
									<img src="images/assets/video3.jpg" alt="#">
									<i class="icon-play-sign"></i>
									<h3>Tommorow</h3>
									<span>Dj Michele</span>
								</a>
							</li><!-- slide -->
						</ul>
					</div>
				</div><!-- widget content -->
			</div><!-- def block widget videos -->

		</div><!-- span4 sidebar -->
		<div class="span8 posts">
			<div class="def-block">
				<ul class="tabs"> 
					<li><a href="#"  class="active"> قائمة الشيوخ</a></li> 
				</ul><!-- tabs -->

				<ul class="tabs-content">  
					<li id="Albums"  class="active">
						<div class="mp3-albums">
							@foreach($sheikhs as $sheikh)
							<a href="{{ route('sheikh-moqdmat',[$sheikh->id]) }}" class="grid_3">
								<img src="{{ URL('/templates/remix/images/assets/videos1.jpg')}}" alt="#">
								<span><strong>{{ $sheikh->name }}</strong>{{ $sheikh->moqdamt_count }} مقدمة (ات)</span>
							</a>
							@endforeach  
						</div><!-- mp3 albums -->
					</li><!-- tab content -->

					<li id="Soon">
						<p>Nulla id ligula arcu. Integer et tincidunt lectus. Duis id ligula diam, quis dapibus erat. Curabitur nec libero et est vulputate sollicitudin. Fusce sit amet turpis sed mauris volutpat posuere.</p>
						<div class="news row-fluid">
							<div class="span5"><img class="four-radius" src="images/assets/news1.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> Michele Jordan Release New Album in September 2014 </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor. mauris volutpat posuere. Morbi vulputate, odio eget adipiscing faucibus, lorem ipsum facilisis justo, gravida tempus orci nisi ac eros. Pellentesque metus dolor.</p>
							</div><!-- span7 -->
						</div><!-- news -->
						<div class="news row-fluid">
							<div class="span5"><img class="four-radius" src="images/assets/news3.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> New Track Named Without You (Remix) </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor. mauris volutpat posuere. Morbi vulputate, odio eget adipiscing faucibus, lorem ipsum facilisis justo, gravida tempus orci nisi ac eros. Pellentesque metus dolor.</p>
							</div><!-- span7 -->
						</div><!-- news -->
					</li><!-- tab content -->

				</ul><!-- end tabs -->

			</div><!-- def block -->
		</div><!-- span8 posts -->

	</div><!-- row clearfix -->
</div><!-- end page content -->
@endsection 