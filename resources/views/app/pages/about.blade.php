@extends('app.layouts.switcher')

@section('desc'){{ strip_tags( ucfirst(Lang::get('meta.home_desc')) ) }}@stop

@section('title'){{ strip_tags( ucfirst(Lang::get('meta.about_title')) ) }}@stop

@section('content')

				<input class="page_title" type="hidden" value="{{ strip_tags( ucfirst(Lang::get('meta.about_title')) ) }}">
				<input class="page_id" type="hidden" value="{{ $page_id }}">
				<input class="page_menu_id" type="hidden" value="{{ $page_id }}">
				<input class="page_lang_url_id" type="hidden" value="{{ route($page_id.'-'.$langreverse) }}">

				<div class="container_page {{ $page_id }}">
					<div class="bg_page">
						<div class="trame"></div>
						<div id="carousel" class="carousel slide">
							<div class="carousel-inner">
								<div class="item"></div>
							</div>
						</div>
					</div>
					<div class="cover"></div>
					<div class="content_scroll">
						<div class="content">
							<div class="container" style="background:#fff;">
								<div class="details">
									<div class="close"><img src="{{ asset('assets/frontend/img/profil/ico_close.png') }}"></div>

									<div class="details_content">
										<div class="row small-collapse">
											<img class="img" src="{{ asset('assets/img/ibex.png') }}" width="90" height="90">
										</div>
										<div class="row small-collapse">
											<div class="top small-4 columns small-centered"></div>
										</div>
										<div class="row small-collapse">
											<div class="name columns small-12">Rémi Métral</div>
											<div class="title columns small-12">Creative Developer</div>
										</div>
										<div class="row small-collapse">
											<div class="bottom small-4 columns small-centered"></div>
										</div>

										<div class="container_text">
													
											<div class="title">Profil</div>
											<div class="text active justify">
												Issu d'une formation en conception et réalisation de produits multimédias, et fort d'une expérience de près de 5 ans en développement web, je maîtrise plusieurs langages de programmation avec une forte sensibilité au design interactif et à la création graphique. J'ai également une approche globale de la gestion de projet et une affinité dans les relations clients, qui me permettent d'apporter toute mon expertise à la réalisation de projets qualitatifs.
											</div>
								
											<div class="title">Expériences</div>
											<div class="text">
												<ul class="exp-grid">
													<li>
														<a href="http://www.kassius.fr" target="_blank">
															<img src="{{ asset('assets/img/ab/lg/kassius.png') }}" width="150" height="30" style="margin-left:16px">
															<h6 class="exp-title">Interactive Designer</h6>
															<span class="exp-years">2008 - 2010</span>
														</a>
													</li>
													<li>
														<a>
															<img src="{{ asset('assets/img/ab/lg/infogest.png') }}" width="150" height="30">
															<h6 class="exp-title">Technical Manager</h6>
															<span class="exp-years">2010 - 2012</span>
														</a>
													</li>
													<li>
														<a href="http://www.brad.ca" target="_blank">
															<img src="{{ asset('assets/img/ab/lg/brad.png') }}" width="150" height="30">
															<h6 class="exp-title">Web Developer</h6>
															<span class="exp-years">2012 - 2013</span>
														</a>
													</li>
												</ul>
											</div>

											<div class="title">Compétences</div>
											<div class="text">
												<div class="row" style="margin-left:-40px;">
													<div class="col-xs-6 col-lg-4" align="right">
														<h6><i class="fa fa-language"></i> <b>Langue</b></h6>
														<div><span class="padding-right">Français</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div><span class="padding-right">Anglais</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<div><span class="padding-right">Allemand</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div><span class="padding-right">Espagnol</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<br/>
														<h6><i class="fa fa-folder-open"></i> <b>CMS</b></h6>
														<div><span class="padding-right"><i class="fa fa-drupal"></i> Drupal</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div><span class="padding-right">Prestashop</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div><span class="padding-right"><i class="fa fa-wordpress"></i> Wordpress</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
													</div>
													<div class="col-xs-6 col-lg-4" align="right">
														<h6><i class="fa fa-laptop"></i> <b>Programmation</b></h6>
														<div><span class="padding-right">As3</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div><span class="padding-right">Ajax/Js</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div><span class="padding-right">Css <i class="fa fa-css3"></i></span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<div><span class="padding-right">Html <i class="fa fa-html5"></i></span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<div><span class="padding-right">Php/Sql</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<br/>
														<h6><i class="fa fa-share-alt"></i> <b>SVN</b></h6>
														<div><span class="padding-right"><i class="fa fa-github"></i> Git</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<div><span class="padding-right">Subversion</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
													<div class="col-xs-6 col-lg-4" align="right">
														<h6><i class="fa fa-connectdevelop"></i> <b>Framework</b></h6>
														<div><span class="padding-right">AngularJS</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div><span class="padding-right">Bootstrap</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div><span class="padding-right">Foundation</i></span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div><span class="padding-right">Laravel</i></span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<br/>
														<h6><i class="fa fa-book"></i> <b>Librairie</b></h6>
														<div><span class="padding-right">jQuery</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<div><span class="padding-right">MooTools</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div><span class="padding-right">TweenMax</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
												</div>
											</div>

											<div class="title">Intérêt</div>
											<div class="text" align="center">
												<div class="cloud"></div>
											</div>

										</div>
										
										<div class="curriculum">
											<a target="_blank" href="{{ asset('assets/pdf/curriculum.pdf') }}">
												<i class="fa fa-file-text"></i> Curriculum
											</a>
										</div>

										<div class="social">
											<a target="_blank" href="http://www.linkedin.com/in/metral">
												<i class="fa fa-linkedin"></i>
											</a>
											<a target="_blank" href="http://twitter.com/huskydesalpes">
												<i class="fa fa-twitter"></i>
											</a>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				
@endsection
