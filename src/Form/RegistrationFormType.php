<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\IsTrue;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('password', RepeatedType::class, [
                  'type' => PasswordType::class,
                  'invalid_message' => 'Les deux champs mot de passe doivent être identique.',
                  'options' => ['label' => 'Entrez votre mot de passe'],
                  'required' => true,
                  'second_options' => ['label' => 'Confirmez votre mot de passe'],
                'error_bubbling'  => false,
                  'constraints' => [
                      new NotBlank([
                          'message' => 'SVP entrez un mot passe',
                      ]),
                      new Length([
                          'min' => 6,
                          'minMessage' => 'Votre mot de passe doit faire {{ limit }} caractères',
                          // max length allowed by Symfony for security reasons
                          'max' => 120,
                      ]),
                  ],
            ])
            ->add('termsAccepted', CheckboxType::class, array(
                'mapped' => false,
                'constraints' => new IsTrue(),
                'label' => 'veuillez accepter les termes'
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
