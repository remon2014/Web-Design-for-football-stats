      <?php
        $servername = "localhost";
        $username = "root";
        $password = "Universal.Password";
        $dbname = "CSV_DB";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sqlSelectHomeWin="SELECT DISTINCT `HomeTeam` FROM `stats` ORDER BY `HomeTeam` ASC";
        $resultSelectionHomeWin = $conn -> query ($sqlSelectHomeWin);

        $sqlSelectHomeLosses="SELECT DISTINCT `AwayTeam` FROM `stats` ORDER BY `AwayTeam` ASC";
        $resultSelectionHomeLosses = $conn -> query ($sqlSelectHomeLosses);

        $sqlSelectHomeDraw="SELECT DISTINCT `HomeTeam` FROM `stats` ORDER BY `HomeTeam` ASC";
        $resultSelectionHomeDraw = $conn -> query ($sqlSelectHomeDraw);

        $sqlSelectAwayWin="SELECT DISTINCT `AwayTeam` FROM `stats` ORDER BY `AwayTeam` ASC";
        $resultSelectionAwayWin = $conn -> query ($sqlSelectAwayWin);

        $sqlSelectAwayDraw="SELECT DISTINCT `AwayTeam` FROM `stats` ORDER BY `AwayTeam` ASC";
        $resultSelectionAwayDraw = $conn -> query ($sqlSelectAwayDraw);

        $sqlSelectAwayLosses="SELECT DISTINCT `AwayTeam` FROM `stats` ORDER BY `AwayTeam` ASC";
        $resultSelectionAwayLosses = $conn -> query ($sqlSelectAwayLosses);

        $sqlSelectHomeHead="SELECT DISTINCT `HomeTeam` FROM `stats` ORDER BY `HomeTeam` ASC";
        $resultSelectionHomeHead = $conn -> query ($sqlSelectHomeHead);
        $sqlSelectAwayHead="SELECT DISTINCT `AwayTeam` FROM `stats` ORDER BY `AwayTeam` ASC";
        $resultSelectionAwayHead = $conn -> query ($sqlSelectAwayHead);

?>