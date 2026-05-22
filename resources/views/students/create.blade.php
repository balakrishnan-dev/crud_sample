<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/student/') }}" method="POST" method="multipart/form-data">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name"> <br>
    <label for="email">Email</label>
    <input type="email" name="email"> <br>
    <label for="password">Password</label>
    <input type="password" name="password"> <br>
    <label for="date_of_birth">Date Of Birth</label>
    <input type="date" name="date_of_birth"> <br>
    <label for="phone_number">Phone Number</label>
    <input type="number" name="phone_number"> <br>
    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female <br>
    <label for="resume">Resume</label>
    <input type="file" name="resume"> <br>
    <label for="skills">Skills</label>
    <input type="checkbox" name="skills[]" value="Html"> Html
    <input type="checkbox" name="skills[]" value="Css"> Css
    <input type="checkbox" name="skills[]" value="Javascript"> Javascript
    <input type="checkbox" name="skills[]" value="PHP"> PHP <br>
    <label for="department">Department</label>
    <select name="department" id="department">
        <option value="">Select department</option>
        <option value="Frontend">Frontend</option>
        <option value="Backend">Backend</option>
        <option value="Fullstack">Fullstack</option>
        <option value="UIUX">UIUX</option>
    </select>
    <input type="submit" value="Save">
    </form>
</body>
</html>