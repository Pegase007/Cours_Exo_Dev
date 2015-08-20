var http = require("http");
var fs = require ("fs");

http.createServer (function(req,res)
{

		
		
       if(req.url == "/main.css"){

         fs.readFile("main.css",function(err,css){

  				res.end(css);       	
         });

       }
       else {
       		fs.readFile("index.html",function(err,html)
			{

			res.end(html);

            });
       }



}).listen(3000);



console.log("hello world");