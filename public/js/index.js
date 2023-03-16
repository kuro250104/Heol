var cart = 0;

function ajout() {
    cart++;
    document.getElementById("count").textContent   = cart;
}

document.getElementById("add_one").addEventListener("click", ajout);


function remove() {
    cart--;
    document.getElementById("count").textContent   = cart;
}
    document.getElementById("delete_one").addEventListener("click", remove);


<div class="product_number">
    <button id="delete_one"type="button" class="btn_cart">-</button>
    <span id="count">1</span>
    <button id="add_one"type="button" class="btn_cart">+</button>
</div>
