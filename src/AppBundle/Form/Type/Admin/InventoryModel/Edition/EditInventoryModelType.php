<?php

namespace AppBundle\Form\Type\Admin\InventoryModel\Edition;


use AppBundle\Entity\InventoryModel;
use AppBundle\Form\Type\Admin\SettingsModel\Edition\EditSettingsModelType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditInventoryModelType extends AbstractType
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
            ->add('settings', EditSettingsModelType::class, array(

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
