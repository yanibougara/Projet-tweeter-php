
const messageInput = document.getElementById('contenu');

function openModal() {
  document.getElementById('myModal').style.display = 'block';
}

function closeModal() {
  document.getElementById('myModal').style.display = 'none';
}

// écoutez l'événement de saisie de l'utilisateur dans l'input de message
messageInput.addEventListener('input', () => {
  // stockez le contenu de l'input dans le localStorage
  localStorage.setItem('draftMessage', messageInput.value);
});

// vérifiez si un message en cours d'écriture existe dans le localStorage
const draftMessage = localStorage.getItem('draftMessage');
if (draftMessage) {
  // remplacez le contenu de l'input par le message en cours d'écriture
  messageInput.value = draftMessage;
}
