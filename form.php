<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $country = $_POST['country'];
        $state = $_POST['state'];
        setcookie('country', $country);
        setcookie('state', $state);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 3 - Form Cookies</title>
</head>
<body>
    <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Country <select name="country" id="country">
            <option value="" <?= isset($country) && $country == '' ? 'selected' : ''; ?>>--Please select--</option>
            <option value="usa" <?= isset($country) && $country == 'usa' ? 'selected' : ''; ?>>United States</option>
            <option value="can" <?= isset($country) && $country == 'can' ? 'selected' : ''; ?>>Canada</option>
            <option value="mex" <?= isset($country) && $country == 'mex' ? 'selected' : ''; ?>>Mexico</option> <!-- Not feeling creative today -->
        </select><br>
        State <select name="state" id="state">
            <option value="" <?= isset($state) && $state == '' ? 'selected' : ''; ?>>--Please select--</option>
            <option value="wa" <?= isset($state) && $state == 'wa' ? 'selected' : ''; ?>>Washington</option>
            <option value="or" <?= isset($state) && $state == 'or' ? 'selected' : ''; ?>>Oregon</option>
            <option value="ca" <?= isset($state) && $state == 'ca' ? 'selected' : ''; ?>>California</option>
        </select><br>
        <br><input type="submit" value="Submit ForMe">
    </form>
</body>
</html>