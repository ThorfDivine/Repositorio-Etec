<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body>
    <form>

        <input type="text" id="email" >
        <button type="button"  onclick="adicionar()"> enviar </button>

    </form>
    <div class="container" id="add">
        <h1>adicionados: </h1> <br>
    </div>
    <script>
    function adicionar()
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
                        alert(xhr.responseText);
                        let items = "";  
                        items = xhr.responseText;
                        console.log("items "+items);
                        document.getElementById('add').innerHTML += "oi" ;     

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