let close_btn = document.querySelector('#close')
let closed = document.querySelector('#closed')

let nav = document.querySelector('.side-nav')

close_btn.addEventListener('click',()=>{
    nav.style.display = "none"
    closed.style.display = "block"

})
closed.addEventListener('click',()=>{
    nav.style.display = "block"
    closed.style.display = "none"

})
