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
        <label for="image">Project Image</label>
        <input type="file" name="image"/>
        <label for="name">Project Name</label>
        <input type="text" name="name" />
        <label for="github">Github Link</label>
        <input type="text" name="github" />
        <textarea name="description" id="" cols="30" rows="10">Project Description</textarea>
        <button type="submit">Add</button>
    </form>
    <hr />
    <form method="post" action="/admin" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="image">Profile Picture</label>
        <input type="file" name="image"/>
        <label for="tagline">Tagline</label>
        <input type="text" name="tagline" value="{{$me->tagline}}" />
        <textarea name="par_one" cols="30" rows="10">{{$me->par_one}}</textarea>
        <textarea name="par_two" cols="30" rows="10">{{$me->par_two}}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
