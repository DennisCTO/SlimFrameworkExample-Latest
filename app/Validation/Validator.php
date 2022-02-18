<?php

declare(strict_types=1);

namespace App\Validation;

use Respect\Validation\Exceptions\NestedValidationException;
use App\Requests\CustomRequestHandler;

class Validator {

    protected  $requestHandler;
    public $errors = [];
    public function validate($request , array $rules) {
        foreach ($rules as $field =>$rule)
        {
            try{
                $rule->setName($field)->assert(CustomRequestHandler::getParam($request,$field));
            }catch(NestedValidationException $ex)
            {
                  $this->errors[$field] = $ex->getMessages();
            }
        }
        return $this;
    }

    public function failed()
    {
        return !empty($this->errors);
    }

}