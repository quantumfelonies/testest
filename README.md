# PickMe

## Introduction
This document outlines the architecture and features of a web-based voting application built using blockchain technology and PHP on the CodeIgniter framework. The application aims to provide a secure and transparent voting system for various elections in campuses.

## Features
1. User Registration and Authentication:
   - Users can create accounts and authenticate themselves using their school email and a generated One-Time Password(OTP).
   - Authentication ensures that each user has a unique identity and can access the voting system securely.

2. Election Creation and Management:
   - Administrators can create and manage elections by defining the election parameters (e.g., start/end date, candidate list).
   - Each election is represented as a blockchain, ensuring immutability and transparency.

3. Candidate Registration:
   - Administrators register and approve the valid candidate nominations.

4. Secure Voting:
   - Users can cast their votes securely using the web application.
   - Each vote is recorded as a transaction on the blockchain, ensuring tamper-proof results.

5. Vote Counting and Results:
   - The system automatically tallies the votes and calculates the results.
   - Results are displayed in real-time, providing transparency and trust in the election process.

6. Blockchain Technology:
   - Utilizes blockchain to store and secure the election data.
   - Each block contains a cryptographic hash of the previous block, ensuring data integrity.

7. CodeIgniter Framework:
   - Built using the CodeIgniter framework, a lightweight PHP framework with MVC architecture.
   - CodeIgniter provides a structured approach to developing the application and ensures scalability and maintainability.

8. Security Measures:
   - Implements robust security measures such as encryption, secure user authentication, and protection against common vulnerabilities (e.g., SQL injection, cross-site scripting).

9. User Interface:
   - The application provides a user-friendly interface for easy navigation and interaction.
   - Responsive design for optimal user experience across different devices.

## Technology Stack
- PHP (CodeIgniter Framework)
- HTML/CSS/JavaScript (Front-end)
- MySQL (Database)
- Blockchain Technology (e.g., Ethereum, Hyperledger)

## Deployment
- The application can be deployed on a web server or cloud platform capable of running PHP applications.
- Database setup and configuration are required to store user data, candidate information, and election details.
- Integration with a blockchain network is necessary to implement the blockchain-based voting system.

## Conclusion
The web-based voting application built using blockchain technology and PHP on the CodeIgniter framework offers a secure, transparent, and efficient platform for conducting elections. With features like user authentication, candidate nomination, secure voting, and real-time results, the application ensures a trustworthy and tamper-proof election process.
