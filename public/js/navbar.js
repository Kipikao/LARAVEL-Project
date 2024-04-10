const alert3 = document.querySelector("#alert-3");
const buttonset = document.querySelector(".buttonset");

if(alert3 !== null){
buttonset.addEventListener("click", () => {
    const visibility = alert3.getAttribute("data-visible");

    if (visibility === "false") {
        alert3.setAttribute("data-visible", true);
        buttonset.setAttribute("aria-expanded", true);
     } else if (visibility === "true"){
        alert3.setAttribute("data-visible", false);
        buttonset.setAttribute("aria-expanded", false);
    }
});}

