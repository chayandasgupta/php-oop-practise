<?php
header('X-XSS-Protection:0');
include_once('function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submit</title>
</head>
<body>
    <div class="main-wrap">
        <form method="POST">
            <h1>Fruits List</h1>
            <div class="form-group">
                <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange') ?>>
                <label for="">Orange</label><br>
                <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits', 'mango') ?>>
                <label for="">mango</label><br>
                <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits', 'banana') ?>>
                <label for="">banana</label><br>
                <input type="checkbox" name="fruits[]" value="apple" <?php isChecked('fruits', 'apple') ?>>
                <label for="">apple</label><br>
            </div>
            <br>
            <br>
            <h1>Food List</h1>
            <div class="form-group">
                <input type="checkbox" name="food[]" value="vegetable" <?php isChecked('food', 'vegetable') ?>>
                <label for="">vegetable</label><br>
                <input type="checkbox" name="food[]" value="potato" <?php isChecked('food', 'potato') ?>>
                <label for="">potato</label><br>
                <input type="checkbox" name="food[]" value="fish" <?php isChecked('food', 'fish') ?>>
                <label for="">fish</label><br>
                <input type="checkbox" name="food[]" value="milk" <?php isChecked('food', 'milk') ?>>
                <label for="">milk</label><br>
            </div>
            <div class="button" style="margin-top: 20px">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>