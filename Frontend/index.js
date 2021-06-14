
var express = require('express');
var $ = require('jquery');
var path = require('path')
    var app = express();  
    app.use(express.static(path.join(__dirname, 'public')));
    app.get('/', function(req, res) {
        res.render("index.ejs");
    });
     
    app.listen(3000, function() {
     console.log("Server is running at 3000 port!");
    });
