"use strict";

// console.log("Hello from external JavaScript");
//
//------------------------1------------------------------
// alert("Welcome to my Website!");
//
//
//------------------------2------------------------------
// var userFaveColor = prompt("What is your favorite color?");
//
// alert("Great, " + userFaveColor + " is my favorite color too!");

// ------------------------OR-----------------------------
// alert("Great," + " " + userFaveColor + " " + "is my favorite color too!");



//------------------------3a------------------------------
// alert("Welcome to Movie Max! Would you like to rent a movie?");
//
// var costPerDay = 3;
//
// var rentDaysMermaid = prompt("How many days would you like to rent The Little Mermaid for?");
//
// var rentDaysBear = prompt("How many days would you like to rent Brother Bear for?");
//
// var rentDaysHercules = prompt("How many days would you like to rent Hercules for?");
//
// var totalRentalCost = (parseFloat(rentDaysMermaid)
//     + parseFloat(rentDaysBear)
//     + parseFloat(rentDaysHercules))
//     * parseFloat(costPerDay);
//
// alert("Thank you for choosing Movie Max! Your total today is $" + totalRentalCost.toFixed(2));
// ------------------------OR-----------------------------
// alert("Thank you for choosing Movie Max! Your total today is $" + ((rentDaysMermaid * costPerDay) + (rentDaysBear * costPerDay) + (rentDaysHercules * costPerDay)));



//------------------------3b------------------------------
// var googlePerHour = prompt("How much does Google pay per hour?");
// var googleHoursWorked = prompt("How many hours did you work for Google?");
//
// var amazonPerHour = prompt("How much does Amazon pay per hour?");
// var amazonHoursWorked = prompt("How many hours did you work for Amazon?");
//
// var facebookPerHour = prompt("How much does Facebook pay per hour?");
// var facebookHoursWorked = prompt("How many hours did you work for Facebook?");
//
// var totalWeekPay = (parseFloat(googlePerHour) * parseFloat(googleHoursWorked))
//     + (parseFloat(amazonPerHour) * parseFloat(amazonHoursWorked))
//     + (parseFloat(facebookPerHour) * parseFloat(facebookHoursWorked));
//
// alert("You made $" + totalWeekPay.toFixed(2) + " this week!");



//------------------------3c------------------------------
// var classIsNotFull = confirm("Confirm that the class is not full");
// var classSchedulesCheck = confirm("Confirm that the schedules check ");



//------------------------3d------------------------------

//-----This-----
// var numberOfItemsForDiscount = prompt("How many items must be bought for discount?");
// var numberOfItems = prompt("How many items were bought?");
// var offerIsNotExpired = confirm("Confirm offer has not expired.");
// var isPremiumMember = confirm("Customer is a premium membr");
//
// var productDiscountIsApplied = isPremiumMember || (numberOfItems > numberOfItemsForDiscount && offerIsNotExpired);
//
//     alert("Product discount applied: " + productDiscountIsApplied);

//-----or this-----

var discountBreakPoint = 2;
var numberOfItems = prompt("How many items were bought?");
var offerIsNotExpired = confirm("Confirm offer has not expired.");
var isPremiumMember = confirm("Customer is a premium membr");

var productDiscountIsApplied = offerIsNotExpired && (isPremiumMember || numberOfItems >= discountBreakPoint);

    alert("Product discount applied: " + productDiscountIsApplied);