$(document).ready(function(){

//var json = [{"name": "name1","score":"30"},{"name": "name2","score":"50"}];
//while running this code the template will be appended in your div with json data

// $("#TestList").jPut({
//     //jsonData: json,
//     ajax_url:"../test.json",//  if you want to call from a json file
//     name:"Test List",
// })

$("#TestList").jPut({
    //jsonData: json,
    ajax_url:"../class.json",//  if you want to call from a json file
    name:"Test List",
})

});