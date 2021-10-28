<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>
    Привет {!! $data['name'] !!}, мы рады, что ты с нами! Ниже приведены данные вашего аккаунта:
</h2>
<br>
<h3>Email: </h3>
<p>{!! $data['email'] !!}</p>
<h2>Перейдите по этой ссылке для задания нового пароля: </h2>
{{ url('password/reset/'.$data['token'].'?email='.$data['email']) }}
</body>
</html>
