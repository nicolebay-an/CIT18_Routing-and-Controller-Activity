<!-- resources/views/skills.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>
<body>
    <h1>My Skills</h1>
    <p>Here are some of my skills:</p>
    <ul>
        <li>Web/App Development</li>
        <li>A bit of Developing App (Android Studio)</li>
        <li>Programming but not that much (Java, Python)</li>
        <li>Laravel, PHP, Javascript (but still learning from those)</li>
        <li>Editing & Design: Photos & Videos</li>
    </ul>
    
     <!-- Buttons for other pages -->
     <a href="{{ route('about-me') }}">About Me</a>
    <a href="{{ route('hobbies') }}">Hobbies</a>
</body>
</html>
