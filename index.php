<?php
	require_once 'vendor/connect.php';
    session_start();
?>

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
        <nav class="navbar navbar-expand-sm p-5 navbar-dark bg-purple">
			<div class="container"  style="width: 1200px;">
                <img src="img/logo.png" style="width: 3rem;" alt="">
			    <a href="" class="navbar-brand ms-3">Единый портал обращений</a>

			    <div class="collapse navbar-collapse justify-content-end " id="navbarContent">
					<a href="#appeal" class="btn btn-outline-light rounded text-white me-5">Оставить обращение</a>
                    <?php
                        if ( isset($_SESSION['user']) ) 
                        {
                            if($_SESSION['user']['name'] == "admin")
                                echo '<a href="admin/" class="btn btn-outline-primary me-5">Admin панель</a>';

                            echo '<div class="dropdown">
                                    <button class="btn btn-outline-light rounded dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Аккаунт
                                    </button>
                                    <ul class="dropdown-menu bg-purple mx-auto">
                                        <li><a href="person.php" class="btn btn-outline-light rounded text-white mb-2">Личный кабинет</a></li>
                                        <li><a href="vendor/logout.php" class="btn btn-outline-light rounded text-white mb-2">Выйти</a></li>
                                    </ul>
                                </div>';
                        }
                            
                        else
                        {
                            echo '<a href="signin.php" class="btn btn-outline-light rounded text-white">Вход\регистрация</a>';
                        }
                    ?>
					
				</div>
			</div>
		</nav>

    <main class="container"  style="width: 1200px;">
    <!-- Block Description -->
        <div class="bg-white my-5 p-4 rounded">
            <h2>Электронный приём обращений граждан</h2>
            <div class="d-flex">
            <p class="mt-5" style="width: 800px;">
                Электронная приемная исполнительных органов государственной власти г. Хабаровска. 
                Сервис предоставляет возможность отправить обращение в форме электронного документа 
                и получить информацию о ходе рассмотрения поданных ранее обращений.
            </p>
            <img src="img/application.png" style="width: 10rem;" alt="" class="align-right">
            </div>
        </div>
   <!-- #Block Description -->

    <!-- Block Advanteges -->
        <div class="d-flex justify-content-between">

            <div class="bg-white position-relative p-4 rounded" style="width: 350px;">
                <div class="d-flex">
                    <h5 style=" color: #7070FF">Статус вашего обращения</h5>
                    <img src="img/append.png" style="width: 5rem;" alt="" class="align-right">
                </div>
                <p class="my-5">Контроль за ходом рассмотрения обращения.</p>
                <button href="" class="btn rounded btn-purple position-absolute bottom-0 start-50 translate-middle-x mb-2" style="width: 200px;">Подробнее</button>
            </div>

            <div class="bg-white position-relative p-4 rounded" style="width: 350px;">
                <div class="d-flex">
                    <h5 style=" color: #7070FF">Сообщение о коррупции</h5>
                    <img src="img/corruption.png" style="width: 5rem;" alt="" class="align-right">
                </div>
                <p class="my-5">Специальная линия предназначена для направления гражданами информации о конкретных фактах коррупции.</p>
                <button href="" class="btn rounded btn-purple position-absolute bottom-0 start-50 translate-middle-x mb-2" style="width: 200px;">Подробнее</button>
            </div>

            <div class="bg-white position-relative p-4 rounded" style="width: 350px;">
                <div class="d-flex">
                    <h5 style=" color: #7070FF">Портал «Наш Хабаровск»</h5>
                    <img src="img/news.png" style="width: 5rem;" alt="" class="align-right">
                </div>
                <p class="my-5"> Следите за новотсями портала и Вашего города из прямых источников.</p>
                <button href="" class="btn rounded btn-purple position-absolute bottom-0 start-50 translate-middle-x mb-2" style="width: 200px;">Подробнее</button> 
            </div>

        </div>
    <!-- #Block Advanteges -->

    <!-- Block News -->
        <div class="bg-white my-5 p-4 rounded">
            <h4>Новости портала</h4>
            <p>Решённых проблем:</p>
            <p style=" color: #7070FF">154</p>

            <div class="d-flex justify-content-between">
                <div class="mt-5" style="width: 200px;"> 
                    <p>01-03-2022</p>
                    <p style=" color: #7070FF">О подаче сообщений о мусоропроводах</p>
                </div>

                <div class="mt-5" style="width: 200px;"> 
                    <p>19-02-2022</p>
                    <p style=" color: #7070FF">О технических работах</p>
                </div>

                <div class="mt-5" style="width: 200px;"> 
                    <p>24-02-2022</p>
                    <p style=" color: #7070FF">О нарушении работы ТСЖ</p>
                </div>

                <div class="mt-5" style="width: 200px;"> 
                    <p>28-02-2022</p>
                    <p style=" color: #7070FF">Продление срока модерации</p>
                </div>
            </div>

            <p class="mt-5 text-end" style=" color: #7070FF">Все новости -></p>
        </div>
    <!-- #Block News -->

    <!-- Block appeal -->

    <div class="bg-white my-5 p-4 rounded" id="appeal">
        <h2>Отправить обращение</h2>

        <div class="my-5">
            <p>Авторизуйтесь</p>
            <a href="signin.php" class="btn rounded btn-purple" style="width: 200px;">Вход</a> 
        </div>

        <div >
            <hr>
            <div class="d-flex">
                <div class="round mx-3"></div> 
                <p>- Поля, обязательные для заполнения.</p>
            </div>
            <hr>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mt-5">
                <div class="d-flex">
                    <label class="form-label">Название</label> 
                    <div class="round mx-2"></div> 
                </div>
                <input class="form-control" type="text" name="topic" placeholder="Напишите тему" >
            </div>
            
            <div class="mt-5">
                <div class="d-flex">
                    <label class="form-label">Комментарий</label> 
                    <div class="round mx-2"></div> 
                </div>
                <textarea  class="form-control" name="description" rows="3"> </textarea>
            </div>

            <div class="mt-5">
                <div class="d-flex">
                    <label class="form-label">Категория</label> 
                    <div class="round mx-2"></div> 
                </div>
                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Выберите подходящую категорию">
                <datalist id="datalistOptions">
                <option value="Дороги">
                <option value="Инфраструктура">
                <option value="Образование">
                <option value="Закон">
                <option value="Розница">
                </datalist>
            </div>

            <div class="mt-5">
                <div class="d-flex">
                    <label class="form-label">Фотография</label> 
                    <div class="round mx-2"></div> 
                </div>
                <input class="form-control" type="file" id="formFile">
            </div>

            <button type="button" class="btn btn-outline-secondary mt-5 rounded" disabled>Отправить обращение</button>

            <div class="my-5">
                <p>Авторизуйтесь, чтобы оставить обращение</p>
                <a href="signin.php" class="btn rounded btn-purple" style="width: 200px;">Вход\регистрация</a> 
            </div>
        </form>
    </div>

    <!-- #Block appeal -->

    </main>

    <footer class="text-center bg-purple text-white p-5">
        <div class="d-flex justify-content-center align-items-center">
            <img src="img/logo.png" style="width: 4rem;" alt="">
            <h4 class="ms-3">Единый портал обращений</h4>
        </div>

        <div class="mx-auto mt-5" style="width: 300px;">
            <p>© 2017 - 2022 При перепечатке
            материалов ссылка обязательна.
            Г. Хабаровск, Запарина 32, 89990882695</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>