// Fonction de vérification de l'e-mail
function validateEmail(email) {
  const re = /\S+@\S+\.\S+/;
  return re.test(email);
}

// Récupération des éléments du formulaire
const form = document.getElementById("contact-form");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const messageInput = document.getElementById("message");
const errorElement = document.getElementById("error");

// Ajout de l'écouteur d'événement sur la soumission du formulaire
form.addEventListener("submit", (e) => {
  let messages = [];

  // Vérification du champ "nom"
  if (nameInput.value === "" || nameInput.value == null) {
    messages.push("Le champ 'nom' est requis");
  }

  // Vérification du champ "e-mail"
  if (emailInput.value === "" || emailInput.value == null) {
    messages.push("Le champ 'e-mail' est requis");
  } else if (!validateEmail(emailInput.value)) {
    messages.push("L'e-mail entré n'est pas valide");
  }

  // Vérification du champ "message"
  if (messageInput.value === "" || messageInput.value == null) {
    messages.push("Le champ 'message' est requis");
  }

  // Affichage des erreurs ou envoi du formulaire
  if (messages.length > 0) {
    e.preventDefault();
    errorElement.innerText = messages.join("\n");
  } else {
    alert("Formulaire envoyé !");
  }
});
