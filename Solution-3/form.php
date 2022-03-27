<!DOCTYPE html>
<html>

<body>
    <h1>Assignment-3</h1>
    <form action="verification.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br>
        <label for="phone">Phone:</label><br>
        <input type="number" id="phone" name="phone" value=""><br><br>
        <label for="fileToUpload">Share the file: </label><br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>