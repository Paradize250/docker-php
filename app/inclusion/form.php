<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <header>

    </header>

    <main>

        <h2>Contact Us</h2>
        <form action="submit.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required><br><br>

            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>

    </main>

    <footer>
        <?php include('./partials/footer.php'); ?>
    </footer>
</body>

</html>