<?php
/**
 * Form element CAPTCHA class
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Copyright (c) Pi Engine http://www.xoopsengine.org
 * @license         http://www.xoopsengine.org/license New BSD License
 * @author          Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 * @package         Pi\Form
 * @subpackage      ELement
 */

namespace Pi\Form\Element;

use Pi;
use Zend\Form\Element\Captcha as ZendCaptcha;
use Zend\Captcha\AdapterInterface as CaptchaAdapter;

class Captcha extends ZendCaptcha
{
    /**
     * Retrieve captcha and instantiate it if not available
     *
     * @return null|CaptchaAdapter
     */
    public function getCaptcha()
    {
        if (!$this->captcha instanceof CaptchaAdapter) {
            $captcha = Pi::service('captcha')->load();
            $this->setCaptcha($captcha);
        }
        return $this->captcha;
    }
}
