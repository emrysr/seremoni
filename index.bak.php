<?php include('includes/config.php') ?><!DOCTYPE html>
<html lang="cy" class="fuelux<?php echo $debug ? ' debug':''; ?>">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Seremonïau</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
		<link rel="shortcut icon" href="<?php echo $path ?>assets/icons/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo $path ?>assets/icons/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $path ?>assets/icons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $path ?>assets/icons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $path ?>assets/icons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $path ?>assets/icons/apple-touch-icon-144x144.png" />
		
		<link href="<?php echo $path ?>assets/css/fuelux.css" rel="stylesheet">
		<link href="<?php echo $path ?>assets/css/fuelux-responsive.css" rel="stylesheet">
		<link href="<?php echo $path ?>assets/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
		<link href="<?php echo $path ?>assets/css/font-awesome.css" rel="stylesheet" id="fontawsome-css">

        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <style type="text/css" id="bsCss">
				
        /* override bootstrap styles */

			.fuelux h3 [class^="icon-"], .fuelux h3 [class*=" icon-"]{height:25px;width:25px;line-height:25px;}

/*HEADER*/
				  body{padding-top:41px;}

/*WIZARD*/

					#create{width: 460px}
					#create label{width:100px}
					#create h3{margin:0 0 .5em 0}
					#create .wizard ul li {padding: 0 6px 0 27px;}
/*WYSIWYG*/
					.fuelux #editor {
						overflow:scroll;
						overflow-x:hidden;
						padding-top:15px;
						width:96.35%;
/*						max-height:600px;*/
/*						min-height:400px;*/
						height:485px;
					}
					.fuelux .btn-large [class^="icon-"],
					.fuelux .btn-large [class*="icon-"]{
						font-size:17.5px;
						width:18px;
						line-height:22px;
						height:22px;
					}
/*MODAL*/
					.fuelux #cutnpaste.modal{
						/* new custom width */
						width: 750px;
						/* must be half of the width, minus scrollbar on the left (30px) */
						margin-left: -375px;
					}




/*					.editor .field{padding:.1em .75em;border:1px solid #666;color:black;
-webkit-border-radius: 4px;
border-radius: 4px;
-moz-border-radius: 4px;
}
*/

					a, path, .brand *{
						-webkit-transition: all .3s ease-out;
						-moz-transition: all .3s ease-out;
						-ms-transition: all .3s ease-out;
						-o-transition: all .3s ease-out;
						transition: all .3s ease-out;
					}
/*NAVBAR*/
					#top-nav .brand:hover,#top-nav .brand:hover path{color:#FFF;fill:#FFF}
					#top-nav .brand,#top-nav .brand path{color:#999;fill:#999;}
					#top-nav .brand svg{top:0; width:1.7em; height:2em; position:absolute; margin-left:-2.25em}

					.navbar .nav>li>.dropdown-menu1:before,
					.navbar .nav>li>.dropdown-menu1:after {left:230px}
					#main-menu .dropdown-menu1 {margin-left:-190px}

					.step-content {
						border: 1px solid hsl(0, 0%, 83%);
						border-top: 0;
						border-radius: 0 0 4px 4px;
						padding: 10px;
						margin-bottom: 10px;
						background-color:white;
					}
					.letterpress{
						/*color: #EDEDED!important;*/
					}

/*TOOLBARS*/
					#top-toolbar{
						padding: 3px 0px;
						margin: 0px;
						/*margin-left:581px;*/
						opacity:.4;
						-webkit-transition: all .3s;
						-moz-transistion: all .3s;
						-o-transition: all .3s;
						transition: all .3s;
					}
					#top-toolbar:hover{opacity:1}


