<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background: url('https://cdn.wallpapersafari.com/57/36/5MbQFu.png') no-repeat;
                background-size: cover;
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                color:white;
            }

            .container {
                text-align: center;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 112px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Practice 2</div>
                <h2>DOWNLOAD VIDEOS FROM YOUTUBE</h2>
                <form method="post" action="/pasteUrl">
                {{ csrf_field() }}

                <label>Link: <input type="text" placeholder="Paste link here" name="link"></label>
                <input type="submit" value="DOWNLOAD">
               
                </form>
            </div>
        </div>
    </body>
</html>
