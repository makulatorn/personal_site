<form
    method="POST"
    action="contact/send"
    hx-post="contact/send"
    hx-target="#form-response"
    hx-indicator="#spinner"
    hx-on::after-request="this.reset()">
    <div class="email-con">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required />
    </div>

    <div class="message-con">
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
    </div>
    <input type="submit" value="Submit" />
</form>