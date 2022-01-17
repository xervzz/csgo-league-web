<?php

$variables = [
    'DB_HOST' => 'knarklangare.se', // Your database ip address or host name.
    'DB_USERNAME' => 'mysql3', // Your database username.
    'DB_PASSWORD' => 'flanhare', // Your database password.
    'DB_PORT' => '3306', // Your database port.
    'DB_NAME' => 'get5', // Your database name.
    'STEAM_API_KEY' => '00F0A325A10A7457ED690A6D2871F745', // Your steam API key.
    'MATCHES_PAGE_LIMIT' => 10, // Page limit for matches page.
    'PLAYERS_PAGE_LIMIT' => 12, // Page limit for players page.
    'WEBSITE' => '/home', // Path to your main website
    'URL' => 'https://league.knarklangare.se', // The URL to the league panel
    'DISCORD' => 'https://discord.gg/PAQjTY9Yp3', // A permanent invite link to your Discord server

    'BASE_TITLE' => 'B3none', // This is the base title for your site.
    'DESCRIPTION' => 'Top quality PUGs and 10 mans.', // Meta description

    // This is a crude hack to store a keyed array in the env.
    // map_name,/path/to/map/from/web
    'MAPS' => [
        'de_austria,/img/maps/austria.jpg',
        'de_ancient,/img/maps/ancient.jpg',
        'de_cache,/img/maps/cache.jpg',
        'de_canals,/img/maps/canals.jpg',
        'de_cbble,/img/maps/cbble.jpg',
        'de_dust,/img/maps/dust.png',
        'de_shortdust,/img/maps/dust.png',
        'de_dust2,/img/maps/dust2.jpg',
        'de_mirage,/img/maps/mirage.jpg',
        'de_nuke,/img/maps/nuke.jpg',
        'de_shortnuke,/img/maps/nuke.jpg',
        'de_overpass,/img/maps/overpass.jpg',
        'de_train,/img/maps/train.jpg',
        'de_inferno,/img/maps/inferno.jpg',
    ],

    'RCON' => 'adminKwLxiZvZ', // Servers RCON password. (Must be the same on every server)
    'SERVERS' => [
        'knarklangare.se:27015'
        // Servers (this cannot be a URL)
        // 'ip:port'
    ],

    // You should also randomly generate an API key
    // Here's a link which will generate one for you
    // I'd suggest giving each API key a comment saying what it is
    // https://www.random.org/strings/?num=1&len=20&digits=on&upperalpha=on&loweralpha=on&unique=on&format=plain
    'API_KEYS' => [
        'j9ltviCL3Tks7B65EbWe',
        'FZ94YnmVfE6pY7OdYule',
        'ciNS63cIyvpomTnK6zAB',
        'WNnf3uC63QX2Volo1khq',

        // '', // Discord bot
        // '', // CS:GO Server
    ],
];

foreach ($variables as $key => $value) {
    if (is_array($value)) {
        $value = implode(',', $value);
    }

    putenv("$key=$value");
}
