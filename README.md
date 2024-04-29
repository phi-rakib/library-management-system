# Library Management System

The Library Management System is a web application built with Laravel, designed to streamline the operations of a library. It provides functionalities for managing books, authors, categories, members, and borrowings. The system enables librarians to efficiently organize and maintain the library's collection while providing members with convenient access to borrow and return books.

## Key Features

1. **Books Management:**
   - Add, edit, and delete books.
   - Associate books with multiple authors and categories.
   - Track the number of copies available for each book.
   - Record information about damaged books.

2. **Authors Management:**
   - Add, edit, and delete authors.
   - View books associated with each author.

3. **Categories Management:**
   - Add, edit, and delete book categories.
   - View books belonging to each category.

4. **Members Management:**
   - Register new members.
   - Maintain member details such as name, email, and address.
   - Handle member requests for new books.

5. **Borrowings Management:**
   - Allow members to borrow multiple books simultaneously.
   - Track borrowed books, including borrow date, due date, and return date.
   - Provide functionalities for librarians to manage borrowings, including issuing, renewing, and returning books.
   - Generate reminders for overdue books.

6. **Racks Management:**
   - Organize books into racks for easy retrieval.
   - Track which rack contains which book.

## Additional Features

- **Search and Filter Functionality:** Enable users to search and filter books based on various criteria such as title, author, category, etc.
- **User Authentication and Authorization:** Implement user authentication and authorization to restrict access to certain functionalities based on user roles (e.g., librarian, member).
- **Reports and Analytics:** Generate reports and analytics on book borrowings, popular categories, member activities, etc., to help in decision-making and library management.

## Technologies Used

- **Laravel:** Backend framework for building the web application.
- **MySQL:** Relational database management system for storing application data.
- **HTML/CSS/JavaScript:** Frontend technologies for creating the user interface and adding interactivity.
- **Composer:** Dependency manager for PHP, used for managing Laravel dependencies.

## Installation and Setup

1. Clone the repository.
2. Install dependencies using Composer.
3. Configure database settings in the `.env` file.
4. Run migrations to create database tables.
5. Seed database with initial data (optional).
6. Start the development server and access the application in a web browser.

## Usage

- Log in as a librarian to manage the library's operations.
- Register as a member or log in as an existing member to borrow books.
- Search for books, view book details, and borrow books.
- Return borrowed books within the due date to avoid overdue charges.

## Contributors

- [Mohammad Rakibul Haider](https://github.com/phi-rakib)

## License

This project is licensed under the [MIT License](LICENSE).
