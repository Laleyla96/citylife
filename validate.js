let firstname = document.getElementsByName("firstname")[0].value;
let lastname = document.getElementsByName("lastname")[0].value;
let secondname = document.getElementsByName("secondname")[0].value;
let login = document.getElementsByName("login")[0].value;
let password = document.getElementsByName("password")[0].value;
let password_repeat = document.getElementsByName("password_repeat")[0].value;
let email = document.getElementsByName("email")[0].value;
let checkbox = document.getElementById("checkbox").checked;
let field = document.getElementById("check_confirm").innerHTML;

// Пример стартового JavaScript для отключения отправки форм при наличии недопустимых полей
(function () {
    'use strict'
  
    var forms = document.querySelectorAll('.needs-validation')
  

    Array.prototype.slice.call(forms).forEach(function (form) 
    {
        form.addEventListener('submit', function (event) 
        {
          if (!form.checkValidity()) 
          {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

function Register() 
{
    console.log(`${firstname} ${lastname} ${secondname} ${login} ${password} ${password_repeat} ${email} ${checkbox}`);
    //проверка на кирилицу, пробел и дефис

    function CheckName(name) 
    {
        if (/^[а-яА-ЯёЁ -]+$/.test(name) == false) 
          field = '<p class="text-danger">только кириллические буквы, дефис и пробелы</p>';
    }

    function CheckEmail(email)
    {
        if (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(email) == false) //если ФИО не на кириллице
          field = '<p class="text-danger">еmail не валидный, только латиница</p>';
    }

    function CheckPasswords(pas,repas) 
    {
        if (pas != repas)
            field = '<p class="text-danger">Пароли не совпадают</p>';
    }
    
    function CheckBox(checkbox) 
    {
        if (!checkbox) 
          document.getElementById("status").innerHTML = "Согласие на БПД не дано";
        
    }
  
    async function aaa()
    {
        let response = await fetch('requests.php',
        {
            body: JSON.stringify({firstname, lastname, secondname, login, password, email})
        })
        
        console.log(response);
    }
    
    CheckName(firstname);
    CheckName(lastname);
    CheckName(secondname);
    CheckEmail(email);
    CheckPasswords(password, password_repeat);
    CheckBox(checkbox);
    aaa();
}