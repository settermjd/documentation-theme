<?php

/**
 * @see       https://github.com/laminas/laminas-form for the canonical source repository
 * @copyright https://github.com/laminas/laminas-form/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-form/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Form\TestAsset\Annotation;

use Laminas\Form\Annotation;

class EntityWithInputFilterInput
{
    /**
     * @Annotation\Input("LaminasTest\Form\TestAsset\Annotation\InputFilterInput")
     */
    public $input;
}
