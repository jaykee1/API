<?php namespace api;

/**
 * The Bot API supports basic formatting for messages.
 * You can use bold and italic text, as well as inline links
 * and pre-formatted code in your bots' messages.
 *
 * Telegram clients will render them accordingly.
 * You can use either markdown-style or HTML-style formatting.
 *
 * Note:
 * that Telegram clients will display an alert to the user before
 * opening an inline link (‘Open this link?’ together with the full URL).
 *
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 */
abstract class ParseMode
{

    /**
     * To use this mode, pass HTML in the parse_mode field
     * when using sendMessage.
     *
     * The following tags are currently supported:
     * <b>bold</b>, <strong>bold</strong>
     * <i>italic</i>, <em>italic</em>
     * <a href="http://www.example.com/">inline URL</a>
     * <code>inline fixed-width code</code>
     * <pre>pre-formatted fixed-width code block</pre>
     */
    const HTML = 'HTML';

    /**
     * To use this mode, pass Markdown in the parse_mode field when
     * using sendMessage.
     *
     * Use the following syntax in your message:
     * *bold text*
     * _italic text_
     * [text](http://www.example.com/)
     * `inline fixed-width code`
     * ```text
     *  pre-formatted fixed-width code block
     * ```
     */
    const MARKDOWN = 'Markdown';
}