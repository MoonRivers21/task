<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create CV</title>
</head>
<body>
    <h2>CV Form</h2>
    <form action="generate_cv.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <label for="education">Education:</label>
        <textarea id="education" name="education" required></textarea><br><br>
        
        <label for="experience">Experience:</label>
        <textarea id="experience" name="experience" required></textarea><br><br>
        
        <label for="skills">Skills:</label>
        <textarea id="skills" name="skills" required></textarea><br><br>
        
        <input type="submit" value="Generate CV">
    </form>
</body>
</html>
