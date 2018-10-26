(function () {
"use strict";

// ================================= WARM UP
// The following should be done in your codeup-web-exercises repo...
//     Add and commit any work and push before starting this exercise.
//     Create an html file called pre-ajax.html (with jQuery)
//     - add a div with an id of 'names-list'
// - add a button after the div with an id of 'add-names-btn'
// Create a js file called pre-ajax.js
// - add a use strict and a $(document).ready(function() {});
// - add the following...
//     var people = [
//     {
//         name: "Fred",
//         favColor: "red"
//     },
//     {
//         name: "Sally",
//         favColor: "blue"
//     },
//     {
//         name: "Tom",
//         favColor: "yellow"
//     }
// ];
//
// - add functionality to the button so that when it is clicked, an unordered
// list of names from the people array (included below) is added to the inner
// HTML of the div#names-list. For an extra bonus, make the font color of each
// list item map to that person's favColor value.


// use IIFE function to enclose js code:

// (function () {
//     statements
// })();

// instad of document ready function:
// $(document).ready(function() {
//      statements
// });

    var people = [
        {
            name: "Fred",
            favColor: "red"
        },
        {
            name: "Sally",
            favColor: "blue"
        },
        {
            name: "Tom",
            favColor: "yellow"
        }
    ];
//=======================================SOLUTION 1
    //when button clicked should do the following:
        //
    function buildHTML(peopleObjects) {
        var totalHTML = "<ul>";

        // peopleObjects.forEach(function (person) { //========================= Option 1
        //     totalHTML += "<li>";
        //     totalHTML += person.name;
        //     totalHTML += "</li>";
        // });

        for (var i = 0; i < peopleObjects.length; i += 1) { //================== Option 2
            totalHTML += "<li>";
            totalHTML += peopleObjects[i].name;
            totalHTML += "</li>";
        }

        totalHTML += "</ul>"; //========================== Needed for both option 1 and 2
        return totalHTML;


    }

    $('#add-names-btn').click(function () {
        $('#names-list').html(buildHTML(people)); // Use .html if using jQuery and .innerHTML if using DOM
    });


    //============================== BENNY'S SOLUTION

    // $('#add-names-btn').click(function () {
    //     // adds ul when button is clicked
    //     $('#names-list').html('<ul></ul>'); // may be a way to add ul and names all at one?
    //
    //     // Using .each, goes through each object
    //     $.each(people, function (i, value) {
    //         // adds li's and names to ul
    //         $('ul').append('<li>' + people[i].name + '</li>');
    //     });
    // });

    //============================== DAVID'S SOLUTION w/ BONUS

// $('#add-names-btn').click(function() {
//     $('#names-list').html(function () {
//         var output = '<ul><li>';
//         people.forEach(function (person, index) {
//             if (index === (people.length - 1)) {
//                 output += person.name + '</li></ul>';
//             } else {
//                 output += person.name + '</li><li>';
//             }
//         });
//         return output;
//     });
//     $('li').each(function(i) {
//         $(this).css('color', people[i].favColor);
//     });
// });



})();