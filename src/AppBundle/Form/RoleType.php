<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 10/11/2018
 * Time: 13:49
 */

namespace AppBundle\Form;

use AppBundle\Entity\Role;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotNull;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Name',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotNull()
                ]
            ])
            ->add('accesses',CollectionType::class,array(
                'entry_type' => AccessType::class,
                'entry_options' => [
                    'label' => false
                ],
                'label' => false,
                'delete_empty' => true,
                'required' => false,
                'by_reference' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Role::class
        ));
    }
}