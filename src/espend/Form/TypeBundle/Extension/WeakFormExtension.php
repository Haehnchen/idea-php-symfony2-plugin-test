<?php

namespace espend\Form\TypeBundle\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WeakFormExtension extends AbstractTypeExtension {

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'foo_weak' => '',
        ));
    }

    public function getExtendedType()
    {
        return 'file';
    }
}