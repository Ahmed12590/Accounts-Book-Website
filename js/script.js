
// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
document.getElementById("imghead").style.width = "80px";
} else {
document.getElementById("imghead").style.width = "140px";
}
}




var sidemenu = document.getElementById("sidemenu");

function openmenu(){
sidemenu.style.right = "0";
console.log('hello');
}

function closemenu(){
sidemenu.style.right = "-200px";
}



//     window.addEventListener("click", myFunction);

// function myFunction() {
//         sidemenu.style.right = "-200px";
// }

// window.addEventListener('click', function(event) {
//         if (!sidemenu.contains(event.target)) {
//             console.log("clicked");
//             closemenu();
//         }
//     });


