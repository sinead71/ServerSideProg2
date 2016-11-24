<html>
    <head>
        <script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous">
        </script>
    </head>
    <body>
        <button name="button">go</button>
        <script>
            $(document).ready(function(){
                $("lorem").load("ipsum.html", function(){
                    alert("Load was performed");
                });
                
                $("button").click(function(){
                    $.getJSON('persDetails.json', function(data){
                        $.each(data.employees, function(entryIndex, entry){
                            console.log(entry['firstName']);
                        });
                    });
                });
            });
            
        </script>
    </body>
</html>