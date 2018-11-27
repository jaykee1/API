<?php namespace api;

/**
 * Chat Actions let you broadcast a type of action depending
 * on what the user is about to receive. The status is
 * set for 5 seconds or less (when a message arrives
 * from your bot, Telegram clients clear its typing
 * status).
 *
 * @author Jaykee <jaykee0418@gmail.com>
 * @since 1.0.0
 */
abstract class Actions
{

    /**
     * @var string
     */
    const TYPING = 'typing';

    /**
     * @var string
     */
    const UPLOAD_PHOTO = 'upload_photo';

    /**
     * @var string
     */
    const UPLOAD_VIDEO = 'upload_video';

    /**
     * @var string
     */
    const UPLOAD_AUDIO = 'upload_audio';

    /**
     * @var string
     */
    const UPLOAD_DOCUMENT = 'upload_document';

    /**
     * @var string
     */
    const FIND_LOCATION = 'find_location';

    /**
     * @var string
     */
    const RECORD_VIDEO = 'record_video';

    /**
     * @var string
     */
    const RECORD_VIDEO_NOTE  = 'record_video_note';

    /**
     * @var string
     */
    const UPLOAD_VIDEO_NOTE = 'upload_video_note';
}