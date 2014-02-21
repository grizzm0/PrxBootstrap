<?php
namespace PrxBootstrap\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\FormLabel as BaseHelper;

class FormLabel extends BaseHelper
{
    public function openTag($attributesOrElement = null)
    {
        $attributes = ['class' => 'control-label'];

        if (null === $attributesOrElement) {
            $attributesOrElement = $attributes;
        }

        if (is_array($attributesOrElement)) {
            $attributesOrElement = array_merge($attributesOrElement, $attributes);
        }

        if ($attributesOrElement instanceof ElementInterface) {
            if ($attributesOrElement->getLabelAttributes()) {
                $attributes = array_merge($attributesOrElement->getLabelAttributes(), $attributes);
            }

            $attributesOrElement->setLabelAttributes($attributes);
        }

        return parent::openTag($attributesOrElement);
    }
}
