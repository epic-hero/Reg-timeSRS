<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            background: #DCDCDC;
        }
        .container{
            max-width:1000px;
            margin:0 auto;
            padding: 30px;
            float: none;
            background: #F5F5F5;
        }
        form{
            padding: 20px;
            display: grid;
        }
        .leftMenu {
            display: inline-grid;
        }
        .leftMenu a{
            margin-top: 10px;
        }
        .content{
            display: inline-block;
            max-width:700px;
        }
        .container h1{
            text-align: center;
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
<div class="container col-sm-10">
    <h1>Регистрация домена</h1>
    <div class="menucontent">
    <div class="leftMenu">
            <a href="/index.php/regTime/getInfo" class="btn btn-success">getInfo</a>
            <a href="/index.php/regTime/isAvailable" class="btn btn-success">isAvailable</a>
            <a href="/index.php/regTime/registrationDomain" class="btn btn-success">registrationDomain</a>
    </div>
    <div class="content">
        <h3><?=$rezult;?></h3>
        <form method="POST" role="form" action="http://codeigniter-develop/index.php/regTime/registrationDomain">

            <div class="form-group col-sm-10">
                <label>Domain name</label>
                <input type="text" class="form-control" name="domain_name" value="habradiser.ru" placeholder="domainname.ru">
                <p class="help-block">Enter domain name</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Period</label>
                <input type="text" class="form-control" value="1" name="period">
                <p class="help-block">Период, на который производится регистрация домена. Единственное допустимое значение для доменов .ru, .su, .рф: 1.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Person</label>
                <input type="text" name="person" value="Petrov Petr Petrovich" class="form-control" placeholder="Vassily N Pupkin">
                <p class="help-block">Имя владельца записанное латинскими буквами.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Person_r</label>
                <input type="text" name="person_r" class="form-control" value="Петров Пётр Петрович" placeholder="Пупкин Василий Николаевич">
                <p class="help-block">Имя владельца домена на русском языке.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Passport</label>
                <input type="text" name="passport" class="form-control" value="32 02 651241 выдан 48 о/м г.Москвы 26.12.1990" placeholder="32 02 651241 выдан 48 о/м г.Москвы 26.12.1990">
                <p class="help-block">Серия, номер, орган выдачи и дата выдачи паспорта или иного основного документа удостоверяющего личность.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Residence</label>
                <input type="text" name="residence" class="form-control" value="101000, Москва, ул.Воробьянинова, 15, кв.22" placeholder="101000, Москва, ул.Воробьянинова, 15, кв.22">
                <p class="help-block">Адрес постоянного места жительства.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Birth date</label>
                <input type="text" name="birth_date" class="form-control" value="07.11.1917" placeholder="07.11.1917">
                <p class="help-block">Дата рождения в формате ДД.ММ.ГГГГ.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Country</label>
                <input type="text" name="country" class="form-control" value="RU" placeholder="RU">
                <p class="help-block">Двухбуквенный код страны в соответствии с ISO стандартом</p>
            </div>

            <div class="form-group col-sm-10">
                <label>P addr</label>
                <input type="text" name="p_addr" class="form-control" value="101000, ул.Пупкина, 1, стр. 2, отдел мебели, офис 433 Москва" placeholder="101000, Москва, ул.Пупкина, 1, стр. 2, отдел мебели, офис 433 (для В. Лоханкина)">
                <p class="help-block">Почтовый адрес организации на русском языке.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Phone</label>
                <input type="tel" name="phone" class="form-control" value="+79122116558" placeholder="+79122116558">
                <p class="help-block">Контактные телефоны владельца домена.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Fax</label>
                <input type="tel" name="fax" class="form-control" value="+7 495 8102233" placeholder="+7 3432 811221">
                <p class="help-block">Номер факса владельца домена.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Email</label>
                <input type="text" name="e_mail" class="form-control" value="test_for_domain@mail.ru" placeholder="ncc@test.ru\ntest@test.ru">
                <p class="help-block">E-mail адрес владельца домена.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>Code</label>
                <input type="text" name="code" class="form-control" value="" placeholder="">
                <p class="help-block">ИНН для частных предпринимателей.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>ns0</label>
                <input type="text" name="ns0" class="form-control" value="ns1.nameself.com">
                <p class="help-block">Укажите первичный (основной) DNS сервер.</p>
            </div>

            <div class="form-group col-sm-10">
                <label>ns1</label>
                <input type="text" name="ns1" class="form-control" value="ns2.nameself.com">
                <p class="help-block">Укажите первичный (основной) DNS сервер.</p>
            </div>

            <button type="submit" class="btn btn-primary  col-sm-3">Отправить</button>
        </form>
    </div>
    </div>
</div>
</body>
</html>
