/*https://www.youtube.com/watch?v=j_Xa7Kn59Es*/
document.addEventListener("DOMContentLoaded", function() {
    const questions = document.querySelectorAll(".question");

    questions.forEach(question => {
        question.addEventListener("click", function() {
            const answer = this.nextElementSibling;
            this.classList.toggle("active");
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });
});