<?php
    $title = "Index";
    echo("<title>$title | CRAP Principles</title>");

    require_once("assets/inc/header.inc.php");
?>
    <main>
        <section id="landing-section">
            <div>
                <h1>The Crap Principles</h1>
                <p>
                    Defined by American author and educator Robin Patricia Williams in her 1994 work The Non-Designer’s
                    Design Book, the amusingly named CRAP design principles have since become ubiquitous among designers
                    across all media, from websites, to applications, to books and magazines. While the typical user may
                    browse a website or open an app without ever stopping to notice how its format and presentation affect
                    their view of the information it provides, it is undeniable that design influences our impressions of
                    these media almost instantaneously. Well designed web-pages draw the user’s eye instinctively to the
                    most important content, guide them effortlessly from one section to the next, and make it easy for them
                    to retain everything they see, all without the user ever being aware of it. 
                </p>
            </div>
            <img id="logo" src="assets/media/logo.png" alt="CRAP Logo Photo">
        </section>
        <!-- TODO -->
        <div class="principles">
        <div class="principle-section">
            <div class="principle-img-text">
            <img class="principle-img" id="contrast-img" src="assets/media/contrast.png" alt="Contrast principle photo">
                <p>
                    A key tool for directing user attention. Strategically employing colors with high 
                    contrast can make your most important content pop and is vital for accessibility.
                </p>
            </div>
            <img class="principle-vector" src="assets/media/contrast-vector.svg" alt="Contrast principle vector">
        </div>
        <div class="principle-section">
            <div class="principle-img-text">
            <img class="principle-img" id="repetition-img" src="assets/media/repetition.png" alt="Repetition principle photo">
                <p>
                    Utilizing recurring elements throughout your design helps users become familiar with 
                    each element’s functionality. Repetition is also necessary to create a coherent 
                    brand identity and help your users identify your designs everywhere.
                </p>
            </div>
            <img class="principle-vector" src="assets/media/repetition-vector.svg" alt="Repetition principle vector">
        </div>
        <div class="principle-section">
            <div class="principle-img-text">
            <img class="principle-img" id="alignment-img" src="assets/media/alignment.png" alt="Alignment principle photo">
                <p>
                    Placement should never be arbitrary. Being intentional about creating meaningful spatial 
                    relationships between elements of your design helps to create a cohesive, logical feel. 
                    Skillful application of Alignment helps your users know where to look next
                </p>
            </div>
            <img class="principle-vector" src="assets/media/alignment-vector.svg" alt="Alignment principle vector">
        </div>
        <div class="principle-section">
            <div class="principle-img-text">
                <img class="principle-img" id="proximity-img" src="assets/media/proximity.png" alt="Proximity principle photo">
                <p>
                    Reduce visual clutter and help your users spot connected content at a glance. By grouping related 
                    elements together and moving unrelated elements further apart, users’ attention is naturally focused 
                    within each content island, allowing effortless mental connections between each element.
                </p>
            </div>
            <img class="principle-vector" src="assets/media/proximity-vector.svg" alt="Proximity principle vector">
        </div>
        </div>
    </main>
<?php
    require_once("assets/inc/footer.inc.php");
?>
