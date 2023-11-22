window.onload = function() {
    var fileInput = document.getElementById('inputGroupFile01');
    fileInput.onchange = function() {
        showImageName(fileInput);
    };
}

function showImageName(input) {
    if (input.files && input.files[0]) {
        var fileName = input.files[0].name;
        document.getElementById("imageLabel").innerText = fileName;
    }
}




$(document).ready(function() {
    $('#blogForm').submit(function(event) {
      event.preventDefault();
  
      $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: $(this).serialize(),
        success: function(response) {
          $('#modalMessage').text(response.message);
          $('#myModalPopup').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.responseText); // Log the full response for debugging purposes
            $('#modalMessage').text('Error: ' + errorThrown);
            $('#myModalPopup').modal('show');
          }
          
      });
    });
  
    $('#myModalPopup').on('hidden.bs.modal', function() {
      $(this).find('#blogForm')[0].reset(); // Reset the form when the modal is closed
    });
  
    $('#myModalPopup .btn').on('click', function() {
      $('#myModalPopup').modal('hide'); // Hide the modal when the button is clicked
    });
  
    $('#myModalPopup .popupclose').on('click', function() {
      $('#myModalPopup').modal('hide'); // Hide the modal when the button is clicked
    });
  });
  