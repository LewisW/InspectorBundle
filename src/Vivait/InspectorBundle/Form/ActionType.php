<?php

namespace Vivait\InspectorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

abstract class ActionType extends AbstractType
{
    protected $dataClass = 'Vivait\InspectorBundle\Entity\Action';
    protected $label     = 'Action';

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
          '_type',
          'hidden',
          array(
            'data'   => $this->getName(),
            'mapped' => false
          )
        );

        $builder->add(
          '_label',
          'hidden',
          array(
            'data'   => $this->label,
            'mapped' => false
          )
        );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
          array(
            'data_class' => $this->dataClass,
            'model_class' => $this->dataClass
          )
        );
    }
}
