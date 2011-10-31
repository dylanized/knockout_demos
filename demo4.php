<?php include("_header.php"); ?>		

	<!-- Knockout.js Demo :: using jQuery templates -->
		
	<div id="demo4" class="demo">
			<div data-bind='template: "personTemplate"'>Placeholder Text</div>	
	</div>
		
	<script type="text/html" id="personTemplate">
		
			<h1 data-bind="text: fullName, click: sayHello">Placeholder Text</h1>
	
			<input type="text" data-bind="value: firstName, valueUpdate: 'afterkeydown'" />
			<input type="text" data-bind="value: lastName, valueUpdate: 'afterkeydown'" />
	
	</script>
	
	<script type="text/javascript">
	
		// launch Knockout
	
		 $(document).ready(function(){
		 
				// build viewmodel and apply knockout
				
				viewModel = {
				    firstName : ko.observable("Chuck"),
				    lastName : ko.observable("Norris"),
				    sayHello: function(event) {
				    	var name = this.fullName();
				    	alert("Hi " + name + "!");
				    }		    
				};		 
								
				viewModel.fullName = ko.dependentObservable(function() {
				    return this.firstName() + " " + this.lastName();
				}, viewModel);
				
				ko.applyBindings(viewModel);	
		 
		 });	
		 		
	</script>	
	
<?php include("_footer.php"); ?>