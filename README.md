This web application enables the input, viewing, and administration of news articles. The application is built using PHP and a MySQL database, and it is hosted on a local server utilizing XAMPP. JavaScript, CSS, and HTML are also employed to enhance the user interface and functionality.  

Technologies Used:  
PHP: Backend scripting language used for server-side logic.  
MySQL: Relational database management system for storing and managing data.  
JavaScript: Used to enhance client-side interactivity.  
HTML: Markup language for creating the structure of web pages.  
CSS: Stylesheet language for styling and formatting web pages.  
  
How to use:  
  
•put the folder into xampp/htdocs  
•make a local database and run the "vjezba_3.sql" script  
•you can open the database via PHPMyAdmin  
•after importing, the database will contain tables "clanci" and "korisnik" with their corresponding data.  
•start apache and navigate to your localhost  
•login as lala lala if you want to test the administration page  
  
•	Ensure that the necessary server (XAMPP) and database configurations are set up before use.  
  
Structure  
•	Navigate to index.php to view articles.  
Article Page:  
•	Click on an article title on the home page to view the full article on clanak.php.  
Administration Page:
•	Log in as an admin user (username: lala, password: lala).
•	Navigate to administracija.php to manage articles.
Adding New Article:
•	Log in as an admin user.
•	Visit unos.php to add a new article.
User Registration:
•	Visit registracija.php to register a new user.
Logging Out:
•	Click on the "Log Out" link or navigate to logout.php to log out.


Viewing and administering news articles:

After logging in, you can view and administer news articles.
The news articles are displayed in forms that allow editing and deleting existing articles.
If you want to test administrative functionalities, use the provided login information.

Viewing an individual article:

By clicking on the title of a news article on the homepage, you can see details about a specific article.
The details include the title, category, author, publication date, summary, content, and an image of the article.
