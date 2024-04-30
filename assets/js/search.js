let btnSearch = document.querySelector("#search-btn");
let inputSearch = document.querySelector("#search-input");

btnSearch.addEventListener("click", searchRecipe);
function searchRecipe(){
    let recipe = inputSearch.value;
    location.href= "/main/search?name=" + recipe;
}