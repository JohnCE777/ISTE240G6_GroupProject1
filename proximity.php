<?php
    require_once("assets/inc/header.inc.php");
?>
    <link rel="stylesheet" href="./assets/css/priciples.css">
    <main>
        <section class="principle">
            <div class="principle-text-img">
                <div class="principle-text">
                    <h1>Proximity</h1> 
                    <p>
                        The concept of proximity in design emphasizes that elements which 
                        are related to one another should be grouped together, while elements 
                        that are unrelated or serve different purposes should be spaced 
                        farther apart. Proper use of proximity helps users figure out the 
                        relationship between different components on the page, making for 
                        a much smoother navigational experience. Proximity also demonstrates 
                        and helps establish a visual hierarchy that guides the reader’s through 
                        the site.
                        <br><br>
                        Improper use of proximity, such as using equal or haphazard spacing for 
                        all elements, without a clear hierarchy established can leave users 
                        confused. Disorganized content will cause viewers to struggle to understand 
                        which elements are related to one another. If users find the layout 
                        disorganized, they may lose interest quickly, abandon your site, and go 
                        to an alternative that offers a more intuitive design.
                        <br><br>
                        Proximity contributes to aesthetics, digestibility of the content, and by 
                        extension, a positive user experience. This essential design concept applies 
                        to text, images, videos, buttons, and all other elements on the page. 
                        Proximity proves time and time again to be an important tool at a web 
                        developer's disposal.
                    </p>
                </div>
                <img src="./assets/media/proximity.png" alt="Proximity">
            </div>
        </section>
        <section class="principle-examples">
        <div class="principle-example">
                <h3>Real-World Example</h3>
                <p>
                    A shopping site may group together “Add to Cart”, “Quantity”, and “Buy it Now” 
                    close to the item the shopper is looking at. This will signal the user to know 
                    where to check out by following a general order of operations.
                </p>
            </div>
            <div class="principle-example">
                <h3>Application</h3>
                <p>
                    Using not only space but color can be used as a clear indicator of separation 
                    between items. Establishing hierarchy through spacy and color are applications 
                    of proximity.
                </p>
            </div>
            <div class="principle-example" id="principle-clicker" onclick="interactiveExample()">
                <h3>Image Examples (Click Image)</h3>
                <div class="principle-example-wrapper">
                    <img id="example-image-good" src="./assets/media/examples/proximity-good.png" alt="Proximity good example">
                    <img id="example-image-bad" src="./assets/media/examples/proximity-bad.png" alt="Proximity bad example">
                </div>
            </div>
        </section>
        <hr>
        <div class="quiz-offer">
            <h3>Ready to test your knowledge?</h3>     
            <button class="quiz-offer-button" onclick="window.location.href='proximityQuiz.php';">Take the Quiz</button> 
        </div>
    </main>
<?php
    require_once("assets/inc/footer.inc.php");
?>
