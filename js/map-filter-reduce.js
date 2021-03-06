"use strict";

const users = [
    {
        id: 1,
        name: 'ryan',
        email: 'ryan@codeup.com',
        languages: ['clojure', 'javascript'],
        yearsOfExperience: 5
    },
    {
        id: 2,
        name: 'luis',
        email: 'luis@codeup.com',
        languages: ['java', 'scala', 'php'],
        yearsOfExperience: 6
    },
    {
        id: 3,
        name: 'zach',
        email: 'zach@codeup.com',
        languages: ['javascript', 'bash'],
        yearsOfExperience: 7
    },
    {
        id: 4,
        name: 'fernando',
        email: 'fernando@codeup.com',
        languages: ['java', 'php', 'sql'],
        yearsOfExperience: 8
    },
    {
        id: 5,
        name: 'justin',
        email: 'justin@codeup.com',
        languages: ['html', 'css', 'javascript', 'php'],
        yearsOfExperience: 9
    }
];

// 1. Create a file named map-filter-reduce.js in your js directory and copy the users data below into it.

    // Done.

// 2. Use .filter to create an array of user objects where each user object has at least 3 languages in the languages array.

    let threeOrMoreUsers = users.filter((user) => user.languages.length >= 3);

    console.log(threeOrMoreUsers);

// 3. Use .map to create an array of strings where each element is a user's email address

    let userEmails = users.map((user) => user.email);

    console.log(userEmails);

// 4. Use reduce to get the total years of experience from the list of users. Once you get the total of years you can use the result to calculate the average.

    let totalYearsofExperience = users.reduce((accumulator, user) => {
        return accumulator + user.yearsOfExperience;
    }, 0);
    console.log(totalYearsofExperience);

    let averageNumberOfYears = totalYearsofExperience / users.length;
    console.log(averageNumberOfYears);


// 5. Use reduce to get the longest email from the list of users.

    let longestEmail = users.reduce((prev, curr) => {
        if(prev.length < curr.email.length) {
            return curr.email
        } else {
            return prev;
        }

    }, "");

    console.log(longestEmail);

// 6. Use reduce to get the list of user's names in a single string. Example: Your instructors are: ryan, luis, zach, fernando, justin.


    // //Option 1
    // let initialValue = "";
    // users.forEach(user => {
    //     initialValue += user.name + "' ";
    // });
    //
    // initialValue = initialValue.substring(0, initialValue.length - 2) + ".";
    //
    // console.log(initialValue);


    let nameString = users.reduce((accumulator, user) => {
        // return  accumulator + user.name + ", ";
        return `${accumulator}${user.name}, `;
    }, "");

    nameString = nameString.substring(0, nameString.length - 2) + ".";

    console.log(nameString);


// Use .map to produce a new array of objects containing only the email and name
    const contactInfo = users.map(({name, email}) => {
        return {
            name,
            email,
            employer: "Codeup"
        }
    });

console.log(contactInfo);

// Use reduce to get the unique list of languages from the list of users.
    let languages = users.reduce((accumulator, user) => {
        user.languages.map(language => {
            accumulator.push(language)
        });
        return accumulator;
    }, []);

    languages = new Set(languages); // A value in the Set may only occur once (No duplicates)
    languages = Array.from(languages);

    console.log(languages);