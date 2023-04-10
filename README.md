#Login and Registration Page using Docker-PHP8-Nginx-Postgres 

This project provides a simple web application that allows users to register and log in to the system. It is built using the Docker-PHP8-Nginx-Postgres stack, providing a reliable and easy-to-use development environment.

Requirements
Before running the project, make sure you have the following installed:
Docker: https://docs.docker.com/get-docker/
Docker Compose: https://docs.docker.com/compose/install/

Getting Started
Clone the repository: git clone https://github.com/<your-repo-name>.git
Navigate to the project directory: cd <your-repo-name>
Build the Docker containers: docker-compose up -d
Navigate to http://localhost in your web browser.

Usage
The web application provides two pages: a registration page and a login page.

Registration
To register a new user, go to http://localhost/src/register and fill out the registration form. Once you submit the form, your details will be saved to the Postgres database and you will be redirected to the login page.

Login
To log in, go to http://localhost/src/login and enter your email address and password. If your details are correct, you will be logged in and redirected to the welcome page.

Configuration
You can modify the database credentials by updating the POSTGRES_USER, POSTGRES_PASSWORD, and POSTGRES_DB environment variables in the docker-compose.yml file.

License
This project is licensed under the MIT License - see the LICENSE file for details.