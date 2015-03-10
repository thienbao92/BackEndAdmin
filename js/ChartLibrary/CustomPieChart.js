window.onload = function() {

//chart in Single Test anylysis	
var chart = c3.generate({
	bindto: "#PieChart",
    data: {
        columns: [
            ['data1', 100, 200, 150, 300, 200],
            ['data2', 400, 500, 250, 700, 300],
        ],
        type: 'pie'
    }
});
    // End chart in Single Test anylysis	

var chart2 = c3.generate({
	bindto:"#MultiBarChart",
    data: {
        columns: [
            ['data1', 30, 200, 100, 400, 150, 250],
            ['data2', 130, 100, 140, 200, 150, 50]
        ],
        type: 'bar'
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
            categories: ['Game 1', 'Game 2', 'Game 3', 'Game 4', 'Game 5', 'Game 6', 'Game 7', 'Game 8', 'Game 9']
        }
    }
});


}//end function