## 🦞🦀🦑 Introduction 🦑🦀🦞
The definition:
- PHP is a programming language that has many variables.
- Static Variables: If you want a variable inside a function to "remember" its value even after the function finishes (without making it global), use the static keyword. This is perfect for counters.
- Learning PHP is incomplete without discussing PHP variables.
- Variable Scope (Local vs. Global): Variables created inside a function are "local" and vanish once the function ends. To use a variable from the outside world inside a function, you must use the global keyword or the GLOBALS array.
- Variable Persistence: Standard PHP variables are stateless and reset every time the page is refreshed or a new request is made. To keep a variable's value alive for a returning user, you must store it in a Session or a Cookie.
- Null Coalescing Operator: To provide a default value when a variable might be missing, you can use the double question mark (??) operator. This shorthand simplifies your code by checking for a value and assigning a fallback in a single, readable line.
- Memory Management: PHP uses a system called "reference counting" to automatically manage memory and delete variables that are no longer in use. You can manually trigger this cleanup for large data sets by using the unset function to destroy a variable explicitly.
- Strict Typing: While PHP is traditionally flexible with types, you can enforce "strict types" at the top of your file to ensure functions only accept specific data categories. This reduces bugs by requiring that an integer remains an integer, rather than being "juggled" into a string.
- Boolean Logic: Any variable can be evaluated as a true or false value depending on its content, a concept known as "truthy" or "falsy." For instance, an empty string or the number 0 is treated as false, while a non-empty string or positive integer is true.
- The Var_dump Debugger: When your code isn't behaving as expected, is the most essential tool in your kit for inspecting variables. It reveals not only the value of the variable but also its data type and length, which is vital for finding hidden bugs.
- Reference Variables: By using the ampersand symbol , you can create a reference that points to the same memory location as another variable. This means changing the value of one will instantly update the other, as they are effectively two names for the same data.
- Type Juggling: PHP automatically converts variables to the necessary data type based on the context in which they are used. For example, if you add an integer to a string that starts with a number, PHP will perform the math instead of throwing an error.
- Variable Interpolation: When using double quotes, PHP will parse variables directly inside the string and replace them with their actual values. This makes concatenating text and data much more readable than using the dot operator for every single piece of information.
- Constants vs. Variables: Unlike standard variables, constants are defined without a dollar sign and cannot be changed once set. They are globally accessible across your entire script, making them ideal for configuration settings like database credentials.
- Scope Boundaries: Variables defined inside a function are local and cannot be accessed from the outside script. You must use the global keyword if you need to pull an external variable into that function’s logic.
- The Null Coalesce: The operator allows you to assign a default "fallback" value if a variable is undefined or null. This prevents errors when dealing with user input or database results that might be empty.
- Array Destructuring: You can quickly "unpack" multiple values from an array into individual variables using the square bracket syntax. This makes your code much cleaner when you need to assign several related pieces of data at once.
- Always try to initialize your variables. Even though PHP lets you create them on the fly, it’s best practice to define them early to prevent "Undefined variable" notices.
- Once you learn the basics of PHP, you will see a dollar sign ($) on your screen, because this symbol ($) is used to mark variables. The following is a further explanation of PHP variables.
- A variable name must start with a letter or an underscore (_), never a number. While they can contain alphanumeric characters (A-z, 0-9), sticking to clear, descriptive names makes your future self much happier.
- PHP variables are picky. $User, $user, and $USER are treated as three completely different containers. Consistency is key to avoiding "missing variable" bugs.
- PHP comes with special built-in variables that are always available, regardless of scope. Examples include $_GET and $_POST (for form data) or $_SESSION (for user login info).
- PHP has a unique "meta" feature where you can use the value of one variable as the name of another. For example, $$name allows for dynamic scripting, though it’s a power best used sparingly.
- Unlike "Strict" languages (like Java), you don't have to tell PHP if a variable is a string or an integer. You can change a variable from $data = "Hello" to $data = 100 in the next line without the engine complaining.

