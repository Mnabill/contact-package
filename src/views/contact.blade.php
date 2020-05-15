<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us page</title>
</head>

<body>

    <h1> Contact ant time </h1>

    <form action=" {{ route('contact') }} " method="POST">
        @csrf
        <div class="form-group">
            <label for=""> Name </label>
            <input type="text" name="name" placeholder=" enter your name " class="form-control">
        </div>
        <div class="form-group">
            <label for=""> Email </label>
            <input type="email" name="email" placeholder=" enter your name " class="form-control">
        </div>
        <div class="form-group">
            <label for=""> Message </label>
            <textarea name="message" cols="15" rows="5" placeholder="enter your message" class="form-control">  </textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="submit" class="form-control">
        </div>

    </form>

</body>

</html>