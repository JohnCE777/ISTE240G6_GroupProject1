<div class="contactContainer">
    <form name="contactForm" action="contact.php" onsubmit="return validateForm();" method="POST">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <label for="name">Name</Label>
        <input type="text" id="name" name="name">
        <label for="phone">Phone number</label>
        <input type="tel" id="phone" name="phone">
        <input type="submit" value="Submit" id="contact-submit">
    </form>
</div>
