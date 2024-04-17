# Synergi code assessment


## Local Server Requirements

- [PHP] 8.2 (php version: php -v)
- [composer] v2

## Installation

### Clone project

````Shell
git clone git@bitbucket.org:anypli/asc-api.git
````

###  Configuration

- Duplicate .env.example and rename it to .env
- Generate app key

````shell
php artisan key:generate
````

### Update .env file
- update database creds .
###  Install project dependencies

````Shell
composer install
````
### Run the migrations with seeders

````Shell
php artisan migrate
````
### Project Overview:

The project encompasses a user management system, facilitating the creation and viewing of user records. The system integrates a straightforward template for design aesthetics, ensuring a user-friendly interface. A pivotal aspect of the project is the implementation of a repository pattern, strategically employed to maintain a lean and organized controller structure, thus preventing bloating and enhancing maintainability.

Key Features:

- User Record Creation: Users can be efficiently saved as new records within the system, streamlining the process of data entry.

- Listing View: The system provides a comprehensive listing view, enabling users to effortlessly browse through the database and access relevant information.

- Template Integration: A simplistic yet effective template design has been seamlessly integrated, enhancing user experience and visual appeal.

- Unit Testing: Rigorous unit testing has been incorporated, particularly focusing on test case scenarios pertaining to form functionality. This ensures the reliability and robustness of the system. <br/>

````Shell
php artisan test --filter SaveUserTest
````
- Repository Pattern Implementation: The repository pattern has been adopted to optimize controller efficiency. This architectural decision prevents controller bloat and promotes code maintainability.
- Efficient Memory Usage: Server-side pagination reduces the amount of data transferred between the server and the client by only fetching the data needed for the current page. This helps conserve memory on both the server and the client, especially when dealing with large datasets.
- Organization: Grouping routes allows you to organize related routes together, making it easier to understand the structure of your application's endpoints. This improves code readability and maintainability, especially in larger applications with many routes.
- Easy Configuration: Constants are commonly used for configuration settings, such as database credentials, API endpoints, or application settings. By defining these values as constants, you can easily adjust and manage your application's configuration without modifying the underlying code.
- Error Handling: The primary purpose of try-catch blocks is to handle exceptions gracefully. By wrapping code that may potentially throw exceptions inside a try block, you can catch and handle those exceptions in a controlled manner, preventing them from propagating up the call stack and potentially crashing your application.
