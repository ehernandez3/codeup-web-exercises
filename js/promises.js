"use strict";

// 2. Write a function named wait that accepts a number as a parameter,
// and returns a promise that resolves after the passed number of milliseconds.


    // let wait = ((number) => {
    //     return new Promise((resolve) => {
    //         setTimeout(resolve, number)
    //     })
    // });

    let wait = ((number) => {
        return new Promise((resolve) => setTimeout(resolve, number));
    });

    wait(1000).then(() => console.log('You\'ll see this after 1 second'));
    wait(3000).then(() => console.log('You\'ll see this after 3 seconds'));
//====================================================================================

// 1. Generate a Personal Access Token for the github api.
//
// We will use this so that we don't get rate limited when talking to the github api.
// You can add the token to your requests like this:

// fetch(url, {headers: {'Authorization': 'token YOUR_TOKEN_HERE'}})


// 2. Create a function that accepts a github username, and returns a promise that
// resolves with the date of the last commit that user made. Reference the github
// api documentation to achieve this.

    // fetch(`https://api.github.com/users/${username}`, {headers: {'Authorization': 'token ce1bd104dc979d6acabe2f5ae1bfe9381afcdee4'}});

    let getCommitDate = ((username) => {
            fetch(`https://api.github.com/users/${username}/events/public`, {headers: {'Authorization': 'token ce1bd104dc979d6acabe2f5ae1bfe9381afcdee4'}});
    });

    console.log(getCommitDate("ehernandez3"));
    //      /repos/:owner/:repo/git/commits/date