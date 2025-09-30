<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fbfdffff;
        }
        .profile-card {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            background: #e0f1ffff;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .profile-info {
            margin: 10px 0;
            padding: 10px;
            background: #111111ff;
            border-radius: 5px;
            font-size: 16px;
            font: weight 20px;
            color:#FFFFFF
        }
    </style>
</head>
<body>
    <div class="profile-card">
        
        <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar">
    
        <div class="profile-info">{{ $nama }}</div>
        <div class="profile-info">{{ $kelas }}</div>
        <div class="profile-info">{{ $npm }}</div>
    </div>
</body>
</html>