## 🦞🦀🦑 Learning Basic PHP: Understanding the Use of Variables 🦑🦀🦞
Learning Basics:
- PHP variables are similar to small containers used to store value information. This value usually consists of letters or numbers, but variables can also exist without storing any value.

- You don't need to declare a variable before adding a value to it. The first time you assign a value to a particular variable name, you create a variable.

- Values are assigned using the equal sign, also called the assignment operator (=). Repetition of a process with the same name results in a change in value.

- PHP will also automatically understand the type of variable that corresponds to the value you have set. The context in which a particular PHP variable works is called the scope of the PHP variable.

## 🦞🦀🦑 Note for PHP Variable 🦑🦀🦞
Several things you need to pay attention to when using PHP variables:

1. Variables in PHP start with the $ sign.
2. Variables in PHP are used to store information (values).
3. The name of a variable can start with a letter or an underscore character (_), but never start with a number. 4. However, it may contain numbers.
5. Variables are case sensitive.
6. Because PHP is a loosely typed language, so we don't need to declare variable data types.
7. After declaring a variable, it can be reused throughout the code.
8. Assignment Operator (=) is used to assign values to variables.

## 🦞🦀🦑 Examples of Using Variables 🦑🦀🦞
- PHP variables can have names as long or as short as you want. These can consist of one letter (a, b, c, and so on) or contain many words such as tree, household, and so on.

- The example below shows that the variable $name is a container for Jason's value and the variables $a and $b have values 5 and 10 respectively.

```
<?php
  $nama = "Jason";
  $a = 5;
  $b = 10;
?>
```

If you want to output information to the screen, it's easy to do by using the echo statement. In the example below, you can see the PHP variables used in the echo statement. The result is the output of the statement text and the value that has been assigned to the variable $name.

```
<?php
  $nama = "Jason";
  echo "Perkenalkan nama saya adalah $nama";
?>
```


## 🦞🦀🦑 Variable Scope in PHP 🦑🦀🦞

- PHP users can declare variables anywhere in the PHP script, outside the function or with the function. The exact area within which a particular variable can be used is called the scope of the variable. There are three main scopes of variables, namely local, global and static. We will show several examples of variables from three scopes.

## 🦞🦀🦑 Local Scope 🦑🦀🦞
The following is an example of using variables with local scope:

```
<?php
  function belajar() {
    $a = 5; // cakupan lokal
    echo "Nilai variabel a dalam function adalah: $a";
  } 
  belajar();
```

```
  // memanggil variabel a di luar function akan menghasilkan error
  echo "Nilai variabel a di luar function adalah: $a";
?>
```

## 🦞🦀🦑 Global Scope 🦑🦀🦞
The following is an example of a variable in global scope such as:

```
<?php
  $a = 5; // cakupan global
 
  function belajar() {
    // memanggil variabel a di dalam function akan menghasilkan error
    echo "Nilai variabel a dalam function adalah: $a";
  } 
  belajar();
  echo "Nilai variabel a di luar function adalah: $a";
?>
```

## 🦞🦀🦑 Static Scope 🦑🦀🦞
The following is an example of a variable in static scope:

```
<?php
  function hitung() {
    static $a = 5;
    echo $a;
    $a++;
  }
  hitung();
  hitung();
?>
```

Variables will retain their local scope and previously held data. It will not be deleted, no matter how many times you will repeat the function.

## 🦞🦀🦑 Conclusion 🦑🦀🦞
Here are the conclusions of this article as follows:

1. You can recognize PHP variables from the first time you see them, because they always start with $.
2. Although the name can contain numbers, it cannot start with one: the first symbol must be a letter or an underscore (_).
3. The information stored in a particular PHP variable is called a value.
4. Unlike functions, variables are case sensitive.
5. That's the basic PHP learning material related to how to use variables in PHP.

## 🦞🦀🦑 Licences 🦑🦀🦞
Copyright by Diantya Pitaloka
