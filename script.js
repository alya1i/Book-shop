// show nav bar icon bar
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar){
    bar.addEventListener('click',() => {
      //classList will read
        nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click',() => {
        nav.classList.remove('active');
    })
}

//for cart

class CartItem{
    constructor(name, img, price){
        this.name = name
        this.img=img
        this.price = price
        this.quantity = 1
   }
}

class LocalCart{
    static key = "cartItems"

    static getLocalCartItems(){
        let cartMap = new Map()
     const cart = localStorage.getItem(LocalCart.key)
     if(cart===null || cart.length===0)  return cartMap
        return new Map(Object.entries(JSON.parse(cart)))
    }

    static addItemToLocalCart(id, item){
        let cart = LocalCart.getLocalCartItems()
        if(cart.has(id)){
            let mapItem = cart.get(id)
            mapItem.quantity +=1
            cart.set(id, mapItem)
        }
        else
        cart.set(id, item)
       localStorage.setItem(LocalCart.key,  JSON.stringify(Object.fromEntries(cart)))
       updateCartUI()

    }

    static removeItemFromCart(id){
    let cart = LocalCart.getLocalCartItems()
    if(cart.has(id)){
        let mapItem = cart.get(id)
        if(mapItem.quantity>1)
       {
        mapItem.quantity -=1
        cart.set(id, mapItem)
       }
       else
       cart.delete(id)
    }
    if (cart.length===0)
    localStorage.clear()
    else
    localStorage.setItem(LocalCart.key,  JSON.stringify(Object.fromEntries(cart)))
       updateCartUI()
    }
}

//method of the Element interfac **
const cartIcon = document.querySelector('.fa-shopping-cart')
const wholeCartWindow = document.querySelector('.whole-cart-window')
wholeCartWindow.inWindow = 0
const addToCartBtns = document.querySelectorAll('.add-to-cart-btn')
addToCartBtns.forEach( (btn)=>{
    btn.addEventListener('click', addItemFunction)
}  )

function addItemFunction(e){
    const desc = e.target.parentElement;
    const id = desc.getAttribute("data-id")
    const img = desc.getElementsByTagName(`img`)[0].getAttribute('src')
    const name = desc.getElementsByTagName('h5')[0].innerText;
    let price = desc.getElementsByClassName('price')[0].innerText;
    price = parseInt(price.replace("$", ''));

    const item = new CartItem(name, img, price)
    LocalCart.addItemToLocalCart(id, item)
}



cartIcon.addEventListener('mouseover', ()=>{
if(wholeCartWindow.classList.contains('hide'))
wholeCartWindow.classList.remove('hide')
})

cartIcon.addEventListener('mouseleave', ()=>{

    setTimeout( () =>{
        if(wholeCartWindow.inWindow===0){
            wholeCartWindow.classList.add('hide')
        }
    } ,500 )

    })

 wholeCartWindow.addEventListener('mouseover', ()=>{
     wholeCartWindow.inWindow=1
 })

 wholeCartWindow.addEventListener('mouseleave', ()=>{
    wholeCartWindow.inWindow=0
    wholeCartWindow.classList.add('hide')
})


function updateCartUI(){
    const cartWrapper = document.querySelector('.cart-wrapper')
    cartWrapper.innerHTML=""
    const items = LocalCart.getLocalCartItems()
    if(items === null) return
    let count = 0
    let total = 0
    for(const [key, value] of items.entries()){
      //This method takes the name of the element as the parameter and creates that element
        const cartItem = document.createElement('div')
        cartItem.classList.add('cart-item')
        let price = value.price*value.quantity
        price = Math.round(price*100)/100
        count+=1
        total += price
        total = Math.round(total*100)/100
        cartItem.innerHTML =
        `
        <img src="${value.img}">
         <div class="details">
            <h5>${value.name}</h5>
             <span class="quantity">quantity : ${value.quantity}</span>
             <span class="price"><h4>price: ${value.price}</h4></span>
            </div>
            <div class="cancel"><i class="fas fa-window-close"></i></div>

            </div>


        `
       cartItem.lastElementChild.addEventListener('click', ()=>{
           LocalCart.removeItemFromCart(key)
       })
        cartWrapper.append(cartItem)
    }

    if(count > 0){
        cartIcon.classList.add('non-empty')
        let root = document.querySelector(':root')
        root.style.setProperty('--after-content', `"${count}"`)
        const subtotal = document.querySelector('.subtotal')
        subtotal.innerHTML = `
        <div class="subtotal">Subtotal: $${total}</div>`
    }
    else
    cartIcon.classList.remove('non-empty')
}
document.addEventListener('DOMContentLoaded', ()=>{updateCartUI()})()
