<!DOCTYPE html>
<html>
<head>
    <title>Learning PHP</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
     <h1>
    <?php


        $greeting = 'Hello';
        $name = 'Deelusional';

        echo $greeting . ', ' . $name;
        // The . ', ' . -is concatenating the string together instead of using +
        // Or you can call it like this: echo "$greeting, $name"; with double quotes
        // Another way is: echo "{$greeting}, {$name}";


    ?>
    </h1>
    </header>
</body>
</html