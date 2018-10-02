"use strict";

// console.log("Hello from external JavaScript");
//
// alert("Welcome to my Website!");
//
//
// var userFaveColor = prompt("What is your favorite color?");
//
// alert("Great, " + userFaveColor + " is my favorite color too!");

// ------------------------OR-----------------------------
// alert("Great," + " " + userFaveColor + " " + "is my favorite color too!");

alert("Welcome to Movie Max! Would you like to rent a movie?");

var costPerDay = 3;

var rentDaysMermaid = prompt("How many days would you like to rent The Little Mermaid for?");

var rentDaysBear = prompt("How many days would you like to rent Brother Bear for?");

var rentDaysHercules = prompt("How many days would you like to rent Hercules for?");

var totalRentalCost = (parseFloat(rentDaysMermaid)
    + parseFloat(rentDaysBear)
    + parseFloat(rentDaysHercules))
    * parseFloat(costPerDay);

// alert("Thank you for choosing Movie Max! Your total today is $" + ((rentDaysMermaid * costPerDay) + (rentDaysBear * costPerDay) + (rentDaysHercules * costPerDay)));

alert("Thank you for choosing Movie Max! Your total today is $" + totalRentalCost.toFixed(2));