<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Departements;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('lastname', TextType::class, [
                'label' =>'Nom',
            ])
            ->add('firstname', TextType::class, [
                'label' =>'Prénom',
            ])
            ->add('siret')
            ->add('phone', TextType::class, [
                'label' =>'Téléphone',
            ])
            ->add('adress', TextType::class, [
                'label' =>'Adresse',
            ])
            
            // ->add('horaire', TextType::class, [
            //     'label' =>'Horaires',
            // ])

            // ->add('category', TextType::class, [
            //     'label' =>'Catégories',
            // ])

            ->add('site')
            ->add('cp', TextType::class, [
                'label' =>'Code Postal',
            ])
            ->add('ville')
            ->add('dep_id', EntityType::class, [
                // looks for choices from this entity
                'class' => Departements::class,
                'label' => 'Départements',

                // uses the User.username property as the visible option string
                'choice_label' => 'nom',

                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            ->add('cat', EntityType::class, [
                // looks for choices from this entity
                'class' => Category::class,
                'label' => 'Categories:',

                // uses the User.username property as the visible option string
                'choice_label' => 'produit',

                // used to render a select box, check boxes or radios
                 'multiple' => true,
                 'expanded' => true,
            ])

           ->add('save', SubmitType::class, [
               'attr' => ['class' => 'Save'],
           ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
