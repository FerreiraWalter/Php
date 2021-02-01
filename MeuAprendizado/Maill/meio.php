<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send an Email</title>
</head>
<body>

    <center>
        <form action="#" method="GET">
            <h1>Send an Email</h1>
            <label for="">Name:</label>
            <input type="text" name="nome" placeholder="Enter Name">
            <br><br>

            <label for="">Email:</label>
            <input type="text" name="email" placeholder="Enter Email">
            <br><br>

            <label for="">Subject:</label>
            <input type="text" name="subject" placeholder="Enter Subject">
            <br><br>

            <h3>Message</h3>
            <textarea name="text" name="body"cols="30" rows="10" placeholder="Type Message"></textarea>
            <br><br>

            <button type="button" onclick="sendEmail()" value="Send an Email">Submit</button>
        </form>
    </center>
    
</body>
</html>