<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reCaptcha V3</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src='https://www.recaptcha.net/recaptcha/api.js?render=6Lf4JHgUAAAAAOQsWq7eXzUc6kLDpyf5OO1cVQLL'></script>
    <script>
        function reCaptcha() {
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lf4JHgUAAAAAOQsWq7eXzUc6kLDpyf5OO1cVQLL', {action: 'homepage'})
                .then(function(token) {
                    // Verify the token on the server.
                    $.ajax({
                        type: 'post',
                        url: './server.php',
                        data: {token: token},
                        dataType: 'json'
                    }).done(function(data) {
                        alert('Score: ' + data.score);
                    });
                });
            });
        }
    </script>
</head>
<body>
    <button onclick="reCaptcha()">reCaptcha V3 - t</button>
</body>
</html>