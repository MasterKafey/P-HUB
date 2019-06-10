<?php

namespace AppBundle\Form\Type\Admin\SettingsModel\Creation;


use AppBundle\Entity\InventorySettingsModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSettingsModelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('size', IntegerType::class, array(
                'required' => false,
                'attr' => array(
                    'icon' => 'fas fa-sort-numeric-up',
                    'placeholder' => 'Taille d\'inventaire',
                )
            ))
            ->add('implantNumber', IntegerType::class, array(
                'required' => false,
                'attr' => array(
                    'icon' => 'fas fa-bolt',
                    'placeholder' => 'Nombre d\'implant',
                )
            ))
            ->add('weaponNumber', IntegerType::class, array(
                'required' => false,
                'attr' => array(
                    'icon' => 'fas fa-screwdriver',
                    'placeholder' => 'Nombre d\'arme',
                )
            ))
            ->add('itemNumber', IntegerType::class, array(
                'required' => false,
                'attr' => array(
                    'icon' => 'fas fa-cubes',
                    'placeholder' => 'Nombre d\'item',
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => InventorySettingsModel::class,
        ));
    }
}
