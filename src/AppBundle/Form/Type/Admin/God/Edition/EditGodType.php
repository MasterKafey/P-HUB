<?php

namespace AppBundle\Form\Type\Admin\God\Edition;

use AppBundle\Entity\God;
use AppBundle\Form\Type\Admin\File\Creation\CreateFileType;
use AppBundle\Form\Type\Admin\File\Edition\EditFileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditGodType extends AbstractType
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
                )
            ))
            ->add('image', EditFileType::class, array(
                'required' => false,
                'attr' => array(
                    'icon' => 'fas fa-user-circle',
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => God::class,
            'validation_groups' => array('edition'),
        ));
    }
}
