$(document).ready(function() {

    // Handle form submit event
    $('#addForm').submit(function(e) {
      
      e.preventDefault(); // Prevent default form submission

      var etat = 0;

      if($('#MC').val()=="") {
        $('#MC').css('border-color', 'red');
        etat++;

      }

      else {
        $('#MC').css('border-color', '');
      }

      if($('#PassC').val()=="") {
        $('#PassC').css('border-color', 'red');
        etat++;

      }

      else {
        $('#PassC').css('border-color', '');

      }

      if(etat==0) {
        
        var formData = $(this).serialize();

      // Send form data to the server using AJAX
      $.ajax({
        type: 'POST',
        url: 'Add_Client.php', // Replace with your server-side script URL
        data: formData,
        success: function(response) {

          $('#addState').html('Successful').css('color', 'green');
          
            // Delay for 2 seconds
            setTimeout(function() {
                    window.location.href = 'Display_Client.php';
                }, 2000);
        },
        error: function(xhr, status, error) {
          // Handle error
          //console.log(error);
          $('#addState').html('Failed').css('color', 'red');
         
        }
      });

      }

      else {

        $('#addState').html('Please Fill all fields').css('color', 'red');
        
      }

      // Retrieve form data
      
      
    });
  
  });