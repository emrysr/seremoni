  (function($) {
//BROWSER CHECK
			// Reload stylesheet on document ready if IE8
			if (ie === 8) {
				$(function() {
					var $ss = $('#fontawsome-css');
					$ss[0].href = $ss[0].href;
				});
			}
//WIZARD
		  	$('#createWizard').on('finished',function(e){
					alert('Finished: supplied information will show below...');
					//$(this).parents('.dropdown').find('.dropdown-toggle').dropdown('toggle');
					$('#closeWizard').removeClass('hide');
			});

		  	$('#createWizard').on('changed',function(e){
				  //console.log('Moved');
					slide = $('#createWizard').wizard('selectedItem');
					if(slide.step !=5){
						$('#closeWizard').addClass('hide');
					}
				});

			$('#formCreate .actions .btn').on('click', function() {
				$('#createWizard').wizard($(this).data('action'));
			});

			$('#closeWizard').on('click',function(e){
				$('#createDropdown').removeClass('open');
				for(i=slide.step;i>1;i--){
					$('#createWizard').wizard('previous');
				}
				$('.container').fadeOut('fast',function(){$(this).fadeIn()});
			});



//AJAX XML DOCS
		function loadPage(page,$container){
			// Load the xml file using ajax 
			$.ajax({
				type: 'GET',
				url: path+'pages/' + page,
				dataType: 'xml',
				success: function (xml) {
					$(xml).find('page').each(function () {
						if($container.get()[0].nodeName.toLowerCase() == 'textarea'){
							$container.val($(this).text());
						}else{
							$container.html($(this).text());
						}
					});
				}
			});
		}

		loadPage('SeremoniSafonol.doc.xml',$('#standard-cy'));
		loadPage('SeremoniCynhwysfawrCymraeg.doc.xml',$('#enhanced-cy'));
		loadPage('EnhancedCeremony.doc.xml',$('#enhanced-en'));
		loadPage('StandardCeremony.doc.xml',$('#standard-en'));


//SEARCH
			//STATIC JSON DATA SOURCE
			var peopleJson = {people:[
				{name:"Geraint a Siân",id:1},
				{name:"Marc a Elin",id:2},
				{name:"Dafydd a Mair",id:3},
				{name:"James a Kerry",id:4},
				{name:"Harry and Bethan",id:5},
				{name:"Owen a Ruth",id:6}
			]};
			//STATIC ARRAY DATA SOURCE
//TYPEAHEAD
			//var peopleArray = ["John & Maggie Smith","Rupert and Mollie McDough","Hetti & Bobby Jones","Bill & Bob Billy","Jack and Jill Pale"];
			$('#search input:text').typeahead({
				/*STATIC JSON SOURCE */
				source:function (query, process){
					$('#search').search();
					names = [];
					list = {};
					selectedPerson = {};
				 	$.each(peopleJson.people, function (i, person) {
						list[person.name] = person;
						names.push(person.name);
					});

					process(names);
				},
				/*STATIC SOURCE
					source:peopleArray,*/
				/*AJAX SOURCE
					source: function (query, process) {
					return $.get('typeahead', { query: query }, function (data) {
						return process(data.names);
					});
				},*/
				updater: function (item) {  
					// FIRED ON CLICK OF SEARCH RESULTS
					selectedId = list[item].id;
					alert('The saved ceremony for '+list[item].name + ' would now be loaded');
					$('.container').fadeOut('fast',function(){$(this).fadeIn()});
					return item;
				},
				matcher: function (item) {
					if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
						return true;
					}
				},
				sorter: function (items) {
					return items.sort();
				},
				highlighter: function (item) {
					var regex = new RegExp( '(' + this.query + ')', 'gi' );
					return item.replace( regex, "<strong>$1</strong>" );
				},
				minLenght:2,
				items:20
			})

//SEARCH BUTTON
			$('#search').search();

			$('#search').on('searched',function(e, searchText){
				//console.log(e,searchText);
//				alert('searched for = ',searchText);
				e.preventDefault();
			});

//TOOLTIP
					$('[rel="tooltip"]').tooltip({
						container:'body',
						placement:'bottom'
					});


					$editor = $('#editor').ckeditor(function(ceremony){
						//console.info('ceremony=',ceremony);
						loadPage('SeremoniSafonol.jones.xml',$('#editor'));
					},{
						customConfig: path+'assets/ckeditor_config.js',
						language:'cy'
					});

//  SAVE WYSIWYG

/*					$('#saveDoc').click(function(e){*/
/*						//console.info($('.editor').cleanHtml());*/
/*					})*/
					
					$('#editForm').on('submit',function(e){
						e.preventDefault();
						var data = $editor.instances.editable.getData();
		//console.info(data);
						alert('form submit');
						return false;
					})

/*					$('#editForm')*/
/*					.ajaxSubmit({*/
/*						beforeSubmit: function() {*/
/*							// The textarea is already updated now and has the same value as the editor, so you can validate it.*/
/*							alert('SAVE');*/
/*						}*/
/*					})*/
/*					.on('submit',function(e){*/
/*						alert('SAVE');*/
/*						e.preventDefault();*/
/*						return false;*/
/*					});*/



        })(jQuery);
//EOF jQuery




			if(typeof String.prototype.trim !== 'function') {
			  String.prototype.trim = function() {
				return this.replace(/^\s+|\s+$/g, ''); 
			  }
			}

			CKEDITOR.disableAutoInline = true;
			//CKEDITOR.inline( 'editor' );


// IE 8 Finder!

			var ie = (function(){

				var undef,
					v = 3,
					div = document.createElement('div'),
					all = div.getElementsByTagName('i');

				while (
					div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
					all[0]
				);

				return v > 4 ? v : undef;

			}());

