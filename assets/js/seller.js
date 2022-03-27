const selected = document.querySelector(".selected");
const selects = document.querySelector(".selects");
const optionsContainers = document.querySelector(".options-containers");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");
const optionsLists = document.querySelectorAll(".options");

selected.addEventListener("click", () => {
  optionsContainers.classList.toggle("active");
  
});

selects.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
  
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainers.classList.remove("active");
  });
});
  optionsLists.forEach(o => {
  o.addEventListener("click", () => {
  selects.innerHTML = o.querySelector("label").innerHTML;
  optionsContainer.classList.remove("active");
  
});
});

function myFunction() {
  var x = document.getElementById("myFile").multiple;
  document.getElementById("demo").innerHTML = x;
}
