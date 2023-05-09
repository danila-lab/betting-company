<?php
        // Get the search query from the HTML form
        $search = $_GET['search'];

        // Establish database connection
        $servername = "localhost";
        $database = "bet_db";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, $database);

        // Search for the query in the tickets table
        $sql_tickets = "SELECT * FROM tickets WHERE winteam LIKE '%$search%'";
        $result_tickets = $conn->query($sql_tickets);
        
        // Search for the query in the bets table
        $sql_bets = "SELECT * FROM bets WHERE CONCAT(team1, team2) LIKE '%$search%'";
        $result_bets = $conn->query($sql_bets);
        
        // Display the search results
        if ($result_tickets->num_rows > 0 || $result_bets->num_rows > 0) {
            echo "<h2>Search Results:</h2>";
            
            // Display results from the tickets table
            if ($result_tickets->num_rows > 0) {
                echo "<h3>Results from tickets table:</h3>";
                while ($row = $result_tickets->fetch_assoc()) {
                    echo "<tr><td>".  $row["id"] . "</td><td>" . $row["userid"] . "</td><td>" . $row["betid"] . 
                    "</td><td>" . $row["winteam"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["coef"] . "</td><td>"; echo "<br></br>";
                }
            }
            
            // Display results from the bets table
            if ($result_bets->num_rows > 0) {
                echo "<h3>Results from bets table:</h3>";
                while ($row = $result_bets->fetch_assoc()) {
                    echo "<tr><td>".  $row["id"] . "</td><td>" . $row["team1"] . 
                    "</td><td>" . $row["team2"] . "</td><td>" . $row["odds1"] . "</td><td>" . $row["odds2"] . "</td><td>"; echo "<br></br>";
                }
            }
        } else {
            echo "No results found.";
        }