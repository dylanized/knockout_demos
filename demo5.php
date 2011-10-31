<?php include("_header.php"); ?>		

	<!-- Knockout.js Demo :: using observableArray and jQuery template logic -->
	
	<div id="demo5" class="demo">
			
			<h3>History's Biggest Badasses</h3>
			
			<div data-bind='template: "listTemplate"'></div>
			
	</div>
		
	<script type="text/html" id="listTemplate">
	
			<ul>
						
				{{each personList}}
		            <li>${ this }</li>
	       		{{/each}}
       		
       		</ul>
       		
       		<div style="padding-top:40px;">
       			<h4>Add a badass:</h4> 
	       		<input type="text" data-bind="value: newPerson" id="addField" />
	       		<input type="submit" data-bind="click: addPerson" />
	       	</div>
        
	</script>		
	
	<script type="text/javascript">
	
		// launch Knockout
	
		 $(document).ready(function(){
		 
				// build viewmodel and apply knockout
				
				var viewModel = {};

				viewModel.personList = ko.observableArray(["Chuck Norris", "Bruce Lee", "Genghis Khan"]);
				viewModel.newPerson = ko.observable("Your Name Here");

				viewModel.addPerson = function () {	  
				    viewModel.personList.push(viewModel.newPerson()); 
				    viewModel.newPerson("");
				}

				viewModel.addNewPerson = function () {
					if (newPerson) {
					    viewModel.personList.push(newPerson); 
					}
				}				

				ko.applyBindings(viewModel);	
		 
		 });	
		 		
	</script>	
	
<?php include("_footer.php"); ?>		