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
    protected $inputErrorClass = '';

    public function render(ElementInterface $element)
    {
        if ($element->getAttribute('type') == 'button'
            || $element->getAttribute('type') == 'reset'
            || $element->getAttribute('type') == 'submit'
        ) {
            return parent::render($element);
        }

        return $this->getOpenTag($element) . parent::render($element) . $this->getCloseTag();
    }

    public function getOpenTag(ElementInterface $element)
    {
        switch ($element->getAttribute('type')) {
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

        if (count($element->getMessages()) > 0) {
            $errorClass = 'has-error';
            $class = $class ? $class .' '. $errorClass : $errorClass;
        }

        if (!$class) {
            return '<div>';
        }

        return '<div class="'. $class .'">';
    }

    public function getCloseTag()
    {
        return '</div>';
    }
}
