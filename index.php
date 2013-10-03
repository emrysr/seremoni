<?php
$page_title = "Edit Entry";
include('includes/header.php') ?>

<form id="editForm">
	<div class="pull-right" id="top-toolbar">
		<button class="btn btn-large" rel="tooltip" data-toggle="modal" href="#cutnpaste" title="Copy from the standard ceremonies"><i class="icon-copy"></i></button>
		<button class="btn btn-large" rel="tooltip" title="Print this ceremony"><i class="icon-print"></i></button>
		<button class="btn btn-large" rel="tooltip" title="Save this ceremony"><i class="icon-save"></i></button>
		<button class="btn btn-large disabled" rel="tooltip" title="Email to attending registrars"><i class="icon-envelope-alt"></i></button>
	</div>

	<h3>Geraint a Siân <i class="icon-edit"></i> <br class="hidden-desktop"> <small> Portmeirion, 20/03/2014 @ 12:30</small></h3>
	<p class="muted"><em>gyda <a href="#">Olwen Jones</a> a <a href="#">Tanwen Perkins</a>:</em></p>

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
        <!--script type='text/javascript' src="<?php echo $path ?>assets/js/jquery.hotkeys.js"></script-->

				<script type='text/javascript' src="<?php echo $path ?>assets/ckeditor/ckeditor.js"></script>
				<script type='text/javascript' src="<?php echo $path ?>assets/ckeditor/adapters/jquery.js"></script>
				<script type='text/javascript'>var path="<?php echo $path ?>";</script>
        <script src="<?php echo $path ?>assets/js/seremoni.js" type="text/javascript"></script>

    </body>
</html>
