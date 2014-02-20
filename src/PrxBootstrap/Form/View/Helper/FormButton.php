<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormButton as BaseHelper;

class FormButton extends BaseHelper
{
    public function render(ElementInterface $element, $buttonContent = null)
    {
        $class = 'btn btn-default';
        $classAttribute = $element->getAttribute('class');
        if (!empty($classAttribute)) {
            $class .= ' '. $classAttribute;
        }
        $element->setAttribute('class', $class);

        return parent::render($element, $buttonContent);
    }
}
