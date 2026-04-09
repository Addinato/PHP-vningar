<?php
    $name = $_GET['name'];
    $age = $_GET['Age'];


    $dagar = ["mån", "tis", "ons", "tors", "fre", "lör", "sön"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            Name: <?php echo $name; ?>
        </h1>

        <h1>
            Age: <?php echo $age; ?>
        </h1>
        
        <h2>Sätt 1</h2>
        <?php
            if ($age <= 50) {
                echo "<span>Du är fortfarande ung!</span>";
            } else {
                echo "<span>Du är fett gammal!</span>";
            }
        ?>

        <h2>Sätt 2</h2>
        <?php
            if ($age <= 50) {
        ?>
            <span>Du är fortfarande ung!</span> 
        <?php
            }
        
            else {
        ?>
            <span>Du är fett gammal!</span>
        <?php
            }
        ?>

        <h2>Sätt 3</h2>

        <span>
            <?php
                if ($age <= 50) {
                    echo "Du är fortfarande ung!";
                } else {
                    echo "Du är fett gammal!";
                }
            ?>
        </span>

        <!-- Rekomenderat sätt att göra det på -->
        <h2>Sätt 4</h2>

        <?php
        $message = "Du är fortfarande ung!";
        if ($age >= 50) {
            $message = "Du är fett gammal!";
        }
        ?>
        <span><?php echo $message; ?></span>

        <hr>
        <select>
            <h2>Sätt 1</h2>
            <?php
                for ($i = 0; $i < count($dagar); $i++) {
                    echo "<option value='$dagar[$i]'>$dagar[$i]</option>";
                }
            ?>
        </select>
        <select>
            <h2>Sätt 2</h2>
             <?php
                foreach ($dagar as $dag) {
                    echo "<option value='$dag'>$dag</option>";
                }
            ?>
            
        </select>

    </body>
</html>