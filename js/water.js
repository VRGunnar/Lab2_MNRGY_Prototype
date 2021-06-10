let slider = document.getElementById("myRange");
let output = document.getElementById("temp");
let boiler = document.getElementById("boilerTemp");

output.innerHTML = slider.value + "°C";
boiler.innerHTML = slider.value + "°C";

slider.oninput = function () {
    output.innerHTML = this.value + "°C";
    boiler.innerHTML = this.value + "°C";
}