$(document).ready(function(){

//return href location
// Link sources : http://stackoverflow.com/questions/406192/get-current-url-in-javascript


var url = $(location).attr('href');
console.log(url);
//return json arrays from PHP file


var jsonp = (function () {
    var jsonp = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': url,
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


var testJsonList = [{"gameID": "1"},{"gameID": "2"},{"gameID": "3"},{"gameID": "4"}];
$("#GameList").jPut({
    jsonData: testJsonList,
    //ajax_url:"../class.json",//  if you want to call from a json file
    name:"Game List",
})

});