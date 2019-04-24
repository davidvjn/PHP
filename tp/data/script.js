document.querySelector('table').addEventListener('click', function(el) {
    el = el.target;
    el.classList.add('red');    
})