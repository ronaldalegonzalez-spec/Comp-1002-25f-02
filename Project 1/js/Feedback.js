const feedbackForm = document.getElementById("feedback-form");
const reviewsSection = document.getElementById("reviews-section");

if (feedbackForm && reviewsSection) {
    feedbackForm.addEventListener("submit", (event) => {
        event.preventDefault(); // evita recargar la página

        const name = document.getElementById("feedback-name").value;
        const rating = document.getElementById("feedback-rating").value;
        const comments = document.getElementById("feedback-comments").value;

        // Crear contenedor de review
        const reviewArticle = document.createElement("article");
        reviewArticle.classList.add("review-article");

        // Crear div de header y clonar imagen de un review existente
        const reviewHeader = document.createElement("div");
        reviewHeader.classList.add("review-header");

        // Copiar imagen de un review ya existente
        const existingAvatar = document.querySelector(".review-article .review-avatar");
        let avatarClone;
        if (existingAvatar) {
            avatarClone = existingAvatar.cloneNode(true); // copia completa
        } else {
            avatarClone = document.createElement("img");
            avatarClone.src = "img/Photo_perfil.png"; // fallback
            avatarClone.alt = "Profile picture";
            avatarClone.classList.add("review-avatar");
        }

        reviewHeader.appendChild(avatarClone);

        // Crear nombre del autor
        const author = document.createElement("h4");
        author.classList.add("review-author");
        author.textContent = name;

        reviewHeader.appendChild(author);

        // Agregar header al review
        reviewArticle.appendChild(reviewHeader);

        // Rating y comentario
        const ratingP = document.createElement("p");
        ratingP.classList.add("review-rating");
        ratingP.innerHTML = `<strong>Rating:</strong> ${rating}/5`;
        reviewArticle.appendChild(ratingP);

        const commentsP = document.createElement("p");
        commentsP.classList.add("review-text");
        commentsP.textContent = comments;
        reviewArticle.appendChild(commentsP);

        // Agregar al final de la sección
        reviewsSection.appendChild(reviewArticle);

        // Limpiar formulario
        feedbackForm.reset();
    });
}
