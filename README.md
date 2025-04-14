# Web Form

A simple web-based form to collect user data and handle submissions via PHP.

## 📋 Project Overview

This project provides a basic web form built using HTML and styled with simple CSS. It allows users to input their information, which is then processed and stored using a backend PHP script.

## 🚀 Features

- Clean and responsive HTML form
- Backend PHP script to handle submissions
- Easy to integrate into other projects
- Lightweight and beginner-friendly

## 📁 Project Structure

```
Web-Form/
├── form.html        # Frontend form for user input
└── submit.php       # Backend script to handle form data
```

## 🛠️ Getting Started

### Prerequisites

To run this project locally, you need:

- A local server like [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/)
- Basic knowledge of PHP and HTML

### Running the Project

1. Clone the repository:
   ```bash
   git clone https://github.com/Mechmank/Web-Form.git
   ```

2. Move the project into your web server's root directory:
   - For XAMPP: `htdocs/Web-Form`
   - For WAMP: `www/Web-Form`

3. Start Apache from your server control panel.

4. Visit the form in your browser:
   ```
   http://localhost/Web-Form/form.html
   ```

## 💾 Data Handling

Currently, `submit.php` receives data via POST. You can enhance it by saving the data to:
- A text file
- A MySQL database
- Sending it via email

## 📌 To Do

- [ ] Add input validation (client & server-side)
- [ ] Sanitize and secure form inputs
- [ ] Add success/error messages on submission
- [ ] Connect to a database

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

Made with ❤️ by [Mechmank](https://github.com/Mechmank)
