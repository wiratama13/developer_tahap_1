<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Koding</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="name" required>
        <div class="generate" style="margin-top: 20px;">
            <input name="tiga" type="submit" value="Kelipatan 3">
            <input name="lima" type="submit" value="Kelipatan 5">
            <input name="tigalima" type="submit" value="Kelipatan 3 dan 5">
        </div>
    </form>

    <?php
    if (isset($_POST['tiga'])) {

        for ($i = 1; $i <= 50; $i++) {
            if ($bagi = $i % 3 == 0) {
                echo 'Foo ' . $i ;
                echo "<br>";
            }
        }
    }

    if (isset($_POST['lima'])) {

        for ($i = 1; $i <= 50; $i++) {
            if ($bagi = $i % 5 == 0) {
                echo 'Bar ' . $i ;
                echo "<br>";
            }
        }
    }

    if (isset($_POST['tigalima'])) {

        for ($i = 1; $i <= 50; $i++) {
            if ($bagi = $i % 3 == 0 && $bagi = $i % 5 == 0) {
                echo 'FoBar ' . $i ;
                echo "<br>";
            }
        }
    }
  

    ?>
</body>

</html>