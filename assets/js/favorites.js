if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
//remove favorites
function ready() {
    var revomeFavorites = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < revomeFavorites.length; i++) {
        var button = revomeFavorites[i]
        button.addEventListener('click', removeCartItem)
    }//add to favorites
    var addToCartButtons = document.getElementsByClassName('rating')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click', addItemToFavorites);
    }
} //remove function
    function removeCartItem(event) {
        var buttonClicked = event.target;
        buttonClicked.parentElement.parentElement.remove()
        //updateCartTotal()
    }
// What it will be adding
function addToFavoritesClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsById('title').innerHTML;
    var imageSrc = shopItem.getElementsByClassName('auction-thumb')[0].src
    addItemToFavorites(title, imageSrc)
}
//How the favorites will be displayed
function addItemToFavorites(title, imageSrc) {
    var cartRow = document.createElement('row mb-30-none justify-content-center')
    cartRow.classList.add('col-sm-10 col-md-6')
    var cartItems = document.getElementsByClassName('auction-item-2')[0]
    var cartRowContents = `
            <div class="row mb-30-none justify-content-center">
            <div class="col-sm-10 col-md-6">
            <div class="auction-item-2">
             <div class="auction-thumb">
            <img src="${imageSrc}"></div>
            div class="auction-content">
            <h6 class="title">${title}</6>
            <div class="text-center">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>
        </div>
        </div>
        </div>
        `
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
}

/*
function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('auction-item-2')[0]
    var cartRows = cartItemContainer.getElementsByClassName('col-sm-10 col-md-6')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addItemToFavorites)  
    }
}
*/