<?php

namespace AppBundle\Form\Type\Admin\Wound\Creation;

use AppBundle\Entity\Wound;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateWoundType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Nom',
                    'icon' => 'fas fa-id-card'
                )
            ))
            ->add('description', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Description',
                    'icon' => 'fas fa-id-card'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Wound::class
        ));
    }
}
