# Admin Panel for Video Management

This admin panel provides functionality for managing videos. It includes features for login, registration, uploading videos, and resetting passwords.

## Technologies Used

- Frontend: HTML, CSS, Bootstrap
- Backend: PHP
- Database: MySQL

## Installation

1. Clone the repository:
```bash
git clone https://github.com/your-username/your-repository.git
```
2. Import the database schema from database.sql into your MySQL database.
3. Update includes/database.php with your MySQL database credentials.
4. Install dependencies using Composer (for using PHP with Composer):
composer install

## Usage
# Using Composer (recommended)
1. Install PHP and Composer on your server.
2. Create a new project:
composer create-project your-username/your-repository

3. Set up your web server to point to the public directory.
4. Access the admin panel in your web browser.

## Manual Download
1. Download the repository as a ZIP file and extract it.
2. Upload the extracted files to your web server.
3. Set up your web server to point to the public directory.
4. Access the admin panel in your web browser.
## Features
- Login: Users can log in using their email and password.
- Registration: New users can register for an account.
- Video Upload: Admins can upload videos using an Excel file.
- Password Reset: Users can reset their password using a link sent to their email.
##Files
- index.php: Main file for the admin panel.
- login.php: Login page for users.
- registration.php: Registration page for new users.
- videos.php: Page for managing and displaying videos.
- reset_pass.php: Page for initiating the password reset process.
- reset_password.php: File for handling the password reset process.
- includes/: Directory containing PHP files for database connection and other functions.
##Contributing
Feel free to contribute to this project by submitting pull requests or reporting issues. Your feedback is highly appreciated.

##License
This project is licensed under the MIT License - see the LICENSE file for details.

Please replace `your-username` and `your-repository` with your actual GitHub username and repository name respectively. Also, make sure to replace the MySQL database credentials with your actual credentials in `includes/database.php`.

## Features

- **User Registration and Login**: Users can create an account and log in to access the platform.
- **Admin Panel**: Admins can manage video content, user accounts, and other settings.
- **Video Upload**: Users can upload videos to the platform.
- **Video Categorization**: Videos can be categorized into different sections and subsections.
- **Responsive Design**: The application is designed to work well on various devices, including desktops, tablets, and smartphones.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP, MySQL
- **Libraries**: XLSX (for processing Excel files), jQuery (for frontend interactions)

## Project Structure

The project consists of several files:

- **index.php**: This file contains the admin panel of the application. It allows admins to manage video content and user accounts. It also includes functionality for uploading and processing Excel files containing video data.
- **videos.php**: This file displays the videos uploaded by users. It retrieves video data from the database and dynamically generates HTML elements to display the videos.
- **registration.php**: This file contains the user registration form. It allows users to create an account with the platform.
- **login.php**: This file contains the user login form. It allows registered users to log in to the platform.
- **database.php**: This file contains the database configuration and connection code. It is included in other PHP files to interact with the database.

## Installation and Setup

To run the IndTube application locally, follow these steps:

1. Clone the repository to your local machine.
2. Import the `database.sql` file into your MySQL database to create the necessary tables.
3. Update the database configuration in the `database.php` file with your MySQL credentials.
4. Start a local web server (e.g., using XAMPP, WAMP, or MAMP).
5. Open the application in your web browser and start using it.

## Usage

- To access the admin panel, go to the `index.php` file.
- To view the videos uploaded by users, go to the `videos.php` file.
- Use the registration form in `registration.php` to create a new user account.
- Use the login form in `login.php` to log in to an existing user account.


## Acknowledgements

This project was inspired by the need for a simple video sharing platform. Special thanks to the developers of Bootstrap, XLSX, and other libraries used in this project.
