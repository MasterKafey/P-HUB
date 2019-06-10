<?php

namespace AppBundle\Form\Type\Admin\InventoryModel\Creation;

use AppBundle\Entity\InventoryModel;
use AppBundle\Form\Type\Admin\SettingsModel\Creation\CreateSettingsModelType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateInventoryModelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'icon' => 'fas fa-id-card',
                    'placeholder' => 'Nom'
                )
            ))
            ->add('settings', CreateSettingsModelType::class, array(
                
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => InventoryModel::class,
        ));
    }
}
