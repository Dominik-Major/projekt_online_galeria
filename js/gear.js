//add active class to accordion on click
const accordion = document.getElementsByClassName("accordion");
for(let a of accordion){
    a.addEventListener("click", function(){
        this.classList.toggle("active");
    })
}