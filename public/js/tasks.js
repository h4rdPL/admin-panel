let dragged;
const source = Object.values(document.getElementsByClassName("draggable"));
// const source = document.querySelector(".draggable");

    source.forEach(sor => {
        sor.addEventListener("click", (e) => {
        })
    })

source.forEach(sor => {
    sor.addEventListener("dragstart", (event) => {
        dragged = event.target;
    })
})

/* events fired on the drop targets */
const target = Object.values(document.getElementsByClassName("done"));
target.forEach(card => {
    card.addEventListener("dragover", (event) => {
        event.preventDefault();
    })
}, false)

target.forEach(card => {
    card.addEventListener("drop", (event) => {
        // prevent default action (open as link for some elements)
        event.preventDefault();
        // move dragged element to the selected drop target
        if (event.target.classList.contains("dropzone")) {
            dragged.parentNode.removeChild(dragged);
            event.target.appendChild(dragged);
        }
    })
})

let btns = document.querySelectorAll(".remove-btn");

btns.forEach(btn => {
    btn.addEventListener("click", (event) => {
        dragged = event.target.parentNode;

        dragged.parentNode.remove();

    })
})