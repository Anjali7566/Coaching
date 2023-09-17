var x = document.getElementById("login")
var y = document.getElementById("signup")
var z = document.getElementById("btn")
var cpt = document.getElementById("cp");
var und = document.querySelector(".undcon");

function signup(){
    x.style.left = "-40rem";
    y.style.left = "-25rem";
    z.style.left = "10.6rem";
    cpt.innerHTML = "Signup into your account";
    und.style.height = "51rem";
}

function login(){
    x.style.left = "9rem";
    y.style.left = "29rem";
    z.style.left = "0rem";
    cpt.innerHTML = "Login into your account";
    und.style.height = "41rem";
}
