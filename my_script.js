$("#submit").click( function() {
	$("#ack").html('<img src="ajax-loader.gif">LOADING');
	 $.post( $("#myForm").attr("action"),
	         $("#myForm :input").serializeArray(),
			 function(info) {

			   $("#ack").empty();
			   $("#ack").html(info);
			 });

	$("#myForm").submit( function() {
	   return false;
	});
});
