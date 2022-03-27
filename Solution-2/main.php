<!--Create a form having one textbox and a submit button. The user must be able to enter his age. Using FILTER_VALIDATE_INT, check if the age entered by the user is valid or not. Age between 26 and 56 should be 
considered as valid. If age entered is valid, display “Age is valid” otherwise display “Age is not valid”.-->

<!DOCTYPE HTML>
<html>

<body>
    <form action="secondary.php" method="post">
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value=""><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>