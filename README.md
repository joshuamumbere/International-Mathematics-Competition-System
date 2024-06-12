# International-Mathematics-Competition-System
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
This project implements a web-based system for managing an International Mathematics Competition for primary school children.

## Overview

The International Education Services Mathematics Competition System is designed to facilitate a nationwide mathematics competition for primary school students. It allows for the registration of schools and participants, the management of competition challenges, and the reporting of results and analytics. The system is composed of three main components:

1. **Client Application (Java)** - Command-line interface (CLI) for participants and school representatives.
2. **Server Application (Java)** - Manages file and database operations for the CLI.
3. **Web Interface (PHP, Laravel Framework)** - Admin portal for managing the competition, uploading questions and answers, and generating reports.

## Table of Contents

- [Features](#features)
- [System Components](#system-components)
  - [Client Application](#client-application)
  - [Server Application](#server-application)
  - [Web Interface](#web-interface)
- [Database Design](#database-design)
- [Installation](#installation)
- [Usage](#usage)
  - [CLI Commands](#cli-commands)
- [API Endpoints](#api-endpoints)
- [Reports and Analytics](#reports-and-analytics)
- [Contributing](#contributing)
- [License](#license)

## Features

- School registration and validation
- Question and answer management
- Challenge management
- Participant registration and validation
- Challenge participation with random question selection
- Automated scoring and reporting
- Comprehensive analytics and reports

## System Components

### Client Application

The client application is a Java-based command-line interface (CLI) for participants and school representatives.

#### CLI Menu

- **Register**: `register username firstname lastname email date_of_birth school_registration_number image_file.png`
- **ViewChallenges**: Lists available challenges.
- **AttemptChallenge**: Start a challenge.
- **ViewResults**: View results of attempted challenges.

### Server Application

The server application is responsible for file and database operations and is also developed in Java.

#### Key Functions

- Store and manage participant, school, and challenge data.
- Handle file uploads (questions and answers).
- Send email notifications for registration confirmation and result reports.
- Randomly select questions for challenges.
- Calculate scores and generate reports.

### Web Interface

The web interface is built using the PHP Laravel framework and serves as the admin portal.

#### Admin Portal

- Upload schools, questions, and answers.
- Set challenge parameters.
- View and manage participant data.
- Generate reports and analytics.

## Database Design

The system uses a relational database with the following tables:

1. **Schools**
   - `school_id` (Primary Key)
   - `name`
   - `district`
   - `registration_number`
   - `representative_name`
   - `representative_email`

2. **Participants**
   - `participant_id` (Primary Key)
   - `username`
   - `firstname`
   - `lastname`
   - `email`
   - `date_of_birth`
   - `school_id` (Foreign Key)
   - `status` (Pending, Confirmed, Rejected)

3. **Challenges**
   - `challenge_id` (Primary Key)
   - `name`
   - `start_date`
   - `end_date`
   - `duration`
   - `num_questions`

4. **Questions**
   - `question_id` (Primary Key)
   - `challenge_id` (Foreign Key)
   - `question_text`
   - `answer`
   - `marks`

5. **Attempts**
   - `attempt_id` (Primary Key)
   - `participant_id` (Foreign Key)
   - `challenge_id` (Foreign Key)
   - `score`
   - `time_taken`
   - `attempt_date`

6. **Results**
   - `result_id` (Primary Key)
   - `attempt_id` (Foreign Key)
   - `question_id` (Foreign Key)
   - `given_answer`
   - `marks_awarded`

7. **RejectedParticipants**
   - `rejected_id` (Primary Key)
   - `username`
   - `school_id` (Foreign Key)
   - `reason`

## Installation

### Prerequisites

- Java Development Kit (JDK)
- Apache Maven
- PHP and Composer
- Laravel Framework
- MySQL or another relational database

### Steps

1. **Clone the repository:**
   ```sh
   git clone https://github.com/joshuamumbere/International-Mathematics-Competition-System.git
   cd International-Mathematics-Competition-System
2. **Set up the database:**
   - Create a database named `math_competition`.
   - Run the SQL scripts in the `db` directory to set up the tables:

   ```sql
   CREATE DATABASE math_competition;
3. **Configure the server application**
   Update the `config.properties` file with your database credentials
   `db.url=jdbc:mysql://localhost:3306/math_competition
    db.username=your_db_username
    db.password=your_db_password
    email.smtp.server=smtp.your-email-provider.com
    email.smtp.port=587
    email.username=your_email@example.com
    email.password=your_email_password
   `
5. **Build and run the server application**
   ```sh
   cd server
   mvn clean install
   java -jar target/server.jar
7. **Set up the web interface:**
   ```sh
   cd web
   composer install
   cp .env.example .env
   php artisan key:generate
9. **Update the `.env` file with your database and email server credentials:**
    `DB_CONNECTION=mysql
     DB_HOST =127.0.0.1
     DB_PORT =3306
     DB_DATABASE=math_competition
     DB_USERNAME =your_db_username
     DB_PASSWORD =your_db_password
     MAIL_MAILER =smtp
     MAIL_HOST =smtp.your-email-provider.com
     MAIL_PORT = 587
     MAIL_USERNAME =your_email@example.com
     MAIL_PASSWORD =your_email_password
     MAIL_ENCRYPTION= tls
     MAIL_FROM_ADDRESS= your_email@example.com
     MAIL_FROM_NAME ="${APP_NAME}"
   `
10. **Run the database migrations to set up the values**
    ```sh
    php artisan migrate
11. **Serve the application**
    ```sh
    php artisan serve

#### Usage
CLI Commands

1. **Register a participant:**
   ```sh
   register username firstname lastname email date_of_birth school_registration_number image_file.png

2. **View available challenges:**
   ```sh
   viewChallenges

3. **Attempt a challenge:**
   ```sh
   attemptChallenge challengeNumber

4. **View results of attempted challenges:**
   ```sh
   viewResults


## API Endpoints

1. **Upload Schools(POST `/admin/upload-schools`):**
2. **Upload Questions(POST `/admin/upload-questions`):**
3. **Upload Answes(POST `/admin/upload-answers`):**
4. **Set Challenge Parameters(POST `/admin/set-challenge-params`):**

## REPORTS AND ANALYSIS
  **Most Correctly Answered Questions**
  **School Rankings**
  **Performance of Schools and Participants Over Time**
  **List of Worst Performing Schools**
  **List of Best Performing Schools**
  **List of PArticipants with Incomplete Challenges**

## CONTRIBUTING
  I welcome contributions! Please follow these steps:
    1.**Fork the repository**
    2.**Create a new branch(`git checkout -b feature-branch`)**
    3.**Make your changes**
    4.**Commit your changes(`git commit -m 'Added some feature'`)**
    5.**Push to the branch(`git push origin feature-branch`)**
    6.**Open a pull request.**

## License
 This project is licensed under the [MIT License](./LICENSE). Feel free to use and modify this template for your own recess projects.

---
