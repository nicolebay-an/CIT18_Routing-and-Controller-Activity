<!-- resources/views/hobbies.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
</head>
<body>
    <h1>My Hobbies</h1>
    <p>Here are some of my favorite hobbies:</p>
    <ul>
        <li>Fitness</li>
        <li>Instruments</li>
        <li>Photography</li>
        <li>Gaming</li>
        <li>Editing</li>
    </ul>

    <!-- Buttons for other pages -->
    <a href="{{ route('about-me') }}">About Me</a>
    <a href="{{ route('skills') }}">Skills</a>
</body>
</html>

