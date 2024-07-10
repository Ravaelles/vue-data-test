<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'name' => 'John Doe',
        'data' => [
//            'encoded' => '&lt;div&gt;Encoded&lt;/div&gt;',
            'encoded' => '" / &quot; / &#34; / & / &amp; / &apos; / &#039; / \' / \ / \\',
            'html' => '<div class="bg-gray-500">Html</div>',
        ]
    ]);
});
