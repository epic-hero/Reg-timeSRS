<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            background: #DCDCDC;
        }
        .container{
            max-width:800px;
            margin:0 auto;
            padding: 30px;
            float: none;
            background: #F5F5F5;
        }
        form{
            padding: 20px;
            display: grid;
        }
        @media (max-width: 500px) {
            .container{
                padding: 0;
            }
            form{
                padding: 0;
            }
        }
    </style>
</head>
<body>
<div class="container">
<a href="/index.php/regTime/getInfo" class="btn btn-success">getInfo</a>
<a href="/index.php/regTime/isAvailable" class="btn btn-success">isAvailable</a>
<a href="/index.php/regTime/registrationDomain" class="btn btn-success">registrationDomain</a>

<form method="post" action="http://codeigniter-develop/index.php/regTime/getInfo">
    <div class="form-group col-sm-10">
        <label>Введите домен</label>
        <input type="text" class="form-control" name="basename" value="www.webnames.ru" placeholder="habradiser.ru">
        <p class="help-block">Enter domain name</p>
    </div>
    <input type="submit" class="btn btn-primary col-sm-3">
</form>
    <?= $rezult;?>
</div>


</body>
</html>
