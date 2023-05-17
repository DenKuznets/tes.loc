import axios from "axios";
import Toast from "toastr";
(function () {
    const sendMail = document.getElementById("sendMail");
    const inputName = document.getElementById("inputName");
    const inputPhone = document.getElementById("inputPhone");
    const inputComments = document.getElementById("inputComments");
    const checkbox = document.getElementById("checkbox");

    if (checkbox) {
        checkbox.addEventListener("click", (e) => {
            if (inputName.value === "" || inputPhone.value === "") {
                sendMail.setAttribute("disabled", "disabled");
            } else {
                sendMail.toggleAttribute("disabled");
            }
        });
    }

    if (sendMail) {
        sendMail.addEventListener("click", (e) => {
            e.preventDefault();
            if (inputName.value === "") {
                inputName.classList.add("error-input");
            }

            if (inputPhone.value === "") {
                inputPhone.classList.add("error-input");
            }

            if (inputPhone.value !== "" && inputName.value !== "") {
                inputName.classList.remove("error-input");
                inputPhone.classList.remove("error-input");
                axios
                    .post("/form-contacts", {
                        name: inputName.value,
                        phone: inputPhone.value,
                        text: inputComments.value,
                    })
                    .then(function (response) {
                        if (response) {
                            inputName.value = "";
                            inputPhone.value = "";
                            inputComments.value = "";
                            document.querySelector(".modalForm").style.display =
                                "none";
                            document
                                .querySelector("body")
                                .classList.remove("lock");
                            Toast.success(
                                "Ваше сообщение успешно отправленно",
                                {
                                    interval: 3000,
                                }
                            );
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                        // перезагрузка страницы при ошибке отправки формы, как будто форма отправилась
                        window.location.reload();
                    });
            }
        });
    }
})();
