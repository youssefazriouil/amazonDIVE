/* Contentview addRelated shows the interface for linking related entities to eachother */

function addRelated(entity){
	this.$container;
	this.$input;
	this.entity = entity;
	this.loaded = false;
	this.body = false;
	this.init();
}

/* INIT */

/* init Comments object */

addRelated.prototype.init = function(){
	this.build();
}

/* build comments html */
addRelated.prototype.build = function(){
	this.$container = $(document.createElement('div')).addClass('content').addClass('content-addrelated').data('content',this);
}

/*perform search - ajax request*/
addRelated.prototype.searchKeywords = function(keywords){
	$('.content-addrelated input').autocomplete({
                                delay: 0,
                                minLength: 3
        });//autocomplete init

		$.ajax({
                 type: "GET",
                url: Global.basePath+"vu/api/v2/search?keywords="+keywords+"&offset=0&limit=1600"
                }).success(function(data){
                        var resultJSON = data['data'];
                        suggestionsList = [];
                        fullRefJSON = [];
                        $.each(resultJSON, function(index, object) {
                                 if(resultJSON[index]['type'] !== 'Image' && resultJSON[index]['title'].toLowerCase().indexOf(keywords.toLowerCase()) > -1 ){
                                        suggestionsList.push(resultJSON[index]['title']);//+' - '+resultJSON[index]['type']);
                                        fullRefJSON.push({title: resultJSON[index]['title'], type: resultJSON[index]['type'], uid: resultJSON[index]['uid'], placeholder: resultJSON[index]['depicted_by']['placeholder'],description:  resultJSON[index]['description']});
                                }
				else{	//result is of type Image
                                        return true;
                                }

                         });//end each-loop resultJSON
			$('.content-addrelated input').autocomplete('option','source',suggestionsList);
			return fullRefJSON;  
		});//end success callback ajax request
	
}

addRelated.prototype.clearRelSearchResult = function(){
	$('.relsearchresult').html('');
        $(".ui-menu-item").hide();
}

/* add Body */
addRelated.prototype.addBody = function(){
	this.$container.append("<label for='relentsug'>Search entity: </label>");
	this.$input = $("<input type='text' size='60' placeholder='Enter name of related entity here..' id='relentsug'/>");
	this.$container.append(this.$input);
	this.$container.append("<div class='relsearchresult'></div>");
        this.$relations = $(document.createElement('div')).addClass('relations');
	this.$container.append(this.$relations);
	this.body = true;
	current_entity = this.entity.getTitle();
        current_uid = this.entity.getUID();
	that = this; //save this-context for later use

	$('.content-addrelated input').keyup(function (e) {
	   	keywords = $(this).val();	
		if(keywords.length > 2){
		if(keywords.length == 2 && e.keyCode == 8){
				that.clearRelSearchResult();
		}
		else{ //more than two letters, no backspace
		  setTimeout(function(){fullRefJSON = that.searchKeywords(keywords);},500);
		  if(e.keyCode == 13){
		    that.clearRelSearchResult();
		    for(i=0;i<fullRefJSON.length;i++){
			//console.log(fullRefJSON[i]);
		    	$('.relsearchresult').append("<br><div><span><h2>"+fullRefJSON[i]['title']+"</h2> - <h3><i>"+fullRefJSON[i]['type']+"</i></h3></span><br><br><img src='"+fullRefJSON[i]['placeholder']+"'/><br><div>"+fullRefJSON[i]['description']+"</div><br><span><button id='submitRel'>Click here</button> to submit the relation between <b>"+current_entity+"</b> and <b>"+fullRefJSON[i]['title']+"</b><div id='rel_uids' style='display:none;'>"+current_uid+"|"+fullRefJSON[i]['uid']+"</div></span></div><hr>");
		    } //end for loop
		    
		    $('.relsearchresult button').click(function(){
                        	//alert('button clicked1: '+$(this).parent().find('#rel_uids').text());
				uids = $(this).parent().find('#rel_uids').text();
				curr_ent_uid = uids.substr(0, uids.indexOf('|'));
				new_rel_uid = uids.substr(uids.indexOf('|')+1);
				//alert(current_entity);
				$.post("/dive/web/app_dev.php/vu/api/v2/entity/details?id="+new_rel_uid,function(data){
					new_rel_title = data['data'][0]['title'];
					that.submitRelation(curr_ent_uid,new_rel_uid, current_entity, new_rel_title);
				});
                    });

		  } //end if enter pressed
		 }  // end else - more than two letters no backspace
		 } //end if keywords.length >2

		  if(e.keyCode == 8 && $(this).val() == ''){
		  	that.clearRelSearchResult();
		  }
	});//end keyup
}//end addboy
	
/* Suggest new entity information */

addRelated.prototype.submitRelation = function(ce,nr,cet,nrt){
	
	var $form = $("<div>How are <b>"+cet+"</b> and <b>"+nrt+"</b> related?<br><br>The entities are related by:<select name='reasons'><option value='character'>Character/Actor</option><option value='event'>Event</option><option value='place'>Place</option><option value='org'>House or Organization</option><option value='death'>Killed by</option><option value='other'>Other</option></select><br>Namely:<textarea name='detailedReason'></textarea></div>");

	var popup= new Popup('Submit new relation',
		$form.html(),
		{
			'cancel': {
				label: 'Cancel',
				click : function(){
					$(window).trigger('popup-hide');
				}
			},
			'ok': {
				label: 'Save',
				click : function(){
					var newTitle = $('#popup .entity-title').val();
					var newType = $('#popup .entity-type').val();
					var newDescription = $('#popup .entity-description').val();
					var checkId = this.entity.getUID();
					Global.browser.updateEntity(checkId,newTitle,newDescription,newType);
					//logDetails = JSON.stringify({'uid': checkId, 'type':newType, 'title':newTitle, 'description':newDescription });
					//alert(logDetails);
					AjaxLog.info('Improve Entity: '+cet,checkId);
					Global.user.refresh();
					$(window).trigger('popup-hide');
				}.bind(this)
			}
		}
		);
	$('#popup input.entity-title').focus();
}

	/* Helpers */

	addRelated.prototype.getContainer = function(){
		return this.$container;
	}


	addRelated.prototype.show = function(){
		if (!this.body){
			this.addBody();
		}
		if (!this.loaded){
			this.load();
		}
	}


	/* DATA */

	addRelated.prototype.load = function(){
		if (this.loaded){
			return;
		}
	this.showContainer();
	}

addRelated.prototype.showContainer = function (){
	this.$container.velocity('stop').velocity("slideDown",  {
		queue: false,
		easing: Global.easing,
		duration: Global.animationDuration
	});
}

