<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>This is my modal content.</p>
  </div>
</div>

<script>
	// Wait until the document is loaded
	$(document).ready(function() {
	  // Set the target time for the modal
	  var targetTime = new Date();
	  targetTime.setHours(16,30,0,0);
	  
	  // Get the current time
	  var currentTime = new Date();
	  
	  // Calculate the time difference in milliseconds
	  var timeDiff = targetTime.getTime() - currentTime.getTime();
	  
	  // Show the modal after the time difference
	  setTimeout(function() {
	    $('#myModal').css('display', 'block');
	  }, timeDiff);
	  
	  // Close the modal when the close button is clicked
	  $('.close').click(function() {
	    $('#myModal').css('display', 'none');
	  });
	});
</script>