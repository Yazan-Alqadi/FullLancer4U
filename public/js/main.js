function setphoto(event) {
    let reader = new FileReader();
    reader.onload = function () {
        let pre = document.getElementById("num1");
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
            // console.log(animationSectionLeft[i]);
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

function displayPassIcon() {
    let typeInput = document.getElementById("pass-id");
    let svgIcon = document.getElementById("div-id-svg");
    // console.log(x);
    if (typeInput.type == "password") {
        svgIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
      </svg>`;
        typeInput.type = "text";
    }
    else {
        svgIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
      </svg>`;
        typeInput.type = "password";
    }
}

function displayRePassIcon() {
    let typeInput = document.getElementById("re-pass-id");
    let svgIcon = document.getElementById("re-div-id-svg");
    // console.log(x);
    if (typeInput.type == "password") {
        svgIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
      </svg>`;
        typeInput.type = "text";
    }
    else {
        svgIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
      </svg>`;
        typeInput.type = "password";
    }
}

window.addEventListener('scroll', handleAnimation);

let textElements = document.getElementsByClassName("text-desc");
let showMoreButtons = document.getElementsByClassName("show-more");
let arr = [];

for (let i = 0; i < textElements.length; i++) {
    let span = textElements[i];
    arr.push(span.textContent.trim());
    let button = showMoreButtons[i];
    let truncatedText = span.textContent.trim().substring(0, 40); // احتفظ بأول 20 حرفًا
    span.textContent = truncatedText
    let isTruncated = true;

    button.addEventListener("click", createClickListener(span, button, truncatedText, i, isTruncated));
}

function createClickListener(span, button, truncatedText, i, isTruncated) {
    return function () {
        console.log(span.textContent);
        if (isTruncated) {
            span.textContent = arr[i]; // لا تقم بتعديل النص
            button.textContent = "Show Less";
        } else {
            span.textContent = truncatedText;
            button.textContent = "Show More";
        }

        isTruncated = !isTruncated;
    };
};


// let textElements1 = document.getElementsByClassName("text-desc-1");
// let showMoreButtons1 = document.getElementsByClassName("show-more-1");
// let arr1 = [];

// for (let i = 0; i < textElements1.length; i++) {
//     let span = textElements1[i];
//     arr1.push(span.textContent);
//     let button = showMoreButtons1[i];
//     let truncatedText = span.textContent.substring(0, 40); // احتفظ بأول 20 حرفًا
//     span.textContent = truncatedText
//     var isTruncated1 = true;

//     button.addEventListener("click", createClickListener1(span, button, truncatedText, i));
// }

// function createClickListener1(span, button, truncatedText, i) {
//     return function () {
//         console.log(span.textContent);
//         if (isTruncated1) {
//             span.textContent = arr1[i]; // لا تقم بتعديل النص
//             button.textContent = "Show Less";
//         } else {
//             span.textContent = truncatedText;
//             button.textContent = "Show More";
//         }

//         isTruncated1 = !isTruncated1;
//     };
// }