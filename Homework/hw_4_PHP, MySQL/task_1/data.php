<?php
return [
    'about' => [
        'name' => 'Иннокентий',
        'profi' => 'Первооткрыватель',
        'city' => 'СПб, Россия',
        'email' => 'cat@mail.com',
        'phone' => '89117777777',
        'age' => '2024-1985',
        'days' => (2024-1985)*365
    ],

    // формируем массив с навыками

    $skills = [
        'skill_name' => ['Adobe Photoshop', 'Photography', 'Illustrator', 'Media']
        'level' => [91, 83, 70, 55]
    ],
    

    $experiance = [
        [
            'name' => 'Первооткрыватель квартир',
            'dateStart' => 'Январь 2023',
            'dateEnd' => 'Текущее время',
            'description' => 'Энергетический эксперт с многолетним стажем. Выезжал на различные объекты в городе и области.
            Хорошо знает жилищный фонд. В своей работе учитывает особенности планировки и этажность. 
            Прорабатывает глубинные слои энергетики, хорошо чувствует астральные сущности и мягко устраняет их. 
            Оставляет светлый, легкий, позитивный фон. Гарантия.',
        ],
        [
            'name' => 'Тестировщик',
            'dateStart' => 'Апрель 2021',
            'dateEnd' => 'Декабрь 2022',
            'description' => 'Cерьезный умный кот, ответственно подходит к выполнению любых хозяйских задумок, 
            лично тестирует спальные места, сантехнику и прочее. Первым открывал две квартиры, карма хорошая, жильцы не жалуются.',
        ],
        [
            'name' => 'Прораб',
            'dateStart' => 'Июль 2021',
            'dateEnd' => 'Апрель 2022',
            'description' => 'Имею грандиозный опыт в приеме работ по строительству взлетно-посадочной полосы и рулежных дорог 
            на объекте федерального значения- аэропорт Стригино. Стрессоустойчивость, умение взаимодействовать с людьми',
        ],
    ],
];
?>


<?php
$name = 'Иннокентий';
$profi = 'Первооткрыватель';
$city = 'СПб, Россия';
$email = 'cat@mail.com';
$phone = 89117777777;
$age = 2024-1985;
$days = (2024-1985)*365;


  
// формируем массив с навыками и уровнем владения в процентах

$skills = [
        'skill_name' => ['Adobe Photoshop', 'Photography', 'Illustrator', 'Media'],
        'level' => [91, 83, 70, 55]
    ];


    
$experiance = [
    [
        'name' => 'Первооткрыватель квартир',
        'dateStart' => 'Январь 2023',
        'dateEnd' => 'Текущее время',
        'description' => 'Энергетический эксперт с многолетним стажем. Выезжал на различные объекты в городе и области.
         Хорошо знает жилищный фонд. В своей работе учитывает особенности планировки и этажность. 
         Прорабатывает глубинные слои энергетики, хорошо чувствует астральные сущности и мягко устраняет их. 
         Оставляет светлый, легкий, позитивный фон. Гарантия.',
    ],
    [
        'name' => 'Тестировщик',
        'dateStart' => 'Апрель 2021',
        'dateEnd' => 'Декабрь 2022',
        'description' => 'Cерьезный умный кот, ответственно подходит к выполнению любых хозяйских задумок, 
        лично тестирует спальные места, сантехнику и прочее. Первым открывал две квартиры, карма хорошая, жильцы не жалуются.',
        
    ],
    [
        'name' => 'Прораб',
        'dateStart' => 'Июль 2021',
        'dateEnd' => 'Апрель 2022',
        'description' => 'Имею грандиозный опыт в приеме работ по строительству взлетно-посадочной полосы и рулежных дорог 
        на объекте федерального значения- аэропорт Стригино. Стрессоустойчивость, умение взаимодействовать с людьми',
    ],
]; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profi; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>
            <p><i class="fa fa-hourglass-half fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $age; ?> лет (<?php echo $days; ?> дней)</p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <p><?php echo $skills['skill_name'][0]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][0]; ?>%"><?php echo $skills['level'][0]; ?></div>
            </div>
            <p><?php echo $skills['skill_name'][1]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][1]; ?>%">
                <div class="w3-center w3-text-white"><?php echo $skills['level'][1]; ?></div>
              </div>
            </div>
            <p><?php echo $skills['skill_name'][2]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][2]; ?>%"><?php echo $skills['level'][2]; ?></div>
            </div>
            <p><?php echo $skills['skill_name'][3]; ?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][3]; ?>%"><?php echo $skills['level'][3]; ?></div>
            </div>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
                 <?php for ($i = 0; $i < count($experiance); $i++):?>
                     <div class="w3-container">
                     <h5 class="w3-opacity"><b> <?php echo $experiance[$i]['name']; ?></b></h5>
                     <h6 class="w3-text-teal">
                     <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                     <?php echo $experiance[$i]['dateStart']; ?> -  
                     <?php if ($i == 0): ?>
                        <span class="w3-tag w3-teal w3-round">
                            <?php echo $experiance[$i]['dateEnd']; ?>
                        </span>
                     <?php else: ?>
                        <?php echo $experiance[$i]['dateEnd']; ?> 
                     <?php endif; ?> 
                     </h6> 
                     <p><?php echo $experiance[$i]['description']; ?></p>
                     <hr>
                     </div>
                 <?php endfor; ?>
                </div>
              <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>