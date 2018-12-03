"use strict";

//The trash company has 10 trucks that all need new tires. Each truck requires 6 new tires to be replaced.



    let trucks = [
        {
            truckNumber: 1,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 2,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 3,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 4,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 5,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 6,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 7,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 8,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 9,
            tires: {
                1: 'bad',
                2: 'bad',
                3: 'bad',
                4: 'bad',
                5: 'bad',
                6: 'bad'
            }
        },
        {
            truckNumber: 10,
            tires: [

               'bad',
               'bad',
                'bad',
             'bad',
             'bad'

            ]

        }
    ];


    for (var i = 0; i < trucks.length; i ++){

        console.log(trucks[i].truckNumber);

        for (var tireNum in trucks[i].tires) {

            if (trucks[i].tires[tireNum] === 'bad'){
                trucks[i].tires[tireNum] = 'good';
            }

            console.log(trucks[i].tires[tireNum])
        }

    }


