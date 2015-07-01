<?php

namespace FormaLibre\JobBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SeekerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'community',
            'entity',
            array(
                'label' => 'candidate_for',
                'class' => 'FormaLibreJobBundle:Community',
                'choice_translation_domain' => true,
                'query_builder' => function (EntityRepository $er) {

                    return $er->createQueryBuilder('c')->orderBy('c.name', 'ASC');
                },
                'property' => 'name',
                'expanded' => false,
                'multiple' => false,
                'required' => true,
                'mapped' => false
            )
        );
        $builder->add(
            'firstName',
            'text',
            array(
                'required' => true,
                'translation_domain' => 'platform',
                'label' => 'first_name'
            )
        );
        $builder->add(
            'lastName',
            'text',
            array(
                'required' => true,
                'translation_domain' => 'platform',
                'label' => 'last_name'
            )
        );
        $builder->add(
            'username',
            'text',
            array(
                'required' => true,
                'translation_domain' => 'platform',
                'label' => 'User name'
            )
        );
        $builder->add(
            'plainPassword',
            'repeated',
            array(
                'required' => true,
                'translation_domain' => 'platform',
                'type' => 'password',
                'first_options' => array('label' => 'password'),
                'second_options' => array('label' => 'verification')
            )
        );
        $builder->add(
            'mail',
            'email',
            array(
                'required' => true,
                'translation_domain' => 'platform',
                'label' => 'email'
            )
        );
        $builder->add(
            'file',
            'file',
            array(
                'mapped' => false,
                'required' => false,
                'label' => 'cv'
            )
        );
    }
    public function getName()
    {
        return 'announcer_form';
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('translation_domain' => 'job'));
    }
}