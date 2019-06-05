<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles',ChoiceType::class, array(
                'choices'  => [
                    'Admin' => 'ROLE_ADMIN',
                    'User' => 'ROLE_USER',
                ],
                'expanded' => true,
                'multiple' => true
            ))
            //->add('password')
            //->add('token')
            ->add('title', TextType::class, [
                'label' =>'Titre',
            ])
            ->add('lastname', TextType::class, [
                'label' =>'Nom',
            ])
            ->add('firstname', TextType::class, [
                'label' =>'Prénom',
            ])
            ->add('description', TextareaType::class, [
                'label' =>'Description',
            ])
            ->add('title', TextType::class, [
                'label' =>'Titre',
            ])
            ->add('siret')
            ->add('phone', TextType::class, [
                'label' =>'Téléphone',
                'required' => false,

            ])
            ->add('adress', TextType::class, [
                'label' =>'Adresse',
            ])
            ->add('cp', TextType::class, [
                'label' =>'Code Postal',
            ])
            ->add('ville', TextType::class, [
                'label' =>'Ville',
            ])
            // ->add('horaire', TextType::class, [
            //     'label' =>'Horaires',
            // ])

            // ->add('category')

            // ->add('site', TextType::class, [
            //     'label' =>'Site',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
