<?php

namespace AppBundle\Form\Type\Admin\PersonageModel\Creation;


use AppBundle\Entity\PersonageModel;
use AppBundle\Form\Type\Admin\File\Creation\CreateFileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreatePersonageModelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Nom',
                    'icon' => 'fas fa-id-card'
                ),
            ))
            ->add('age', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Age',
                    'icon' => 'fas fa-id-card',
                ),
            ))
            ->add('money', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Crédit',
                    'icon' => 'fas fa-money-bill-wave',
                ),
            ))
            ->add('reputation', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Réputation',
                    'icon' => 'fas fa-star'
                ),
            ))
            ->add('honor', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Honeur',
                    'icon' => 'fas fa-sun'
                ),
            ))
            ->add('glory', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Gloire',
                    'icon' => 'fas fa-award'
                ),
            ))
            ->add('corruption', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Corruption',
                    'icon' => 'fas fa-spider'
                ),
            ))
            ->add('xp', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Expérience',
                    'icon' => 'fas fa-star-half-alt'
                ),
            ))
            ->add('avatar', CreateFileType::class, array(
                'attr' => array(
                    'icon' => 'fas fa-user-circle',
                    'label' => 'Avatar'
                )
            ))
            ->add('special', CheckboxType::class, array(
                'label' => 'Spécial',
                'attr' => array(
                    'icon' => 'fas fa-user-tag',
                    'class' => 'custom-checkbox',
                ),
                'required' => false,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => PersonageModel::class,
        ));
    }
}
