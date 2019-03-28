<?php

namespace App\Form;

use App\Entity\Departements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DepartementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('numero')
            ->add('numero', TextType::class, [
                'label' =>'Numéro',
            ])
            // ->add('nom')
            ->add('nom', TextType::class, [
                'label' =>'Nom du département',
            ])
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Departements::class,
        ]);
    }
}
