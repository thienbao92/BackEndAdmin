window.onload = function() {

//chart in Single Test anylysis	
var chart = c3.generate({
	bindto: "#PieChart",
    data: {
        columns: [
            ['Excellent', 30],
            ['Good', 20],
            ['Average', 15],
            ['Bad', 10],
        ],
        type: 'pie'
    }
});
    // End chart in Single Test anylysis	
//test result charts
//barchart
var chart2 = c3.generate({
	bindto:"#MultiBarChart",
    data: {
        columns: [
            ['Excellent', 30, 30, 30],
            ['Good', 20, 20,20,],
            ['Average', 15, 15, 15],
            ['Bad', 10,10,10],

        ],
        type: 'bar',
        labels: true
    },
    bar: {
        width: {
            ratio: 0.5 // this makes bar width 50% of length between ticks
        }
        // or
        //width: 100 // this makes bar width 100px
    },
    axis: {
        x: {
            type: 'category',
            categories: ['Game 1', 'Game 2', 'Game 3', 'Game 4', 'Game 5', 'Game 6', 'Game 7', 'Game 8', 'Game 9'],
            label: 'Games'
        },
        y: {
            label: ' Number of Students'
        }
    }
}); 
// END bar chart

//  So lan choi linechart
var chart3 = c3.generate({
    bindto:"#TestResultLineChart",
    data: {
        columns: [
            ['Number of plays', 500, 380, 200],

        ],
        type: 'bar',
        labels: true,
        zoom: {
        enabled: true
    }
    },
    bar: {
        width: {
            ratio: 0.5 // this makes bar width 50% of length between ticks
        }
        // or
        //width: 100 // this makes bar width 100px
    },
    axis: {
        x: {
            type: 'category',
            categories: ['Game 1', 'Game 2', 'Game 3', 'Game 4', 'Game 5', 'Game 6', 'Game 7', 'Game 8', 'Game 9'],
            label: 'Games'
        },
        y: {
            label: ' Number of Plays'
        }
    }
}); 
// END bar chart



}//end function