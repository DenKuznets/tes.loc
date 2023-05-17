console.log("accordion__services connected");

let acc = document.getElementsByClassName("accordion__header");

for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("accordion__header--active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            panel.classList.remove("accordion__panel--active");
            panel
                .querySelector(".accordion__panel-img")
                .classList.remove("accordion__panel-img--active");
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            setTimeout(() => {
                panel.classList.add("accordion__panel--active");
                panel
                    .querySelector(".accordion__panel-img")
                    .classList.add("accordion__panel-img--active");
            }, 250);
        }
    });
}
