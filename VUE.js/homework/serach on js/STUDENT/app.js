// Your code !! 
// call this method
let app = document.getElementById('app');
let input = document.getElementById('goal')
let button = document.getElementById('button');

// function for click results on the button
button.addEventListener('click', result)

//  creat function for the result ul li
function result() {
    let ul = document.createElement('ul');
    let li = document.createElement('li');
    li.innerText = input.value;
    ul.appendChild(li);
    app.appendChild(ul);
}