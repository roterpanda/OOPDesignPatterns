<?php

declare(strict_types=1);
use Saschabrandt\Designpatterns\SOLID\D\Car;
use Saschabrandt\Designpatterns\SOLID\D\Engine;
use Saschabrandt\Designpatterns\SOLID\L\Rectangle;
use Saschabrandt\Designpatterns\SOLID\L\Square;
use Saschabrandt\Designpatterns\SOLID\O\Circle;
use Saschabrandt\Designpatterns\SOLID\S\EmailSender;
use Saschabrandt\Designpatterns\SOLID\S\User;
use Saschabrandt\Designpatterns\SOLID\S\UserService;

require 'vendor/autoload.php';

/*
 * This is an example of the Single Responsibility Principle (SRP) because:
 * 1. The User class is responsible only for storing user data.
 * 2. The EmailSender class is responsible only for sending emails.
 * 3. The UserService class is responsible only for user-related operations, such as registration.
 * Each class has a single responsibility, making the code easier to maintain and extend.
 */

$user = new User('testuser', 'test@testuser.com');
$emailService = new EmailSender();
$userService = new UserService($emailService);
$userService->register($user);


/**
 *
 * This class represents a circle and extends the abstract base class Shape.
 * It provides an implementation for the calculateArea method to calculate
 * the area of the circle.
 *
 * This is an example of the Open/Closed Principle because the Circle class
 * extends the Shape class without modifying it. The Shape class is open for
 * extension (by creating new subclasses like Circle) but closed for modification
 * (the existing code in Shape does not need to be changed to add new shapes).
 *
 */

$circle = new Circle(5);
echo 'Circle area: ' . $circle->calculateArea() . PHP_EOL;
echo $circle->getType() . PHP_EOL;


/*
 * Extending Square from the Shape abstract class is in line with the Liskov Substitution Principle (LSP) because:
 * 1. Shape defines a common interface for all shapes, ensuring that Square can be used interchangeably with other shapes.
 * 2. If Square were to extend Rectangle, it might violate LSP because a Square is a specific type of Rectangle with equal sides, 
 *    and changing one side of a Rectangle should not necessarily change the other side, which is not true for a Square.
 * By extending Shape, Square adheres to the expected behavior of all shapes, maintaining substitutability.
 */


$rectangle = new Rectangle(5, 10);
echo 'Rectangle area: ' . $rectangle->getArea() . PHP_EOL;

$square = new Square(5.1);
echo 'Square area: ' . $square->getArea() . PHP_EOL;

/*
 * This is an example of the Interface Segregation Principle (ISP) because:
 * 1. The IShape2D interface defines a method for calculating the area of a 2D shape.
 * 2. The IShape3D interface defines methods for calculating the area and volume of a 3D shape.
 * 3. The Circle class implements IShape2D because it only needs to calculate the area of a 2D shape.
 * 4. The Sphere class implements IShape3D because it needs to calculate both the area and volume of a 3D shape.
 * By separating the interfaces based on the methods required by each class, we avoid forcing classes to implement unnecessary methods.
 */

$circle = new \Saschabrandt\Designpatterns\SOLID\I\Circle(5);
echo 'Circle area: ' . $circle->getArea() . PHP_EOL;

$sphere = new \Saschabrandt\Designpatterns\SOLID\I\Sphere(5);
echo 'Sphere area: ' . $sphere->getArea() . PHP_EOL;
echo 'Sphere volume: ' . $sphere->getVolume() . PHP_EOL;


/*
 * This is an example of the Dependency Inversion Principle (DIP) because:
 * 1. The Car class depends on the Engine class through dependency injection.
 * 2. The Car class does not create an instance of the Engine class directly but receives it as a constructor parameter.
 * 3. This allows the Car class to work with any class that implements the Engine interface, making it more flexible and easier to test.
 */

$car = new Car(new Engine());
$car->start();