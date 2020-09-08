## Introduction

[![Download](https://img.shields.io/packagist/dt/jaykee1/API.svg?style=for-the-badge)](https://github.com/jaykee1/API) [![Version](https://img.shields.io/badge/version-V1.1.0-yellogreen.svg?style=for-the-badge)](https://github.com/jaykee1/API) [![API Version](https://img.shields.io/badge/api%20version-V3.6-orange.svg?style=for-the-badge)](https://github.com/jaykee1/API) [![Stars](https://img.shields.io/github/stars/jaykee1/API.svg?style=for-the-badge&label=Like)](https://github.com/jaykee1/API)

The API is an HTTP-based interface created for developers keen on building bots for Telegram. To learn how to create and set up a bot, please consult [Telegram Introduction to Bots](https://core.telegram.org/bots) and [Bot FAQ](https://core.telegram.org/bots/faq).



### Requirements

1. PHP 5.5+
2. [Composer](https://getcomposer.org/) - Dependency Manager for PHP
3. [yiisoft/yii2](https://packagist.org/packages/yiisoft/yii2) - Yii PHP Framework Version 2
4. [Bot Token](https://core.telegram.org/bots#3-how-do-i-create-a-bot) - Telegram Bot API Access Token



### Installation

Install this package through [Composer](https://getcomposer.org/). Edit your project's `composer.json` file to require `"jaykee1/api": "*"` Or run this command in your command line:

```shell
composer require jaykee1/api
```



## Usage

The most common way of using this library is to create a new object from the API class, which allows you to access all of the authorized Telegram methods. By using the API class, events can also be used for you, which in the end of this article has been taught how to use it.

```php
$token = '<token>';
$api = new \api\base\API($token);
```



### Request

As we said, this library is an HTTP-based interface, and all requests are sent using the **POST** method. To create a simple request, you must create a new object from the Request class and send the input parameters such as the method name.

```php
$request = new \api\base\Request($token, [
    'method' => 'sendMessage',
    'chat_id' => '<chat_id>',
    'text' => 'Hello !!'
]);
```

You do not need to create your own requests in this way, you can use the same object you used to create the API class before. We've prepared for you all the methods in the documentation of the Telegram.

```php
$request = $api->sendMessage();
$request->chat_id = '<chat_id>';
$request->text = 'Hello !!';
```

At the end and after sending your desired parameters, your request object is ready to be sent to the Telegram.



### Response

After sending any request, you will receive a response, that is a Response object type. To send the request you created in the previous step, you must use the `send()` method and save the response in a variable.

```php
$response = $request->send();
```

According to the Telegram documentation about [sending the message](https://core.telegram.org/bots/api#sendmessage), after sending a message, you will receive a response like the Message object. In the response object you can use the `has<Field>()` method to verify a field and use `get<Field>()` to get the value of a field.

```php
if ($response instanceof \api\response\Message) {
    // request succeed
    if ($response->hasText()) 
        $text = $response->getText();
  
    // OR
    // if (isset($response->text)) 
    //     $text = $response->text;
}
```

> **NOTE**
>
> Making any request that directly uses the Request object will send us an array response, not an object.



### Methods

We will support all the methods already in the [Telegram documentation](https://core.telegram.org/bots/api#available-methods). You can access all of them through `src\methods` and edit them if you wish. All methods in the API are case-insensitive. We only support **POST** HTTP method and we will use  **`multipart/form-data`**  for passing files to Telegram server.



### Sending files

####  By file_id

If the file is already stored somewhere on the Telegram servers, you don't need to reupload it: each file object has a **file_id** field, simply pass this **file_id** as a parameter instead of uploading. There are **no limits** for files sent this way.

```php
$request = $api->sendPhoto();
$request->chat_id = '<chat_id>';
$request->caption = 'sent by file_id.';
$request->photo = 'AgADBAADXME4GxQXZAc6zkxv265UJKGYEAAEC';
$request->send();
```

> **NOTE**
>
> file_id is unique for each individual bot and can't be transferred from one bot to another.



#### By URL

Provide Telegram with an HTTP URL for the file to be sent. Telegram will download and send the file. 5 MB max size for photos and 20 MB max for other types of content.

- When sending by URL the target file must have the correct MIME type (e.g., `audio/mpeg` for [sendAudio](https://core.telegram.org/bots/api#sendaudio), etc.).
- In [sendDocument](https://core.telegram.org/bots/api#senddocument), sending by URL will currently only work for **gif**, **pdf** and **zip** files.
- To use [sendVoice](https://core.telegram.org/bots/api#sendvoice), the file must have the type `audio/ogg` and be no more than 1MB in size. 1–20MB voice notes will be sent as files.
- Other configurations may work but we can't guarantee that they will.

```php
$request = $api->sendPhoto();
$request->chat_id = '<chat_id>';
$request->caption = 'sent by url.';
$request->photo = 'http://example.com/photos/dogs.jpg';
$request->send();
```



#### By InputFile

This object represents the contents of a file to be uploaded. Must be posted using `multipart/form-data` in the usual way that files are uploaded via the browser.

```php
$request = $api->sendPhoto();
$request->chat_id = '<chat_id>';
$request->caption = 'sent by InputFile.';
$request->photo = new \api\InputFile('@photos/cats.jpg');
$request->send();
```



### Keyboards

Traditional chat bots can of course be taught to understand human language. But sometimes you want some more formal input from the user — and this is where **custom keyboards** can become extremely useful.

```php
$request->reply_markup = $markup;
```



#### Reply Keyboards

Whenever your bot sends a message, it can pass along a special keyboard with predefined reply options (see [ReplyKeyboardMarkup](https://core.telegram.org/bots/api/#replykeyboardmarkup)). Telegram apps that receive the message will display your keyboard to the user. Tapping any of the buttons will immediately send the respective command. This way you can drastically simplify user interaction with your bot. Telegram currently support text and emoji for your buttons. 

Here are some custom keyboard examples:

<p align="center">
    <img src="https://core.telegram.org/file/811140184/1/5YJxx-rostA/ad3f74094485fb97bd" title="Keyboard for a poll bot"  height="250px">
    <img src="https://core.telegram.org/file/811140880/1/jS-YSVkDCNQ/b397dfcefc6da0dc70" title="Keyboard for a calculator bot. Because you can." height="250px">
   <img src="https://core.telegram.org/file/811140733/2/KoysqJKQ_kI/a1ee46a377796c3961" title="Keyboard for a trivia bot"  height="250px">
</p>

```php
use api\keyboard\ReplyKeyboardMarkup;
use api\keyboard\button\KeyboardButton;

// Keyboard plan
$markup = new ReplyKeyboardMarkup();
$markup->resize_keyboard = true;

// button for request user location
$locationBtn = new KeyboardButton();
$locationBtn->text = 'Send your location';
$locationBtn->request_location = true;
$markup->addButton($locationBtn, 1);

// button for request user phone number
$NumberBtn = new KeyboardButton();
$NumberBtn->text = 'Send your phone number';
$NumberBtn->request_contact = true;
$markup->addButton($NumberBtn, 2);
```



#### Inline Keyboards

There are times when you'd prefer to do things without sending any messages to the chat. For example, when your user is changing settings or flipping through search results. In such cases you can use Inline Keyboards that are integrated directly into the messages they belong to.

Unlike with custom reply keyboards, pressing buttons on inline keyboards doesn't result in messages sent to the chat. Instead, inline keyboards support buttons that work behind the scenes: [callback buttons](https://core.telegram.org/bots/2-0-intro#callback-buttons), [URL buttons](https://core.telegram.org/bots/2-0-intro#url-buttons) and [switch to inline buttons](https://core.telegram.org/bots/2-0-intro#switch-to-inline-buttons).

<p align="center">
    <img src="https://core.telegram.org/file/811140217/1/NkRCCLeQZVc/17a804837802700ea4" title="Callback buttons in @music" height="170px">
    <img src="https://core.telegram.org/file/811140659/1/RRJyulbtLBY/ea6163411c7eb4f4dc" title="More callback buttons in @music" height="170px">
   <img src="https://core.telegram.org/file/811140999/1/2JSoUVlWKa0/4fad2e2743dc8eda04" title="A URL button"  height="170px">
</p>

> When callback buttons are used, your bot can update its existing messages (or just their keyboards) so that the chat remains tidy.

```php
use api\keyboard\InlineKeyboardMarkup;
use api\keyboard\button\InlineKeyboardButton;

// Keyboard plan
$markup = new InlineKeyboardMarkup();

// url button
$urlBtn = new InlineKeyboardButton();
$urlBtn->text = 'Go to Google';
$urlBtn->url = 'https://google.com';
$markup->addButton($urlBtn, 1, 1);

// callback button
$callbackBtn = new InlineKeyboardButton();
$callbackBtn->text = 'Callback Btn';
$callbackBtn->callback_data = 'onclickCallbackBtn';
$markup->addButton($callbackBtn, 1, 2);

// switch button
$switchBtn = new InlineKeyboardButton();
$switchBtn->text = 'Switch to ...';
$switchBtn->switch_inline_query = 'my query';
$markup->addButton($switchBtn, 2);
```



### Inline Mode

The following methods and objects allow your bot to work in [inline mode](https://core.telegram.org/bots/inline). Please see Telegram [Introduction to Inline bots](https://core.telegram.org/bots/inline) for more details. To enable this option, send the `/setinline` command to [@BotFather](https://t.me/botfather) and provide the placeholder text that the user will see in the input field after typing your bot’s name.

<p align="center">
   <img src="https://core.telegram.org/file/811140995/1/I-wubuXAnzk/2e39739d0ac6bd5458" title="Users can type the bot’s username in any chat, then type a query without sending any messages" width="400px">
</p>



#### Results

 `InlineQueryResult` object represents one result of an inline query. Telegram clients currently support results of the following 20 types and you can find them through `src\inline` and edit it.

```php
$article = new \api\inline\InlineQueryResultArticle();
$article->id = 'result_1';
$article->title = 'Article';
$article->description = 'This is a article result.';

$input = new \api\input\InputTextMessageContent();
$input->message_text = '*Hello* my friend.';
$input->parse_mode = \api\ParseMode::MARKDOWN;
$article->input_message_content = $input;

$results[] = $article;
```



#### Answer to Query

Use `answerInlineQuery` method to send answers to an inline query. On success, *True* is returned.

<p align="center">
    <img src="https://core.telegram.org/file/811140049/2/M2mzqjZoiUw/2d872f0df2aed182d6" title="Vertical scrolling" height="200px">
   <img src="https://core.telegram.org/file/811140592/2/P4-tFhmBsCg/57418af08f1a252d45" title="Horizontal scrolling"  height="200px">
</p>

> No more than **50** results per query are allowed.

```php
$getUpdates = $api->getUpdates();
$getUpdates->limit = 1;
$getUpdates->allowed_updates = ['inline_query'];
$updates = $getUpdates->send();

if (sizeof($updates) == 1) {
    $inlineQuery = $updates[0];
  
    $request = $api->answerInlineQuery();
    $request->results = $results;
    $request->inline_query_id = $inlineQuery->id;
    $response = $request->send();
}
```



### Helpers

#### Actions

Chat Actions let you broadcast a type of action depending on what the user is about to receive. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status).

```php
$request = $api->sendChatAction();
$request->chat_id = '<chat_id>';
$request->action = \api\Actions::TYPING;
$request->send();
```



#### Formatting

The Bot API supports basic formatting for messages. You can use bold and italic text, as well as inline links and pre-formatted code in your bots' messages. Telegram clients will render them accordingly. You can use either markdown-style or HTML-style formatting.

> **NOTE**
>
> Telegram clients will display an alert to the user before opening an inline link (‘Open this link?’ together with the full URL).

```php
$request = $api->sendMessage();
$request->text = '*bold text*';
$request->chat_id = '<chat_id>';
$request->parse_mode = \api\ParseMode::MARKDOWN;

$response = $request->send();
if ($response instanceof \api\response\Error) {
    // request failed
}
```



#### Events

For developers who want to make better and more effective, we also include events in this library so that we can have full access to all requests and responses received and errors.

API object has four Events:

- AfterSend - `API::EVENT_AFTER_SEND`
- BeforeSend - `API::EVENT_BEFORE_SEND`
- RequestFailed - `API::EVENT_REQUEST_FAILED`
- RequestSucceed - `API::EVENT_REQUEST_SUCCEED`

```php
use api\method\sendMessage;
use api\event\RequestFailed;

API::on(API::EVENT_REQUEST_FAILED, function (RequestFailed $event) {
    $error = $event->error;
    $method = $event->method;
    $code = $error->error_code;
    $description = $error->description;
    $message = '[' . $code . '] ' . $description;

    if ($method->has('chat_id')) {
        $token = $event->token;
        $chat_id = $method->get('chat_id');
        (new sendMessage($token))
            ->setChatId($chat_id)
            ->setText($message)
            ->send();
    }
});
```



## Disclaimer
This project and its author is neither associated or affiliated with Telegram in any way.



## License
This project is released under the [MIT License](https://github.com/botstan/API/blob/master/LICENSE).
