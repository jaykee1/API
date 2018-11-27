<?php namespace app\commands;

use api\base\API;
use api\response\Error;
use api\response\Update;
use api\response\Message;
use yii\console\Controller;
use api\keyboard\ReplyKeyboardMarkup;
use api\keyboard\button\KeyboardButton;

/**
 * Run HelloBot in command line by getUpdates method.
 *
 * Class BotController
 * @package app\commands
 */
class BotController extends Controller
{

    /**
     * @var string
     */
    public $token;

    /**
     * @var API
     */
    private $api;

    /**
     * @void
     */
    public function actionRun()
    {
        START:
        if ($this->token == null) {
            $tokenMessage = "Enter your bot token:";
            $this->token = $this->prompt($tokenMessage, [
                'require' => true,
                'pattern' => '/(\d+)\:(.*)/'
            ]);
        }

        $token = $this->token;
        echo "Wait for establishing by $token ... \n\n";
        $this->api = $api = new API($token);

        $user = $api->getMe()->send();
        if ($user instanceof Error) {
            echo "Token isn't exists, try another one.\n\n";
            $this->token = null;
            goto START;
        }

        $link = 'https://t.me/' . $user->username;
        echo "- ID: $user->id \n";
        echo "- Full Name: $user->first_name \n";
        echo "- Username: @$user->username | $link \n";
        echo "- Token: $token \n\n";

        $requestMessage = "Sleep time:";
        $sleepTime = $this->prompt($requestMessage, [
            'default' => 0.33,
            'pattern' => '/\d+/',
            'error' => "enter integer value. \n"
        ]);

        $update_id = null;
        $getUpdates = $api->getUpdates();
        $getUpdates->allowed_updates = ['message'];

        while (true) {
            // next updates
            if (is_int($update_id)) {
                $getUpdates->setOffset($update_id + 1);
            }

            $updates = $getUpdates->send();
            foreach ($updates as $update) {
                $this->process($update);
                $update_id = $update->update_id;
                echo "Bot had processed #UID_$update_id. \n";
            }

            sleep($sleepTime);
        }
    }

    /**
     * @param Update $update
     */
    private function process(Update $update)
    {
        $text = null;
        $message = $update->message;
        if ($message->hasText()) {
            $text = $message->text;
        }

        switch ($text) {
            case '/start':
                $this->startCommand($message);
                break;

            case 'Hi':
            case 'Hello':
                $this->helloCommand($message);
                break;

            default:
                $this->unknownCommand($message);
                break;
        }
    }

    /**
     * @param Message $message
     */
    private function startCommand(Message $message)
    {
        $api = $this->api;
        $chat_id = $message->chat->id;
        $message_id = $message->message_id;

        $hi = new KeyboardButton('Hi');
        $hello = new KeyboardButton('Hello');

        $markup = new ReplyKeyboardMarkup();
        $markup->addButton($hi);
        $markup->addButton($hello);
        $markup->setResizeKeyboard(true);

        $res = $api->sendMessage()
            ->setText('Hello')
            ->setChatId($chat_id)
            ->setReplyMarkup($markup)
            ->setReplyToMessageId($message_id)
            ->send();

        if ($res instanceof Error) {
            // failed request
        }
    }

    /**
     * @param Message $message
     */
    private function helloCommand(Message $message)
    {
        $api = $this->api;
        $chat_id = $message->chat->id;

        $api->sendMessage()
            ->setChatId($chat_id)
            ->setText('Nice to meet you')
            ->send();
    }

    /**
     * @param Message $message
     */
    private function unknownCommand(Message $message)
    {
        $text = null;
        $api = $this->api;
        $chat_id = $message->chat->id;
        $message_id = $message->message_id;

        // text message
        if ($message->hasText()) {
            $api->sendMessage()
                ->setReplyToMessageId($message_id)
                ->setChatId($chat_id)
                ->setText('Cool')
                ->send();
        }

        // other type
        else {
            $api->sendMessage()
                ->setChatId($chat_id)
                ->setText('I understand only text messages')
                ->send();
        }
    }
}