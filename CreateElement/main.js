let newElement = document.createElement('h2');
document.body.appendChild(newElement)
newElement.textContent="Nikodem Tomczak"

let akapit = document.createElement("p");
let content=document.createTextNode("Nowy akapit");
akapit.appendChild(content);
let parent=document.querySelector('#div1')
let child = document.querySelector('#p1')
parent.replaceChild(akapit,child)

