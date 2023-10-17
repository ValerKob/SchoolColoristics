let colFoutBlogPlusOne = document.getElementById("colFoutBlogPlusOne");
let colFoutBlogPlusTwo = document.getElementById("colFoutBlogPlusTwo");
let colFoutBlogPlusThree = document.getElementById("colFoutBlogPlusThree");

let colFoutBlogOne = document.getElementById("colFoutBlogOne");
let colFoutBlogTwo = document.getElementById("colFoutBlogTwo");
let colFoutBlogThree = document.getElementById("colFoutBlogThree");

let colFoutBlogOneWrap = document.getElementById("colFoutBlogOneWrap");
let colFoutBlogTwoWrap = document.getElementById("colFoutBlogTwoWrap");
let colFoutBlogThreeWrap = document.getElementById("colFoutBlogThreeWrap");

colFoutBlogOneWrap.addEventListener("click", () => {
    colFoutBlogOne.classList.toggle("active");
    colFoutBlogPlusOne.classList.toggle("active");
});

colFoutBlogTwoWrap.addEventListener("click", () => {
    colFoutBlogTwo.classList.toggle("active");
    colFoutBlogPlusTwo.classList.toggle("active");
});

colFoutBlogThreeWrap.addEventListener("click", () => {
    colFoutBlogThree.classList.toggle("active");
    colFoutBlogPlusThree.classList.toggle("active");
});
