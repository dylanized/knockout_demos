<?php include("_header.php"); ?>	

	<!-- Knockout.js Demo :: using nested jQuery templates, and remove function -->

	<script type="text/javascript">
		// instantiate viewmodel		
		var viewModel = {};			
	</script>
	
	<div id="demo6" class="demo">
			
			<h3>History's Biggest Badasses</h3>
			
			<div data-bind='template: "listTemplate"'></div>
			
	</div>		
		
	<script type="text/html" id="listTemplate">
	
			<ul>
				
				<div data-bind='template: { name: "itemTemplate", foreach: personList }'></div>
       		
       		</ul>
       		       		
       		<div id="form-block">
       			<h4>Add a badass:</h4> 
	       		<input type="text" data-bind="value: newPerson" />
	       		<input type="submit" data-bind="click: addPerson" />
	       	</div>
        
	</script>

	<script type="text/html" id="itemTemplate">
	
			<li>${ name } <a href="#" title="" data-bind="click: function() { viewModel.deletePerson($data) }">x</a></li>
        
	</script>		
	
	<script type="text/javascript">
	
		// launch Knockout

		 $(document).ready(function(){
				
				// apply knockout
				
				viewModel = {
								
					personList: ko.observableArray([{ name: "Chuck Norris"}, { name: "Bruce Lee"}, {name: "Genghis Khan"}]),
					newPerson: ko.observable("Your Name Here"),
					addPerson: function () {
						// create temporary object
						var temp_name = viewModel.newPerson();
						if (temp_name) {
							temp_obj = { name: temp_name }
							// add to array and clear setting
						    viewModel.personList.push(temp_obj);
						    viewModel.newPerson("");
						}
					},
					deletePerson: function (obj) {
						this.personList.remove(obj);
					}
					
				};				

				ko.applyBindings(viewModel);	
		 
		 });	
		 		
	</script>	
	
<?php include("_footer.php"); ?>		