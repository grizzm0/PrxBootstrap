<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormSubmit as BaseHelper;

class FormSubmit extends BaseHelper
{
    public function render(ElementInterface $element)
    {
        $inputClass         = 'btn btn-default';
        $classAttributes    = ($element->hasAttribute('class') ? $element->getAttribute('class') .' ' : '');
        $classAttributes    = $classAttributes . $inputClass;
        $element->setAttribute('class', $classAttributes);

        return parent::render($element);
    }
}
