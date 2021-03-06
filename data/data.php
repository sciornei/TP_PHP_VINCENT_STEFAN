<?php
/***********************JEUX PC***********************/
$pc_games = array(
    'gtav' => array(
        'nom' => 'Grand Theft Auto V',
        'categorie' => 0,
        'prix' => 65,
        'photo' => 'gtav_pc.jpg',
        'dans_carousel' => true,
        'id' => 'gtav'
    ),
    'fo4' => array(
        'nom' => 'Fallout 4',
        'categorie' => 1,
        'prix' => 65,
        'photo' => 'fallout4_pc.jpg',
        'dans_carousel' => false,
        'id' => 'fo4'
    ),
    'overwatch' => array(
        'nom' => 'Overwatch',
        'categorie' => 2,
        'prix' => 50,
        'photo' => 'overwatch_pc.png',
        'dans_carousel' => true,
        'id' => 'overwatch'
    ),
);
/***********************JEUX PS4***********************/
$ps4_games = array(
    'darks3' => array(
        'nom' => 'Dark Souls 3',
        'categorie' => 1,
        'prix' => 65,
        'photo' => 'darksouls3_ps4.jpg',
        'dans_carousel' => true,
        'id' => 'darks3'
    ),
    'bbrn' => array(
        'nom' => 'Battleborn',
        'categorie' => 2,
        'prix' => 50,
        'photo' => 'battleborn_ps4.jpg',
        'dans_carousel' => false,
        'id' => 'bbrn'
    ),
    'ratchet' => array(
        'nom' => 'Ratchet & Clank',
        'categorie' => 0,
        'prix' => 50,
        'photo' => 'ratchet_clank_ps4.jpg',
        'dans_carousel' => true,
        'id' => 'ratchet'
    ),
);
/***********************JEUX XBOX ONE***********************/
$xbox_games = array(
    'fcp'=> array(
        'nom' => 'Farcry Primal',
        'categorie' => 1,
        'prix' => 65,
        'photo' => 'farcryprimal_xbox.jpg',
        'dans_carousel' => true,
        'id' => 'fcp'
    ),
    'nuns4' => array(
        'nom' => 'Naruto Ultimate Ninja Storm 4',
        'categorie' => 2,
        'prix' => 50,
        'photo' => 'naruto_xbox.jpg',
        'dans_carousel' => false,
        'id' => 'nuns4'
    ),
    'division' => array(
        'nom' => 'The Division',
        'categorie' => 0,
        'prix' => 60,
        'photo' => 'thedivision_xbox.jpg',
        'dans_carousel' => true,
        'id' => 'division'
    ),
);
/***********************JEUX WII U***********************/
$wii_games = array(
    'mariot' => array(
        'nom' => 'Mario Tennis',
        'categorie' => 3,
        'prix' => 50,
        'photo' => 'mariotennis_wii.jpg',
        'dans_carousel' => true,
        'id' => 'mariot'
    ),
    'jd2k16' => array(
        'nom' => 'Just Dance 2016',
        'categorie' => 3,
        'prix' => 45,
        'photo' => 'justdance2016_wii.jpg',
        'dans_carousel' => false,
        'id' => 'jd2k16'
    ),
    'zeldahd' => array(
        'nom' => 'Zelda HD',
        'categorie' => 0,
        'prix' => 50,
        'photo' => 'zelda_wii.jpg',
        'dans_carousel' => true,
        'id' => 'zeldahd'
    ),

);
/*LES CATÉGORIES*/
$categories = array(
    "pc" => array(
        "nom" => "PC",
        "id" =>$pc_games
    ),
    "ps4" => array(
        "nom" => "Playstation4",
        "id" =>$ps4_games
    ),
    "xbox" => array(
        "nom" => "Xbox",
        "id" =>$xbox_games
    ),
    "wii" => array(
        "nom" => "Wii",
        "id" =>$wii_games
    ),
);
//PRIONSS