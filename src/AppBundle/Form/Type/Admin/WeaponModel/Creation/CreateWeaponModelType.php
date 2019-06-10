<?php


namespace AppBundle\Form\Type\Admin\WeaponModel\Creation;


use AppBundle\Entity\WeaponModel;
use AppBundle\Form\Type\Admin\File\Creation\CreateFileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateWeaponModelType extends AbstractType
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
            ->add('image', CreateFileType::class, array(
                'attr' => array(
                    'icon' => 'fas fa-user-circle'
                ),
                'required' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => WeaponModel::class
        ));
    }
}