// When the user scrolls down 50px from the top of the document, change the header's color
window.onscroll = function () {
    scrollFunction();
    scrollFunctionMobile();
};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("navigation").setAttribute("class", "header-scroll");
    } else {
        document.getElementById("navigation").removeAttribute("class");
    }
}

function scrollFunctionMobile() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("mobileHeader").setAttribute("class", "header-scroll-mobile");
    } else {
        document.getElementById("mobileHeader").removeAttribute("class");
    }
}

function showSmartKey() {
    let item = document.getElementById("smartKeyContent");
    item.classList.remove("hide");
}

function hideSmartKey() {
    let item = document.getElementById("smartKeyContent");
    item.classList.add("class", "hide");
}

function showLuggage() {
    let item = document.getElementById("luggageContent");
    item.classList.remove("hide");
}

function hideLuggage() {
    let item = document.getElementById("luggageContent");
    item.classList.add("class", "hide");
}

function showFuel() {
    let item = document.getElementById("smartFrontRefuelContent");
    item.classList.remove("hide");
}

function hideFuel() {
    let item = document.getElementById("smartFrontRefuelContent");
    item.classList.add("class", "hide");
}

function showBlueCore() {
    let item = document.getElementById("blueCoreContent");
    item.classList.remove("hide");
}

function hideBlueCore() {
    let item = document.getElementById("blueCoreContent");
    item.classList.add("class", "hide");
}

function showSeat() {
    let item = document.getElementById("seatContent");
    item.classList.remove("hide");
}

function hideSeat() {
    let item = document.getElementById("seatContent");
    item.classList.add("class", "hide");
}

function showLed() {
    let item = document.getElementById("ledContent");
    item.classList.remove("hide");
}

function hideLed() {
    let item = document.getElementById("ledContent");
    item.classList.add("class", "hide");
}

function showFootStep() {
    let item = document.getElementById("footstepContent");
    item.classList.remove("hide");
}

function hideFootStep() {
    let item = document.getElementById("footstepContent");
    item.classList.add("class", "hide");
}

function showTire() {
    let item = document.getElementById("tireContent");
    item.classList.remove("hide");
}

function hideTire() {
    let item = document.getElementById("tireContent");
    item.classList.add("class", "hide");
}

function showSpeedo() {
    let item = document.getElementById("speedoContent");
    item.classList.remove("hide");
}

function hideSpeedo() {
    let item = document.getElementById("speedoContent");
    item.classList.add("class", "hide");
}

function showBuble() {
    let item = document.querySelectorAll(".sales-buble");
    for (let i = 0; i < item.length; i++) {
        item[i].classList.toggle("hide");
    }
}