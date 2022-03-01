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
                <h2 class="my-2 text-center">Регистрация</h2>

                <div >
                    <hr>
                    <div class="d-flex">
                        <div class="round mx-3"></div> 
                        <p>- Поля, обязательные для заполнения.</p>
                    </div>
                    <hr>
                </div>

                <form action="/vendor/signup.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="d-flex justify-content-between has-validation">
                        <div class="mt-3" style="width: 300px;">
                            <div class="d-flex">
                                <label class="form-label">Фамилия</label> 
                                <div class="round mx-2"></div> 
                            </div>
                            <input class="form-control" type="text" name="firstname" required>
                        </div>

                        <div class="mt-3" style="width: 300px;">
                            <div class="d-flex">
                                <label class="form-label">Имя</label> 
                                <div class="round mx-2"></div> 
                            </div>
                            <input class="form-control" type="text" name="lastname" required>
                        </div>

                        <div class="mt-3" style="width: 300px;">
                            <label class="form-label">Отчество</label> 
                            <input class="form-control" type="text" name="secondname">
                        </div>
                    </div>  
                    
                    <div class="d-flex justify-content-between">
                        <div class="mt-3" style="width: 500px;">
                            <div class="d-flex">
                                <label class="form-label">Логин</label> 
                                <div class="round mx-2"></div> 
                            </div>
                            <input class="form-control" type="text" name="login" id="validationCustomUsername" required>
                        </div>

                        <div class="mt-3" style="width: 500px;">
                            <div class="d-flex">
                                <label class="form-label">E-mail</label> 
                                <div class="round mx-2"></div> 
                            </div>
                            <input class="form-control" type="e-mail" name="email" required>
                        </div>
                    </div>   
                    
                    <div class="d-flex justify-content-between">
                        <div class="mt-3" style="width: 500px;">
                            <div class="d-flex">
                                <label class="form-label">Пароль</label> 
                                <div class="round mx-2"></div> 
                            </div>
                            <input class="form-control" id="password" name="password" type="password" required>
                        </div>

                        <div class="mt-3" style="width: 500px;">
                            <div class="d-flex">
                                <label class="form-label">Подтвердить пароль</label> 
                                <div class="round mx-2"></div> 
                            </div>
                            <input class="form-control" name="confirm_password" onkeypress=" setTimeout(register, 1000);" id="confirm_password" required>
                        </div>
                    </div> 

                    <div class="d-flex">
                        <div class="mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        </div>

                        <div class="mt-3 mx-2" style="width: 500px;">
                            <div class="d-flex">
                                <label class="form-label" required>Я соглашаюсь с <span class="text-purple">пользовательским соглашением</span> </label> 
                                <div class="round mx-2"></div> 
                            </div>
                        </div>
                    </div> 

                    <div class="text-center" id="check_confirm">
                                
                    </div>

                    <div class="d-flex align-items-center mt-5">
                        <button type="submit" class="btn bg-purple rounded text-white">Зарегистрироваться</button>
                        <a href="signin.php" class="btn rounded "> Уже регистрировались? тогда можете <span class="text-purple">Авторизоваться</span> </a>
                    </div>
                </form>
            </div>
        </main>

        <script src="validate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>