<?php
namespace PrxBootstrap\Form\View\Helper\Provider;

use Zend\Form\Element\Checkbox;
use Zend\Form\Element\Submit;
use Zend\Form\ElementInterface;
use Zend\Form\Element\Button;

trait ProvidesFormGroup
{
    public function render(ElementInterface $element)
    {
        if (
            $element instanceof Button ||
            $element instanceof Submit
        ) {
            return parent::render($element);
        }

        if ($element instanceof Checkbox) {
            return '<div class="checkbox">'. parent::render($element) .'</div>';
        }

        return '<div class="form-group">'. parent::render($element) .'</div>';
    }
}