/* TABS */
					

					@media (min-width: 1200px){/*Large Displays*/
						.debug body:before{content:'Large Displays';position:absolute;background:yellow;color:black;line-height:1.4em;height:1.4em}
						#create1{width: 1131px;}
					}

					@media (min-width: 979px){/*Default*/
						.debug body:before{content:'Default Res';position:absolute;background:yellow;color:black;line-height:1.4em;height:1.4em}
						body{
							padding-top: 45px;
						}
					}

					@media (max-width: 979px) and (min-width: 768px){/*Portrait Tablets*/
						.debug body:before{content:'Portrait Tablets';position:absolute;background:yellow;color:black;line-height:1.4em;height:1.4em}
						#create1{width: auto;}
						#top-nav .brand {margin-left:45px}
						#top-nav .brand svg{height:2.5em}
					}
					@media (max-width:767px){/*Phones to tablets*/
						.debug body:before{content:'Phones to tablets';position:absolute;background:yellow;color:black;line-height:1.4em;height:1.4em}
						#create1{width:auto;margin:0;}
						.typeahead.dropdown-menu{background-color:white!important;position:absolute!important;z-index:1000}
						/*#top-nav .brand svg{margin-left:0}*/
					}
					
					@media (max-width:480px){ /*Phones*/
						.debug body:before{content:'Phones';position:absolute;background:yellow;color:black;line-height:1.4em;height:1.4em}
						/*#top-nav .brand svg{display:none}*/
						#top-nav .brand .name{display:none}
						#create{margin:0;padding:0}
					}
        </style>

        <!--[if lt IE 8]>
				<style>
					.fuelux .search-query{padding:2px 4px!important}
					.fuelux .wizard ul li .chevron{height:0px!imporant;z-index:3}
					.fuelux .wizard .actions .btn{padding-bottom:6px!important}
				</style>
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
        <![endif]-->

        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
		<div id="top-nav" class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">

				    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				    </button>

          			<a class="brand" href="<?php echo $path ?>"><?php include('assets/vector/logo.svg'); ?>
							<span class="name">System seremonïau</span>
						</a>
						<form class="form-search form-inline navbar-form pull-right">
							<div id="search" class="input-append">
								<input id="searchInput" type="text" class="input-medium search-query" data-provide="typeahead" autocomplete="off" placeholder="Chwiliwch...">
								<button type="submit" class="btn" title="Search for saved ceremonies" rel="tooltip"><i class="icon-search"></i></button>
							</div>
							<a href="?logout=true" title="Log Out" rel="tooltip" class="btn hidden-phone btn-inverse"><i class="icon-user"></i></a>
						</form>

            <div class="nav-collapse collapse">

                <ul id="main-menu" class="nav">
									<!--li><a class="dropdown-toggle" href="#edit">Golygu <i class="icon icon-edit"></i></a></li-->
									<li>
											<ul class="nav">
												<li class="dropdown" id="createDropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" title="Creu seremoni newydd" rel="tooltip">Newydd <i class="icon icon-certificate"></i></a>
													<div id="create" class="dropdown-menu" style="padding:17px;">

														<form class="form row-fluid form-inline" id="formCreate">

														<div id="createWizard" class="wizard">
															<ul class="steps">
																<li data-target="#step1" class="active"><span class="badge badge-info">1</span><span class="chevron"></span></li>
																<li data-target="#step2"><span class="badge">2</span><span class="chevron"></span></li>
																<li data-target="#step3"><span class="badge">3</span><span class="chevron"></span></li>
																<li data-target="#step4"><span class="badge">4</span><span class="chevron"></span></li>
																<li data-target="#step5"><span class="badge">5</span><span class="chevron"></span></li>
															</ul>
															<div class="actions">
																<button type="button" class="btn btn-mini btn-prev"> <i class="icon-arrow-left"></i></button>
																<button type="button" class="btn btn-mini btn-next" data-last=""><i class="icon-arrow-right"></i></button>
															</div>
														</div>

														<div class="step-content clearfix">

															<div class="step-pane active row-fluid" id="step1">
																<h3 class="letterpress">Names</h3>
																	<label for="g_firstName">Groom:</label>
																	<input name="g_firstName" id="g_firstName" type="text" placeholder="First Name" class="input-medium">
																	<input name="g_lastName" id="g_lastName" type="text" placeholder="Last Name" class="input-medium">
																	<hr>
																	<label for="g_firstName">Bride: </label>
																	<input name="b_firstName" id="b_firstName" type="text" placeholder="First Name" class="input-medium">
																	<input name="b_lastName" id="b_lastName" type="text" placeholder="Last Name" class="input-medium">
															</div>

															<div class="step-pane" id="step2">
																<h3 class="letterpress">Witnesses</h3>
																<hr>
																<pre>
