<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Core\Db\Prototypes\Column;

use Arikaim\Core\Db\BlueprintPrototypeInterface;

/**
 * Price column prototype class
*/
class Price implements BlueprintPrototypeInterface
{
    /**
     * Build column
     *
     * @param Arikaim\Core\Db\TableBlueprint $table
     * @param mixed $options
     * @return void
     */
    public function build($table,...$options)
    {
        $default = (isset($options[0]) == false) ? 0.00 : $options[0];

        $table->decimal('price',15,4)->nullable(false)->default($default); 
        $table->index('price');   
    }
}