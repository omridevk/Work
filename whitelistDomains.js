mw.kalturaPluginWrapper(function() {
	mw.PluginManager.add( 'whitelistDomains', mw.KBaseComponent.extend({
		defaultConfig: {
			domains: "",
			message: "This Web Page does not have permission to play this media",
			title: "Permission Denied"
		},
		setup: function() {

			var domains = "";
			if(this.getConfig('domains')){
				domains = this.getConfig('domains').split(",");
			}
			var myDomain = document.location.host;
			for ( i =0 ; i<domains.length ; i++){
				if (domains[i] == myDomain) {
					return;
				}
			}
			//checking against referrer in case of iframe
			myDomain = document.referrer.split("//")[1].split("/")[0];
			for ( i =0 ; i<domains.length ; i++){
				if (domains[i] == myDomain) {
					return;
				}
			}
			this.getPlayer().addJsListener('playerReady', this.showAlert());
		},
		showAlert: function() {
			var alertConfig = this.getConfig(); //show a modal alert - with no button
			alertConfig.buttons = [];
			this.getPlayer().setError( alertConfig );
			this.getPlayer().showPlayerError();
		}
	}));
});
