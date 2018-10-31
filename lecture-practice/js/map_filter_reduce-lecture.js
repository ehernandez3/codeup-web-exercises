"use strict";

let numbers = [1, 2, 3, 4, 5, 6, 7,8, 9, 10];

// Write coe that produces a new array of numbers with each number multiplied by 10

    // ES5 WAY
    // let output = [];
    // numbers.forEach(number => {
    //     output.push(number * 10);
    // });
    // console.log(output);


    // ES5 syntax w/ .map method
    // let output = numbers.map(function (number) {  // S
    //     return number * 10;
    // });


    //.map takes in an arrow function
    //.map returns a new array of the same length
    let output = numbers.map(number => number * 10);


// Given an array of strings, produce a new array with

let arrayOfStrings = ["npm", "pip", "brew", "apt",];

let captializedStrings = arrayOfStrings.map((string) => string.toUpperCase());

console.log(captializedStrings);




var filteredNumbers = numbers.filter(function (number) {
    return number === 3 || number === 5;
});

console.log(filteredNumbers);