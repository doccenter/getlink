<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>

        $(document).ready(function () {
            $('#ok').on('click',function () {
                $.ajax({
                    url:'get.php?id='+$('#id').val(),
                    success:function (data) {
                        console.log(data);
                    }
                })
            });
        });

    </script>
    <title>Document</title>
</head>
<body>

    <input placeholder="Id of link google drive sharable" name="id" type="text"><br>
    <input type="button" id="ok" value="Get">

</body>
</html>