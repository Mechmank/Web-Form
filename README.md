# 🌐 Web Form Application

A simple yet functional web form built using HTML, CSS, and PHP. This project demonstrates how to collect and process user input via a styled frontend and a basic PHP backend script.

## 📋 Project Overview

The form allows users to enter their name, email, subject, and message. Upon submission, the form sends data to a PHP script (`submit.php`) that handles the request. This is a practical starting point for anyone looking to learn or demonstrate form handling using PHP.

## 🎯 Features

- ✅ Clean, responsive form design
- ✅ Semantic and accessible HTML5 structure
- ✅ CSS styling for a modern look
- ✅ PHP backend script for form submission
- ✅ Easily extensible and customizable

## 📁 Project Structure

```
Web-Form/
├── index.html       # Main HTML form with input fields
├── style.css        # CSS file for styling the form
└── submit.php       # PHP script to handle form submission
```

## 🧰 Tech Stack

- **HTML5**: For structure and form elements
- **CSS3**: For layout and styling
- **PHP**: For backend form handling

## 🛠️ Getting Started

### Prerequisites

- A local web server like XAMPP, WAMP, or MAMP (for running PHP)
- Any modern web browser

### Steps to Run Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/Mechmank/Web-Form.git
   ```

2. Move the project into your local web server's directory:
   - For XAMPP, typically `htdocs/`:
     ```bash
     mv Web-Form /path-to-xampp/htdocs/
     ```

3. Start your local server and visit:
   ```
   http://localhost/Web-Form/index.html
   ```

4. Fill out the form and hit "Submit" — the data will be sent to `submit.php`.

## 💡 Customization Ideas

- Add JavaScript validation for better UX
- Connect to a database (e.g., MySQL) from `submit.php`
- Add email sending functionality
- Enhance the UI with animations or frameworks (like Bootstrap)

## 📌 To-Do List

- [ ] Add database integration
- [ ] Add client-side and server-side validations
- [ ] Sanitize and secure inputs (to prevent XSS/SQL injection)
- [ ] Add confirmation page or popup after submission

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

👨‍💻 Created with ❤️ by [Mechmank](https://github.com/Mechmank)
