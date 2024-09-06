
//on medium and small screen sidemenu
var sidemenu = document.getElementById("sidemenu");

function openmenu(){
sidemenu.style.right = "0";
}

function closemenu(){
sidemenu.style.right = "-200px";
}





//calendly js
window.onload = function() {
    Calendly.initBadgeWidget({
      url: 'https://calendly.com/info-accsbook/30min',text:'Schedule a free call',color: '#2F4680',
      textColor: '#ffffff',width: '100%'});
  }

  //calendly calling on different link/buttons
  var calendyBtn = document.getElementById('calendlyBtn');
  calendyBtn.addEventListener("click", function() {
  Calendly.initPopupWidget({ url: 'https://calendly.com/info-accsbook/30min' });
    return false;
    });
            