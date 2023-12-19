# Sem2Web_Assignment5

Semester 2 web programming assignment 5

March 23, 2023

Learning to use php.

A simple web application for managing and displaying information about actors. The project consists of three files:

form.php:

This file defines an HTML form with fields for entering personal information, including first name, last name, date of birth, bio, height, number of children, and a profile picture upload. The form's action is set to "process-form.php," suggesting that the form data will be processed by another PHP script.

process-form.php:

This file handles the form submission. It checks for a valid file upload, moves the uploaded profile picture to a designated folder, and then displays the submitted information along with the uploaded profile picture. The user's personal information, such as name, date of birth, bio, height, and the number of children, is displayed as well. This script combines both form processing and information display.

actors.php:

This file defines an array of actors with corresponding IDs and names. It checks if the "actorId" is set in the URL parameters (presumably passed through a GET request). If an "actorId" is provided and is valid, it displays the actor's name with an <h1> heading. If the "actorId" is not valid, it shows an "Invalid actor ID" message. This file appears to be a simple actor information retrieval system.
