<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Chat</title>
    <link rel="stylesheet" type="text/css" href="./css/app.css">
</head>
<body>
    <div class="app">
        <header>
            
            <h1>Let's Talk</h1>
            <input type="text" name="username" id="username" placeholder="Please enter a username"/>

        </header>
    </div>

    <br>
    <div id="messages"></div>
    <form id="message_form">
        <input type="text" name="message" id="message_input" placeholder="write a message..."/>
        <br><br>
        <button type="submit" id="message_send">Send Message</button>
    </form>

    <script type="text/javascript" src="./js/app.js"></script>
</body>
</html>