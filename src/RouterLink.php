<?php

namespace Klepak\NovaRouterLink;

use Laravel\Nova\Fields\Field;

class RouterLink extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-router-link';

    public function route($name, $params)
    {
        return $this->withMeta([
            'route' => $name,
            'params' => $params
        ]);
    }
}
