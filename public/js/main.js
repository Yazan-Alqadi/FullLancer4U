function setphoto(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var pre = document.getElementById("num1");
        pre.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

// for animation

const animationSectionLeft = document.querySelectorAll('.load-from-left-0');
const animationSectionRight = document.querySelectorAll('.load-from-right-0');

function handleAnimation() {
    for (let i = 0; i < animationSectionLeft.length; i++) {
        if (isElementInView(animationSectionLeft[i])) {
            console.log(animationSectionLeft[i]);
            animationSectionLeft[i].classList.add('in-view-left');
        }
    }

    for (let i = 0; i < animationSectionRight.length; i++) {
        if (isElementInView(animationSectionRight[i])) {
            animationSectionRight[i].classList.add('in-view-right');
        }
    }
}

function isElementInView(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom >= 0 &&
        rect.left >= 0 &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

window.addEventListener('scroll', handleAnimation);


