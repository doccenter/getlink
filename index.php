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
            $('#ok').on('click', function () {
                $.ajax({
                    url: 'get.php?id=' + $('#id').val(),
                    success: function (data) {
                        var o = JSON.parse(data);
                        $('#txtID').val(o.id);
                        $('#txtTitle').val(o.title);
                        $('#txtImage').val(o.image);
                        $('#txtLabel').val(o.label);
                        $('#txtFile').val(o.file);
                        $('#txtType').val(o.type);
                        $('#txtEmbed_ID').val(o.embed_id);
                        $('#id').val('');
                    }
                })
            });
        });

    </script>
    <title>Document</title>
</head>
<body>

<div class="container" style="padding-top: 30px">
    <h1>Hệ thống get link google drive</h1>
    <div class="col-sm-12">
        <input type="text" id="id" placeholder="Nhập id link google drive có khả năng chia sẻ cho tất cả mọi người"
               class="form-control"><br>
        <button id="ok" class="btn btn-primary">Lấy thông tin</button>
    </div>
    <div class="col-sm-12">
        <h3>Thông tin bên dưới</h3>
        ID:
        <div class="input-group">
            <input class="form-control" id="txtID" readonly/><span class="input-group-addon btn btn-primary" id="btnID">Copy To Clipboard</span>
        </div>
        <br>
        Title:
        <div class="input-group">
            <input class="form-control" id="txtTitle" readonly/><span class="input-group-addon btn btn-primary"
                                                                      id="btnTitle">Copy To Clipboard</span>
        </div>
        <br>
        Image:
        <div class="input-group">
            <input class="form-control" id="txtImage" readonly/><span class="input-group-addon btn btn-primary"
                                                                      id="btnImage">Copy To Clipboard</span>
        </div>
        <br>
        Label:
        <div class="input-group">
            <input class="form-control" id="txtLabel" readonly/><span class="input-group-addon btn btn-primary"
                                                                      id="btnLabel">Copy To Clipboard</span>
        </div>
        <br>
        File:
        <div class="input-group">
            <input class="form-control" id="txtFile" readonly/><span class="input-group-addon btn btn-primary"
                                                                     id="btnFile">Copy To Clipboard</span>
        </div>
        <br>
        Type:
        <div class="input-group">
            <input class="form-control" id="txtType" readonly/><span class="input-group-addon btn btn-primary"
                                                                     id="btnType">Copy To Clipboard</span>
        </div>
        <br>
        Embed_ID:
        <div class="input-group">
            <input class="form-control" id="txtEmbed_ID" readonly/><span
                    class="input-group-addon btn btn-primary" id="btnEmbed_ID">Copy To Clipboard</button></span>
        </div>
    </div>
</div>
<script>
    function copyText(text) {
        function selectElementText(element) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(element);
                range.select();
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(element);
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(range);
            }
        }

        var element = document.createElement('DIV');
        element.textContent = text;
        document.body.appendChild(element);
        selectElementText(element);
        document.execCommand('copy');
        element.remove();
    }


    var txtID = document.getElementById('txtID');
    var btnID = document.getElementById('btnID');

    var txtTitle = document.getElementById('txtTitle');
    var btnTile = document.getElementById('btnTitle');

    var txtImage = document.getElementById('txtImage');
    var btnImage = document.getElementById('btnImage');

    var txtLabel = document.getElementById('txtLabel');
    var btnLabel = document.getElementById('btnLabel');

    var txtFile = document.getElementById('txtFile');
    var btnFile = document.getElementById('btnFile');

    var txtType = document.getElementById('txtType');
    var btnType = document.getElementById('btnType');

    var txtEmbed_ID = document.getElementById('txtEmbed_ID');
    var btnEmbed_ID = document.getElementById('btnEmbed_ID');

    btnID.addEventListener('click', function () {
        copyText(txtID.value);
        btnID.innerHTML = 'Copied !';
    });
    btnTile.addEventListener('click', function () {
        copyText(txtTitle.value);
        btnTile.innerHTML = 'Copied !';
    });

    btnImage.addEventListener('click', function () {
        copyText(txtImage.value);
        btnImage.innerHTML = 'Copied !';
    });

    btnLabel.addEventListener('click', function () {
        copyText(txtLabel.value);
        btnLabel.innerHTML = 'Copied !';
    });

    btnFile.addEventListener('click', function () {
        copyText(txtFile.value);
        btnFile.innerHTML = 'Copied !';
    });

    btnType.addEventListener('click', function () {
        copyText(txtType.value);
        btnType.innerHTML = 'Copied !';
    });

    btnEmbed_ID.addEventListener('click', function () {
        copyText(txtEmbed_ID.value);
        btnEmbed_ID.innerHTML = 'Copied !';
    });

</script>
</body>
</html>