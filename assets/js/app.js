var appMobileMenu = new Vue({
	delimiters: ['%%', '%%'],
	el: '#mobile-menu',
	data: {
		search: {
			label: "ma recherche",
			type: "ville",
			id: 0,
			listResultat : []
		},		
		show: true,
		target: {
			menu: true,
			search: false
		}
	},
	created: function() {
		this.search.listResultat = [
			{
				type:"departement",
				label:"Nord-Pas-De-Calais (62)",
				id:456,
				link:"http://google.fr"
			},
			{
				type:"ville",
				label:"Equihen-Plage (62200)",
				id:456,
				link:"http://google.fr"
			},
			{
				type:"ville",
				label:"Equihen-Plage (62200)",
				id:456,
				link:"http://google.fr"
			},
			{
				type:"ville",
				label:"Equihen-Plage (62200)",
				id:456,
				link:"http://google.fr"
			},
			{
				type:"ville",
				label:"Equihen-Plage (62200)",
				id:456,
				link:"http://google.fr"
			}
		];
	},
	methods: {
	    display_search: function () {
	    	this.show = true;
	    	this.target.search = true; 
	    	document.body.className += ' ' + 'popup-open';
	    },
	    display_menu: function () {
	    	this.show = true;
	    	this.target.menu = true; 
	    	document.body.className += ' ' + 'popup-open';
	    },
	    close: function() {
	    	this.show = false;
	    	this.target.menu = false;
	    	this.target.search = false;
	    	document.body.className = document.body.className.replace("popup-open","");
	    },
	    initTarget: function() {
	    	this.target.menu = false;
	    	this.target.search = true;
	    },
	    selection: function(id) {

	    },
		classObject: function (type) {
			return {
				isDepartement: type === "departement",
				isRegion: type === "region",
			}
		}
	},
})