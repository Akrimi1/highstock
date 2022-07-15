(function($)){
	$(document).ready(function(){
		$.fn.customPaginate= function(options){
			var paginationContainer;
			var itemsToPaginate;

			var default = {
				itemsPerPage: 6
			};
			var settings ={};
			$.extend(settings, default, options);
			paginationContainer = $(settings.paginationContainer);

		}
	});
}	