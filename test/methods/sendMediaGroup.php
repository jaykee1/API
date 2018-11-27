<?php

use api\InputFile;
use api\response\Error;
use api\method\sendMediaGroup;
use api\media\InputMediaPhoto;

$album = [
    new InputMediaPhoto([
        'caption' => 'sent by file id',
        'media' => 'AgADBAADg6sxG8UOyFB7g58NMLgVu-tA9RkABE'
    ]),
    new InputMediaPhoto([
        'caption' => 'sent by url',
        'media' => 'http://example.com/photos/dogs.jpg'
    ]),
    new InputMediaPhoto([
        'caption' => 'sent by InputFile',
        'media' => new InputFile('@photos/cats.jpg')
    ])
];

$response = (new sendMediaGroup('<token>'))
    ->setChatId('<chat_id>')
    ->setMedia($album)
    ->send();

if ($response instanceof Error) {
    // request failed
}