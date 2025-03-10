
function myFunction() {
    var navTabs = document.getElementsByClassName("nav-tabs")[0];
    var burger = document.getElementsByClassName("side-menu")[0];

    if (navTabs.style.display === "flex"){
        navTabs.style.display = "none";
    }else{
        navTabs.style.display = "flex";
        navTabs.style.flexDirection = "column";
    }
    if (burger.style.display === "flex"){
        burger.style.display = "none";
    }else{
        burger.style.display = "flex";
    }
}
  
