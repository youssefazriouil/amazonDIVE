function Config(){
	// entity types visible in the filter
	this.entityTypes = ['fictionalEvent','fictionalPlace','realPlace','fictionalPerson','realPerson','Image','Video','fictionalOrganization','realOrganization', 'Episode'];

	// API root url
	this.APIPath = "vu/api/v2/";
	// adds basePath to APIPath
	this.addBasePath = true;

	//this.APIPath = "http://dive.local:8080/vu/api/vgo1/"; this.addBasePath = false;


	// cases to be loaded in the gallery
	this.galleryCases = [
	{caseType : 'Related', identifier: 'http://divetv.ops.labs.vu.nl/entity/gotw-ficper-TyrionLannister'}
	];

	// search suggestions
	this.searchSuggestions = ['Jon Snow','Arya Stark','Targaryen','Peter Dinklage','Winter is Coming','Winterfell'];


	// content buttons
	this.contentButtons = [
	['Comments','View and add comments to this entity'],
	['Details','Entity details, relations and sources'],
	['Meta', 'Meta information we found on this entity'],
	//['Games','View games this entity is featured in'],
	['AddRelated','Add related entities to this entity']
	];
}


