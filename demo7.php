<?php include("_header.php"); ?>	
	
	<!-- Knockout.js Demo :: using nested templates -->
		
	<div id="demo7" class="demo">
			
			<h3>History's Biggest Badasses</h3>
			
			<div data-bind='template: "listTemplate"'></div>
			
	</div>
		
	<script type="text/html" id="listTemplate">
	
			<ul>
				
				<div data-bind='template: { name: "itemTemplate", foreach: personList }'></div>
       		
       		</ul>
       		
       		<div>
       			<h4>Add a badass:</h4> 
	       		<input type="text" id="addField" />
	       		<input type="submit" data-bind="click: addPerson" />
	       	</div>
        
	</script>

	<script type="text/html" id="itemTemplate">
	
			<li>${ name }</li>
        
	</script>		
	
	<script type="text/javascript">
	
		// launch Knockout
	
		 $(document).ready(function(){
		 
				// build viewmodel and apply knockout
				
				var viewModel = {};

				viewModel.personList = ko.observableArray([{ name: "Chuck Norris"}, { name: "Bruce Lee"}, {name: "Genghis Khan"}]);

				viewModel.addPerson = function () {	
					var person2 = $("#addField").val();
					console.log(person2);   
					obj = { name: person2};
				    viewModel.personList.push(obj); 
				}

				ko.applyBindings(viewModel);	
		 
		 });	
		 		
	</script>	
	
<?php include("_footer.php"); ?>	