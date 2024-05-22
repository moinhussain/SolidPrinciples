The Single Responsibility Principle (SRP) is one of the five SOLID principles of object-oriented design. It states that a class should have only one reason to change, meaning it should have only one job or responsibility. This principle helps in maintaining a clean, organized, and manageable codebase.

Here's an example in PHP to illustrate the Single Responsibility Principle:

### Example: User Management System

Let's say we are developing a simple user management system. The system needs to handle user data and manage user notifications. 

#### Without Single Responsibility Principle

```php
class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function save() {
        // Code to save user data to the database
    }

    public function sendEmail($subject, $message) {
        // Code to send an email to the user
    }
}

// Usage
$user = new User("John Doe", "john.doe@example.com");
$user->save();
$user->sendEmail("Welcome", "Thank you for signing up!");
```

In the above example, the `User` class has multiple responsibilities:
1. Handling user data (name and email).
2. Saving the user data to a database.
3. Sending email notifications.

This violates the Single Responsibility Principle because changes in the email sending logic or the database saving logic would require changes to the `User` class, making it harder to maintain and test.

#### With Single Responsibility Principle

Let's refactor the code to follow SRP by separating the concerns into different classes.

```php
class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

class UserRepository {
    public function save(User $user) {
        // Code to save user data to the database
    }
}

class EmailService {
    public function sendEmail(User $user, $subject, $message) {
        // Code to send an email to the user
    }
}

// Usage
$user = new User("John Doe", "john.doe@example.com");

$userRepository = new UserRepository();
$userRepository->save($user);

$emailService = new EmailService();
$emailService.sendEmail($user, "Welcome", "Thank you for signing up!");
```

In the refactored example:
- The `User` class is responsible only for handling user data (name and email).
- The `UserRepository` class is responsible for saving user data to the database.
- The `EmailService` class is responsible for sending emails.

By following the Single Responsibility Principle, each class has only one reason to change:
- `User` class changes only if the user data structure changes.
- `UserRepository` class changes only if the data persistence logic changes.
- `EmailService` class changes only if the email sending logic changes.

This separation of concerns makes the code easier to maintain, test, and extend.