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

//---------------------- Ryan's Solution -----------------------

// function showMultiplicationTable(number) {
//     for (var i = 1; i <= 10; i++) {
//         console.log(number + " x " + i + " = " + (number * i));
//     }
// }
//     showMultiplicationTable(7);

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

//---------------------- Ryan's Solution -----------------------

// function isEven(num) {
//     return num % 2 === 0;
// }
//
// var randomNumber;
// for (var i = 0; i < 10; i++) {
//     randomNumber = Math.floor(Math.random() * 180) + 20;
//
//     if(isEven(randomNumber)) {
//         console.log (randomNumber + " is even!");
//     } else {
//         console.log (randomNumber + " is odd!");
//     }
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

// for (var i = 1; i <= 9; i += 1 + toString(i)) {
//     console.log("" + i);
// }

// var num = "";
// for (var i = 1; i<=9; i++)
// { for (var j = 2; j <= 9; j++) {
//
// }
//     num = num + i + j;
//     console.log(num);
// }

//---------------------- Ryan's Solution -----------------------

// for (var i = 1; i <= 9; i++) {
//     i = i.toString()
//     console.log(i.repeat(i));
// }

//------------------------- OR --------------------------------

// var output = "";
// for (var i = 1; i <= 9; i++) {
//     output = "";
//     for (var j = 1; j <= i; j++) {
//         output += i;
//     }
//     console.log(output);
// }





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

// for (var i = 100; i >= 5; i -= 5) {
//     console.log(i);
// }

//---------------------- Ryan's Solution -----------------------
//                        Same as above




