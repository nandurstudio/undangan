const menuItems = document.querySelectorAll('.menu-item');
const menuBorder = document.querySelector(".menu-border");

const click = function() {
    const activeItem = document.querySelector(".menu-item.active");
    activeItem.classList.remove('active')
    this.classList.add("active");
    
    setBackgroundColor()
    calculateMenuBorderPosition(true)
}

const setBackgroundColor = () => {
    const activeItem = document.querySelector(".menu-item.active");
    const bgColor = getComputedStyle(activeItem).getPropertyValue("--bgColorBody");
    document.body.style.backgroundColor = bgColor;
}

const calculateMenuBorderPosition = (animateTransition = false) => {
    if(!animateTransition) {
        document.querySelector('.menu-border').classList.remove('transition')
    }

    const activeItem = document.querySelector(".menu-item.active")
    let box = activeItem.getBoundingClientRect();
    let left = box.left - ((menuBorder.offsetWidth - box.width) / 2) + "px";
    menuBorder.style.transform = `translate3d(${left}, 0 , 0)`;

    if(!animateTransition) {
        setTimeout(()=> {
            document.querySelector('.menu-border').classList.add('transition')
        }, 0)
    }
}

menuItems.forEach((item) => {
    item.addEventListener('click', click)
})

window.addEventListener('resize', function() {
    calculateMenuBorderPosition()
});

setBackgroundColor()
calculateMenuBorderPosition()