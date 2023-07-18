<?php
// Database connection setup (change the credentials to match your database)
$connect = mysqli_connect("localhost", "root", "", "web");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the user credentials against the database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if (($password == $user_data["Password"])) {
            // Password matches, set session variables to track the logged-in user and their role
            session_start();
            $_SESSION["Username"] = $username;
            $_SESSION["user_role"] = $user_data["role"];

            // Redirect to the appropriate dashboard based on the user's role
            switch ($user_data["role"]) {
                case "mhs":
                    header("Location: dashmhs.html");
                    break;
                case "dosen":
                    header("Location: dashdos.html");
                    break;
                case "bks":
                    header("Location: dashbks.html");
                    break;
                default:
                    echo "Invalid user role";
            }
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Invalid username";
    }
}
?>