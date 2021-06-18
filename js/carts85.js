var cart = {};


function init() {
    var hash = window.location.hash.substring(1);
    console.log(hash);
    $.post(
        "core.php",
        {
            "action" : "loadGoods"
        },
        showCart
    );
}

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        init();
        }
    else {
        $('.main-cart').html('<h2>The basket is empty!</h2><br><br><br><br><br>');
    }
}
var totalsumma = 0.00000000; 
var totalsumma2 = 0.00000000; 

function showCart(data) {   

    if (!isEmpty(cart)) {
        $('.main-cart').html('<h2>The basket is empty!</h2><br><br><br><br><br>');
    }

    else {
    	data = JSON.parse(data);
  		console.log(data);
        var out = '';
            for (var id in cart) {                      
                out += `<p>${data[id].name}</p>`;              
            }

            $('.dobavka').html(out);
            $('.delete').on('click', deleteGoods);
      
    }

}

    function deleteGoods() {
        var id = $(this).attr('data-id');
        delete cart[id];
        saveCart();
        init();
    }


function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function isEmpty(object) {
    for (var AuthorID in object)
    if (object.hasOwnProperty(AuthorID)) return true;
    return false;
}


$(document).ready(function () {
   loadCart();
});