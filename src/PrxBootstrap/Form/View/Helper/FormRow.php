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
    protected $inputErrorClass = 'has-error';

    public function render(ElementInterface $element)
    {
        return $this->getOpenTag($element) . parent::render($element) . $this->getCloseTag($element);
    }

    public function getOpenTag(ElementInterface $element)
    {
        switch ($element->getAttribute('type')) {
            case 'button':
            case 'submit':
                return null;
            case 'multi_checkbox':
            case 'radio':
                $class = null;
                break;
            case 'checkbox':
                $class = 'checkbox';
                break;
            default:
                $class = 'form-group';
        }

        $errorClass = $this->getInputErrorClass();

        if (count($element->getMessages()) > 0 && !empty($errorClass)) {
            $class = $class ? $class .' '. $errorClass : $errorClass;
        }

        if (!$class) {
            return '<div>';
        }

        return '<div class="'. $class .'">';
    }

    public function getCloseTag(ElementInterface $element)
    {
        switch ($element->getAttribute('type')) {
            case 'button':
            case 'submit':
                return null;
        }

        return '</div>';
    }
}
