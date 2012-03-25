$(document).ready(function() {

  // Make slider div draggable, but only within the context of div#sliderContainer
  $('div#slider').draggable({ 
	containment:"#sliderContainer", 
 	axis: "y", 
        drag: function(event, ui) { 

	  brightness = 255 - ui.position.top;
	  $('span#posNum').html( brightness );	  

	  // AJAX call goes here
          $.get("serialMessenger.php", {pwmValue: brightness} );
          // console.log( brightness );
	} 
  });

});
