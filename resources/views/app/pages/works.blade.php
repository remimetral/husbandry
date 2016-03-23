@extends('app.layouts.switcher')

@section('desc'){{ strip_tags( ucfirst(Lang::get('meta.home_desc')) ) }}@stop

@section('title'){{ strip_tags( ucfirst(Lang::get('meta.works_title')) ) }}@stop

@section('content')

				<input class="page_title" type="hidden" value="{{ strip_tags( ucfirst(Lang::get('meta.works_title')) ) }}">
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
							
							<!--<div class="row full-width small-collapse">

								@foreach(Lang::get('works.programmes') as $programme)

									<div class="block medium-3 columns">
										<div class="ico"><img src="{{ asset('assets/frontend/img/programme/' . $programme['ico']) }}"></div>
										<div class="title">{{ $programme['title'] }}</div>
										<div class="short_text">{{ $programme['short_text'] }}</div>
										<div class="show_more"><img src="{{ asset('assets/frontend/img/programme/ico_more.png') }}"></div>
									</div>

								@endforeach

							</div>-->

							<ul class="cbp-ig-grid">
								<li>
									<div class="wrapper">
										<div class="card">
											<div class="face front">
												<img class="icon" src="{{ asset('assets/img/wr/lg/bora.png') }}">
												<h1 class="title">Site Corporate</h1>
												<span class="category">Frontend</span>
											</div>
											<div class="face back">
												<div class="bg bora"></div>
												<div class="close"></div>
												<span class="text">
													<p>
														<b>Client</b><br/>
														Boralex
													</p>
													<p>
														<b>Brief</b><br/>
														Site Corporate de l'entreprise<br/>
														Présentation des activités et des projets<br/>
														Base de données des projets intégré à une map<br/>
														Ergonomie et responsive design
													</p>
													<p>
														<b>Technologie</b><br/>
														Ajax/Js jQuery<br/>
														Css <i class="fa fa-css3"></i>
														Html <i class="fa fa-html5"></i><br/>
														Maps API<br/>
														Php/MySQL
													</p>
													<p>
														<b>Site Internet</b><br/>
														<i class="fa fa-globe"></i> <a href="http://www.boralex.com" target="_blank">boralex.com</a>
													</p>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapper">
										<div class="card">
											<div class="face front">
												<img class="icon" src="{{ asset('assets/img/wr/lg/cult.png') }}">
												<h1 class="title">Video Collaborative</h1>
												<span class="category">Back&Frontend</span>
											</div>
											<div class="face back">
												<div class="bg cult"></div>
												<div class="close"></div>
												<span class="text">
													<p>
														<b>Client</b><br/>
														Télé-Québec
													</p>
													<p>
														<b>Brief</b><br/>
														Plateforme culturelle et collaborative<br/>
														Espace client et partage de vidéo<br/>
														Base de données par format, catégorie et région<br/>
														Responsive design et réseaux sociaux
													</p>
													<p>
														<b>Technologie</b><br/>
														Ajax/Js jQuery<br/>
														Css <i class="fa fa-css3"></i>
														Html <i class="fa fa-html5"></i><br/>
														Php/MySql
													</p>
													<p>
														<b>Site Internet</b><br/>
														<i class="fa fa-globe"></i> <a href="http://www.lafabriqueculturelle.tv" target="_blank">lafabriqueculturelle.tv</a>
													</p>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapper">
										<div class="card">
											<div class="face front">
												<img class="icon" src="{{ asset('assets/img/wr/lg/dia.png') }}">
												<h1 class="title">Wisky Club</h1>
												<span class="category">Content Management System</span>
											</div>
											<div class="face back">
												<div class="bg dia"></div>
												<div class="close"></div>
												<span class="text">
													<p>
														<b>Client</b><br/>
														Diageo
													</p>
													<p>
														<b>Brief</b><br/>
														Site ecommerce de wisky<br/>
														Club de membre et fidélisation<br/>
														Gestion des commandes et paiements<br/>
														Gestion des relances et promotions<br/>
														Fonctionnalités sur mesure
													</p>
													<p>
														<b>Technologie</b><br/>
														Js jQuery<br/>
														Html/Css<br/>
														Php/MySql
													</p>
													<p>
														<b>Site Internet</b><br/>
														<i class="fa fa-globe"></i> <a href="http://www.spiritsociety.ch" target="_blank">spiritsociety.ch</a>
													</p>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapper">
										<div class="card">
											<div class="face front">
												<img class="icon" src="{{ asset('assets/img/wr/lg/moka.png') }}">
												<h1 class="title">Magazine Original</h1>
												<span class="category">WordPress</span>
											</div>
											<div class="face back">
												<div class="bg moka"></div>
												<div class="close"></div>
												<span class="text">
													<p>
														<b>Client</b><br/>
														Moka Mag
													</p>
													<p>
														<b>Brief</b><br/>
														Webzine complémentaire au magazine papier<br/>
														Ergonomie et code couleur par rubrique<br/>
														Mise en avant des évènements du jour<br/>
														Application mobile en conception<br/>
														Responsive design 
													</p>
													<p>
														<b>Technologie</b><br/>
														Ajax/Js jQuery<br/>
														Css <i class="fa fa-css3"></i>
														Html <i class="fa fa-html5"></i><br/>
														<i class="fa fa-wordpress"></i> Wordpress
													</p>
													<p>
														<b>Site Internet</b><br/>
														<i class="fa fa-globe"></i> <a href="https://www.moka-mag.com" target="_blank">moka-mag.com</a>
													</p>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapper">
										<div class="card">
											<div class="face front">
												<img class="icon" src="{{ asset('assets/img/wr/lg/oxo.png') }}">
												<h1 class="title">Jeu de Tirage</h1>
												<span class="category">Flash</span>
											</div>
											<div class="face back">
												<div class="bg oxo"></div>
												<div class="close"></div>
												<span class="text">
													<p>
														<b>Client</b><br/>
														La Française des Jeux
													</p>
													<p>
														<b>Brief</b><br/>
														Site de présentation du jeux<br/>
														Affichage des résultats en temps réél<br/>
														Accessibilité en 2 versions
													</p>
													<p>
														<b>Technologie</b><br/>
														ActionScript 3<br/>
														Ajax/Js
													</p>
													<p>
														<b>Site Internet</b><br/>
														<i class="fa fa-globe"></i> <a href="./oxo" target="_blank">oxo.fr</a>
													</p>
												</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapper">
										<div class="card">
											<div class="face front">
												<img class="icon" src="{{ asset('assets/img/wr/lg/swi.png') }}">
												<h1 class="title">Online Shop</h1>
												<span class="category">PrestaShop</span>
											</div>
											<div class="face back">
												<div class="bg swi"></div>
												<div class="close"></div>
												<span class="text">
													<p>
														<b>Client</b><br/>
														Switcher
													</p>
													<p>
														<b>Brief</b><br/>
														Site ecommerce de vêtement<br/>
														Fonctionnalités sur mesure<br/>
														Gestion via PrestaShop
													</p>
													<p>
														<b>Technologie</b><br/>
														Html/Css<br/>
														Php/MySql<br/>
														PrestaShop
													</p>
													<p>
														<b>Site Internet</b><br/>
														<i class="fa fa-globe"></i> <a href="http://www.switcheroutlet.com" target="_blank">switcheroutlet.com</a>
													</p>
												</span>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
@endsection
