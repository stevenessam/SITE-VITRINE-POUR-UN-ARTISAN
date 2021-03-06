<?php

namespace App\Form;

use App\Entity\DemandeDevis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;

class DemandeDevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('description')
            ->add('telephone', TelType::class)
            ->add('email', EmailType::class)
           # ->add('status',ChoiceType::class, [
           #     'choices'  => [
           #        'En cours' => 'En cours',
           #        'Validé' => 'Validé',
           #        'Cloturé' => 'Cloturé',
           #     ],
           # ])
        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeDevis::class,
        ]);
    }
}
