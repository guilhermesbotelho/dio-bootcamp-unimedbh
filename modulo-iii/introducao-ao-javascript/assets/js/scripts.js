var decreaseButton = document.getElementById("subtrair");
var increaseButton = document.getElementById("adicionar");

var currentNumber = document.getElementById("currentNumber")

var current = 0;

currentNumber.innerHTML = current;

function decrease() {
    if(current > -10){
    currentNumber.innerHTML = --current;
    };
}

function increase() {
    if(current < 10){
        currentNumber.innerHTML = ++current;
    };
}

function changeColor() {
    if(current < 0){
        currentNumber.style.color = "red";
    } else if (current > 0){
        currentNumber.style.color = "green";
    } else {
        currentNumber.style.color = "black";
    }
}

increaseButton.addEventListener("click", increase);
increaseButton.addEventListener("click", changeColor);
decreaseButton.addEventListener("click", decrease);
decreaseButton.addEventListener("click", changeColor);