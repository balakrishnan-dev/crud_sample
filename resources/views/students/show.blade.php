<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Student Name : {{ $students->name }}</p>
    <p>Student Email : {{ $students->email }}</p>
    <p>Student Password : {{ $students->password }}</p>
    <p>Student Date Of Birth : {{ $students->date_of_birth }}</p>
    <p>Student Phone Number : {{ $students->phone_number }}</p>
    <p>Student Skills : {{ implode (',',$students->skills) }} </p>
    <p>Student Gender : {{ $students->gender }}</p>
    <p>Student Department : {{ $students->department }}</p>
</body>
</html>