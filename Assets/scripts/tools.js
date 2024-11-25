function accessibility() {
    var div = document.getElementById("accessiblity");
    if(div.className === "on") {
        div.className = "off";
    } else {
        div.className = "on"; 
    }
}

function contrast() {
    var div = document.getElementById("contrast");
    if(div.className === "on") {
        div.className = "off";
    } else {
        div.className = "on"; 
    }
}

function repetition() {
    var div = document.getElementById("repetition");
    if(div.className === "on") {
        div.className = "off";
    } else {
        div.className = "on"; 
    }
}

function alignment() {
    var div = document.getElementById("alignment");
    if(div.className === "on") {
        div.className = "off";
    } else {
        div.className = "on"; 
    }
}

function proximity() {
    var div = document.getElementById("accessibility");
    if(div.className === "on") {
        div.className = "off";
    } else {
        div.className = "on"; 
    }
}

function validateQuiz() {
    var quiz = document.getElementById("quiz");
    var questions = quiz.getElementsByTagName("fieldset");
    
    var label = document.getElementById("score");
    var score = 0;
    for(let i = 0; i < questions.length; i++)
    {
        let answers = questions[i].getElementsByTagName("input");
        let divs = questions[i].getElementsByTagName("div");
        for(let j = 0; j < answers.length; j++)
        {
            divs[j].style.backgroundColor="#F0FBFF";
            if(answers[j].checked)
            {
                if(answers[j].value === "correct")
                {
                    score++;
                    divs[j].style.backgroundColor="green";
                }
                else
                {
                    divs[j].style.backgroundColor="red";
                }
            }
        }
    }
    
    label.innerHTML = "score: " + (score / questions.length) * 100 + "%";

}