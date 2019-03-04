<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
</head>
<body>
    <h1> SIgn up </h1>

    <form method='POST' action='process.php'>
        <input placeholder='Username' type='text' name='user' require /><br/>
        <input placeholder='Email'  name='email'  require /><br/>
        <input placeholder='Password' type='password' name='pass'  require /><br/>
        <input type='submit' /> <br/>
     </form>


     <a href="GetLink.php?name=arslan"> Get Request </a>

</body>
</html>