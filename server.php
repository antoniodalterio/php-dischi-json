<?php
$album = [
  [
    'name' => 'New Jersey',
    'release' => '1988',
    'author' => 'Bon Jovi',
    'src' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2c/Bon_Jovi_New_Jersey.jpg/220px-Bon_Jovi_New_Jersey.jpg'

  ],
  [
    'name' => 'Live at Wembley 86',
    'release' => '1982',
    'author' => 'Queen',
    'src' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Queen_Live_At_Wembley_%2786.png/220px-Queen_Live_At_Wembley_%2786.png'

  ],
  [
    'name' => "Ten's Summoner's Tales",
    'release' => '1993',
    'author' => 'Sting',
    'src' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c1/Sting_-_Ten_Summoner%27s_Tales.png/220px-Sting_-_Ten_Summoner%27s_Tales.png'

  ],
  [
    'name' => 'Steve Gadd band',
    'release' => '2018',
    'author' => 'Steve Gadd band',
    'src' => 'https://i.scdn.co/image/ab67616d00001e0203cea6838961201fb58bea4f'

  ],
  [
    'name' => 'Brave new World',
    'release' => '2000',
    'author' => 'Iron Maiden',
    'src' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg'

  ],
  [
    'name' => 'One more car, one more',
    'release' => '2002',
    'author' => 'Eric Clapton',
    'src' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/97/Eric_Clapton_OMCOMR.jpg/220px-Eric_Clapton_OMCOMR.jpg'

  ],
];

header('Content-Type: application/json');
echo json_encode($album);