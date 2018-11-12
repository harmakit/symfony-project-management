<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 10/11/2018
 * Time: 13:49
 */

namespace AppBundle\Form;


use AppBundle\Entity\Access;
use AppBundle\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotNull;

class AccessType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => false,
                'choices' => [
                    'Full Access' => Access::READ_WRITE_DELETE,
                    'Edit Access' => Access::READ_WRITE,
                    'Read Access' => Access::READ
                ],
                'attr' => [
                    'placeholder' => 'Username',
                    'class' => 'form-control',
                    'style' => 'width: 80%'
                ],
                'constraints' => [
                    new NotNull()
                ]
            ])
            ->add('projects', EntityType::class, [
                'class' => Project::class,
                'label' => false,
                'multiple' => true,
                'choice_label' => 'name',
                'attr' => [
                    'placeholder' => 'Projects',
                    'class' => 'form-control',
                    'style' => 'width: 80%'
                ],
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Access::class
        ));
    }
}