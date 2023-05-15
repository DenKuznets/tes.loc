(function () {
    const buttons = document.querySelectorAll("#popUp");

    function openModal(modalForm) {
        modalForm.style.display = "block";
        document.body.classList.add("lock");
        const close = modalForm.querySelector(".closeForm");
        close.onclick = () => {
            closeModal(modalForm);
        };
        
        window.onclick = (event) => {
            // console.log(event.target);
            if (event.target === modalForm || event.target.classList.contains('modalForm')) {
                closeModal(event.target);
            }
        };
    }

    function closeModal(modalForm) {
        modalForm.style.display = "none";
        document.body.classList.remove("lock");
    }

    buttons.forEach((val) => {
        val.addEventListener("click", (e) => {
            e.preventDefault();
            // console.log(e.target);
            switch (true) {
                case e.target.classList.contains("popup-feedback-btn"):
                    openModal(document.getElementById("popup-feedback"));
                    break;
                case e.target.closest('#popUp').classList.contains("popup-addserv"):
                    openModal(document.getElementById("popup-addserv"));
                    break;
            }
        });
    });
})();