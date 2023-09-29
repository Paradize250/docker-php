<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>
    <header>
        <h1>Form Submission Result</h1>
    </header>
    <main>
        <section>
            <h2>Submitted Data:</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $title = $_POST["title"];
                $comment = $_POST["comment"];

                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Title:</strong> $title</p>";
                echo "<p><strong>Comment:</strong> $comment</p>";
            } else {
                echo "<p>No form data submitted.</p>";
            }
            ?>
        </section>
    </main>
    <footer>
        <!-- Your footer content here -->
    </footer>
</body>
</html>
