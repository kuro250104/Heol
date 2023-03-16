var cart = 0;

function ajout() {
    cart++;
    document.getElementById("count").textContent = cart;
}
    document.getElementById("add_one").addEventListener("click", ajout);

function remove() {
    cart--;
    document.getElementById("count").textContent = cart;
}
    document.getElementById("delete_one").addEventListener("click", remove);

