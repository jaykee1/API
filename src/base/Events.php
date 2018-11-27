<?php namespace api\base;

use yii\base\Event;

/**
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 */
trait Events
{

    /**
     * Triggers a API class event.
     * This method will cause invocation of event handlers that are
     * attached to the named event for the specified API.
     *
     * @param string $name
     * @param Event $event
     */
    public static function trigger($name, $event = null)
    {
        $class = self::className();
        Event::trigger($class, $name, $event);
    }

    /**
     * Detaches an event handler from a API event.
     * This method is the opposite of [[on()]].
     *
     * @param string $name
     * @param callable $handler
     */
    public static function off($name, $handler = null)
    {
        $class = self::className();
        Event::off($class, $name, $handler);
    }

    /**
     * Attaches an event handler to a API event.
     * When a API event is triggered, event handlers called
     * your handler.
     *
     * @param string $name
     * @param callable $handler
     * @param mixed $data
     */
    public static function on($name, $handler, $data = null)
    {
        $class = self::className();
        Event::on($class, $name, $handler, $data);
    }
}