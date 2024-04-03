function displayImage (){
$(document).ready(function (e) {
  $("#formUploadImage").on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
          url: "php/imageRecipe.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
          cache: false,
      processData: false,
      success: function(data)
        {
        $("#displayImageRecipe").html(data);
        },
        error: function(data)
        {
          console.log("error");
              console.log(data);
        }
     });
  }));
});
}
