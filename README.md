# login
Login with OOP (PDO)
This is an example I have written after some trials to get to know OOP more
and to start understand more about Encapsulation and Inheritance
Finally I would say in my words that
Encapsulation is a defining the vars or methods as private, protected and public
Public method or property of a class is accesible from any other other class or Instance of that class
Private method or property is accessed only from the class it was defined in or via an instance of a class where it was defined
Protected method or property is accesible only from the class itself (it will become a parent class)
but also from the children (derived) classes (Class Subscriber extends User). In the children class they might not be re-defined

Another good example is http://stackoverflow.com/questions/4361553/php-public-private-protected

This is another example I found on internet and which can demonstrate the static keyword:
Here is the link http://stackoverflow.com/questions/4280001/protected-static-member-variables
class A {
   static protected $_foo = 'bar';

   static public function test() {
      echo self::$_foo;
   }
}

class B extends A {
   static protected $_foo = 'baz';
}

B::test(); // outputs 'bar'

If you change the self bit to:

echo static::$_foo;

Then do:

B::test(); // outputs 'baz'

Because self refers to the class where $_foo was defined (A), while static references the class that called it at runtime (B).
