<?php
header('X-XSS-Protection:0');
include_once('form-2-function.php');
$fruits = ['mango', 'banana', 'goyava', 'lichi', 'pinaple', 'papeya'];
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
        <h1>Select Option / Dropdown</h1>
        <p>
            <?php
            // $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING);
            // printf($sfruits);
            $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
            if(isset($sfruits))
            {
                if( count($sfruits) > 0 ) {
                    echo 'You have selected: '.join(",", $sfruits);
                    // $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING);
                    // printf('You have selected: %s', ucwords($sfruits));
                }
            }
            ?>
        </p>
        <form method="POST">
            <select name="fruits[]" id="fruits" multiple style="height: 200px;">
                <option value="" disabled selected>--select some fruits---</option>
                <?php displayOption($fruits, $sfruits) ?>
                <!-- <?php
                foreach($fruits as $option)
                {
                    ?>
                        <option><?php echo ucwords($option) ?></option>
                    <?php
                }
                ?> -->
            </select>
            <div class="button" style="margin-top: 20px">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>