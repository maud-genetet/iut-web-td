<?php

namespace App\Form;

use App\Entity\Series;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SeriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('plot')
            ->add('imdb')
            ->add('poster')
            ->add('director')
            ->add('youtubeTrailer')
            ->add('awards')
            ->add('yearStart')
            ->add('yearEnd')
            ->add('user')
            ->add('genre')
            ->add('actor')
            ->add('country')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Series::class,
        ]);
    }
}
