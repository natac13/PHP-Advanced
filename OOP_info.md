###A good rule of thumb is:
For a simple site OOP will add unnecessary complexity
for a complex site OOP will add NECESSARY simplicity

What are objects?
Say a groping a code by a common theme. Think of all my forum function could
have been placed inside a object

objects can be web pages or customers as examples

Objects are good for code organization and maintainability
Will also add clarity, and reduce complexity

Simple rules allow for complex interactions: Say I want to put a student in a
classroom well there can be lot of complexity behind that like is the class
full, where the student sits and also the class count can be updated all by
a simple issue of a command like put new student in the classroom.

OOP is a great fit when working with databases like MySQL.

####For object ONLY!
When I create a new instance of a class say of class Person like:
```
$natac = new Person();
$x = $natac;
```

The $x equal part is really an automatic reference assignment. Therefore no 
new amount of memory it taken up. This was done in php 5.5. Before hand I 
would have needed to put &= like a normal reference. This may still appear to 
signal the intent of the programmer or because the code was written prior to 
php 5.5.