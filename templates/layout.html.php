<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jokes.css">
    <title>Document</title>
</head>
<body>
        <header>
            <h1>Internet Joke Database</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jokes.php">Jokes List</a></li>
                <li><a href="addjoke.php">Add a new joke</a></li>   
            </ul>
        </nav>
        <main>
            <?= $output?>
        </main>    
        <footer>&copy; IJDB 2023 </footer>
         
</body>
</html>