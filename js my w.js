let myHeading = document.querySelector("h1");
myHeading.textContent = "My personnal website";

let myImage = document.querySelector(".FEdev");

myImage.addEventListener("click", function () {
  let mySrc = myImage.getAttribute("src");
  if (
    mySrc ===
    "C:\\Users\\matth\\OneDrive\\Bureau\\Developpement\\HTML\\test_site_web\\contenu\\My W\\F-E-Dev.jfif"
  ) {
    myImage.setAttribute(
      "src",
      "C:\\Users\\matth\\OneDrive\\Bureau\\Developpement\\HTML\\test_site_web\\contenu\\My W\\F-E-Dev2.jfif"
    );
  } else {
    myImage.setAttribute(
      "src",
      "C:\\Users\\matth\\OneDrive\\Bureau\\Developpement\\HTML\\test_site_web\\contenu\\My W\\F-E-Dev.jfif"
    );
  }
});
