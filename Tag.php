<?php
/**
 * Copyright (c) 2016.
 * @author Nikola Tesic (nikolatesic@gmail.com)
 */

/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 12/10/2016
 * Time: 12:00 AM
 */

namespace ntesic\Helpers;

use \Phalcon\Tag as BaseTag;

class Tag extends BaseTag
{

    /**
     * @param $name
     * @param $content
     * @param null $options
     * @return string
     */
    public static function tag($name, $content, $options = null)
    {
        $output = '';
        $output = self::tagHtml($name,$options);
        $output .= $content;
        $output .= self::tagHtmlClose($name, true);
        return $output;
    }

    /**
     * Encodes special characters into HTML entities.
     * @param string $content the content to be encoded
     * @param boolean $doubleEncode whether to encode HTML entities in `$content`. If false,
     * HTML entities in `$content` will not be further encoded.
     * @return string the encoded content
     * @see decode()
     * @see http://www.php.net/manual/en/function.htmlspecialchars.php
     */
    public static function encode($content, $doubleEncode = true)
    {
        return htmlspecialchars($content, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', $doubleEncode);
    }
}