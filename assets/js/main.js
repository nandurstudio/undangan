// WOW.js initialization
new WOW().init();

// Portfolio filter functions
filterSelection("all");
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to portfolio buttons
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

// Scroll to top button
var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
});

// Fixed header on scroll
$(window).scroll(function(){
    if ($(window).scrollTop() >= 113) {
        $('header').addClass('fixed-header');
        $('.banner-main-con').addClass('banner-main-con2');
    } else {
        $('header').removeClass('fixed-header');
        $('.banner-main-con').removeClass('banner-main-con2');
    }
});

// Navigation active state
document.querySelectorAll('.nav-item a').forEach(function(link, index){
    link.addEventListener('click', function() {
        if(this.classList.contains('is-active')) {
            this.classList.remove('is-active');
        } else {
            const activeLink = document.querySelector('a.is-active');
            if (activeLink) {
                activeLink.classList.remove('is-active');
            }
            this.classList.add('is-active');
        }
    });
});

// Portfolio button active state
document.querySelectorAll('#myBtnContainer button').forEach(function(link, index){
    link.addEventListener('click', function() {
        if(this.classList.contains('active_button')) {
            this.classList.remove('active_button');
        } else {
            const activeLink = document.querySelector('#myBtnContainer button.active_button');
            if (activeLink) {
                activeLink.classList.remove('active_button');
            }
            this.classList.add('active_button');
        }
    });
});

// Download image function
function downloadImage() {
    source = 'assets/image/cv-img.png';
    const fileName = 'test-image.png';
    var el = document.createElement("a");
    el.setAttribute("href", source);
    el.setAttribute("download", fileName);
    document.body.appendChild(el);
    el.click();
    el.remove();
}

// Typing effect
const dynamicName = document.getElementById('dynamic-name');
const texts = ['Nandang Duryat', '3D Artist & Developer'];
let textIndex = 0;
let charIndex = 0;
let isDeleting = false;
let cursorVisible = true;

function blinkCursor() {
    cursorVisible = !cursorVisible;
}

setInterval(blinkCursor, 500); // Blink every 500ms

function typeWriter() {
    const currentText = texts[textIndex];
    let displayText = currentText.substring(0, charIndex);
    if (cursorVisible) {
        displayText += '|';
    }
    dynamicName.innerHTML = displayText || '&nbsp;'; // Use &nbsp; to maintain space

    if (!isDeleting && charIndex === currentText.length) {
        setTimeout(() => isDeleting = true, 2000);
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        textIndex = (textIndex + 1) % texts.length;
    } else {
        if (isDeleting) {
            charIndex--;
        } else {
            charIndex++;
        }
    }

    const speed = isDeleting ? 100 : 150;
    setTimeout(typeWriter, speed);
}

typeWriter();