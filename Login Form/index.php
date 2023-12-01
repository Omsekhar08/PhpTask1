
<html>
<head>
    <title>PHP Popup Example</title>
    <script>
        function showMessage() {
            alert('<?php echo "This is a PHP-generated pop-up message!"; ?>');
        }
    </script>
</head>
<body>

<button onclick="showMessage()">Show Popup</button>

</body>
</html>