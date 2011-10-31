<?php include("_header.php"); ?>

	<!-- Knockout.js Demo :: using a simple observable -->
	
	<div id="demo1" class="demo">
	
		<h1 data-bind="text: testMessage">Placeholder Text</h1>

		<input type="text" data-bind="value: testMessage" />

	</div>
	
	<script type="text/javascript">
	
		// launch Knockout
	
		 $(document).ready(function(){
		 
				// build viewmodel and apply knockout
				
				viewModel = {
				    testMessage : ko.observable("Hello, World"),
				};		 
				
				ko.applyBindings(viewModel);	
		 
		 });	
		 		
	</script>	
		
<?php include("_footer.php"); ?>	