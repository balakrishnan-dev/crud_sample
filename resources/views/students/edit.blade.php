<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/student', $student->id ) }}" method="POST" method="multipart/form-data">
    {!! csrf_field() !!}
    @method("PATCH")

    <input type="hidden" name="id" id="id" value="{{ $student->id }}">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $student->name}}"> <br>
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ $student->email}}"> <br>
    <label for="password">Password</label>
    <input type="password" name="password" value="{{ $student->password}}"> <br>
    <label for="date_of_birth">Date Of Birth</label>
    <input type="date" name="date_of_birth" value="{{ $student->date_of_birth}}"> <br>
    <label for="phone_number">Phone Number</label>
    <input type="number" name="phone_number" value="{{ $student->phone_number}}"> <br>
    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="male" {{ $student->gender == 'male' ? 'checked' : '' }}> Male
    <input type="radio" name="gender" value="female" {{ $student->gender == 'female' ? 'checked' : '' }}> Female <br>
    <label for="resume">Resume</label>
    <input type="file" name="resume"> <br>
    <label for="skills">Skills</label>
    <input type="checkbox" name="skills[]" value="Html" {{ in_array('Html', $student->skills ?? []) ? 'checked' : '' }}> Html
    <input type="checkbox" name="skills[]" value="Css" {{ in_array('Css', $student->skills ?? []) ? 'checked' : '' }}> Css
    <input type="checkbox" name="skills[]" value="Javascript" {{ in_array('javascript', $student->skills ?? []) ? 'checked' : '' }}> Javascript
    <input type="checkbox" name="skills[]" value="PHP" {{ in_array('PHP', $student->skills ?? []) ? 'checked' : '' }}> PHP <br>
    <label for="department">Department</label>
    <select name="department" id="department">
        <option value="">Select department</option>
        <option value="Frontend" {{ $student->department == 'Frontend' ? 'selected' : '' }}>Frontend</option>
        <option value="Backend" {{ $student->department == 'Backend' ? 'selected' : '' }}>Backend</option>
        <option value="Fullstack" {{ $student->department == 'Fullstack' ? 'selected' : '' }}>Fullstack</option>
        <option value="UIUX" {{ $student->department == 'UIUX' ? 'selected' : '' }}>UIUX</option>
    </select>
    <input type="submit" value="Save">
    </form>
</body>
</html>