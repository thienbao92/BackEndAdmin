$(document).ready(function(){

var json = [{"name": "name1","score":"30"},{"name": "name2","score":"50"}];
//while running this code the template will be appended in your div with json data
$("#tbody").jPut({
    jsonData:json,
    //ajax_url:"youfile.json",  if you want to call from a json file
    name:"tbody_template",
});

});