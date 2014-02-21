<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormButton as BaseHelper;

class FormButton extends BaseHelper
{
    public function render(ElementInterface $element, $buttonContent = null)
    {
        $inputClass         = 'btn btn-default';
        $classAttributes    = ($element->hasAttribute('class') ? $element->getAttribute('class') .' ' : '');
        $classAttributes    = $classAttributes . $inputClass;
        $element->setAttribute('class', $classAttributes);

        return parent::render($element, $buttonContent);
    }
}
