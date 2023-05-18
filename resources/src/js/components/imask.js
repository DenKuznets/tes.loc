import inputMask from "inputmask";
console.log("input mask здесь, вешает маску на все элементы с аттрибутом name='phone'");
(() => {
    const inputs = document.querySelectorAll("[name='phone']");
    for (let input of inputs) {
        inputMask("+7 (999) 999 99-99").mask(input);
    }
})();
