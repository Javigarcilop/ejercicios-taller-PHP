# PHP Exercises - Web Applications Development

This repository contains various PHP exercises related to the course "Desarrollo de Aplicaciones Multiplataforma/Web" as part of the DWEC module, guided by **Professor Carlos Basulto Pardo**.

## Table of Contents

1. [Theme 2: PHP Syntax](#theme-2-php-syntax)
   - [Exercise 1: Echo and Embedded HTML](#exercise-1-echo-and-embedded-html)
   - [Exercise 2: Comments and Best Practices](#exercise-2-comments-and-best-practices)
   - [Exercise 3: Variables and Constants](#exercise-3-variables-and-constants)
2. [Theme 3: Types, Variables, and Constants](#theme-3-types-variables-and-constants)
   - [Exercise 1: Types and Conversion](#exercise-1-types-and-conversion)
   - [Exercise 2: Multidimensional Arrays](#exercise-2-multidimensional-arrays)
   - [Exercise 3: Interest Rate Calculation](#exercise-3-interest-rate-calculation)
3. [Theme 4: Operators](#theme-4-operators)
4. [Theme 5: Control Structures](#theme-5-control-structures)
5. [Theme 6: Arrays](#theme-6-arrays)
6. [Theme 7: Functions](#theme-7-functions)

---

## Theme 2: PHP Syntax

### Exercise 1: Echo and Embedded HTML

**Description:**
This exercise demonstrates how to generate HTML using PHP's `echo` statement. It generates a form where the user can input their name and see it displayed after submission.

**File:** `form_echo.php`

**Instructions:**
1. Open the file in the browser.
2. Enter your name in the form and submit it.
3. The page will display your name.

---

### Exercise 2: Comments and Best Practices

**Description:**
This exercise covers commenting in PHP and writing clean, understandable code. It defines a function `calcularAreaRectangulo($ancho, $alto)` and calculates the area of a rectangle.

**File:** `area_rectangulo.php`

**Instructions:**
- Review the code for comments explaining each part of the script.
- Run the script to see how it calculates the area of a rectangle.

---

### Exercise 3: Variables and Constants

**Description:**
In this exercise, we define a constant `GRAVITY` with a value of 9.8. A function checks if the inputted planet is Earth and then calculates the gravitational force using the entered mass.

**File:** `gravedad.php`

**Instructions:**
- Input the mass and planet name to see the calculated gravitational force.

---

## Theme 3: Types, Variables, and Constants

### Exercise 1: Types and Conversion

**Description:**
This script demonstrates data type conversion. A string containing a number (`"25"`) is converted to an integer, and then summed with another integer. The result is displayed using `var_dump()`.

**File:** `conversion.php`

**Instructions:**
- Run the script to see how PHP handles type conversion and the result of the sum.

---

### Exercise 2: Multidimensional Arrays

**Description:**
In this exercise, a multidimensional array stores information about students, including their names, ages, and grades. The script calculates and displays the average grade for each student.

**File:** `alumnos.php`

**Instructions:**
- Execute the script to display student information and their average grades.

---

### Exercise 3: Interest Rate Calculation

**Description:**
A constant `TASA_INTERES` is defined with a value of 0.05. The script takes a principal amount from the user and calculates the interest after one year using the constant.

**File:** `interes_simple.php`

**Instructions:**
- Enter a principal amount to see the calculated interest.

---

## Theme 4: Operators

### Exercise 1: Assignment and Conditional Operators

**Description:**
This exercise demonstrates the use of assignment operators to modify a variable's value and conditional statements to check if the final value is greater than 100.

**File:** `operadores_asignacion.php`

**Instructions:**
- Run the script to see the final value after applying assignment operators and conditionals.

---

## Theme 5: Control Structures

### Exercise 1: If-Else Statements for Age

**Description:**
The script asks for the user's age and uses if-else statements to categorize the user based on their age.

**File:** `edad.php`

**Instructions:**
- Enter your age to see the message corresponding to your age group.

---

### Exercise 2: Do-While Loop for Positive Numbers

**Description:**
This script uses a `do-while` loop to ask for a positive number until the user inputs one.

**File:** `numero_positivo.php`

**Instructions:**
- Enter numbers until a positive one is entered.

---

## Theme 6: Arrays

### Exercise 1: Array Traversal

**Description:**
An array of numbers from 1 to 10 is traversed using `foreach`. Each number is multiplied by 2, and the results are stored in a new array.

**File:** `multiplicar_array.php`

**Instructions:**
- Run the script to see the original and multiplied arrays.

---

## Theme 7: Functions

### Exercise 1: Functions and Reference Arguments

**Description:**
This script defines a function `incrementarPorValor()` which increments a passed variable by 10, using reference arguments.

**File:** `referencia.php`

**Instructions:**
- Run the script to see the effect of passing variables by reference.

---

## Setup Instructions

### Prerequisites
- **XAMPP** or **WAMP** for running PHP locally.
- **Visual Studio Code** (or any code editor) for editing the files.

### How to Run the Scripts:
1. Clone the repository:
   ```bash
   git clone https://github.com/Javigarcilop/RA2_AF_Ejercicios_Taller_en_PHP.git

