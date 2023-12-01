<!DOCTYPE html>
<html>
<head>
    <title>PHP Popup Example</title>
    <!-- You can add CSS styles for your pop-up here -->
    <style>
        /* Style for the pop-up container */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #000000;
            z-index: 9999;
        }
    </style>
</head>
<body>
<div onclick="$showPopup">
hello 
</div>
<?php
// PHP code can conditionally show the pop-up based on certain conditions
$showPopup = true; // Set to true to show the pop-up

if ($showPopup) {
    echo '<div class="popup" id="popup">
            <p>This is a pop-up message!</p>
            <button onclick="closePopup()">Close</button>
          </div>';
}
?>

<script>
    // JavaScript function to close the pop-up
    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    // You can trigger the display of the pop-up using JavaScript if needed
    // For example, to show the pop-up after the page loads
    // window.onload = function() {
    //     document.getElementById('popup').style.display = 'block';
    // }
</script>

</body>
</html>
