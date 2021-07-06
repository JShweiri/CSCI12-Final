let url = window.location.href;

if (url.includes("about") || url.includes("About")){
document.getElementById("about").classList.add('active');
}
else
if (url.includes("news") || url.includes("News")){
document.getElementById("news").classList.add('active');
}
else
if (url.includes("similar") || url.includes("Similar")){
document.getElementById("similar-species").classList.add('active');
}
else
if (url.includes("donate") || url.includes("Donate")){
document.getElementById("donate").classList.add('active');
}
else
if (url.includes("game") || url.includes("Game")){
document.getElementById("manta-game").classList.add('active');
}
else {
document.getElementById("home").classList.add('active');
}
