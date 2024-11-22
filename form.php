<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPU TROPHY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('puneeth-background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #f8d64d;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="radio"], input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #f8d64d;
            color: #000;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #ffd700;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>5TH YEAR APPU TROPHY 2024</h1>
        <h2>Player Registration Form</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
            </div>
            <div class="form-group inline">
                <div>
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div>
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" placeholder="Enter your age" min="5" max="100" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Residential Address</label>
                <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="Enter your mobile number" required>
            </div>
            <div class="form-group">
                <label>Classification</label>
                <select name="classification" required>
                    <option value="">Select</option>
                    <option value="Right Hand Bat">Right Hand Bat</option>
                    <option value="Left Hand Bat">Left Hand Bat</option>
                    <option value="Right Arm">Right Arm</option>
                    <option value="Left Arm">Left Arm</option>
                    <option value="Wicket Keeper">Wicket Keeper</option>
                </select>
            </div>
            <div class="form-group">
                <label>Playing Role</label>
                <select name="playing_role" required>
                    <option value="">Select</option>
                    <option value="Opening Batsman">Opening Batsman</option>
                    <option value="Middle Order Batsman">Middle Order Batsman</option>
                    <option value="Fast Bowler">Fast Bowler</option>
                    <option value="Medium Fast Bowler">Medium Fast Bowler</option>
                    <option value="Batting All Rounder">Batting All Rounder</option>
                    <option value="Bowling All Rounder">Bowling All Rounder</option>
                    <option value="Off Spinner">Off Spinner</option>
                    <option value="Leg Spinner">Leg Spinner</option>
                </select>
            </div>
            <div class="form-group">
                <label>Declarations</label>
                <label><input type="checkbox" name="declaration" value="agree" required> I agree to participate and follow the rules of the tournament.</label>
            </div>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appu_trophy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $age = intval($_POST['age']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $classification = mysqli_real_escape_string($conn, $_POST['classification']);
    $playing_role = mysqli_real_escape_string($conn, $_POST['playing_role']);

    $query = "INSERT INTO sirsi VALUES ('$fname', '$lname', '$dob', $age, '$address', '$mobile', '$classification', '$playing_role')";


    if (mysqli_query($conn, $query)) {
        echo "Data inserted into Database successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
