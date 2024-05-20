The Open/Closed Principle (OCP) is one of the SOLID principles of object-oriented design. It states that software entities (classes, modules, functions, etc.) should be open for extension but closed for modification. This means that you should be able to add new functionality to a class or module without changing its existing code.

Explanation
Open for extension: You should be able to extend the behavior of a class. This can be done by adding new methods, properties, or by deriving new classes.
Closed for modification: Once a class is completed and tested, it should not be altered. This helps prevent bugs and keeps the class stable.

Before:

Let's say we have a PaymentProcessor class that processes different types of payments. Initially, it only supports PayPal payments.

In this code, if we want to add support for another payment method (e.g., Bitcoin), we need to modify the PaymentProcessor class. This violates the Open/Closed Principle because the class is not closed for modification

After

To adhere to the Open/Closed Principle, we can use polymorphism and define an interface for the payment processing. Then we can extend the functionality by adding new classes without changing the existing code.

In this example, the PaymentProcessor class does not need to be modified to support new payment methods. If you want to add a new payment method, you simply create a new class that implements the PaymentMethod interface.

This approach adheres to the Open/Closed Principle by allowing the PaymentProcessor class to be extended with new payment methods without changing its existing code