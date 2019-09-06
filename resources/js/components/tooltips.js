let tooltips = {}; 

(function($){
	this.initTooltips = function(){
        $('[data-toggle="tooltip"]').tooltip();
	};
}).apply(tooltips, [jQuery]);