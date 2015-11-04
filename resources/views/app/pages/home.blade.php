@extends('app.layouts.switcher')

@section('desc'){{ strip_tags( ucfirst(Lang::get('meta.home_desc')) ) }}@stop

@section('title'){{ strip_tags( ucfirst(Lang::get('meta.home_title')) ) }}@stop

@section('content')

				<input class="page_title" type="hidden" value="{{ strip_tags( ucfirst(Lang::get('meta.home_title')) ) }}">
				<input class="page_id" type="hidden" value="{{ $page_id }}">
				<input class="page_menu_id" type="hidden" value="{{ $page_id }}">
				<input class="page_lang_url_id" type="hidden" value="{{ route($page_id.'-'.$langreverse) }}">

				<div class="container_page {{ $page_id }}">
					<div class="bg_page">
						<div class="trame"></div>
						<div id="carousel" class="carousel slide">
							<div class="carousel-inner">
								<div class="active item"></div>
								<div class="item"></div>
								<div class="item"></div>
							</div>
						</div>
					</div>
					<div class="content_scroll">
						<div class="content">
							
							<div class="container">
								<div class="row">
									<div class="large-12 columns">
										<div class="quote cta">{{ Inspiring::quote() }}</div>
									</div>
								</div>
							</div>

							<!--<div id="cbp-qtrotator" class="cbp-qtrotator">
								<div class="cbp-qtcontent">
									<img src="images/1.jpg" alt="img01" />
									<blockquote>
									  <p>People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.</p>
									  <footer>Pino Caruso</footer>
									</blockquote>
								</div>
								<div class="cbp-qtcontent">
									<img src="images/2.jpg" alt="img02" />
									<blockquote>
									  <p>Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet.</p>
									  <footer>Albert Einstein</footer>
									</blockquote>
								</div>
								<div class="cbp-qtcontent">
									<img src="images/3.jpg" alt="img03" />
									<blockquote>
									  <p>If you don't want to be beaten, imprisoned, mutilated, killed or tortured then you shouldn't condone such behaviour towards anyone, be they human or not.</p>
									  <footer>Moby</footer>
									</blockquote>
								</div>
								<div class="cbp-qtcontent">
									<img src="images/4.jpg" alt="img04" />
									<blockquote>
									  <p>My body will not be a tomb for other creatures.</p>
									  <footer>Leonardo Da Vinci</footer>
									</blockquote>
								</div>
							</div>-->

						</div>
					</div>
				</div>
				
@endsection
