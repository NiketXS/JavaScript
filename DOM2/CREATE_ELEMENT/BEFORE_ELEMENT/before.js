let container = document.createElement("div");
let p = document.createElement("p");
// <div><p></p></div>
container.appendChild(p);
let span = document.createElement("span");
p.before(span); //span wstawiamy przed p
console.log(container.outerHTML); //expected output: "<div><span></span><p></p></div>"
