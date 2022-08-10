<form action="index.php" method="POST">
    First name: <input type="text" name="fname" value="<?=isset($_POST['fname']) ? $_POST['fname'] : '' ?>"><br/>
    Last name: <input type="text" name="lname" value="<?=isset($_POST['lname']) ? $_POST['lname'] : '' ?>"><br/>
    Age: <input type="text" name="number" min="1" value="<?=isset($_POST['age']) ? $_POST['age'] : '' ?>"><br/>
    <input type="submit" value="Submit">
</form>
<?php
if (!empty($_POST)) {
    $age = $_POST['age'];
    echo "First name: " . $_POST['fname'] . "<br/>";
    echo "Last name: " . $_POST['lname'] . "<br/>";
    echo "Age: " . $age . "<br/>";

    if ($age >= 1 && $age <= 19) {
        echo "STUDENT";
    } elseif ($age >= 20 && $age <= 25) {
        echo "EMPLOYEE";
    } elseif ($age >= 26 && $age <= 30) {
        echo "Have a FAMILY";
    } else {
        echo "The person is AGELESS";
    }
}