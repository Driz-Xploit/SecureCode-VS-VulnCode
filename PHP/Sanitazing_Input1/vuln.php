<html>
    <head>
        <title>
            My first code
        </title>
        <style>
            .content {
                text-align: center;
                color: white;
            }
        </style>
    </head>
    <body style="background-color: black;">
        <div class="content">
            <h1>Vuln CODE</h1><hr>
            <p>HI It's From PHP, How are you?</p>
            <form action="vuln.php" method="get">
                <input type="text" name="text"><input type="submit">
            </form>
            <?php 
            $TEXT = $_GET['text'];
            if ($TEXT == '') {
                echo "<hr><br>Your Input, Please<br><br><img src='https://i.pinimg.com/736x/1e/e5/b9/1ee5b974c1b0df8e046fb70b5deb7a96.jpg' width='200' height='200'";
            }
            else {
                echo "<hr><br>Your Answer: $TEXT";
                echo "<br>Glad to hear that";
                echo "<br><br><strong><a href='vuln.php' style='color: white;'>Back to home</a></strong>";
            }
            ?>
        </div>
    </body>
</html>