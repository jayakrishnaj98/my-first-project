<?php
$hostname = gethostname();
$server_time = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My DevOps CI/CD Project</title>

    <style>
        body {
            background-color: #eaf2f8;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 80px 20px;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            max-width: 650px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            color: #1565c0;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        .info {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Welcome to My DevOps Project!</h1>

    <p>This is my PHP web application.</p>

    <p>Deployed using Docker, Nginx and AWS EC2.</p>

    <div class="info">

        <h3>Server Information</h3>

        <p>Hostname: <?php echo htmlspecialchars($hostname); ?></p>

        <p>Server Time: <?php echo $server_time; ?></p>

        <p>Deployment: Automated CI/CD using GitHub Actions</p>

    </div>

</div>

</body>
</html>