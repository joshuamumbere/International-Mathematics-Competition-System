# International-Mathematics-Competition-System
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
