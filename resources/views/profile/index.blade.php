<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .profile-header {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
            margin-right: 20px;
        }
        .profile-info {
            flex: 1;
        }
        .profile-info h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .profile-info p {
            margin: 5px 0;
            color: #666;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-header">
            <!-- Profile Picture -->
            <div class="profile-pic-container">
                <img src="https://media.istockphoto.com/id/1316420668/vector/user-icon-human-person-symbol-social-profile-icon-avatar-login-sign-web-user-symbol.jpg?s=612x612&w=0&k=20&c=AhqW2ssX8EeI2IYFm6-ASQ7rfeBWfrFFV4E87SaFhJE=" alt="Profile Picture" class="profile-pic" height="100" width= "200">
            </div>

            <!-- Profile Info -->
            <div class="profile-info">
                <h1>Profile Name</h1>
                <p>Email: </p>
                <p>Joined: </p>
            </div>

            <!-- Edit Profile Button -->
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
        <div class="profile-header">
            <!-- Profile Picture -->
            <div class="profile-pic-container">
                <img src="https://media.istockphoto.com/id/1316420668/vector/user-icon-human-person-symbol-social-profile-icon-avatar-login-sign-web-user-symbol.jpg?s=612x612&w=0&k=20&c=AhqW2ssX8EeI2IYFm6-ASQ7rfeBWfrFFV4E87SaFhJE=" alt="Profile Picture" class="profile-pic">
            </div>

            <!-- Profile Info -->
            <div class="profile-info">
                <h1>Profile Name</h1>
                <p>Email: </p>
                <p>Joined: </p>
            </div>

            <!-- Edit Profile Button -->
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
        <div class="profile-header">
            <!-- Profile Picture -->
            <div class="profile-pic-container">
                <img src="https://media.istockphoto.com/id/1316420668/vector/user-icon-human-person-symbol-social-profile-icon-avatar-login-sign-web-user-symbol.jpg?s=612x612&w=0&k=20&c=AhqW2ssX8EeI2IYFm6-ASQ7rfeBWfrFFV4E87SaFhJE=" alt="Profile Picture" class="profile-pic">
            </div>

            <!-- Profile Info -->
            <div class="profile-info">
                <h1>Profile Name</h1>
                <p>Email: </p>
                <p>Joined: </p>
            </div>

            <!-- Edit Profile Button -->
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
        <div class="profile-header">
            <!-- Profile Picture -->
            <div class="profile-pic-container">
                <img src="https://media.istockphoto.com/id/1316420668/vector/user-icon-human-person-symbol-social-profile-icon-avatar-login-sign-web-user-symbol.jpg?s=612x612&w=0&k=20&c=AhqW2ssX8EeI2IYFm6-ASQ7rfeBWfrFFV4E87SaFhJE=" alt="Profile Picture" class="profile-pic">
            </div>

            <!-- Profile Info -->
            <div class="profile-info">
                <h1>Profile Name</h1>
                <p>Email: </p>
                <p>Joined: </p>
            </div>

            <!-- Edit Profile Button -->
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
        <div class="profile-header">
            <!-- Profile Picture -->
            <div class="profile-pic-container">
                <img src="https://media.istockphoto.com/id/1316420668/vector/user-icon-human-person-symbol-social-profile-icon-avatar-login-sign-web-user-symbol.jpg?s=612x612&w=0&k=20&c=AhqW2ssX8EeI2IYFm6-ASQ7rfeBWfrFFV4E87SaFhJE=" alt="Profile Picture" class="profile-pic">
            </div>

            <!-- Profile Info -->
            <div class="profile-info">
                <h1>Profile Name</h1>
                <p>Email: </p>
                <p>Joined: </p>
            </div>

            <!-- Edit Profile Button -->
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>



    </div>
</body>
</html>
