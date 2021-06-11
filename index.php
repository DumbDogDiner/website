<html>

<head>

    <link rel="stylesheet" href="./css/style.css">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no" />

    <meta name="title" content="Dumb Dog Diner - Minecraft" />
    <meta
        name="description"
        content="LGBT-friendly Minecraft Server with focus on Vanilla SMP Survival"
    />
    <meta name="keywords" content="minecraft,dumbdogdiner,server,lgbt" />
    <meta name="robots" content="index" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />

    <title>Dumb Dog Diner &#8211; Minecraft</title>

    <link rel="icon" href="./img/favicon.ico" type="image/ico">

    <script>
        function copyMinecraft() {
            /* Get the text field */
            var copyText = document.getElementsByClassName('minecraftIp')[0];

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, copyText.value.length)
            
            /* Copy the text inside the text field */
            document.execCommand("copy");   
            
            /* Alert the copied text */
            clearSelection();
        }

        function clearSelection() {
            if (window.getSelection) {window.getSelection().removeAllRanges();}
            else if (document.selection) {document.selection.empty();}
        }
    
    </script>
    
    <!-- not needed right now <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
    
</head>

<body>

    <?php 
        function getPlayerCount($ip = "mc.dumbdogdiner.com", $port = 25565) {
            $ch = curl_init('https://mcapi.us/server/status?ip='.$ip.'&port='.$port);   
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $results = curl_exec($ch);
            curl_close($ch);

            // Unserialize the JSON output
            $json = json_decode($results, true);

            // Return the online players
            $onlineplayers = $json['players']['now'];
            return $onlineplayers;

        } 
    ?>

    <div id="mainWrapper">
    <header id="landingHeader">
        <h2>DUMB DOG DINER &#8211; MINECRAFT</h2>
        <nav>
            <ul>
                <li><a id="navLink" href="https://patreon.com/Stixil" target="__blank">Patreon</a></li>
                <li><a id="navLink" href="https://downloads.dumbdogdiner.com" target="__blank">Resources</a></li>
                <li><button id="headerButton">Shop</button></li>
            </ul>
        </nav>
    </header>
    <div id="contentWrapper">

        <div id="centerContent">
            <h2>Dumb Dog Diner &#8211; Minecraft</h2>
            <p>We're a LGBT-friendly Vanilla SMP Minecraft Server,<br>with more Minigames coming soon!</p>
            <div id="buttonContainer">
                <a href="https://discord.gg/fxKWubT"><button id="discordLink"><p>JOIN US ON</p><img src="./img/Discord-Logo+Wordmark-White.png" /></button></a>
                <button id="mcLink" onclick="copyMinecraft()" ><p>OR PLAY WITH <?php echo getPlayerCount() ?> OTHERS ON</p><input type="text" value="mc.dumbdogdiner.com" class="minecraftIp" readonly></input></button>
            </div>
        </div>

    </div>
    </div>
    <footer id="landingFooter">
        <p>&copy; 2018 - <?php echo date('Y') ?> DumbDogDiner LLC.</p>
    </footer>
</body>

</html>