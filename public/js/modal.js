    const logoutForm = document.getElementById('logout-form');
    
    const logoutButton = document.querySelector('.fa-sign-out-alt');
    
    const modalContainer = document.createElement('div');
    modalContainer.classList.add('modal-container');
    modalContainer.innerHTML = `
        <div class="modal-content">
        <p>Êtes-vous sûr de vouloir vous déconnecter ?</p>
        <div class="modal-buttons">
        <button class="btn-confirm">Confirmer</button>
        <button class="btn-cancel">Annuler</button>
        </div>
    </div>
    `;
    
    function openModal() {
        document.body.appendChild(modalContainer);
    }
    
    function closeModal() {
        document.body.removeChild(modalContainer);
    }
    
    logoutButton.addEventListener('click', () => {
        openModal();
    });
    
    modalContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('btn-confirm')) {
        logoutForm.submit();
    } else if (event.target.classList.contains('btn-cancel') || event.target.classList.contains('modal-close')) {
        closeModal();
    }
    });