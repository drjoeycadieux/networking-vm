<?php
// Database Configuration
$host = "192.168.0.34"; 
$user = "root"; // Replace with your username
$pass = "@Wteamred900";   // Replace with your password
$db   = "support_db";

$conn = new mysqli($host, $user, $pass, $db);

$message_status = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['customer_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $issue = $conn->real_escape_string($_POST['issue_type']);
    $msg = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO tickets (customer_name, email, issue_type, message) VALUES ('$name', '$email', '$issue', '$msg')";

    if ($conn->query($sql) === TRUE) {
        $message_status = "<p style='color: green;'>Ticket #{$conn->insert_id} submitted successfully!</p>";
    } else {
        $message_status = "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Support | Pi Server</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); width: 100%; max-width: 450px; }
        h2 { color: #1c1e21; margin-top: 0; text-align: center; }
        label { display: block; margin-bottom: 5px; font-weight: 600; color: #4b4f56; }
        input, select, textarea { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #dddfe2; border-radius: 6px; box-sizing: border-box; font-size: 14px; }
        button { width: 100%; padding: 12px; background-color: #1877f2; border: none; border-radius: 6px; color: white; font-size: 16px; font-weight: bold; cursor: pointer; transition: background 0.3s; }
        button:hover { background-color: #166fe5; }
        .status-msg { text-align: center; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>Submit Support Ticket</h2>
    <div class="status-msg"><?php echo $message_status; ?></div>
    
    <form method="POST" action="">
        <label>Full Name</label>
        <input type="text" name="customer_name" required placeholder="John Doe">

        <label>Email Address</label>
        <input type="email" name="email" required placeholder="john@example.com">

        <label>Issue Category</label>
        <select name="issue_type">
            <option value="Technical">Technical Issue</option>
            <option value="Billing">Billing Question</option>
            <option value="Account">Account Access</option>
            <option value="Other">Other</option>
        </select>

        <label>Description</label>
        <textarea name="message" rows="5" required placeholder="Describe your problem here..."></textarea>

        <button type="submit">Send Ticket</button>
    </form>
</div>

</body>
</html>