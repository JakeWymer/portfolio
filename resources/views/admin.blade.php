<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ADMIN PAGE</h1>
    <form method="post" action="/projects" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="image"/>
        <input type="text" name="name" />
        <input type="text" name="github" />
        <textarea name="description" id="" cols="30" rows="10"></textarea>>
        <button type="submit">Add</button>
    </form>
</body>
</html>
