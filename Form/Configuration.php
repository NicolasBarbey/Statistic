<?php
/**
 * Created by PhpStorm.
 * User: nicolasbarbey
 * Date: 17/07/2019
 * Time: 15:27
 */

namespace Statistic\Form;


use Statistic\Statistic;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Thelia\Form\BaseForm;

class Configuration extends BaseForm
{
    protected function buildForm()
    {
        $form = $this->formBuilder;

        $form->add('order', TextType::class, [
            'data' => Statistic::getConfigValue('order_types')
        ]);
    }

    public static function getName()
    {
        return 'statistic_configuration';
    }
}