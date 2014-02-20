<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormMultiCheckbox as BaseHelper;

class FormMultiCheckbox extends BaseHelper
{
    public function render(ElementInterface $element)
    {
        $this->setSeparator('</div><div class="checkbox">');
        return '<div class="checkbox">'. parent::render($element) .'</div>';
    }
}
