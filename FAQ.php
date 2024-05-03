<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <style>
        
    body {
    background-image: url('../IWT-Project/images/back.png');
    background-color:black;
    background-size:cover; 
    background-position:center;
    background-repeat:no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    overflow-y: auto;
    font-family: Future;
    }


    .box {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: black;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
    position: relative; 
    z-index: 1;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: yellow;
}

.faq {
    margin-bottom: 20px;
}

.question {
    margin-bottom: 10px;
    color: white;
    cursor: pointer;
}

.question .arrow {
    display: inline-block;
    margin-left: 5px;
    transition: transform 0.3s ease-in-out;
}

.question.active .arrow {
    transform: rotate(45deg);
}

.answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-in-out;
    padding-left: 20px;
    border-left: 2px solid #ccc;
    color: white;
}
@font-face{
    font-family:Future;
    src: url(../IWT-Project/fonts/Unbounded/future.ttf);
}

.feedback-button {
    display: block;
    width: 100px;
    text-align: center;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: black;
    color: white;
    text-decoration: none;
    border: 2px solid yellow;
    border-color: yellow;
    border-radius: 10px;
    float: right;
    margin-right:50px;
    transition: background-color 0.5s;
}

.feedback-button:hover {
    background-color: yellow;
    color:black;
}
h3{
    text-align:right;
    color:yellow;
    margin-right:50px;
}
</style>

</head>

<body>
    <?php include 'Header.php'?>
    <br>
<div class="box">
        <h1>Frequently Asked Questions</h1>
        <div class="faq">
            <h2 class="question">How do I register to vote on the website? <span class="arrow">+</span></h2>
            <div class="answer">
                <p>You can register using the multiple 'Register' signs on the website. Just give it a click
                    and you will be directed to the registration page.
                </p>
            </div>
        </div>
        <div class="faq">
            <h2 class="question">Must I register to register to vote? <span class="arrow">+</span></h2>
            <div class="answer">
                <p>Unfortunately, having an account is mandatory for voting. So, if you plan on taking part in the voting,
                    you can create an account by clicking on 'Register'.
                </p>
            </div>
        </div>
        <div class="faq">
            <h2 class="question">Can I vote for the same category more than once? <span class="arrow">+</span></h2>
            <div class="answer">
                <p>No you can not. One user can only vote once for each category, so make your decision
                    after giving it a good thought.
                </p>
            </div>
        </div>
        <div class="faq">
            <h2 class="question">Must I register to vote? <span class="arrow">+</span></h2>
            <div class="answer">
                <p>A 'Vote successfully placed' message would have appeared on your screen after the submission.
                    If it didnt not appear, please do leave a report in our feedback
                </p>
            </div>
</div>
        <!-- Add more FAQ items here -->
    </div>
    <script>
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
    </script>

<a href="feedback.html" class="feedback-button">Feedback</a>
<br><br><br><br>
<h3>Your feedback is valuable</h3>
</body>
</html>

