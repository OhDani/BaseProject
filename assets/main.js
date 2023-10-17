let titles = document.getElementsByClassName('title');
let subtitles = document.getElementsByClassName('sub-title');
let starts = document.getElementsByClassName('start');
window.addEventListener('scroll', function() {
        let value = window.scrollY;

        for (let i = 0; i < titles.length; i++) {
            titles[i].style.top = 25 + value * -0.06 + '%';
        }
        for (let i = 0; i < subtitles.length; i++) {
            subtitles[i].style.top = 38 + value * -0.06 + '%';
        }
        for (let i = 0; i < starts.length; i++) {
            starts[i].style.top = 49 + value * -0.06 + '%';
        }
    })
    // // Flying=================
let fly = document.getElementById("fly");
let x = document.documentElement.clientWidth; // Đặt x bằng độ rộng của khung hình
let y = 0;
let speed = 2; // Tốc độ bay
let direction = 1; // Hướng bay, 1 là xuống, -1 là lên

setInterval(() => {
    x += speed;
    y = Math.sin(x / 10) * 20 * direction; // Thay đổi tham số 20 tùy ý
    fly.style.left = "calc(50% + " + x + "px)";
    fly.style.top = "calc(120% + " + y + "px)";

    // Nếu con bọ bay ra khỏi khung hình, đổi hướng bay và đặt lại x
    if (x > document.documentElement.clientWidth || x < 0) {
        direction *= -1;
        x = direction > 0 ? 0 : document.documentElement.clientWidth;
    }
}, 20);
// Ẩn hiện header=================
const header = document.querySelector('.header_rest');
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScrollTop > lastScrollTop) {
        header.classList.add('hidden');
    } else {
        header.classList.remove('hidden');
    }

    lastScrollTop = currentScrollTop;
});
// TOPIC
//Account==================
var a = document.getElementById("login");
var b = document.getElementById("register");
var c = document.getElementById("btn");

// function register(){
//   a.style.left = "-400px";
//   b.style.left = "50px";
//   c.style.left = "110px";
// }
// function login(){
//   a.style.left = "50px";
//   b.style.left = "450px";
//   c.style.left = "0px";
// }
function register() {
    a.style.transform = "translateX(-400px)";
    b.style.transform = "translateX(-428px)";
    c.style.transform = "translateX(110px)";
}

function login() {
    a.style.transform = "translateX(0)";
    b.style.transform = "translateX(0)";
    c.style.transform = "translateX(0)";
}
// SHOW MENU=============
const navMenu_topic = document.getElementById('navbar_topic');
const navClose = document.getElementById('nav-close');
const navToggle = document.getElementById('nav-toggle');
//Menu show
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu_topic.classList.add('show-menu-topic')
    })
}
//Menu hidden
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu_topic.classList.remove('show-menu-topic')
    })
}
// SHOW MENU_HOME=================
const navMenu = document.getElementById('navbar');
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}
//Menu hidden
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}
// REMOVE MENU MOBILE
const navLink = document.querySelectorAll('.link');

