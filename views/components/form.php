<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $comment = $_POST["comment"];
    $agree = $_POST["agree"];

    $errors = validateForm($_POST["name"], $_POST["mail"], $_POST["comment"], isset($_POST["agree"]));

    if (!empty($errors[5]) ) {
        $name = '';
        $mail = '';
        $comment = '';
        $agree = '';
    }
}
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <fieldset>
        <legend>
            <h1>#write-comment</h1>
        </legend>
        <div class="e_form">
            <label for="name">Name:
                <input type="text" name="name" value="<?php echo $name; ?>">
                <?php echo $errors[1]; ?>
            </label>
        </div>
        <div class="e_form">
            <label for="mail">Mail:
                <input type="mail" name="mail" value="<?php echo $mail; ?>">
                <?php echo $errors[2]; ?>
            </label>
        </div>
        <div class="e_form">
            <label for="comment">Comment:<br><br>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                <?php echo $errors[3]; ?>
            </label>
        </div>
        <div style="margin: 10px; font-size: 12px">
            <input type="checkbox" name="agree" id="agree">
            <label for="agree">Do you agree with data processing?</label>
            <?php echo $errors[4]; ?>
        </div>
        <div class="submit">
            <input type="submit" value="Send">
        </div>
        <div>
            <?php echo $errors[5]; ?>
        </div>
    </fieldset>
</form>