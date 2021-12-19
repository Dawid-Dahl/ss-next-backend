<?php

namespace App\Models;

use Page;

class ContentPage extends Page
{
    private static $table_name = 'ContentPage';
    private static $singular_name = 'ContentPage';
    private static $plural_name = 'ContentPages';

    private static $db = [
        "tagline" => "Varchar"
    ];
}
