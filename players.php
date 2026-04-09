<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Player {
            public $name;
            public $jersey;
            public $team;
            public $id;

            function __construct($name, $jersey, $team, $id) {
                $this->name = $name;
                $this->jersey = $jersey;
                $this->team = $team;
                $this->id = $id;
            }
        };

        $players = [
            new Player("Adrian", 10, "Team A", 1),
            new Player("Stefan", 20, "Team B", 2),
            new Player("Maria", 30, "Team C", 3)
        ];
    ?>

    <table>
        <thread>
            <th>Name</th>
            <th>Jersey</th>
            <th>Team</th>
            <th>ID</th>
        </thread>

        <?php foreach ($players as $player) { ?>
            <tr>
                <td><?php echo $player->name; ?></td>
                <td><?php echo $player->jersey; ?></td>
                <td><?php echo $player->team; ?></td>
                <td><?php echo $player->id; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>