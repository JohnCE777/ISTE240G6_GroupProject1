<div class="contactContainer">
    <form name="contactForm" action="contact.php" onsubmit="return validateForm();" method="POST">
        <label for="email">Email:</label>
        <br>
        <input type="text" id="email" name="email">
        <br>
        <label for="name">Name:</Label>
        <br>
        <input type="text" id="name" name="name">
        <br>
        <label for="phone">phone number: </label>
        <br>
        <input type="tel" id="phone" name="phone">
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
