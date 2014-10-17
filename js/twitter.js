jQuery(window).ready(function(){
            
    function ajax() {
    	
    	$.ajax({
        	url: '/gps/twitter.php',
        	type: 'GET',
        	dataType: 'json',
        	statusCode: {
			    404: function() {
			      	console.log('Error 404');
			    },
			    500: function() {
					console.log('Error 500');			    }
		  	},
        	success: function(json){
        		console.log(json);
        	},
        	error: function(){
        		console.log('Error with ajax');
        	}
		});

    }

    ajax();

    setInterval(ajax(),10000);

});