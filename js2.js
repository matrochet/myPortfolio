CVimage = document.querySelector(".CV");

CVimage.addEventListener("click", function () {
  let mySrc = CVimage.getAttribute("src");
  if (
    mySrc ===
    "C:\\Users\\matth\\OneDrive\\Bureau\\Developpement\\HTML\\test_site_web\\contenu\\My W\\ex-pro.png"
  ) {
    console.log("test");
    CVimage.setAttribute(
      "src",
      "C:\\Users\\matth\\OneDrive\\Bureau\\Developpement\\HTML\\test_site_web\\contenu\\My W\\competence.png"
    );
  } else {
    CVimage.setAttribute(
      "src",
      "C:\\Users\\matth\\OneDrive\\Bureau\\Developpement\\HTML\\test_site_web\\contenu\\My W\\ex-pro.png"
    );
  }
});
