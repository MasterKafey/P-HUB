<?php

namespace AppBundle\Form\Type\Admin\PersonageModel\Edition;


use AppBundle\Entity\PersonageModel;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditPersonageModelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', TextType::class)
            ->add('age', IntegerType::class)
            ->add('money', IntegerType::class)
            ->add('reputation', IntegerType::class)
            ->add('honor', IntegerType::class)
            ->add('glory', IntegerType::class)
            ->add('corruption', IntegerType::class)
            ->add('xp', IntegerType::class)
            ->add('special', CheckboxType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => PersonageModel::class
        ));
    }
}
