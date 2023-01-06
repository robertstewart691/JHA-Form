document.getElementById("footer").style.pageBreakAfter = "always";

document.querySelector("input").focus();

var input = document.querySelector("input");
input.addEventListener("Submit", function(event) {
   console.log("Saved", format.elements.value.value); 
   event.preventDefault });