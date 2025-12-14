// feedback form script
// handle user feedback submission

const feedbackForm = document.getElementById("feedback-form");
const reviewsSection = document.getElementById("reviews-section");

// check if form and reviews section exist
if (feedbackForm && reviewsSection) {

    // form submit event
    feedbackForm.addEventListener("submit", (event) => {
        event.preventDefault(); // prevent page reload

        // get values from form inputs
        const name = document.getElementById("feedback-name").value;
        const rating = document.getElementById("feedback-rating").value;
        const comments = document.getElementById("feedback-comments").value;

        // create review article container
        const reviewArticle = document.createElement("article");
        reviewArticle.classList.add("review-article");

        // create review header and clone avatar image
        const reviewHeader = document.createElement("div");
        reviewHeader.classList.add("review-header");

        // clone existing avatar image if available
        const existingAvatar = document.querySelector(".review-article .review-avatar");
        let avatarClone;
        if (existingAvatar) {
            avatarClone = existingAvatar.cloneNode(true); // full copy
        } else {
            // fallback avatar if none exists
            avatarClone = document.createElement("img");
            avatarClone.src = "img/Photo_perfil.png";
            avatarClone.alt = "Profile picture";
            avatarClone.classList.add("review-avatar");
        }

        reviewHeader.appendChild(avatarClone);

        // create author name
        const author = document.createElement("h4");
        author.classList.add("review-author");
        author.textContent = name;

        reviewHeader.appendChild(author);

        // add header to review
        reviewArticle.appendChild(reviewHeader);

        // create rating paragraph
        const ratingP = document.createElement("p");
        ratingP.classList.add("review-rating");
        ratingP.innerHTML = `<strong>Rating:</strong> ${rating}/5`;
        reviewArticle.appendChild(ratingP);

        // create comment paragraph
        const commentsP = document.createElement("p");
        commentsP.classList.add("review-text");
        commentsP.textContent = comments;
        reviewArticle.appendChild(commentsP);

        // append review to reviews section
        reviewsSection.appendChild(reviewArticle);

        // reset form
        feedbackForm.reset();
    });
}
