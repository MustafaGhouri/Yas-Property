Yash-Property
Project Installation:
Make sure you have PHP 7 or a higher version installed.
Ensure that you have the latest version of MySQL database installed.
Create a file for database connection at the following path: include/connection.inc.php.
The database file name should be database.sql.
Database Connection File (include/connection.inc.php):
  
$host = "your_host_name";
$username = "your_database_username";
$password = "your_database_password";
$database = "your_database_name";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
Project Run Instructions:
Use XAMPP or any other PHP and MySQL server solution if you are running the project on a local PC.
About Project:
Project Name: Yash-Property
GitHub Repository: Yash-Property
Project Overview:
Yash-Property is a PHP-based project designed for a property builder. The system allows administrators to add projects, properties, blogs, and testimonials using an admin panel. The admin roles include user admin and manager. Users can view property details and contact the administrator through the Contact Us page.

Features:
Admin Panel:

Add and manage projects.
Add and manage properties.
Publish and manage blogs.
Handle testimonials.

User Roles:

Admin: Full control over the system.
Manager: Limited administrative access.
Users: Access to property details and a contact form.
Database Structure:

The database structure is defined in the database.sql file.

Contact Us Page:

Users can use the Contact Us page to get in touch with the admin.
How to Contribute:
Fork the repository.
Create a new branch for your feature or bug fix.
Make changes and commit them.
Push your changes to your fork.
Submit a pull request.
Feel free to explore, contribute, and enhance Yash-Property!
