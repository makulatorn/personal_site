from flask import Flask, render_template, request, redirect, flash, url_for
from flask_mail import Mail, Message
from email_validator import validate_email, EmailNotValidError
import bleach

from config import Config

app = Flask(__name__)
app.config.from_object(Config)

mail = Mail(app)


@app.route("/")
def index():
    return render_template("index.html")


@app.route("/components/home")
def components_home():
    return render_template("/components/home.html")


@app.route("/components/projects")
def components_projects():
    return render_template("components/projects.html")


@app.route("/components/contact", methods=["GET", "POST"])
def components_contact():
    if request.method == "POST":
        raw_email = request.form.get("email", "")
        raw_message = request.form.get("message", "")

        # Validate email format
        try:
            valid_email = validate_email(raw_email).email
        except EmailNotValidError as e:
            flash(f"Invalid email address: {e}", "danger")
            if request.headers.get("HX-Request"):
                return render_template("partials/flash.html")
            return redirect(url_for("components/contact.html"))

        # Sanitize message input (strip all HTML tags)
        clean_message = bleach.clean(raw_message, tags=[], strip=True)

        if not clean_message.strip():
            flash("Message cannot be empty.", "danger")
            if request.headers.get("HX-Request"):
                return render_template("partials/flash.html")
            return redirect(url_for("components/contact.html"))

        # Compose and send email
        msg = Message(
            subject="New email from trasha.dev!!",
            sender=("trasha.dev", app.config["MAIL_USERNAME"]),
            recipients=[app.config["MAIL_USERNAME"]],
            reply_to=valid_email,
            body=f"From: {valid_email}\n\nMessage:\n{clean_message}",
        )

        try:
            mail.send(msg)
            flash("Message sent successfully!", "success")
        except Exception as e:
            print(f"Mail sending failed: {e}")
            flash("Failed to send message. Please try again later.", "danger")

        # HTMX: return only flash content
        if request.headers.get("HX-Request"):
            return render_template("partials/flash.html")

        # Fallback: full page reload
        return redirect(url_for("components_contact"))

    return render_template("components/contact.html")


if __name__ == "__main__":
    app.run(debug=True, use_reloader="true")
