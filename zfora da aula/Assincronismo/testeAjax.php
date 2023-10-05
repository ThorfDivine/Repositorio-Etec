<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>

        <input type="text" id="email" onkeyup="book_suggestion()">

</form>
    <script>
    function book_suggestion()
    {

        var email = document.getElementById("email").value;
        var xhr;

        if (window.XMLHttpRequest) { // Mozilla, Safari, ...

            xhr = new XMLHttpRequest();

        } else if (window.ActiveXObject) { // IE 8 and older

            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }

        var data = "end_email=" + email;

            xhr.open("POST", "recebe.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
            xhr.send(data);
            xhr.onreadystatechange = display_data;

            function display_data() {

                if (xhr.readyState == 4) {

                    if (xhr.status == 200) {

                        //alert(xhr.responseText);	   
                        window.alert(xhr.responseText);     

                    } else {

                        alert('There was a problem with the request.');

                    }
                }
            }

        //limit sql
    }
    </script>
</body>
</html>