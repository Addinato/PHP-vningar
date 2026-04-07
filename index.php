<html>
<head>
    <title>PHP Test</title>
</head>

<?php
    $age = 25;
    $name = "Jane Doe";

    $date = date("Y-m-d H:i:s", strtotime(" +2 hours"),);

    $x = 20;
    $y = 10;

    var_dump($name); // var_dump() visar information om en variabel, inklusive dess typ och värde
    var_dump($x);

    echo "<br>";

    echo "Jag heter $name och jag är $age år gammal. <br>";
    echo 'Jag heter $name och jag är $age år gammal. <br>'; // Kan inte använda variabler i enkla citattecken

    $CurrentYear = date("Y");
    $StartYear = 2000;

?>
<body>
    <?php
        // This is a simple PHP script to test if PHP is working
        echo "PHP is working!";
    ?>
    <h1>Hello, World!</h1>
    <p>This is a simple PHP test page.</p>

    <p> Current date and time: <?php echo $date; ?></p>

    <select>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
        ?>
    </select>
    <br>
    <br>
    <select>
        <?php
            for ($i = $StartYear; $i <= $CurrentYear; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            
        ?>
    </select>
</body>
</html>