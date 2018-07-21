<?php

echo "<html><body><pre>";

$mysqli = new mysqli('127.0.0.1', 'root', 'secret', 'lit_gits');

// Oh no! A connect_errno exists so the connection attempt failed!
if ($mysqli->connect_errno) {
    // The connection failed.
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

// Perform an SQL query
$sql = "SELECT id, name, url, description, summary, category, date FROM repositories WHERE category <> ''";

$result = $mysqli->query($sql);
try {
    if (!$result) {
        // Oh no! The query failed.
        echo "Error: Our query failed to execute and here is why: \n";
        echo "Query: " . $sql . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
    }

    // Phew, we made it. We know our MySQL connection and query
    // succeeded, but do we have a result?
    if ($result->num_rows === 0) {
        // Oh, no rows! Sometimes that's expected and okay, sometimes
        // it is not. You decide. In this case, maybe actor_id was too
        // large?
        echo "We could not find a match for ID $aid, sorry about that. Please try again.";
        exit;
    }

    while ($repository = $result->fetch_assoc()) {
        $name = $repository['name'];
        $url = $repository['url'];
        $description = $repository['description'];
        $summary = $repository['summary'];
        $category = $repository['category'];
        $date = $repository['date'];

        //do something with the data here...maybe generate our json for the webpage?
        echo  "$name - $url - $description - $summary - $category - $date\n";
    }

	
} finally {
    $result->free();
}


echo "\n\nDone!\n";
echo "</pre></body></html>";
