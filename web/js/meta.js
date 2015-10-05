/* Contentview meta shows additional information per entity from youtube and twitter etc */

function meta(entity){
	this.$container;
	this.$input;
	this.entity = entity;
	this.loaded = false;
	this.body = false;
	this.init();
}

/* INIT */

/* init Meta object */

meta.prototype.init = function(){
	this.build();
}

meta.prototype.build = function(){
	this.$container = $(document.createElement('div')).addClass('content').addClass('content-meta').data('content',this);
}

meta.prototype.addBody = function(){
	this.$container.append("<div></div>");
        this.$relations = $(document.createElement('div')).addClass('relations');
	this.$container.append(this.$relations);
	this.body = true;
	current_entity_title = this.entity.getTitle();
        current_uid = this.entity.getUID();
	that = this; //save this-context for later use
	youtube_url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=Jon+Snow&type=video&key=AIzaSyAX1ab3eQRkHQUXAIv0qVyWBbaZUDRQIEQ&callback=ytcallback";
	$.getJSON(youtube_url,function(data){
		alert('gotJSON?');
	});
}

this.ytcallback = function(data){
	alert('smth');
}

meta.prototype.getContainer = function(){
		return this.$container;
	}


	meta.prototype.show = function(){
		if (!this.body){
			this.addBody();
		}
		if (!this.loaded){
			this.load();
		}
	}


	/* DATA */

	meta.prototype.load = function(){
		if (this.loaded){
			return;
		}
	this.showContainer();
	}

meta.prototype.showContainer = function (){
	this.$container.velocity('stop').velocity("slideDown",  {
		queue: false,
		easing: Global.easing,
		duration: Global.animationDuration
	});
}
