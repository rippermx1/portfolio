<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        iframe {
            border: 10px solid black;
            border-radius: 25px 25px 25px 25px;
            width: 360px;
            height: 640px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>
        $(document).ready(() => {
           $('li').click(function() {
            $("#iframe").attr('src', $(this).attr('value'))
           });
        });
    </script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 align-items-center my-2">
                <ul id="urls" class="list-group list-group-horizontal justify-content-center">
                    <li class="list-group-item" value="https://offers-476d3.firebaseapp.com/">Offer</li>
                    <li class="list-group-item" value="https://discounts-5139e.firebaseapp.com/">C2C</li>
                    <!-- <li class="list-group-item" value="https://tesis-app-a56cb.web.app/">Tesis IOT</li> -->
                  </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <iframe id="iframe" src="" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</body>
</html>