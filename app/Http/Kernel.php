protected $middlewareGroups = [
    'web' => [
        // ... middleware lainnya
        \App\Http\Middleware\ShareSiswaData::class,
    ],
    
    'api' => [
        // ... middleware lainnya
    ],
];