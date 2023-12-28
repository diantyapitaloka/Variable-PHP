## 🦞🦀🦑 Introduction 🦑🦀🦞
- PHP is a programming language that has many variables. Learning PHP is incomplete without discussing PHP variables.

- Once you learn the basics of PHP, you will see a dollar sign ($) on your screen, because this symbol ($) is used to mark variables. The following is a further explanation of PHP variables.

## 🦞🦀🦑 Learning Basic PHP: Understanding the Use of Variables 🦑🦀🦞
- PHP variables are similar to small containers used to store value information. This value usually consists of letters or numbers, but variables can also exist without storing any value.

- You don't need to declare a variable before adding a value to it. The first time you assign a value to a particular variable name, you create a variable.

- Values are assigned using the equal sign, also called the assignment operator (=). Repetition of a process with the same name results in a change in value.

- PHP will also automatically understand the type of variable that corresponds to the value you have set. The context in which a particular PHP variable works is called the scope of the PHP variable. Several things you need to pay attention to when using PHP variables:

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
The following is an example of a variable in global scope:

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
