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
					<a href="/" class="btn btn-outline-light rounded text-white me-5"> На главную</a>
					<a href="/" class="btn btn-outline-light rounded text-white">Выйти из личного кабинета</a>
				</div>
			</div>
		</nav>

        <main class="container" style="width: 1200px;">
            <div class="bg-white my-5 p-5 rounded">
                <h1>Ваши обращения</h1>
            </div>

            <div class="d-flex justify-content-between">
                <div class="bg-white my-5 p-3 rounded" style="width: 550px;">

                    <div class="d-flex justify-content-end">
                        <p class="btn text-secondary"> 21-01-2022</p>
                    </div>

                    <div class="ps-3 ms-1">
                        <h4>Нарушение работы ТСЖ</h4>

                        <p class="mt-4">Категория: <span>Инфраструктура.</span></p>

                        <div class="d-flex mt-4">
                            <p>Описание: </p>
                            <p class="ms-1">это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
                        </div>

                        <a class="mt-4 btn" data-bs-toggle="modal" data-bs-target="#Photo"> Фотография: <span class="text-purple">Нажмите чтобы посмотреть...</span> </a>

                        <p class="mt-5">Cтатус: <span>Новая</span></p>

                    </div>
                </div>

                <div class="bg-white my-5 p-3 rounded" style="width: 550px;">
                    <div class="d-flex justify-content-end">
                        <p class="btn text-secondary"> 19-01-2022</p>
                    </div>

                    <div class="ps-3 ms-1">
                        <h4>Ямы, бугры, гололёд</h4>

                        <p class="mt-4">Категория: <span>Дороги.</span></p>

                        <div class="d-flex mt-4">
                            <p>Описание: </p>
                            <p class="ms-1">это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
                        </div>

                        <a class="mt-4 btn" data-bs-toggle="modal" data-bs-target="#Photo"> Фотография: <span class="text-purple">Нажмите чтобы посмотреть...</span> </a>

                        <p class="mt-5">Cтатус: <span style="color: green;">Решено</span></p>

                    </div>
                </div>
            </div>

             <!-- Modal #photo -->
             <div class="modal fade" id="Photo" tabindex="-1" aria-bs-labelledby="PhotoLabel" aria-bs-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="PhotoLabel">Фотография</h4>
                        </div>

                        <div class="modal-body text-center">
                            <img src="appeal-proho/1.jpg" alt="" class="w-50 rounded">
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-outline-danger" data-bs-dismiss="modal" aria-bs-label="close">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Modal #photo -->

        </main>
        <footer class="text-center bg-purple text-white p-5">
            <div class="d-flex justify-content-center align-items-center">
                <img src="img/logo.png" style="width: 4rem;" alt="">
                <h4 class="ms-3">Единый портал обращений</h4>
            </div>

            <div class="mx-auto mt-5" style="width: 300px;">
                <p>© 2017 - 2022 При перепечатке
                материалов ссылка обязательна.</p>
                
                <p>Администрация Хабаровска: 191060,
                Хабаровск, Смольный проезд, д.1, литера Б</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>