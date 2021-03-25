var open = 0;
function Nav() {
  if (open == 0) {
    open = 1;
    document.getElementById("mySidebar").style.width = "101%";
    document.getElementById("main").style.marginLeft = "101%";
    console.log("Open");
  } else {
    open = 0;
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
}
