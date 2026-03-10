<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Desktop Redirect</title>
    <!-- JavaScript Page redirection if not a 1920 x 1080 desktop -->
    <script type="text/javascript">
        // Check if the screen resolution is exactly 1920x1080
        if (screen.width === 1920 && screen.height === 1080) {
            // Redirect to a different page
            window.location.replace("FeaturePage.php");
        }
    </script>
</head>
<body>
    <h1>Non-Desktop Version</h1>
    <p>You are being redirected because your screen resolution is less than 1920x1080.</p>
</body>
</html>