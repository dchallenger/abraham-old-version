function Module(){
	var theme_path = base_url + "assets/";
	var mod_code = "career_steam_code";
	var route = "admin/partner/careersteamcode";
	this.get = function( to_get ){
		if( eval( to_get ) == undefined )
			return false;
		else
			return eval( to_get );
	};
}			
var module = new Module();