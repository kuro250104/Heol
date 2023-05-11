var cart = 1;

function ajout() {
    cart++;
    document.getElementById("count").textContent = cart;
}
document.getElementById("add_one").addEventListener("click", ajout);

function remove() {
    if (cart > 1) { // Vérifie si le nombre de produits est supérieur à 1
        cart--;
        document.getElementById("count").textContent = cart;
    }
}
document.getElementById("delete_one").addEventListener("click", remove);

