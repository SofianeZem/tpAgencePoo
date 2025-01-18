
const message = document.querySelector(".message");

if (message) {

    setTimeout(() => {
        message.style.transition = "opacity 0.5s ease";
        message.style.opacity = "0";
    }, 3000); 
}

var cp = document.querySelector("#cp");

console.log(cp);

cp.addEventListener("keyup", function () {
    if (isNaN(cp.value)) {
        document.querySelector(".error").innerHTML = "Pas valide";
        document.querySelector(".error").classList.add("no");
        document.querySelector(".error").classList.remove("yes");

    } else {
        document.querySelector(".error").innerHTML = "Valide";
        document.querySelector(".error").classList.add("yes");
        document.querySelector(".error").classList.remove("no");
    }

})

function isCPFR(psChaine) {
    let motif = "^\\d{5}$"
    let er = new RegExp(motif)
    return er.test(psChaine.trim())
}

document.querySelector(".ajout").addEventListener("click", (event) => {
    var cp = document.querySelector("#cp");

if (!isCPFR(cp.value)) {
    document.querySelector(".error").innerHTML = "Code postal non valide";
    event.preventDefault();

}else{
    document.querySelector(".error").innerHTML = "";
}
});

