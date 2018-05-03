<?php 
function get_all_todos()
{
    $get_all_tasks_query = "SELECT title, author, dateOfPub, review,rate,img FROM book;";
    $response = $GLOBALS['conn']->query($get_all_tasks_query);
    if ($response && $response->num_rows > 0) {
        while ($row = $response->fetch_array()) {
            echo '<li> <img class = "img" src="' . $row["img"] . '">' . 
                    '<p class = "title">' . $row["title"] . '</p>' . 
                    '<p class = "author">' . $row["author"] . '</p>'. 
                    '<p>Years of publish: <span class = "date">' . $row["dateOfPub"] . '</span></p>' . 
                    '<p>Rate: <span class = "rate">' . $row["rate"] . '</span></p>' . 
                    '<p>Review: <span class = "review">' . $row["review"] . '</span></p>' .   '</li>';
        }
    } else {
        echo '<h2>book table is empty!</h2>';
    }
}
?>