Full name of 1st Witness (groom's)
Full name of 2nd Witness (bride's)
																</pre>
															</div>

															<div class="step-pane" id="step3">
																<h3 class="letterpress">Father's Details</h3>
																<hr>
																<pre>

Groom's Father:
Name
Occupation (required)
deceased / retired (delete as appropriate)	

Bride's Father:
Name
Occupation (required)
deceased / retired (delete as appropriate)

																</pre>
															</div>

															<div class="step-pane" id="step4">
																<h3 class="letterpress">Ceremony</h3>
																<hr>

																<pre>
Language:
Welsh
English
Bilingual

Type:                                            
Standard Ceremony
Enhanced Ceremony
																</pre>

															</div>

															<div class="step-pane" id="step5">
																<h3 class="letterpress">Declarations</h3>
																<hr>

																<pre>
First Declaration
Option 1 	
Option 2
Option 3

Second Declaration
Option 1
Option 2

Presentation of Rings
Option 1 
Option 2
Option 3
Option 4
																</pre>
															</div>

															<hr>
															<div class="actions pull-right">
																<button type="button" class="btn btn-prev btn-primary btn-prev" data-action="previous"> <i class="icon-arrow-left icon-white"></i> Yn Ol</button>
																<button type="button" class="btn btn-next btn-primary btn-next" data-action="next" data-last="Darfod">Nesaf <i class="icon-arrow-right icon-white"></i></button>
															</div>

													</div><!-- / .step-content -->
											</form><!-- /formCreate -->
									</div>
								</li>
								<li class="hidden-desktop"><a href="#logout">Allgofnodi <i class="icon icon-user"></i></a></li>
        			</ul><!-- /.nav -->
              </li>

                </ul><!-- / #main-menu -->

            </div><!--/.nav-collapse -->

        </div><!-- /.container-->
    </div><!-- /.navbar-inner -->
</div><!-- .navbar -->

<div class="container">

<form id="editForm">
	<div class="pull-right" id="top-toolbar">
		<button class="btn btn-large" rel="tooltip" data-toggle="modal" href="#cutnpaste" title="Copy from the standard ceremonies"><i class="icon-copy"></i></button>
		<button class="btn btn-large" rel="tooltip" title="Print this ceremony"><i class="icon-print"></i></button>
		<button class="btn btn-large" rel="tooltip" title="Save this ceremony"><i class="icon-save"></i></button>
		<button class="btn btn-large disabled" rel="tooltip" title="Email to attending registrars"><i class="icon-envelope-alt"></i></button>
	</div>
	<h3>Geraint a Siân <i class="icon-edit"></i> <small>Portmeirion, 20/03/2014 @ 12:30</small></h3>
	<p class="muted">gyda <em>Olwen Jones</em> a <em>Tanwen Perkins:</em></p>

		<div id="editor" contenteditable="true" class="editor well tab-pane active"></div>

	<button class="btn btn-large btn-primary" rel="tooltip" title="Save this ceremoni">Save <i class="icon-save"></i></button>
	<a href="#" class="btn btn-large btn-success" rel="tooltip" title="Print this ceremoni">Print <i class="icon-print"></i></a>
	<a href="#" class="btn btn-large disabled" rel="tooltip" title="Email to attending registrars">Email <i class="icon-envelope-alt"></i></a>
</form>

	<div class="modal hide" id="cutnpaste">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3><i class="icon-copy"></i> Copy and Paste <small>Copy text from the standard ceremonies</small></h3>
	  </div>
	  <div class="modal-body">
		
	
	<ul id="tabs" class="nav nav-tabs">
		<li class="active"><a href="#standard-cy" data-toggle="tab" rel="tooltip" title="Seremoni Safonol Gymraeg" class="text-warning">Cymraeg</a></li>
		<li class=""><a href="#enhanced-cy" data-toggle="tab" rel="tooltip" title="Seremoni Cynhwysfawr Gymraeg" class="text-success">Cymraeg + </a></a></li>
		<li class=""><a href="#standard-en" data-toggle="tab" rel="tooltip" title="Seremoni Safonol Saesneg" class="text-warning">English</a></a></li>
		<li class=""><a href="#enhanced-en" data-toggle="tab" rel="tooltip" title="Seremoni Cynhwysfawr Saesneg" class="text-success">English +</a></li>
	</ul>


	<div class="tab-content">
		<div contenteditable="false" id="standard-cy" class="active well tab-pane alert alert-block"></div>
		<div contenteditable="false" id="standard-en" class="well tab-pane alert alert-block"></div>
		<div contenteditable="false" id="enhanced-cy" class="well tab-pane alert-success alert-block"></div>
		<div contenteditable="false" id="enhanced-en" class="well tab-pane alert-success alert-block"></div>
	</div>



	  </div>
	  <div class="modal-footer">
		<p class="pull-left btn-toolbar" data-role="editor-toolbar" data-target="#cutnpaste .modal-body .tab-content .active">
			<a class="btn btn-large btn-success" data-dismiss="modal" rel="tooltip" data-edit="copy" data-placement="right" title="Copy (Ctrl/Cmd+C)">Copy <i class="icon-copy"></i></a> <span class="text-muted">You can then paste the copied text into position...</span>
		</p>
		<a href="#" class="btn btn-large" data-dismiss="modal" rel="tooltip" title="Hide this popup">Close <i class="icon-remove"></i></a>
	  </div>
	</div>


	
</div>

<!-- /container -->
        <script type='text/javascript' src="<?php echo $path ?>assets/js/jquery-1.9.1.min.js"></script>
        <script type='text/javascript' src="<?php echo $path ?>assets/js/loader.min.js"></script>
        <script type='text/javascript' src="<?php echo $path ?>assets/js/jquery.hotkeys.js"></script>

		<script src="<?php echo $path ?>assets/ckeditor/ckeditor.js"></script>
		<script src="<?php echo $path ?>assets/ckeditor/adapters/jquery.js"></script>

        <script type='text/javascript'>

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
				$(this).parents('.dropdown').find('.dropdown-toggle').dropdown('toggle');
			});

		  	$('#createWizard').on('stepclick',function(e){
				//console.log('Moved');
			});

			$('#formCreate .actions .btn').on('click', function() {
				$('#createWizard').wizard($(this).data('action'));
			});



//AJAX XML DOCS
		function loadPage(page,$container){
			// Load the xml file using ajax 
			$.ajax({
				type: 'GET',
				url: '<?php echo $path ?>pages/' + page,
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
						customConfig: '<?php echo $path ?>assets/ckeditor_config.js',
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

        </script>
    </body>
</html>
