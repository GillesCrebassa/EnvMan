<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\EnvDetails;

class EnvDetailsType extends AbstractType
{   

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
/*
            ->add('servertype','text')
            ->add('description','text')
            ->add('user','textarea')
                // TODO remove environment, already know in the controller
            ->add('environment','text')
            ->add('server','text')
 * 
 */
            ->add('servertype')
            ->add('description','text')
            ->add('user','textarea')
                // TODO remove environment, already know in the controller
            ->add('environment')
            ->add('server')
             ->add('save', 'submit')
            ;
    }
    
    public function getName()
    {
            return 'EnvDetails';
    }    
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'data_class' => null,
            'data_class' => 'AppBundle\Entity\EnvDetails',
        ));
    }    
    
}

?>
