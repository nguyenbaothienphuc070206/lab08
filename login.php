<?php include 'header.inc'; ?>
<h2>Login Page</h2>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="p105978092">
    <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>