function dragElement(elmnt) {
    var pos1 = 0,
        pos2 = 0,
        pos3 = 0,
        pos4 = 0;
    if (document.getElementById(elmnt.id + "header")) {
        /* if present, the header is where you move the DIV from:*/
        document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
    } else {
        /* otherwise, move the DIV from anywhere inside the DIV:*/
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
    }
}

function DivCreator() {
    let count = 0;

    this.createDiv = function () {
        count++;
        const mainId = 'mydiv-' + count;
        var marker_tab = document.getElementById('markup');
        var main_div = document.createElement('div');
        main_div.classList.add('draggable');
        main_div.setAttribute("id", mainId);
        var inner_div = document.createElement('div');
        inner_div.setAttribute('id', 'mydiv' + count + 'header');
        inner_div.innerText = "\u2756	"
        var editable_element = document.createElement('p');
        editable_element.setAttribute('id', 'txt-' + count);
        editable_element.setAttribute('contentEditable', 'true');
        main_div.appendChild(inner_div);
        main_div.appendChild(editable_element);
        marker_tab.appendChild(main_div);
        dragElement(document.getElementById(mainId));
    };
}

const divCreator = new DivCreator();

// Then, on your button click that creates the div:

document.querySelector('.div-creator').addEventListener('click', () => divCreator.createDiv());
