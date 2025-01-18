<!DOCTYPE html>
<html>
<head>
    <title>User Feedback Form</title>
</head>
<body>
    <h1>User Feedback Form</h1>
    <form action="submit_feedback.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="mobile_number">Mobile Number:</label>
        <input type="tel" id="mobile_number" name="mobile_number"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Submit Feedback">
    </form>
</body>
</html>
