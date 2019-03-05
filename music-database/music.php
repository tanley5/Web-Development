<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Music Database</title>
</head>
<body>
    <div class="container">
        <h1>Here Are The Albums That I Like</h1>
        <table class="music-container">
            <tr>
                <th>ALBUMS</th>
            </tr>
            <?php
                //Create Array
                    $albums = array("<a href='https://en.wikipedia.org/wiki/A_Night_at_the_Opera_(Queen_album)'>A Night At The Opera</a>","<a href='https://en.wikipedia.org/wiki/News_of_the_World_(album)'>News Of The World</a>","<a href='https://en.wikipedia.org/wiki/Sheer_Heart_Attack'>Sheer Heart Attack</a>","<a href='https://en.wikipedia.org/wiki/Escape_(Journey_album)'>Escape</a>","<a href='https://en.wikipedia.org/wiki/Night_Visions'>Night Visions</a>","<a href='https://en.wikipedia.org/wiki/Metal_Health'>Metal Health</a>","<a href='https://en.wikipedia.org/wiki/Point_of_Know_Return'>Point Of Know Return</a>","<a href='https://en.wikipedia.org/wiki/Arrival_(ABBA_album)'>Arrival</a>","<a href='https://en.wikipedia.org/wiki/Crazy_World_(Scorpions_album)'>Crazy World</a>","<a href='https://en.wikipedia.org/wiki/Joyride_(Roxette_album)'>Joyride</a>");
                //Display Array in Table
                    display($albums);
            ?>
        </table>
    </div>
</body>
</html>
<?php
    function display($albums)
    {
        foreach($albums as $name)
        {
            echo "<tr class='albums'>";
                echo "<td class='cell'>$name</td>";
            echo "</tr>";
        }
    }
?>