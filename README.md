# IndTube - Video Sharing Platform

IndTube is a web application that serves as a video sharing platform. It allows users to upload videos, categorize them, and view them based on different sections and subsections. The application has an admin panel for managing video content and user accounts.

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
