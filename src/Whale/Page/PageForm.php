<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Whale\Page;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class PageForm extends AbstractType {


    /** @var  PageService */
    protected $_service;


    public function __construct($service)
    {
        $this->_service = $service;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $parentIdChoices = $this->_getParentIdChoices();

        $builder
            ->add('id_parent', 'choice', array(
                'label' => 'Родитель',
                'attr' => array(
                    'class' => 'input-block-level'
                ),
                'choices' => $parentIdChoices,
                'required'  => false,
            ))
            ->add('title', 'text', array(
                'label' => 'Заголовок',
                'attr' => array(
                    'class' => 'input-block-level'
                ),
                'constraints' => array(new Assert\NotBlank(), new Assert\Length(array('min' => 5)))
            ))
            ->add('content', 'textarea', array(
                'label' => 'Контент',
                'attr' => array(
                    'class' => 'input-block-level'
                ),
            ))
            ->add('is_published', 'checkbox', array(
                'label' => 'Опубликована',
                'required' => false,
            ))
            ->add('order', 'integer', array(
                'attr' => array(
                    'class' => 'input-block-level'
                ),
                'label' => 'Порядковый номер',
//                'constraints' => array(new Assert\)
            ))
            ->add('page_url', 'text', array(
                'label' => 'url (относительный)',
                'attr' => array(
                    'class' => 'input-block-level'
                ),
                'constraints' => array()
            ))
            ->add('page_title', 'text', array(
                'label' => 'СЕО title',
                'attr' => array(
                    'class' => 'input-block-level'
                ),
                'constraints' => array()
            ))
            ->add('page_description', 'text', array(
                'label' => 'СЕО description',
                'attr' => array(
                    'class' => 'input-block-level'
                ),
                'constraints' => array()
            ))
            ->add('page_keywords', 'text', array(
                'label' => 'СЕО keywords',
                'attr' => array(
                    'class' => 'input-block-level'
                ),
                'constraints' => array()
            ))
            ->add('name', 'text');
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'page';
    }


    protected function _getParentIdChoices() {
        $pages = $this->_service->fetchAll();
        $choices = array();
        foreach ($pages as $page) {
            $choices[$page->getId()] = str_repeat('.', 2 * substr_count($page->getPath(), '.')) . $page->getTitle();
        }

        return $choices;
    }
}