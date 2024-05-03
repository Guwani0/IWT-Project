<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Profile</title>
    <style>
        .container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.profile {
    display: flex;
    justify-content: space-between;
}

.profile-info {
    flex: 1;
}

.profile-item {
    margin-bottom: 15px;
}

.profile-item label {
    font-weight: bold;
}

.profile-image {
    flex: 1;
    text-align: center;
}

.profile-image img {
    max-width: 200px;
    border-radius: 50%;
    border: 5px solid #007bff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Account Profile</h1>
        <div class="profile">
            <div class="profile-info">
                <div class="profile-item">
                    <label for="name">Name:</label>
                    <span id="name">John Doe</span>
                </div>
                <div class="profile-item">
                    <label for="age">Age:</label>
                    <span id="age">30</span>
                </div>
                <div class="profile-item">
                    <label for="gender">Gender:</label>
                    <span id="gender">Male</span>
                </div>
                <div class="profile-item">
                    <label for="dob">Date of Birth:</label>
                    <span id="dob">January 1, 1990</span>
                </div>
                <div class="profile-item">
                    <label for="country">Country:</label>
                    <span id="country">United States</span>
                </div>
                <div class="profile-item">
                    <label for="email">Email:</label>
                    <span id="email">john@example.com</span>
                </div>
                <div class="profile-item">
                    <label for="contact">Contact Number:</label>
                    <span id="contact">123-456-7890</span>
                </div>
            </div>
            <div class="profile-image">
                <!-- Placeholder for profile image -->
                <img src="profile-pic.jpg" alt="Profile Picture">
            </div>
        </div>
    </div>
</body>
</html>