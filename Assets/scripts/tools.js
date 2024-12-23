function interactiveExample() {
    var good = document.getElementById("example-image-good");
    var bad = document.getElementById("example-image-bad");

    if (good.style.display === "flex")
    {
        bad.style.display = "flex";
        good.style.display = "none";
    } else {
        bad.style.display = "none";
        good.style.display = "flex";
    }
}

function validateQuiz() {
    var questions = document.getElementsByClassName("quiz-question");
    
    var label = document.getElementById("score");
    var score = 0;
    for(let i = 0; i < questions.length; i++)
    {
        let answers = questions[i].getElementsByTagName("input");
        let listItems = questions[i].getElementsByTagName("li");
        for(let j = 0; j < answers.length; j++)
        {
            listItems[j].style.backgroundColor="#e3eaf1";
            if(answers[j].checked)
            {
                if(answers[j].value === "correct")
                {
                    score++;
                    listItems[j].style.backgroundColor="#4EE189";
                }
                else
                {
                    listItems[j].style.backgroundColor="#FF6767";
                }
            }
        }
    }
    
    label.innerHTML = "score: " + (score / questions.length) * 100 + "%";

}

function validateForm() {
    var flag = true;
    const pattern = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$");
    var email = document.forms["contactForm"]["email"];
    var name = document.forms["contactForm"]["name"];
    var phone = document.forms["contactForm"]["phone"];
    email.style.backgroundColor = "white";
    name.style.backgroundColor = "white";
    phone.style.backgroundColor = "white";
    if(!pattern.test(email.value))
    {
        email.style.backgroundColor = "pink";
        flag = false;
    }
    if(name.value == null || name.value == "") {
        name.style.backgroundColor = "pink";
        flag = false;
    }
    if(phone.value == null || phone.value == "") {
        phone.style.backgroundColor = "pink";
        flag = false;
    }
    return flag;
}
