"use strict";



// var num = 2;
// while (num <= 65536) {
//     console.log(num);
//     num = num * 2;
// }


// An ice cream seller can't go home until she sells all of her cones. Write a JS program that generates a random number
// between 50 and 100 representing the amount of cones to sell. Your code should generate numbers between 1 and 5,
// simulating the amount of cones being bought by her clients. Use a do-while loop to log to the console the amount of
// cones sold to each person. This is how you get the random numbers.
//
//
// // This is how you get a random number between 50 and 100
// var allCones = Math.floor(Math.random() * 50) + 50;

// // This expression will generate a random number between 1 and 5
// Math.floor(Math.random() * 5) + 1;

// The output should be similar to the following:
//
//     5 cones sold...  // if there are enough cones
//     Cannot sell you 6 cones I only have 3...  // If there are not enough cones
//     Yay! I sold them all! // If there are no more cones

var conesOrdered;
do {
    conesOrdered = Math.ceil(Math.random() * 5);
    console.log("The next customer ordered " +)
} while (allCones > 0);