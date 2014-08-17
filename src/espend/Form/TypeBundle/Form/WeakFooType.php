<?php

namespace espend\Form\TypeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class WeakFooType extends AbstractType
{

    private $foo = 'choice';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('test', 'foo_type_alias', array(
            ''
        ));

        $builder->add('test', null, array(
            'label' => 'foo'
        ));

        $builder->add('test', $this->foo, array(
            'choices' => array(),
        ));
    }

    public function getName()
    {
        return 'weak_return_alias';
    }
}