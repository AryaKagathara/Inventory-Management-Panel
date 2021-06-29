var navOpen = 0;
function Nav() {
  if (navOpen == 0) {
    navOpen = 1;
    document.getElementById("mySidebar").style.width = "101%";
    document.getElementById("main").style.marginLeft = "101%";
    console.log("Open");
  } else {
    navOpen = 0;
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
}