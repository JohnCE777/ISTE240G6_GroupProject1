<?php
    require_once("assets/inc/header.inc.php");
?>
    <main>
        <h1>Accessibility</h1>
        <p>
            Accessibility is often neglected by developers when creating their websites. Often
            simple changes are overlooked that would make their website more accessible and
            increase the amount of users that can use their site. With more of the world
            moving online it is vital that websites are accessible so that no users are excluded
            or have to make special accommodations to cater to the changing technology.
        </p>
        <p>
            There are three common mistakes that developers make when making a website
            that make it hard to use for vision impaired users.
        </p>
        <p>
            Text color contrast: Avoiding bad text contrast is important because it can
            make readability an issue for all users. For Users with vision impairments
            it can make text illegible making the site difficult to use for these users.
        </p>
        <p>
            Absence of alternative text: Alternative text (alt text) is normally
            displayed on the site where an image file cannot load for no matter the
            reason, it provides context on the image that is supposed to be displayed.
            Alt text is also used by screen readers to describe what an image is trying
            to portray when reading over the page. This ensures that regardless of
            vision impairments, file/site problems all users have the chance to
            experience the same website to solidify that our audience is inclusive.
        </p>
        <p>
            Absence of labels: Labels are used to tell users what each input in a form
            is for and what info should be inputted. Given there are other methods of
            communicating to users the meaning of each input, they don’t work with
            screen readers making the forms impossible to fill out for those using
            screen readers. Using labels to tell the user what each input is makes the
            form accessible for users using a screen reader.
        </p>
        <p>
            Common mistakes that developers make for users who are Deaf/deaf or hard of
            hearing (hearing impaired community). To highlight there is a difference between
            ‘Deaf’ and ‘deaf’, ‘capital D’ means was deaf most of their life using sign
            language as a primary language while ‘lowercase d’ means usually developed
            being deaf later in life.
        </p>
        <p>
            Subtitles/Captions: Many users who are in the hearing impaired
            community cannot hear the audio on videos. Making sure that all video
            content has accurate subtitles/captions that includes descriptions of
            non-spoken sounds as well. Another step to this is to include a written
            transcription of the video, where users could follow along with the video.
            To further the inclusion of this and make the user feel seen, which is
            important when trying to reach all audiences. To have a sign language
            interpretation of the video so that our users who sign can understand the
            video easier as English may be a second language to them.
        </p>
        <p>
            Plain English: Many Deaf/deaf people use english as a second language,
            so be considerate. Being conscious of word choice and sentence structure,
            avoiding jargon and using target language is a good way to make sure that
            all audiences understand the content. To further this along including
            images to describe the topic visually.
        </p>
        <hr>
        <div class="quiz-offer">
            <h3>Ready to test your knowledge?</h3>     
            <a href="./accessibilityquiz.php"><button class="quiz-offer-button">Take the Quiz</button></a>      
        </div>
    </main>
<?php
    require_once("assets/inc/footer.inc.php");
?>
