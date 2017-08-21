<?php
/**
 * Created by PhpStorm.
 * User: mainul
 * Date: 8/21/17
 * Time: 7:40 PM
 */

namespace App\Model;

use Exception;

class ObjectDoseNotBelongsToTheModel extends Exception
{

    /**
     * Create a new authentication exception.
     *
     * @param  string $message
     */
    public function __construct($message = 'given Model.')
    {
        parent::__construct("Object dosen't belongs to the \"".$message."\"");
    }
}