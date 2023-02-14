/* this is used to make 1st textarea resize to its content */

const note_content = document.getElementById("note_content")

note_content.addEventListener("input", function(){
    this.style.height = "auto";
    this.style.height = (this.scrollHeight) + "px";
}, false)

