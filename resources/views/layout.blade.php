<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>BITEST | @yield('title')</title>
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
            <div class="sidebar__content">
                <div class="sidebar__brand">
                   BIFK
                </div>
                <ul class="sidebar__nav">
                    <li class="sidebar__item">
                    <a href="/" class="sidebar__link">Главная</a>
                    </li>
                    <li class="sidebar__item">
                        <a href="/passed" class="sidebar__link">Мои тесты</a>
                        </li>
                    <li class="sidebar__item">
                    <a href="/passed" class="sidebar__link">Пройденные тесты</a>
                    </li>
                    <li class="sidebar__item">
                    <a href="#" class="sidebar__link">Выйти</a>
                    </li>
                </ul>
            </div>
          </nav>
       <div class="main">
                <nav class="navbar navbar-expand navbar-light">
                    <span class="sidebar-toggle d-flex"><i class="hamburger align-self-center"></i></span>
                </nav>
                <div class="content">
                    @yield('content')
                </div>
        </div>
    </div>
    <script src="js/toggle-sidebar.js"></script>
</body>
</html>
