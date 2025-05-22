from flask import Flask, render_template, request, redirect, flash, url_for
from flask_mail import Mail, Message
from dotenv import load_dotenv
from email_validator import validate_email, EmailNotValidError
import os
import bleach

load_dotenv()
app = Flask(__name__)
app.secret_key = os.environ.get('SECRET_KEY')

app.config['MAIL_SERVER'] = 'smtp.mail.me.com'
app.config['MAIL_PORT'] = 587
app.config['MAIL_USE_TLS'] = True
app.config['MAIL_USERNAME'] = os.environ.get("MAIL_USERNAME")
app.config['MAIL_PASSWORD'] = os.environ.get("MAIL_PASSWORD")
app.config['MAIL_DEFAULT_SENDER'] = os.environ.get("MAIL_USERNAME")

mail = Mail(app)

@app.route("/")
def home():    
    return render_template(
        'home.html'
        
        )
@app.route("/projects")
def projects():
    return render_template('projects.html')

@app.route("/contact", methods=["GET", "POST"])
def contact():
    if request.method == "POST":
        raw_email = request.form.get("email", "")
        raw_message = request.form.get("message", "")

        # Validate email format
        try:
            valid_email = validate_email(raw_email).email
        except EmailNotValidError as e:
            flash(f"Invalid email address: {e}", "danger")
            return redirect(url_for("contact"))

        # Sanitize message input (strip all HTML tags)
        clean_message = bleach.clean(raw_message, tags=[], strip=True)

        if not clean_message.strip():
            flash("Message cannot be empty.", "danger")
            return redirect(url_for("contact"))

        msg = Message(
            subject="New email!",
            sender=app.config['MAIL_USERNAME'],
            recipients=[app.config['MAIL_USERNAME']],
            body=f"From: {valid_email}\n\nMessage:\n{clean_message}"
        )

        try:
            mail.send(msg)
            flash("Message sent successfully!", "success")
        except Exception as e:
            print(f"Mail sending failed: {e}")
            flash("Failed to send message. Please try again later.", "danger")

        return redirect(url_for("contact"))

    return render_template("contact.html")
    


if __name__ == "__main__":
    app.run(debug=True, use_reloader="true")
