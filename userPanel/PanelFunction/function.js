$(document).ready(function () {

    // enable button to upload
    $("#profileImage").change(function (e) {
        // e.preventDefault();

        if ($('#profileImage').val()) {
            // console.log($('#profileImage').val());
            $("#uploadButton").removeAttr('disabled');
        } else {
            alert('Please select the Profile images First');
        }
    });

    // call php to upload profile images
    
    $("#updateImage").on("submit", function(e){
        e.preventDefault();
          var formData = new FormData(this);
  
        $.ajax({
          url : "/project/userPanel/PanelFunction/php/updateProfile.php",
          type : "POST",
          data : formData,
          contentType : false,
          processData: false,
          success: function(data){
              
            console.log(data);
            // $("#upload_file").val('');
          }
        });
        
      });



    });









