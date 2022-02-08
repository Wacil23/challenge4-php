<?php
    $movieOfStevenson = [
        'JekyllNHyde' => ['Michael Caine', 'Cheryl Ladd', 'Joss Ackland'],
        'TreasureIsland' => ['Robert Newton', 'Bobby Driscoll', 'Denis ODea'],
        'Kidnapped' => ['Peter Finch', 'James MacArthur', 'John Laurie'],
    ];

    foreach($movieOfStevenson as $movieName => $actors){
        echo (' Dans le film' . ' ' . $movieName . ' Les principales acteurs sont : ' );
        echo '<br />';

        foreach($actors as $actors){
            echo ($actors . ', ');
        }
    }