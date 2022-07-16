# PHP_Gratis_Solutions_Project

This project is a raw / vanilla PHP project that demonstrates knowledge with the XAMPP, authentication, and pulling data from a MySQL database.

## Login Screen
This page authenticates current users and registers new users to the MySQL database. Passwords and sensitive information are never stored but are instead hashed.
To see more of this functionality in action this project's root contains login information for various users in the user_information.txt file. If the user enters a correct password for a given 
email they will be redirected to the Inventory page, otherwise they will be see an error message informing the user of an incorrect password or non-existant email.
<p align="center">
  <img alt="GIF of a short demo of the Inventory Page" src="https://github.com/MarcAButler/PHP_Gratis_Solutions_Project/blob/master/demos/login_error.gif">
  <img alt="GIF of a short demo of the Inventory Page" src="https://github.com/MarcAButler/PHP_Gratis_Solutions_Project/blob/master/demos/login_success.gif">
</p>

## Inventory Page
This page uses a flex box to list all of the vehicles in the database. Each of these vehicles are displayed on a bootstrap-styled card.
Additionally, these cards can redirect a user to a vehicle page with more specific information.
<p align="center">
  <img alt="GIF of a short demo of the Inventory Page" src="https://github.com/MarcAButler/PHP_Gratis_Solutions_Project/blob/master/demos/inventory_page.gif">
</p>

## Vehicle Page(s)
The vehicle pages dynamically display data from a MySQL database by utlizing the XAMPP stack. Each page is unique and displays
the most comprehensive vehicle information.
<p align="center">
  <img alt="GIF of a short demo of the Inventory Page" src="https://github.com/MarcAButler/PHP_Gratis_Solutions_Project/blob/master/demos/vehicle_page.gif">
</p>