function linkAction() {
    const navMenu_topic = document.getElementById('navbar_topic')
    navMenu_topic.classList.remove('show-menu-topic')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

// /* ======APPEAR======*/
// window.addEventListener("scroll", function () {
//   var slideElements = document.querySelectorAll(".img-list, .popular-plant");
//   for (var i = 0; i < slideElements.length; i++) {
//     var slideElement = slideElements[i];
//     var slidePosition = slideElement.getBoundingClientRect().top;
//     var screenHeight = window.innerHeight;

//     if (slidePosition < screenHeight) {
//       slideElement.classList.add("show-slide");
//     }
//   }
// });

/*=============== QUESTIONS ACCORDION ===============*/
const accordionItems = document.querySelectorAll('.questions__item')

accordionItems.forEach((item) => {
    const accordionHeader = item.querySelector('.questions__header')

    accordionHeader.addEventListener('click', () => {
        const openItem = document.querySelector('.accordion-open')

        toggleItem(item)

        if (openItem && openItem !== item) {
            toggleItem(openItem)
        }
    })
})

const toggleItem = (item) => {
        const accordionContent = item.querySelector('.questions__content')

        if (item.classList.contains('accordion-open')) {
            accordionContent.removeAttribute('style')
            item.classList.remove('accordion-open')
        } else {
            accordionContent.style.height = accordionContent.scrollHeight + 'px'
            item.classList.add('accordion-open')
        }

    }
    /*=============== SHOW SCROLL UP ===============*/
function scrollUp() {
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 400 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if (this.scrollY >= 400) scrollUp.classList.add('show-scroll');
    else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader() {
    const header = document.getElementById('header_rest')
        // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 80) header.classList.add('scroll-header');
    else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)
    /*============Hidden overflow-x=============*/
function handleScroll(event) {
    const body = event.target;

    if (body.scrollWidth > body.clientWidth) {
        body.classList.remove('disable-scrolling');
    } else {
        body.classList.add('disable-scrolling');
    }
}
/*========SHOP_LINK_PAGE====== */
function redirectToShopDetails() {
    window.location.href = "./shop_details.html";
}
/*=======UNCOMPLETE====== */
function click_icon() {
    alert("Unfinished function!");
}
var clickIcon = document.getElementsByClassName("click_icon");
for (var i = 0; i < clickIcon.length; i++) {
    clickIcon[i].addEventListener("click", click_icon);
}
/*=======INCREASE_DESC==========*/

const quantityInputs = document.querySelectorAll('.quantity input');
const increaseBtns = document.querySelectorAll('.increase-btn');
const decreaseBtns = document.querySelectorAll('.decrease-btn');
const priceSpans = document.querySelectorAll('.shoping__cart__price p');
const totalSpans = document.querySelectorAll('.shoping__cart__total span');

let currentRowIndex = 0; // Chỉ số của món hàng hiện tại đang được thao tác

// // Lặp qua từng button tăng số lượng
// increaseBtns.forEach((btn, index) => {
//     btn.addEventListener('click', () => {
//         let quantity = parseInt(quantityInputs[currentRowIndex].value);
//         quantity += 1;
//         quantityInputs[currentRowIndex].value = quantity;
//         updateTotalPrice(currentRowIndex);
//         updateSubtotal();
//     });
// });

// // Lặp qua từng button giảm số lượng
// decreaseBtns.forEach((btn, index) => {
//     btn.addEventListener('click', () => {
//         let quantity = parseInt(quantityInputs[currentRowIndex].value);
//         if (quantity > 0) {
//             quantity -= 1;
//             quantityInputs[currentRowIndex].value = quantity;
//             updateTotalPrice(currentRowIndex);
//             updateSubtotal();
//         }
//     });
// });

// Cập nhật giá trị tổng tiền cho từng hàng
function updateTotalPrice(index) {
    const quantity = parseInt(quantityInputs[index].value);
    const price = parseFloat(priceSpans[index].textContent.replace('$', ''));
    const totalPrice = quantity * price;
    totalSpans[index].textContent = totalPrice.toFixed(2);

    // Cập nhật tổng số tiền
    updateSubtotal();
}

// Cập nhật tổng số tiền của toàn bộ giỏ hàng
function updateSubtotal() {
    let subtotal = 0;
    totalSpans.forEach((span) => {
        const totalPrice = parseFloat(span.textContent.replace('$', ''));
        subtotal += totalPrice;
    });

    const subtotalSpan = document.querySelector('.shoping__checkout li:first-child span');
    const totalSpan = document.querySelector('.shoping__checkout li:last-child span');
    subtotalSpan.textContent = '$' + subtotal.toFixed(2);
    totalSpan.textContent = '$' + subtotal.toFixed(2);
}

// Lặp qua từng button tăng số lượng
increaseBtns.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        let quantity = parseInt(quantityInputs[index].value);
        quantity += 1;
        quantityInputs[index].value = quantity;
        updateTotalPrice(index);
    });
});

// Lặp qua từng button giảm số lượng
decreaseBtns.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        let quantity = parseInt(quantityInputs[index].value);
        if (quantity > 0) {
            quantity -= 1;
            quantityInputs[index].value = quantity;
            updateTotalPrice(index);
        }
    });
});

// Tính toán tổng số tiền ban đầu
updateSubtotal();
/*========SLIDE_IMAGE_MINOR======== */
document.addEventListener("DOMContentLoaded", function() {
    var imageContainer = document.querySelector(".image-content");
    var overlay = document.createElement("div");
    overlay.classList.add("overlay");
    imageContainer.appendChild(overlay);

    imageContainer.addEventListener("mouseenter", function() {
        document.body.style.overflow = "hidden";
    });

    imageContainer.addEventListener("mouseleave", function() {
        document.body.style.overflow = "";
    });
});
// ====POP-UP=========
function toggle() {
    var Card = document.getElementsByClassName('card')
    Card.classList.toggle('acitve');
    var popUp = document.getElementById('popup');
    popUp.classList.toggle('acitve');
}