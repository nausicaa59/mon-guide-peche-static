<div id="mobile-menu" v-cloak>
	<div class="nav-bar choice" v-if="!this.show">
		<div class="container">
			<div class="row">
				<div class="col-2 left">
					<i class="fas fa-bars" v-on:click="display_menu()"></i>
				</div>
				<div class="col-8 center">
					<img src="assets/img/logo-site.png">
				</div>
				<div class="col-2 right">
					<i class="fas fa-search" v-on:click="display_search()"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-bar close-choice"  v-if="this.show" v-on:click="close()">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<span class="close-action">Fermer</span>
				</div>
			</div>
		</div>
	</div>
	<div class="app-layout" v-if="this.show">
		<div class="content-menu" v-if="this.target.menu">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="menu">
							<li>
								<a href="">Acceuil</a>
							</li>
							<li>
								<a href="">Nous rejoindre</a>
							</li>
							<li>
								<a href="">Qui somme nous</a>
							</li>
							<li>
								<a href="">Nous contacter</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="content-search" v-if="this.target.search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="search-section  boxShadow">
							<div class="form-group">				
								<label for="search">Rechercher autour d'un lieu</label>
								<input type="email" class="form-control" id="search" aria-describedby="emailHelp" placeholder="Entrez un CP, une ville, etc..." autocomplete="off">
								<div class="search-render" v-if="this.search.listResultat.length > 0">
									<ul>										
										<li v-for="item in this.search.listResultat">
											<a :href="item.link" v-bind:class="classObject(item.type)">
												<div class="row">
													<div class="col-12">
														<div class="geo-label" v-html="item.label" v-on:click="selection(item.id)"></div>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>