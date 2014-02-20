<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\Element\Button;
use Zend\Form\Element\Checkbox;
use Zend\Form\Element\MultiCheckbox;
use Zend\Form\Element\Radio;
use Zend\Form\Element\Submit;
use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormRow as BaseFormRow;

class FormRow extends BaseFormRow
{
    public function render(ElementInterface $element)
    {
        if (
            $element instanceof Button ||
            $element instanceof MultiCheckbox ||
            $element instanceof Radio ||
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
