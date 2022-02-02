const popupLinks = document.querySelectorAll('.popup-link');
// const body = document.querySelector('body');
const lockPadding = document.querySelectorAll('.lock-padding');

let unlock = true;

const timeout = 800;

if (popupLinks.length > 0) {
    for(let i = 0; i < popupLinks.length; i++) {
        const popupLink = popupLinks[i];
        popupLink.addEventListener('click', function (e) {
            const popupName = popupLink.getAttribute('href').replace('#', '');
            const curentPopup = document.getElementById(popupName);
            popupOpen(curentPopup);
            e.preventDefault();
        });
    }
}
const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
    for (let i = 0; i < popupCloseIcon.length; i++) {
        const el = popupCloseIcon[i];
        el.addEventListener('click', function (e) {
            popupClose(el.closest('.popup'));
            e.preventDefault();
        });
    }
}

function popupOpen(curentPopup) {
    if (curentPopup && unlock) {
        const popupActive = document.querySelector('.popup.open');
        if (popupActive) {
            popupClose(popupActive, false);
        } else {
            // bodyLock();
        }
        curentPopup.classList.add('open');
        curentPopup.addEventListener('click', function (e) {
            if (!e.target.closest('.popup__content')) {
                popupClose(e.target.closest('.popup'));
            }
        });
    }
}
function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
        popupActive.classList.remove('open');
        if (doUnlock) {
            // bodyLock();
        }
    }
}

// function bodyLock() {
//     const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
//     if (lockPadding.length > 0) {
//     for (let i = 0; i < lockPadding.length; i++) {
//         const el = lockPadding[i];
//         el.getElementsByClassName.paddingRight = lockPaddingValue;
//         }
//     }
//     body.style.paddingRight = lockPaddingValue;
//     body.classList.add('lock');

//     unlock = false;
//     setTimeout(function () {
//         unlock = true;
//     }, timeout);
// }

// function bodyUnlock () {
//     setTimeout(function () {
//         for (let i = 0; i < lockPadding.length; i++) {
//             const el = lockPadding[i];
//             el.style.paddingRight = '0px';
//         }
//         body.style.paddingRight = '0px';
//         body.classList.remove('lock');
//     }, timeout);

//     unlock = false;
//     setTimeout(function () {
//         unlock = true;
//     }, timeout);
// }

document.addEventListener('keydown', function (e) {
    if (e.which === 27) {
        const popupActive = document.querySelector('.popup.open');
        popupClose(popupActive);
    }
})

// (function () {
//     if (!Element.prototype.closest) {
//         Element.prototype.closest = function (css) {
//             var node = this;
//             while (node) {
//                 if (node.matches(css)) return node;
//                 else node = node.parentElement;
//             }
//             return null;
//         };
//     }
// })();

// (function () {
//     if (!Element.prototype.matches) {
//         Element.prototype.matches = Element.prototype.matchesSelector ||
//         Element.prototype.webkitMatchesSelector ||
//         Element.prototype.mozMatchesSelector ||
//         Element.prototype.msMatchesSelector;
//     }
// })();

let registButton = document.querySelector('.popup__regist');
let popupPorol = document.querySelector('.popup__porol'),
    popupButtonOpen = document.querySelector('.popup__open'),
    popupSpan = document.querySelector('.popupIndex__span');

let downKey = document.querySelector('.downKey'),
    agreement = document.querySelector('.agreement__popup'),
    regBtn = document.querySelector('.reg__agreem');

let popupContent = document.querySelector('.popup__content');
    popupPochta = document.querySelector('.popup__pochta');


let activeColor = document.querySelector('.active_b'),
    popupButtonActive = document.querySelector('.agreem__popup-buttom > button'),
    popupTopActive = document.querySelector('.agreem__popup-top > button'),
    agreemSpan = document.querySelector('.agreem__popup-top > span');


    function registClick () {
        registButton.addEventListener('click', function () {
            if(popupPorol.style.display = 'block') {
                popupPorol.style.display = 'none';
                popupButtonOpen.style.display = 'none';
                popupSpan.style.display = 'none';
                downKey.style.display = 'block';
                agreement.style.display = 'flex';    
                regBtn.style.display = 'block';     
            }
        })
    }
    registClick ();

    popupTopActive.addEventListener('click', function() {
        if (agreement.style.display = 'flex') {
            if (!popupTopActive.classList.contains('active__agreem-b')) {
                agreemSpan.classList.add('active__agreem-b');
                activeColor.classList.remove('active__agreem-b');
                popupButtonActive.classList.remove('active__agreem');
                popupTopActive.classList.add('active__agreem');

            }
        }
    })
    popupButtonActive.addEventListener('click', function() {
        if (agreement.style.display = 'flex') {
            if (!popupButtonActive.classList.contains('active__agreem-b')) {
                activeColor.classList.add('active__agreem-b');
                agreemSpan.classList.remove('active__agreem-b');
                popupTopActive.classList.remove('active__agreem');
                popupButtonActive.classList.add('active__agreem');

            }
        }
    })


    regBtn.addEventListener('click', function () {
        if (regBtn.style.display = 'flex') {
            popupContent.style.display = 'none';
            popupPochta.style.display = 'block';
        }
    })
    

