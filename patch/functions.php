<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Create value-object \Magento\Framework\Phrase
 *
 * @return \Magento\Framework\Phrase
 */
function __()
{

    global $in_wordpress;

    $argc = func_get_args();

    $text = array_shift($argc);
    if (!empty($argc) && is_array($argc[0])) {
        $argc = $argc[0];
    }

    if ($in_wordpress)
    {
       return translate($argc[0],$argc[1]);
    }

    return new \Magento\Framework\Phrase($text, $argc);
}
