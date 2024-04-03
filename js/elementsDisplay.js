 // Initialize the toast
 var myToast = document.getElementById('myToast');
 var toast = new bootstrap.Toast(myToast);

 // Show the toast on button click
 var toastButton = document.getElementById('toastButton');
 toastButton.addEventListener('click', function() {
   toast.show();
 });


