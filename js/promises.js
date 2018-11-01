"use strict";

// 2. Write a function named wait that accepts a number as a parameter,
// and returns a promise that resolves after the passed number of milliseconds.


    // let wait = ((number) => {
    //     return new Promise((resolve) => {
    //         setTimeout(resolve, number)
    //     })
    // });

    // let wait = ((number) => {
    //     return new Promise((resolve) => setTimeout(resolve, number));
    // });
    //
    // wait(1000).then(() => console.log('You\'ll see this after 1 second'));
    // wait(3000).then(() => console.log('You\'ll see this after 3 seconds'));


//================== Justin's Solution

    // copy from github

//====================================================================================

// 1. Generate a Personal Access Token for the github api.
//
// We will use this so that we don't get rate limited when talking to the github api.
// You can add the token to your requests like this:

// fetch(url, {headers: {'Authorization': 'token YOUR_TOKEN_HERE'}})


// 2. Create a function that accepts a github username, and returns a promise that
// resolves with the date of the last commit that user made. Reference the github
// api documentation to achieve this.

// ================ My Solution

    // let getCommitDate = ((username) => {
    //         // fetch(`https://api.github.com/users/${username}/events/public/`, {headers: {'Authorization': 'e102acd13c5ba6d39fc7e9fd22f6144ea63e385f'}})
    //         fetch(`https://api.github.com/users/${username}/events`, {headers: {'Authorization': 'e102acd13c5ba6d39fc7e9fd22f6144ea63e385f'}})
    //
    // .then(response => response.json())
    // .then(events => {
    //     console.log(events);
    //     for(let event of events) {
    //         if(event.type === PushEvent) {
    //             console.log(event.payload.commits[0]);
    //             console.log(event.created_at);
    //         }
    //     }
    // });
    //
    // });
    //
    // // .catch(error => console.log(error));
    //
    //
    //
    // getCommitDate("ehernandez3");


// ================ Justin's Solution

    const token = '5bb55c29e4f68175642ea81b92b3d9275f60608d';
    const githubApiBaseUrl = 'https://api.github.com';
    const options = {
        headers: {
            'Authorization': 'token ' + token
        }
    };

    // copy comments from github

    const getMostRecentCommit = (username) => {
        const userEventsEndpoint = `/users/${username}/events/public`;
        return fetch(githubApiBaseUrl + userEventsEndpoint, options)
            .then((response) => response.json())
            .then((events) => {
                const firstPushEvent = events.find(event => event.type === "PushEvent");
                return fetch(firstPushEvent.repo.url + "/commits", options);
                // console.log(firstPushEvent);
            })
            .then(response => response.json())
            .then(commits => {
                const mostRecentCommit = commits.find(commit => commit.author.login === username);
                // console.log(mostRecentCommit);
                // return mostRecentCommit;
                return mostRecentCommit.commit.committer.date;

            });

    };

    getMostRecentCommit("ehernandez3").then(getMostRecentCommit => {
        console.log(getMostRecentCommit);
    });
        // .then((data) => {
        //     console.log(data);
        // });