
var hinh = document.querySelector("#hinh");
var index = 0;
var imgArr = [];
document.body.onload = function () {
    for (var i = 0; i < 3; i++) {
        imgArr[i] = new Image();
        imgArr[i].src = "./view/image/anh" + (i + 1) + ".jpg";
    }
    _auto();

}

function _next() {
    index++;
    if (index > 2) index = 0;
    hinh.src = imgArr[index].src;
}

function _pre() {
    index--;
    if (index < 0) index = 2;
    hinh.src = imgArr[index].src;
}
var t;
function _auto() {
    clearInterval(t);
    t = setInterval("_next()", 2000);
}

const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});


