<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormRow as BaseFormRow;

class FormRow extends BaseFormRow
{
    use Provider\ProvidesFormGroup;
}
