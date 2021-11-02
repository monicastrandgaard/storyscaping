/* Når man trykker på krydset, "lukker" vores popup ved, at vi her siger, at den skal "display = none" */

document.getElementById("popupCloseButton").onclick = function() {
  document.getElementById("login-form").style.display = "none";
}

/* Her sørger vi for, at vores popup først vises, når man trykker på knappen, som har id'et "popup_button" */

document.getElementById("popup_button").onclick = function() {
  document.getElementById("login-form").style.display = "block";
}
