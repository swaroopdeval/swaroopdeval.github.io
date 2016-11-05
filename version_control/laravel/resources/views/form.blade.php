<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="/foo/bar" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </body>
</html>
