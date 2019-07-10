<!doctype html>
<html>
        <?php
        // define variables and set to empty values
        $emailErr = $messageErr = "";
        $name = $email = $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
          }

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
          }

          if (empty($_POST["message"])) {
            $comment = "Message is required";
          } else {
            $comment = test_input($_POST["message"]);
          }

        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
</html>
