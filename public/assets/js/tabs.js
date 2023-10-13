let colFoutBlogPlusOne = document.getElementById("colFoutBlogPlusOne");
let colFoutBlogPlusTwo = document.getElementById("colFoutBlogPlusTwo");
let colFoutBlogPlusThree = document.getElementById("colFoutBlogPlusThree");

let colFoutBlogOne = document.getElementById("colFoutBlogOne");
let colFoutBlogTwo = document.getElementById("colFoutBlogTwo");
let colFoutBlogThree = document.getElementById("colFoutBlogThree");

colFoutBlogPlusOne.addEventListener("click", () => {
    colFoutBlogOne.classList.toggle("active");
    colFoutBlogPlusOne.classList.toggle("active");
});

colFoutBlogPlusTwo.addEventListener("click", () => {
    colFoutBlogTwo.classList.toggle("active");
    colFoutBlogPlusTwo.classList.toggle("active");
});

colFoutBlogPlusThree.addEventListener("click", () => {
    colFoutBlogThree.classList.toggle("active");
    colFoutBlogPlusThree.classList.toggle("active");
});
