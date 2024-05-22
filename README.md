# SolidPrinciples

In software development, Object-Oriented Design plays a crucial role when it comes to writing flexible, scalable, maintainable, and reusable code. There are so many benefits of using OOD but every developer should also know the SOLID principle for good object-oriented design in programming. The SOLID principle was introduced by Robert C. Martin, also known as Uncle Bob and it is a coding standard in programming. This principle is an acronym of the five principles which are given below:

- Single Responsibility Principle (SRP)
- Open/Closed Principle
- Liskov’s Substitution Principle (LSP)
- Interface Segregation Principle (ISP)
- Dependency Inversion Principle (DIP)

1. Single Responsibility Principle
This principle states that “A class should have only one reason to change” which means every class should have a single responsibility or single job or single purpose. In other words, a class should have only one job or purpose within the software system.

2. Open/Closed Principle
This principle states that “Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification” which means you should be able to extend a class behavior, without modifying it.

3. Liskov’s Substitution Principle
The principle was introduced by Barbara Liskov in 1987 and according to this principle “Derived or child classes must be substitutable for their base or parent classes“. This principle ensures that any class that is the child of a parent class should be usable in place of its parent without any unexpected behavior.

4. Interface Segregation Principle
This principle is the first principle that applies to Interfaces instead of classes in SOLID and it is similar to the single responsibility principle. It states that “do not force any client to implement an interface which is irrelevant to them“. Here your main goal is to focus on avoiding fat interface and give preference to many small client-specific interfaces. You should prefer many client interfaces rather than one general interface and each interface should have a specific responsibility.

5. Dependency Inversion Principle
The Dependency Inversion Principle (DIP) is a principle in object-oriented design that states that “High-level modules should not depend on low-level modules. Both should depend on abstractions“. Additionally, abstractions should not depend on details. Details should depend on abstractions.

- In simpler terms, the DIP suggests that classes should rely on abstractions (e.g., interfaces or abstract classes) rather than concrete implementations.
- This allows for more flexible and decoupled code, making it easier to change implementations without affecting other parts of the codebase.