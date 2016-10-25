<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
  selector: "textarea",  // change this value according to your HTML
  //plugins: "code",
  //toolbar: "code",
   //themes: "modern"
  menubar: "tools"
});

  </script>
</head>

<body>
  <h1>Update Content Text Of Static Pages</h1>
  <a href="{{route('static.display')}}" class="btn btn-primary">Display</a>
  <center>
  <form method="post" action="{{route('static.store')}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <label for="title">Title:</label>
  <input type="text" name="title" placeholder="Title eg:admin-edit">
  <label for="url">URL:</label>
  <input type="url" name="slug" placeholder="admin-edit">
    <textarea id="myeditablediv" name="contentText"> Click here to edit!</textarea>
    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
  </form>
</center>
</body>
</html>
