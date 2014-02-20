<?php
namespace PrxBootstrap\Form\View\Helper\Provider;

use Zend\Form\ElementInterface;

trait ProvidesFormControl
{
    public function render(ElementInterface $element)
    {
        $class = 'form-control';
        $classAttribute = $element->getAttribute('class');
        if (!empty($classAttribute)) {
            $class .= ' '. $classAttribute;
        }
        $element->setAttribute('class', $class);

        return parent::render($element);
    }
}
