# HealthRE – Emergency Medical Response System

## Overview

HealthRE is a web-based Emergency Medical Response System (EMS) developed to support communication between patients, hospitals and emergency response teams.

The platform is designed to help patients connect with nearby emergency response services and enable the management of hospital information, patient records, emergency response records and feedback through an administrative interface.

The project explores how web technologies and database-driven applications can support the coordination and management of emergency healthcare information.

## Key Features

- **Hospital Management:** Register hospitals with their names, contact information, locations and available medical services.
- **Patient Information Management:** Maintain patient records, including contact details, emergency contacts, blood type and medical conditions.
- **Emergency Response Records:** View and manage emergency response information, including patient and hospital references, location, time and response status.
- **Feedback Management:** View feedback submitted by patients.
- **Administrative Dashboard:** Access and manage hospital, patient, emergency response and feedback records.
- **Authentication:** Includes authentication, logout and password-recovery related functionality.
- **Record Management:** Supports administrative deletion of records across selected modules.
- **Printable Records:** Provides options to print administrative lists.

## Technology Stack

| Technology | Purpose |
|---|---|
| PHP | Server-side application logic |
| MySQL | Relational database |
| HTML | Web page structure |
| CSS | User interface styling |
| JavaScript | Client-side interactions |
| Bootstrap | Responsive interface components |
| jQuery | Front-end functionality |

## Database

The application references a MySQL database named `ems_database`.

The database contains records associated with modules such as:

- Hospitals
- Patients
- Emergency responses
- Feedback

The application uses PHP MySQLi for database connectivity and queries.

**Note:** A database export or SQL schema should be included in the repository to make local installation reproducible.

## Getting Started

### Prerequisites

- XAMPP or another local PHP and MySQL development environment
- PHP
- MySQL
- A web browser
- Git

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/145449-kilemi/HealthRE.git
   ```

2. Move the project folder into your XAMPP `htdocs` directory.

3. Start Apache and MySQL using the XAMPP Control Panel.

4. Open phpMyAdmin:

   ```text
   http://localhost/phpmyadmin
   ```

5. Create a database named:

   ```text
   ems_database
   ```

6. Import the project's database SQL file if available. The database schema and required tables must exist before the application can operate correctly.

7. Review the database connection settings in the PHP configuration files and update them to match your local environment.

8. Open the application in your browser:

   ```text
   http://localhost/HealthRE/
   ```

## Project Structure

```text
HealthRE/
│
├── HEALTHRE/
├── assets/
├── vendor/
├── authentication.php
├── dbconnection.inc.php
├── index.html
├── index.php
├── insertion.inc.php
├── logout.php
├── search.php
├── find_answer.php
├── find_email.php
├── recover_1.php
├── recover_a.php
├── recover_h.php
├── recover_p.php
└── README.md
```

*This is a simplified representation of the repository structure.*

## Learning Outcomes

This project provided practical exposure to:

- Developing database-driven web applications.
- Implementing server-side functionality using PHP.
- Connecting PHP applications to MySQL databases.
- Performing database operations and retrieving records.
- Building administrative interfaces for information management.
- Working with authentication and password-recovery workflows.
- Integrating front-end technologies with back-end application logic.

## Future Improvements

Potential improvements include:

- Implementing secure password hashing and stronger authentication controls.
- Improving database security and input validation.
- Introducing role-based access control.
- Enhancing emergency response coordination and location-based functionality.
- Improving the user interface and mobile responsiveness.
- Adding automated testing and deployment workflows.

## Disclaimer

HealthRE is an academic software development project and is not a certified emergency medical dispatch platform. It should not be used as a substitute for official emergency services or clinical systems.

