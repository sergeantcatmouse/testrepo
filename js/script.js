function w3_open() {
    document.getElementById("main").style.marginLeft = "50%";
    document.getElementById("mySidebar").style.width = "50%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("mySidebar").style.color = "white";
    document.getElementById("mySidebar").style.backgroundColor = "#111";
    document.getElementById("openNav").style.display = "inline-block";
}

function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
}

function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-indigo";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-indigo", "");
    }
}

function myAccFuncx() {
    var x = document.getElementById("demoAccx");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-indigo";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-indigo", "");
    }
}

function myAccFuncxx() {
    var x = document.getElementById("demoAccxx");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-indigo";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-indigo", "");
    }
}

