document.addEventListener('DOMContentLoaded', function() {
   window.open();
}, false);



//run when page is loaded
function loadFunction() {
  // Create an AJAX object
  var xhttp = new XMLHttpRequest();

  // Define the function to run on completion of the AJAX request
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Display the response from the PHP script
      alert(this.responseText);
    }
  };

  // Make the AJAX request to the PHP script
  xhttp.open("GET", "my-script.php?function=loadFunction", true);
  xhttp.send();
}

//Add new textareas
// $(document).ready(function() {
//     // Define the function to add a new text area
//     function addTextArea() {
//       // Create a new text area with the same attributes as the first one
//       var newTextArea = $('<textarea class="resizable" name="text[]" rows="1"></textarea>');
  
//       // Add the new text area to the container
//       $('#text-areas').append(newTextArea);
  
//       // Make the new text area resizable
//       newTextArea.resizable();
//     }
  
//     // Call the function when the button is clicked
//     $('#add-button').click(addTextArea);
//   });
  