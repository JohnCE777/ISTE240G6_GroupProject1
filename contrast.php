<?php
    require_once("assets/inc/header.inc.php");
?>
    <link rel="stylesheet" href="./assets/css/priciples.css">
    <main>
        <section>
            <div class="principle-text-img">
                <div class="principle-text">
                    <h1>Contrast</h1> 
                    <p>
                        The appropriate colors, size, and shape can make a significant difference in
                        attracting the users attention to certain elements of the webpage they may be
                        viewing. There are also psychological factors that come into play: The contrast
                        effect is an implicit bias that can enhance, or diminish the user's perception of a
                        web page's elements.
                        <br><br>
                        Color is one of the main focuses of contrast. Not only does it contribute to ease of
                        navigation, but it also proves to be an important aspect of accessibility. Bright,
                        highly saturated colors should be used sparingly. These colors are useful when
                        you are trying to draw the user’s attention somewhere. However, over use of these
                        high contrast elements can lead to fatigue. The user is overwhelmed with
                        saturation and the site designer has limited ability to indicate what is important on
                        the site. Too little contrast can lead to a boring website while still leaving the site
                        designer with a similar problem to solve.
                    </p>
                </div>
                <img src="./assets/media/contrast.png" alt="Contrast">
            </div>
            <p>
                Accessibility is a major component of contrast. The Bureau of Internet
                Accessibility (BOIA) Lists “improper text contrast” as the most common
                accessibility issue on the web. Many people with visual impairments struggle to
                read web pages. Proper contrast is very helpful. Even with this information,
                WebAIM (Web Accessibility In Mind is a nonprofit organization based at Utah
                State University) reports that 81% of website homepages do not meet WCAG 2.2
                (Web Content Accessibility Guidelines, a W3C backed accessibility standard)
                standards for text contrast.
            </p>
        </section>
        <section class="principle-examples">
        <div class="principle-example">
                <h2>Real-World Example</h2>
                <p>
                    When you receive a notification, a bright red bubble with white text often 
                    appears next to the application’s icon on smartphones. This heavily contrasts 
                    the background color, clearly indicating that the user has new notifications.
                </p>
            </div>
            <div class="principle-example">
                <h2>Application</h2>
                <p>
                    Using red and green together should generally be avoided, as many color blind 
                    people will struggle to read your site. 
                </p>
            </div>
            <div class="principle-example" id="principle-clicker" onclick="interactiveExample()">
                <h2>Image Examples</h2>
                <div class="principle-example-wrapper">
                    <img id="example-image-good" src="./assets/media/examples/contrast-good.png" alt="Contrast good example">
                    <img id="example-image-bad" src="./assets/media/examples/contrast-bad.png" alt="Contrast bad example">
                </div>
            </div>
        </section>
        <!-- <div id="contrast" class="off">
            <p>test</p>
        </div>
        <button onclick="contrast()">test</button> -->
    </main>
<?php
    require_once("assets/inc/footer.inc.php");
?>
