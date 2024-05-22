The Interface Segregation Principle (ISP) is one of the five SOLID principles of object-oriented design. It states that no client should be forced to depend on methods it does not use. In other words, it's better to have multiple small, specific interfaces rather than a single, large, general-purpose interface.

### Example Scenario

Imagine we are designing a system for different types of printers. We could have a single `Printer` interface that includes all possible methods for any type of printer:

```php
interface Printer {
    public function printDocument($document);
    public function scanDocument($document);
    public function faxDocument($document);
}
```

However, not all printers can scan or fax documents. For instance, a basic printer might only need to implement the `printDocument` method, while a multifunction printer might implement all three methods. A basic printer being forced to implement methods it doesn't need violates the Interface Segregation Principle.

### Applying Interface Segregation Principle

To adhere to ISP, we can create smaller, more specific interfaces:

```php
interface Printer {
    public function printDocument($document);
}

interface Scanner {
    public function scanDocument($document);
}

interface Fax {
    public function faxDocument($document);
}
```

Now, a basic printer can simply implement the `Printer` interface:

```php
class BasicPrinter implements Printer {
    public function printDocument($document) {
        // Printing logic here
    }
}
```

A multifunction printer can implement all the relevant interfaces:

```php
class MultifunctionPrinter implements Printer, Scanner, Fax {
    public function printDocument($document) {
        // Printing logic here
    }

    public function scanDocument($document) {
        // Scanning logic here
    }

    public function faxDocument($document) {
        // Faxing logic here
    }
}
```

### Benefits of ISP

1. **Flexibility:** Smaller interfaces are easier to implement and adapt to changes.
2. **Decoupling:** Clients are not forced to depend on methods they do not use, reducing unnecessary dependencies.
3. **Maintainability:** Smaller, focused interfaces are easier to understand and maintain.
4. **Reusability:** Components can be more easily reused as they are not bound to a large interface.

By following the Interface Segregation Principle, we ensure that our code is more modular, flexible, and easier to maintain. This leads to a cleaner design where each class only needs to implement the functionality it actually requires.