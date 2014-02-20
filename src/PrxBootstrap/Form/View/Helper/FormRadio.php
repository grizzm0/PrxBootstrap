<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormRadio as BaseHelper;

class FormRadio extends BaseHelper
{
    public function render(ElementInterface $element)
    {
        $this->setSeparator('</div><div class="radio">');
        return '<div class="radio">'. parent::render($element) .'</div>';
    }
}
