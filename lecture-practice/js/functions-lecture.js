"use strict";


// function returnAllCapsString (input) {
//     return input.toUpperCase();
// };
//
// var someValue = returnAllCapsString('first')
//
// console.log(someValue);



//

//----------Justin's Example---------------

// function countLettters(input) {
//     var output = 0;
//     var strippedWhitespace = input.trim();
//     output = strippedWhitespace.length;
//
//     return output;
// }
//
// console.log(countLettters("  xanadu  ")); //6

//-------------My Attempt--------------
//*** make a function, hasLetterA() that takes in a string
//and returns true if the string contains "a" and false if
//it does not; test the function


// function hasLetterA(input) {
//     var output = 0;
//     var searchForA = input.indexOf("a");
//
//     return output;
// }



// function hasLetterA(strInput) {
//     var output;
//     //search string for letter "a"
//     output = strInput.indexOf("a") !== -1;// -1 because a is 0 in the alphabet.
//     //If letter "a" present, make true, otherwise make false
//     return output;
// }
// console.log(hasLetterA("a"));


// function sayName(someFunction) {
//     return "Hello " + someFunction();
//
// }
// function returnJustin() {
//     return "Justin";
// }
//
// sayName(returnJustin);



//---------------------Scope---------------------------

        // function testFunction() {
        //     var output = "hello";
        //     return output;
        // }

(function() {
    "use strict";

    //variable defined in the global scope become

    function hello() {
        alert("HI!!");
    }

    var
})