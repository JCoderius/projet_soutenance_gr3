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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('title', TextType::class, [
                'label' =>'Titre*',
            ])
            ->add('lastname', TextType::class, [
                'label' =>'Nom*',
            ])
            ->add('firstname', TextType::class, [
                'label' =>'Prénom*',
            ])
            ->add('description', TextareaType::class, [
                'label' =>'Description*',
            ])
            ->add('siret', TextType::class, [
                'label' =>'Siret*',
            ])
            ->add('images', FileType::class, array(
                'label' => 'Images',
                'data_class' => null,
                'required' => false,
            ))
            // ->add('siret')
            ->add('phone', TextType::class, [
                'label' =>'Téléphone',
                'required' => false,
            ])
            ->add('adress', TextType::class, [
                'label' =>'Adresse*',
            ])

            // ->add('horaire', TextType::class, [
            //     'label' =>'Horaires',
            // ])

            // ->add('category', TextType::class, [
            //     'label' =>'Catégories',
            // ])

            ->add('site', TextType::class, [
              'label' => 'Site',
            ])
            ->add('cp', TextType::class, [
                'label' =>'Code Postal*',
            ])
            ->add('ville', TextType::class, [
                'label' =>'Ville*',
            ])
            ->add('dep_id', EntityType::class, [
                // looks for choices from this entity
                'class' => Departements::class,
                'label' => 'Département*',

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
               'attr' => ['class' => 'save'],
               'label' => 'Envoyer',
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
