<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderinterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderinterface $builder, array $options)
    {
      $builder
        ->add('purchase_date', DateTimeType::class)
        ->add('amout')
        ->add('currency')
        ->add('billing_firstname')
        ->add('billing_lastname')
        ->add('billing_email')
        ->add('billing_address')
        ->add('save', SubmitType::class);
    }

    public function configurationOptions(OptionsResolver $resolver)
    {
      $resolver->setDefaults([
        'data-class' => Order::class,
      ]);
    }
}
