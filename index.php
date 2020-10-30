<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
</head>

<body>
        <header>
            <form action="" method="post">
                <input type="submit" name="table" value="Create DB"></input>
                <input type="submit" name="table" value="Projects"></input>
                <input type="submit" name="table" value="Employees"></input>
            </form>
        </header>
        <main>
            <?php
            if (isset($_POST['table'])) {
                if ($_POST['table'] == 'Create DB') {
                    require_once './assets/php/start.php';
                }
                if ($_POST['table'] == 'Projects') {
                    require_once './assets/php/projects.php';
                }
                if ($_POST['table'] == 'Employees') {
                    require_once './assets/php/empl.php';
                }
            }            
            ?>
        </main>
</body>

</html>