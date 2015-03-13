$(document).ready(function(){


//while running this code the template will be appended in your div with json data

// $("#TestList").jPut({
//     //jsonData: json,
//     ajax_url:"../test.json",//  if you want to call from a json file
//     name:"Test List",
// })


//return json arrays from PHP file
var jsonp = (function () {
    var jsonp = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "http://users.metropolia.fi/~minhtn/game/getDataArray.php",
        'dataType': "json",
        'success': function (data) {
            jsonp = data;
        }
    });
    return jsonp;
})(); 

$("#TestList").jPut({
    jsonData: jsonp,
    //ajax_url:"../class.json",//  if you want to call from a json file
    name:"Test List",
})

});