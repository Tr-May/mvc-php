<?php
// view.php
class UserView {
    public function output($username,$occupation) {
        echo "Username: $username";
        echo "<br>Occupation: $occupation";
    }

    public function renderForm() {
        // Display a form for user input
        echo '<form method="post" action="index.php">';
        echo '<input type="text" name="username" placeholder="Enter username">';
        echo '<input type="text" name="occupation" placeholder="Enter occupation">';
        echo '<input type="submit" value="Submit">';
        echo '</form>';
    }
}
