<?php
declare(strict_types=1);


$languages = [
  'swe' => [
    'titleS1' => 'Du är speciell.',
    'titleSLight' => ' FastSecurity, FS.1.0',
    'textS1' => 'Många tycker fortfarande att Saab gör bilar, och det är rätt. Vi är på väg för framtiden. Saab är mycket levande och väl, som ett av världens mest innovativa företag. Och nu är vi stolta över att presentera vår bil för framtiden: FastSecurity, FS.',
    'titleF' => 'FastSecurity',
    'titleF2' => 'Här är våra funktioner för framtiden',
    'feature1' => 'Välj färg',
    'feature2' => 'Exteriör',
    'feature2' => 'Interiör',
    'titleS2' => 'Historia',
    'textS2' => 'Saab började livet 1937 i Trollhättan som en flygplansproducent för att ge flygplan till det svenska flygvapnet, precis som Europa stallade sig för ett annat krig. Bolagets fulla namn var Svenska Aeroplan Aktiebolaget, vilket gav världen akronym Saab. Huvudkontoret flyttade snart till den svenska universitetsstaden Linköping, där detta massiva företag har sin största verksamhet idag. Det var där 1945, bland olika drömmar om diversifiering, att ett projekt för att utveckla bilar började. Idag börjar vi ett nytt kapitel. Snabb säkerhet, FS. Är framtiden bil.',
    'textFooter' => 'footer'
  ],
  'eng' => [
    'titleS1' => 'You are special.',
    'titleSLight' => ' FastSecurity, FS.1.0',
    'textS1' => 'Many people still think Saab makes cars, and that is correct. We are on the go for the future. Saab is very much alive and well, as one of the world’s most innovative companies. And now we are proud to present our car for the future: FastSecurity, FS.',
    'titleF' => 'FastSecurity',
    'titleF2' => 'Here are our features for the future',
    'feature1' => 'Choose colour',
    'feature2' => 'Exterior',
    'feature2' => 'Interior',
    'titleS2' => 'History',
    'textS2' => 'Saab started life in 1937 in Trollhättan, Sweden, as an aeroplane manufacturer to provide aircraft for the Swedish Air Force, just as Europe was steeling itself for another war. The company\'s full name was Svenska Aeroplan Aktiebolaget, giving the world the acronym Saab. The head office soon moved to the Swedish university town of Linköping, where this massive company has its largest operation today.',
    'textFooter' => 'footer'
  ],
];

  if(isset($_GET['lang'])) {
    $lang = trim(filter_var($_GET['lang'], FILTER_SANITIZE_STRING));
  } else {
    $lang = 'eng';
  };

// Saab started life in 1937 in Trollhättan, Sweden, as an aeroplane manufacturer to provide aircraft for the Swedish Air Force, just as Europe was steeling itself for another war. The company\'s full name was Svenska Aeroplan Aktiebolaget, giving the world the acronym Saab. The head office soon moved to the Swedish university town of Linköping, where this massive company has its largest operation today. It was there in 1945, amid various dreams of diversification, that a project to develop motor cars got underway. Today we are starting a new chapter. Fast Security, FS. Is the future car.'
