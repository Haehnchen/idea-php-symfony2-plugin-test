<?php

namespace espend\Form\TypeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class WeakFooType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('test', 'foo_type_alias', array(
            ''
        ));
    }

    public function getName()
    {
        return 'weak_return_alias';
    }
}