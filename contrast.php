<?php
    include './Assets/inc/header.inc.php';
?>
    <main>
        <h1>Contrast</h1>
        <p>
        ○ The appropriate colors, size, and shape can make a significant difference in
        attracting the users attention to certain elements of the webpage they may be
        viewing. There are also psychological factors that come into play: The contrast
        effect is an implicit bias that can enhance, or diminish the user's perception of a
        9
        web page's elements.
        ○ Color is one of the main focuses of contrast. Not only does it contribute to ease of
        navigation, but it also proves to be an important aspect of accessibility. Bright,
        highly saturated colors should be used sparingly. These colors are useful when
        you are trying to draw the user’s attention somewhere. However, over use of these
        high contrast elements can lead to fatigue. The user is overwhelmed with
        saturation and the site designer has limited ability to indicate what is important on
        the site. Too little contrast can lead to a boring website while still leaving the site
        designer with a similar problem to solve.
        ○ Accessibility is a major component of contrast. The Bureau of Internet
        Accessibility (BOIA) Lists “improper text contrast” as the most common
        accessibility issue on the web. Many people with visual impairments struggle to
        read web pages. Proper contrast is very helpful. Even with this information,
        WebAIM (Web Accessibility In Mind is a nonprofit organization based at Utah
        State University) reports that 81% of website homepages do not meet WCAG 2.2
        (Web Content Accessibility Guidelines, a W3C backed accessibility standard)
        standards for text contrast.
        </p>
        <div id="contrast" class="off">
            <p>test</p>
        </div>
        <button onclick="contrast()">test</button>
    </main>
<?php
    require_once("Assets/inc/footer.inc.php");
?>
