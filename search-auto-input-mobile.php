<div id="search-auto-input-mobile" method="get" v-cloak>
	<a class="nav-link" v-on:click="display()">
		<i class="fas fa-search"></i>
	</a>
	<div class="app-layout" v-if="this.show">
		<div class="content-input">
			<input type="hidden" name="controller" value="search">
			<input type="text" name="s" v-model="search" v-on:keyup="searchChange" placeholder="Recherche un jeu, une console, une geekerie, etc..." autocomplete="off">
			<button v-on:click="close()">
				<i class="fas fa-times-circle"></i>
			</button>
		</div>
		<div class="render" v-if="this.list.length != 0">
			<ul>
				<li v-for="item in list">
					<a :href="item.link">
						<div class="row">
							<div class="col-12">
								<div class="prod-name" v-html="item.name"></div>
								<div class="prod-support">%%item.category_name%% | %%item.price%%€</div>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>