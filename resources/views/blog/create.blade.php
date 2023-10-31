<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Edit</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="title" value="">
        <textarea name="content" cols="30" rows="10"></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>