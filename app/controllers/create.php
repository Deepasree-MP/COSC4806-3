<?php

require_once 'app/models/User.php';

class Create extends Controller
{
    public function index()
    {
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = trim($_POST["username"]);
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            if (empty($username) || empty($password) || empty($confirm_password)) {
                $message = "All fields are required.";
            } elseif (strlen($password) < 10) {
                $message = "Password must be at least 10 characters long.";
            } elseif ($password !== $confirm_password) {
                $message = "Passwords do not match.";
            } else {
                try {
                    $user = new User();
                    $user->create_user($username, $password);
                  $message = "Account created successfully. Your user ID is $username.<br><a href='/logout'>Click here to login</a>";
                } catch (Exception $e) {
                    $message = $e->getMessage();
                }
            }
        }

        require_once 'app/views/create/index.php';
    }
}
