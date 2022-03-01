<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/elmono-pro" rel="stylesheet">
        <title>Главная</title>
	</head>

    <body class="bg-light">
        <main class="container" style="width: 1200px;">
            <div class="bg-white my-5 p-5 rounded">
                <div class="d-flex align-items-center">
                    <img src="img/logo-purple.png" style="width: 2rem;" alt="">
                    <p class="ms-3 text-purple">Единый портал обращений</p>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="/" class="btn text-purple"> На главную -></a>
                </div>

                <h2 class="my-5 text-center">Авторизация</h2>
                <form action="vendor/signin.php" method="post" enctype="multipart/form-data">
                    <div class="mt-3">
                        <label class="form-label">Логин</label> 
                        <input class="form-control text-white" type="text" name="login" >
                    </div>
                    
                    <div class="mt-3">
                        <label class="form-label">Пароль</label> 
                        <input  class="form-control text-white" type="password" name="password">
                    </div>

                    <div class="d-flex align-items-center mt-5">
                        <button type="submit" class="btn bg-purple rounded text-white">Войти</button>
                        <a href="signup.php" class="btn rounded ">Не можете войти? тогда нужно <span class="text-purple">Зарегистрироваться</span> </a>
                    </div>
                    
                </form>
            </div>
        </main>
    </body>
</html>