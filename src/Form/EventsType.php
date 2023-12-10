<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please enter the event name'],
            ])
            ->add('date_time', null, [
                'attr' => ['class' => 'form-control'],
                "widget" => "single_text"
            ])
            ->add('description', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please describe the event'],
            ])
            ->add('picture', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please enter the image URL'],
            ])
            ->add('capacity', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please enter the capacity of people'],
            ])
            ->add('email', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please enter the email'],
            ])
            ->add('phone', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please enter the phone number'],
            ])
            ->add('address', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please enter the location of the event'],
            ])
            ->add('URL', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please enter the event URL'],
            ])
            ->add('Type', ChoiceType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Please select the type of the event'], 'choices'  => [
                    'Music' => 'music',
                    'Theater' => 'theater',
                    'Movie' => 'movie',
                    'Sport' => 'sport',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
