<?php
    require_once("assets/inc/header.inc.php");
?>
    <link rel="stylesheet" href="./assets/css/priciples.css">
    <main>
        <section>
            <div class="principle-text-img">
                <div class="principle-text">
                    <h1>Repetition</h1> 
                    <p>
                        Repetition refers to the strategic use of recurring design elements 
                        throughout the site to establish a consistent, cohesive experience for 
                        visitors. By repeating visual and structural components, such as colors, 
                        fonts, shapes, and patterns, a sense of familiarity is created, which 
                        helps users navigate the site more easily. Repetition adds to an 
                        intuitive experience and design that contributes to a professional 
                        appearance that encourages user engagement and trust. Proper repetition 
                        is another way that users can distinguish between a valid website and a 
                        phishing site.
                        <br><br>
                        This practice not only improves the user experience by making the interface 
                        more consistent, but it also reinforces brand identity. Every repeated 
                        element acts as a subtle reminder of the company/organization’s design, 
                        building a stronger connection between the user and the brand. Solidifying 
                        brand identity is an important part of having a lasting impression on users, 
                        making you recognizable against competitors. 
                    </p>
                </div>
                <img src="./assets/media/repetition.png" alt="Repetition">
            </div>
        </section>
        <section class="principle-examples">
        <div class="principle-example">
                <h3>Real-World Example</h3>
                <p>
                    Finding inconsistencies, such as a logo that is using the wrong color shade in 
                    the background or a button that does not look right, can indicate a phishing scam.
                </p>
            </div>
            <div class="principle-example">
                <h3>Application</h3>
                <p>
                    If buttons on a navigation bar are used to navigate the site, the buttons should 
                    look the same. Text across the page should use the same font.
                </p>
            </div>
            <div class="principle-example" onclick="interactiveExample()">
                <h3>Image Examples</h3>
                <div class="principle-example-wrapper">
                    <img id="example-image-good" src="./assets/media/examples/repetition-good.png" alt="Repetition good example">
                    <img id="example-image-bad" src="./assets/media/examples/repetition-bad.png" alt="Repetition bad example">
                </div> 
            </div>
        </section>
        <hr>
        <div class="quiz-offer">
            <h3>Ready to test your knowledge?</h3>     
            <a href="./repetitionquiz.php"><button class="quiz-offer-button">Take the Quiz</button></a>      
        </div>
    </main>
<?php
    require_once("assets/inc/footer.inc.php");
?>
