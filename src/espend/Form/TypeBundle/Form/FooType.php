<?php

namespace espend\Form\TypeBundle\Form;

use Symfony\Component\Form\AbstractType;

class FooType extends AbstractType
{
    public function getName()
    {
        return 'foo_type_alias';
    }
}