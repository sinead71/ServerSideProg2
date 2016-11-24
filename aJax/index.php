<html>
    <head>
        <script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous">
        </script>
    </head>
    <body>
        <div id="lorem"></div>
        <br>
        <button name="button">go</button>
        <br>
        <div id="notes"></div>
        <script>
            $(document).ready(function(){
                $("#lorem").load("ipsum.html", function(){
                    alert("Load was performed");
                });
                
                $("button").click(function(){
                    $.getJSON('persDetails.json', function(data){
                        $.each(data.employees, function(entryIndex, entry){
                            console.log(entry['firstName']);
                        });
                    });
                });
                
                $.get('note.xml', function(data){
                    $(data).find('note').each(function(){
                        console.log($(this).find('body').text());
                        console.log($(this).attr('type'));                    
                    });
                });
                
                
                //ajax
                var theNum = 10;
                $.get('poc.php', {'smallNum': theNum}, function(data){
                    console.log(data);
                });
                
            });
            
        </script>
    </body>
</html>