	<div id="mouse_move_reference"></div>

	<nav class="navbar navbar-default" id="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="center">
					<a class="navbar-brand cta"><img src="assets/img/husky.png" width="120" height="120"></a>
				</div>
			</div>
			

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a class="home ajax btn_nav" href="{{ route('home-'.$lang) }}">
							@lang('navigation.home')
						</a>
					</li>
					<li>
						<a class="about ajax btn_nav" href="{{ route('about-'.$lang) }}">
							@lang('navigation.about')
						</a>
					</li>
					<li>
						<a class="works ajax btn_nav" href="{{ route('works-'.$lang) }}">
							@lang('navigation.works')
						</a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right lang hidden">
					<!--@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif-->

					@if($lang == 'en')
						<li><a class="btn_nav" href="{{ route('home-fr') }}">FR</a></li>
					@else
						<li><a class="btn_nav" href="{{ route('home-en') }}">EN</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>