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
        return $this->getOpenTag($element) . parent::render($element) . $this->getCloseTag();
    }

    public function getOpenTag(ElementInterface $element)
    {
        $class = 'form-group';

        if (
            $element instanceof Button ||
            $element instanceof MultiCheckbox ||
            $element instanceof Radio ||
            $element instanceof Submit
        ) {
            $class = '';
        } elseif ($element instanceof Checkbox) {
            $class = 'checkbox';
        }

        $errorClass = $this->getInputErrorClass();

        if (count($element->getMessages()) > 0 && !empty($errorClass)) {
            $class .= ' '. $errorClass;
        }

        return '<div class="'. $class .'">';
    }

    public function getCloseTag()
    {
        return '</div>';
    }
}
