<html>
    <head>
        <title>Server Worker... yeah</title>
        <script src="vue.min.js"></script>
    </head>

    <body>
        <form action="POST">
            <div id="SB"> <!-- SB = Server Browser -->
                <p>Which game m8</p>
                    <!-- Add games like Tf2, CSgo, IDFK -->
                    <ol>
                        <li> 
                            <input type="radio" name="game" id="cusmc" value="cusmc" checked v-model="server">
                            <label for="cusmc"> Custom Minecraft </label>
                        </li>

                        <li>
                            <input type="radio" name="game" id="valmc" value="valmc" v-model="server">
                            <label for="valmc"> Saggins' Orignal Vanila Server </label>
                        </li>

                        <li>
                            <input type="radio" name="game" id="source" value="source" v-model="server">
                            <label for="TF2">TF2</label>  
                        </li>
                    </ol>
                <template v-if="server === 'cusmc'">
                    <p>Forge?</p>
                </template>
                    
                <template v-if="server === 'cusmc'">
                    <p>Custom Map</p>
                        <input type="file" name="Map" value=""> <br>
                    <p>Op(Player name If more pls seperate with commas)</p>
                        <input type="text" name="Op" value=""><br>
                </template>
                <template v-if="server === 'cusmc' || server === 'valmc'">
                    <p>Server Properties </p>
                    <!-- Css: Make text book biger -->
                    <input type="text" name="ServerProperties" value=""><br>
                </template>

                <template v-if="server === 'source'">
                    <p>Scripts</p>    
                </template>
             <input type="submit">

            </div>
        </form>
        <script src="project2.js"></script>

    </body>
</html>

<?php


?>