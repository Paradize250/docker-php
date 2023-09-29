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
        <style>
            /* Style for the form container */
            .form-container {
                max-width: 400px;
                margin: 0 auto;
                padding: 10px;
                border: 1px solid #ccc;
                background-color: #f9f9f9;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
            }

            /* Style for labels */
            label {
                display: block;
                margin-bottom: 3px;
                font-weight: bold;
                font-family: Arial, Helvetica, sans-serif;
                color: #007bff;
                font-size: 15px;

            }

            /* Style for input fields */
            input[type="text"],
            input[type="email"],
            textarea {
                width: 80%;
                padding: 5px;
                margin-bottom: 5px;
                border: 1px solid #ccc;
                border-radius: 3px;
                font-size: 16px;
            }

            /* Style for the submit button */
            input[type="submit"] {
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 3px;
                font-size: 18px;
                cursor: pointer;
            }

            /* Style for the submit button on hover */
            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            h2 {
                font-family: Arial, Helvetica, sans-serif;
                color: #007bff;
                font-size: 30px;
            }
        </style>


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

            <label>Competencies:</label><br>
            <div class="competency">
                <input type="checkbox" id="php" name="competency[PHP]" value="PHP"><label for="php">PHP</label>
                <select name="level[PHP]">
                    <option value="Beginner">Beginner</option>
                    <option value="Amateur">Amateur</option>
                    <option value="Professional">Professional</option>
                </select>
            </div>

            <div class="competency">
                <input type="checkbox" id="python" name="competency[Python]" value="Python"><label
                    for="python">Python</label>
                <select name="level[Python]">
                    <option value="Beginner">Beginner</option>
                    <option value="Amateur">Amateur</option>
                    <option value="Professional">Professional</option>
                </select>
            </div>

            <div class="competency">
                <input type="checkbox" id="html" name="competency[HTML]" value="HTML"><label for="html">HTML</label>
                <select name="level[HTML]">
                    <option value="Beginner">Beginner</option>
                    <option value="Amateur">Amateur</option>
                    <option value="Professional">Professional</option>
                </select>
            </div><br>



            <input type="submit" value="Submit">
        </form>

    </main>

</body>

</html>