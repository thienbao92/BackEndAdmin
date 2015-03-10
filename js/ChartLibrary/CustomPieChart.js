

window.onload = function() {
var chart = c3.generate({
    data: {
        columns: [
            ['data1', 100, 200, 150, 300, 200],
            ['data2', 400, 500, 250, 700, 300],
        ],
        type: 'pie'
    }
});
    
}