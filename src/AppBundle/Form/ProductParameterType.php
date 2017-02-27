<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType ;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\ProductParameter;

class ProductParameterType extends AbstractType
{   

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('description','text')
            ->add('product')
            ->add('hardcoded','checkbox', array('required' => false))
             ->add('save', 'submit')
            ;
    }
    
    public function getName()
    {
            return 'ProductParameter';
    }    
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ProductParameter',
        ));
    }    
    
}

?>
