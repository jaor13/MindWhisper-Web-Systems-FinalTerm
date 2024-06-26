<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <title>Feedback and Suggestions Form</title>
    <meta name="description" content="The feedback and suggestion form provides users with the opportunity to share their thoughts and experiences regarding our website MindWhisper.">
    <meta name="tags" content="feedback, rating, suggestions">
    <link rel="stylesheet" href="styles.css/feedback and suggestion form/styles.css" />
</head> 

<body>
    <div class="main-block">
        <h1>Feedback and Suggestions Form</h1>
        <form id="feedbackForm">
            <div class="grade-type">
                <h2>Rate Our Website</h2>
                <div> 
                    <input type="radio" value="none" id="radioOne" name="grade" checked/>
                    <label for="radioOne" class="radio">Excellent</label>
                </div>
                <div>
                    <input type="radio" value="none" id="radioTwo" name="grade" />
                    <label for="radioTwo" class="radio">Very Good</label>
                </div>
                <div>
                    <input type="radio" value="none" id="radioThree" name="grade" />
                    <label for="radioThree" class="radio">Good</label>
                </div>
                <div>
                    <input type="radio" value="none" id="radioFour" name="grade" />
                    <label for="radioFour" class="radio">Bad</label>
                </div>
                <div>
                    <input type="radio" value="none" id="radioFive" name="grade" />
                    <label for="radioFive" class="radio">Very Bad</label>
                </div>
            </div>
            <h3>We Would Be Glad To Know Your Impression!<h3>
            
                <textarea id="impression" rows="4"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    
        <div id="modal" class="modal">
            <div class="modal-content">
                <span id="close" class="close">&times;</span>
                <img src="assets/images/feedback and suggestions/feedback icon.svg" class="feedback-icon" alt="Thumbs Up">
                <p class="message">Thank you for your feedback!</p>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.addEventListener("keydown", function(event) {
                    console.log("Key pressed at: " + new Date().toLocaleString());
                });
            
                document.addEventListener("click", function(event) {
                    console.log("Clicked at: " + new Date().toLocaleString());
                });
            });
            </script>
    
        <script>
            document.getElementById("feedbackForm").addEventListener("submit", function(event) {
                event.preventDefault(); 
                
                var modal = document.getElementById("modal");
                modal.style.display = "block";
            });

            var closeButton = document.getElementById("close");
            closeButton.onclick = function() {
                var modal = document.getElementById("modal");
                modal.style.display = "none";
                window.location.href = "index.php"; 
            };
        </script>
</body>
</html>