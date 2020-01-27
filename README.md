Adds a field that generates a link using the Nova Router

**Installation**
```
composer require klepak/nova-router-link
```

**Usage**
```php
use Klepak\NovaRouterLink\RouterLink;

RouterLink::make(__('Process Details'), 'process_id')
    ->route('process-details', [
        'processId' => $this->process_id
    ]);
```


```php
use Klepak\NovaRouterLink\RouterLink;
use Suenerds\NovaSearchableBelongsToFilter\NovaSearchableBelongsToFilter;
use App\Nova\Process;

$filters = base64_encode(json_encode([
    ['class' => NovaSearchableBelongsToFilter::class . '\\Process',
        'value' => [
            'display' => $this->title,
            'value' => $this->id,
        ]
    ]
]));

RouterLink::make(__('Process Filter'), 'process_id')
    ->route('index', ['resourceName' => Process::uriKey()], ['processes_filter' => $filters]),
```


**Screenshots**  
![index](https://raw.githubusercontent.com/klepak/nova-router-link/master/docs/index.png)
![details](https://raw.githubusercontent.com/klepak/nova-router-link/master/docs/details.png)
