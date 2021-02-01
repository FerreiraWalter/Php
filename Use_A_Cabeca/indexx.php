<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send a Message</title>

    <style>
    
        body {
            background: url("space.jpg");
            color: white;
            font-family: Arial;
        }

        

        img {
            width: 100px;
            padding: 10px 0px 20px 0px;
        }

        input, textarea {
            border: solid 2px white;
            border-radius: 20px;
            padding: 10px;
            outline: none;
            background-color: rgba(255,255,255,0.01);
            color: white;
        }

        .animal {
            padding: 5px;
        }

        .Monkey {
            width: 250px;
        }

    </style>

</head>
<body>
    
    <center>
        <div>
            <img src="LogoAlien.png" alt="">
            <h1>Send a Message</h1>
            <form action="#" method="GET">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <textarea id="msg" placeholder="Type a Message"></textarea>
            <br><br>
            <img class="animal" src="salamandra.png" alt="">
            <br>
            <h3>Do you look like that?</h3>
            <input type="radio" name="yes" value="Yes"> Yes
            <input type="radio" name="no" value="No"> No
            <br><br>
            <input class="Monkey" type="submit" value="SUBMIT">

            </form>
        </div>
    </center>

</body>
</html>