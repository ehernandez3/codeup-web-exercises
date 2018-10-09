"use strict";

//----------------For Loops-----------------------

//   1.    Create a file named for_loops.js inside the js directory and link it to your loops.html file.
//
//   2.    Create a function named showMultiplicationTable that accepts a number and console.logs the multiplication table for that number (just multiply by the numbers 1 through 10)
//
//         For example, showMultiplicationTable(7) should output
//
//
//          7 x 1 = 7
//          7 x 2 = 14
//          7 x 3 = 21
//          7 x 4 = 28
//          7 x 5 = 35
//          7 x 6 = 42
//          7 x 7 = 49
//          7 x 8 = 56
//          7 x 9 = 63
//          7 x 10 = 70
//


// function showMultiplicationTable(number) {
//     for (var incrementingNumber = 1; incrementingNumber <= 10; incrementingNumber += 1) {
//         console.log(number + " x " + incrementingNumber + " = " + number * incrementingNumber);
//     }   console.log("Congratulations! Ya did it!!!");
//         }
//         showMultiplicationTable(9);


//
//
// 3.  Use a for loop and the code from the previous lessons to generate 10 random numbers between 20 and 200 and output to the console whether each number is odd or even. For example:
//
//
//      123 is odd
//      80 is even
//      24 is even
//      199 is odd
//      ...

// var isEven = randomNum % 2 === 0;
// var isOdd = randomNum % 2 === 1;
// var range = [min, max];
//     for (range.push(Math.floor(Math.random() * (max - min + 1)); randomNum
// }

// var allCones = Math.floor(Math.random() * 100) + 100;
// for (var i = 10; i < 200; i++) {
//
//     if (i % 2 !== 0) {
//         console.log(i + ' is odd');
//         break;
//     }
//     if (i % 2 === 0) {
//         console.log(i + ' is even');
//         break;
//     }
// }



//     Create a for loop that uses console.log to create the output shown below.
//
//
// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777
// 88888888
// 999999999

for (var i = 1; i <= 9; i += 1 + toString(i)) {
    console.log("" + i);
}

// Create a for loop that uses console.log to create the output shown below.
//
//
// 100
// 95
// 90
// 85
// 80
// 75
// 70
// 65
// 60
// 55
// 50
// 45
// 40
// 35
// 30
// 25
// 20
// 15
// 10
// 5
// Break and Continue
//
// Create a file named break_and_continue.js in the js directory.
//     Prompt the user for an odd number between 1 and 50. Use a loop and a break statement to continue prompting the user if they enter invalid input.
//     Use a loop and the continue statement to output all the odd numbers between 1 and 50, except for the number the user entered.
//     Your output should look like this:
//
//
// Number to skip is: 27
//
// Here is an odd number: 1
// Here is an odd number: 3
// Here is an odd number: 5
// Here is an odd number: 7
// Here is an odd number: 9
// Here is an odd number: 11
// Here is an odd number: 13
// Here is an odd number: 15
// Here is an odd number: 17
// Here is an odd number: 19
// Here is an odd number: 21
// Here is an odd number: 23
// Here is an odd number: 25
// Yikes! Skipping number: 27
// Here is an odd number: 29
// Here is an odd number: 31
// Here is an odd number: 33
// Here is an odd number: 35
// Here is an odd number: 37
// Here is an odd number: 39
// Here is an odd number: 41
// Here is an odd number: 43
// Here is an odd number: 45
// Here is an odd number: 47
// Here is an odd number: 49