<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Validator\Constraints as Assert;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)//créer un formulaire
    {
        $builder
        ->add('reference',TextType::class,array(
            'required'=> false,
            'constraints'=> array(
            new Assert\NotBlank(array(
                'message'=>'Attention veuillez renseigner ce champs!'
            )) ,
            new Assert\Length(array(
                'min'=>3,
                'minMessage'=>' il faut au moins 3 caracteres!',
                'max'=>20,
                'maxMessage' =>'Attention il faut au plus 20 caracteres', 
            ))  ,
           new Assert\Regex(array(
               'pattern'=>'/^[a-zA-Z-_0-9]+$/',
               'message'=>'veuillez utiliser les lettres de A à Z et les chiffres 0 à 9',
           ))  
            )
        ))
        ->add('categorie',TextType::class)
        ->add('titre',TextType::class,array(
            'required'=>false,
        ))
        ->add('description',TextareaType::class)
        ->add('couleur',TextType::class,array(
            'required'=>false,
        ))

        ->add('taille',ChoiceType::class,array(
            'choices' => array(
            'XS'=>'xs',
            'S'=>'s' ,           
            'M'=>'m',
            'L'=>'l',
            'XL'=>'xl',
            'XXl'=>'xxl',
            )
        ))

        ->add('public',ChoiceType::class,array(
            'choices'=>array('Homme'=>'homme',            
                            'Femme'  =>'femme',
                            'Homme & Femme'=>'mixte',
            )
        ))
        ->add('file',FileType::class,array('required'->false,))
        ->add('prix', MoneyType::class)
        ->add('stock', IntegerType::class,array(
            'required'=>false,
            'constraints'=>array(
                new Assert\Type(array('type'=>'integer','message'=>'Attention,veuillez renseigner ce champ'
            )),
        ),
        'attr'=>array(
            'placeholder'=>'Ex :125',
            'class'=>'form-control',
        )
        ))
        ->add('Enregistrer', SubmitType::class,array('attr'=>array(
            'class'=>'btn btn-warning'
        )));
    }
    
    /**on ajoute des champs/
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_produit';
    }


}
