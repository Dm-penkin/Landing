<?php 

if ( !empty($_POST) && trim($_POST['name']) != '' && trim($_POST['e-mail']) != '' && trim($_POST['message']) != ''  ) {

$message = "Вам пришло новое сообщение с сайта: \n" . 
           "Имя отправителя: " . $_POST['name'] . "\n" . 
           "E-mail отправителя: " . $_POST['e-mail'] . "\n" .
           "Сообщение: ". $_POST['message'];

mail ( 'penkindimonloudsound@gmail.com', "Сообщение с сайта визитки!", $message );

  header ('location: thanks.html');

}


function checkValue($item, $message ) {
       if ( isset($item) && trim($item) == ''  ) {
           echo '<div class="error">' . $message . '</div>';
       }
} 


function printPostValue($item){
       if ( isset($item) && strlen(trim($item)) > 0 ) {
           echo $item;
         }
}

?>




<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Jura:400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Дмитрий Пенкин</title>
</head>





<body>
    <div class="header">

<div class="navigation"> 
    <a href="#" class="nav">Обо мне</a>
    <a href="#" class="nav">Мои работы</a>
    <a href="#" class="nav">Контакты</a>  

</div>


<div class="photo-wrapper">
<img class="photo-img" src="./img/DFEzMQqfPD8.jpg" alt="">
</div>

<div class="title-text">Дмитрий Пенкин</div>
<div class="slogan">Личный сайт веб-разработчика</div>
<div class="social-wrapper">
         <a href="https://vk.com/penkindimon" target="blank" class="social-icon"><i class="fab fa-vk"></i></a>
         <a href="https://www.instagram.com/dm_penkin/" target="blank" class="social-icon"><i class="fab fa-instagram"></i></a>
         <a href="#" target="blank" class="social-icon"><i class="fab fa-codepen"></i></a>
         <a href="#" target="blank" class="social-icon"><i class="far fa-address-card"></i></a>

</div>

</div>
<div class="fon">
<div class="continer">
    <div class="row space-between">
        <div class="about-photo">
        <img class="about-photo-img" src="./img/DFEzMQqfPD8.jpg" alt="">
      </div>
                  <div class="about-content">
                       <h3 class="about-title">Кто я?</h3>
                       <p>Чем я занимаюсь?</p>
                       <h3 class="about-title">Чем могу помочь?</h3>
                       <p>Если вам необходимо сверстать макет, сделать лендинг или сайт визитку - то вы обратились по адресу</p>
                       <p> <strong>Я умею:</strong></p>

                       <ul class="about-list">
                           <li>верстать сайты,</li>
                           <li>делать адаптивную верстку для мобильных устройств,</li>
                           <li>оптимизирую графику и код сайта так чтобы он загружался быстрее,</li>
                           <li>могу делать формы обратной связи,</li>
                           <li>добавить панель управления на ваш сайт,</li>
                           <li>сделать сайт на систему управления WordPress</li>
                       </ul>

                  </div>
</div>
</div>
</div>

             <div class="section">
                     <div class="continer">
                    <div class="section-title-wrapper">
                    <h2 class="siction-title">Мои работы</h2>
                    <div class="subtitle">Верстка и создание сайтов</div>
          </div>
          <div class="row space-between">
              <div class="portfolio-item">
                  <img class="portfolio-item-img" src="/img/img1.jpg" alt="">
                  <div class="portfolio-item-title">
                      Фото сайт
                  </div>
                  <a target="blank" href="http://fdpenkin.ru/" class="portfolio-item-link">
                      Смотреть онлайн
                  </a>
              </div>
              <div class="portfolio-item">
                    <img class="portfolio-item-img" src="/img/img2.jpg" alt="">
                    <div class="portfolio-item-title">
                        Токарное производство
                    </div>
                    <a target="blank" href="https://xn--c1aeaerxjghk.xn--p1ai/" class="portfolio-item-link">
                        Смотреть онлайн
                    </a>
                </div>
                <div class="portfolio-item">
                        <img class="portfolio-item-img" src="/img/img3.jpg" alt="">
                        <div class="portfolio-item-title">
                            Сайт визитка
                        </div>
                        <a target="blank" href="#" class="portfolio-item-link">
                            Смотреть онлайн
                        </a>
                    </div>
          </div>
          </div>
          </div>


<div class="got">
          <div class="content-wrapper">
                <h1 class="title">Отправьте мне сообщение</h1>
                
                    <form method="POST" action="index.php"class="form-wrapper" >
    
                   
                  
                        <div class="form-group">
                           <label for="" class="form-label">Ваше имя</label>
                           <?php checkValue ($_POST['name'], 'Вы не ввели имя.'); ?>
                           <input 
                           name="name" 
                           class="form-input" 
                           placeholder="Введите имя"
                           value="<?php printPostValue($_POST ['name']); ?>"
                           >
                        </div>
    
    
                         <div class="form-group">
                           <label for="" class="form-label">Ваш E-mail</label>
                           <?php checkValue ($_POST['e-mail'], 'Вы не ввели e-mail.'); ?>
                           <input 
                           name="e-mail" 
                           class="form-input" 
                           placeholder="Введите  E-mail" 
                           value="<?php printPostValue($_POST ['e-mail']); ?>"
                           >
                         </div>
    
    
                         <div class="form-group">
                                 <label for="" class="form-label">Сообщение</label>
                                 <?php checkValue ($_POST['message'], 'Вы не ввели сообщение.'); ?>
                                 <textarea name= "message" placeholder="Напишите пару строк" class="form-message" name="" id="" cols="30" rows="10"><?php printPostValue($_POST ['message']); ?></textarea>
                                 </div>
    
    <input class="form-submit" type="submit" value="Отправить сообщение">
                    </form>
                
            </div>
    

        </div>


                <div class='foot' >

                     <footer class='foterr' >


<div class='yes' >© Дмитрий Пенкин 2020</div>

         <a href="https://vk.com/penkindimon" target="blank" class="social-icon1"><i class="fab fa-vk"></i></a>
         <a href="https://www.instagram.com/dm_penkin/" target="blank" class="social-icon1"><i class="fab fa-instagram"></i></a>
         <a href="#" target="blank" class="social-icon1"><i class="fab fa-codepen"></i></a>
         <a href="#" target="blank" class="social-icon1"><i class="far fa-address-card"></i></a>


                    </footer>



                </div>



</body>
</html>