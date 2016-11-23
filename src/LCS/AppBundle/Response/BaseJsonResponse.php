<?php

namespace LCS\AppBundle\Response;

/**
 * Description of BaseJsonResponse
 *
 * @author Comarca
 */
abstract class BaseJsonResponse implements JsonResponseInterface {
    
    public $success;
    public $warning;
    public $data;
    public $message;
    
}
