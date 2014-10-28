<?php

namespace espend\Form\TypeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FooType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // should know "multiple"
        $builder->add('test', new FileType(), array(
            'multiple' => false,
        ));

        $builder->add('test', 'file', array(
            'multiple' => false,
        ));

        // translations, on field
        $builder->add('test', new FileType(), array(
            'translation_domain' => 'WeakYaml',
            'label' => 'yaml_weak.symfony.great',
        ));

        // translations, on default
        $builder->add('test', new FileType(), array(
            'label' => 'yaml_weak.symfony.great',
            'help_block' => 'yaml_weak.symfony.great',
        ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'translation_domain' => 'WeakYaml',
        ));
    }

    public function getName()
    {
        return 'foo_type_alias';
    }
}