<?php include("_header.php"); ?>

	<!-- Knockout.js Demo :: using dependentObservables and changing the valueUpdate -->

	<div id="demo2" class="demo">
	
		<h1 data-bind="text: fullName">Temporary Text</h1>

		<input type="text" data-bind="value: firstName, valueUpdate: 'afterkeydown'" />
		<input type="text" data-bind="value: lastName, valueUpdate: 'afterkeydown'" />

	</div>
	
	<script type="text/javascript">
	
		// launch Knockout
	
		 $(document).ready(function(){
		 
				// build viewmodel and apply knockout
				
				viewModel = {
				    firstName : ko.observable("Chuck"),
				    lastName : ko.observable("Norris")			    
				};		 
								
				viewModel.fullName = ko.dependentObservable(function() {
				    return this.firstName() + " " + this.lastName();
				}, viewModel);
				
				ko.applyBindings(viewModel);	
		 
		 });	
		 		
	</script>	
	
<?php include("_header.php"); ?>	