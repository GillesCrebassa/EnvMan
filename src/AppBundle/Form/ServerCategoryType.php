<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType ;


class ServerCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
                ->add('product','entity',
       [
          'class' => 'AppBundle\Entity\Product',
          'property' => 'name',
          'multiple' => TRUE,
          'expanded' => TRUE,
          'label' => 'Products',
        ]                        
                        )
/*
            ->add('product', 'collection', array(
            'type'   => 'product',
            'options'  => array(
                    'required'  => false,
                    'attr'      => array('class' => 'product-box')
                    ),
            ))
 */
             ->add('save', 'submit')
        ;
    }
    
    public function getName()
    {
        return 'servercategory';
    }    
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ServerCategory',
        ));
    }    
    
}

?>
