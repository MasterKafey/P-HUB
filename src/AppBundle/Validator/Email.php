<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * Class Email
 * @package AppBundle\Validator
 */
class Email extends Constraint
{
    public $message = 'constraint.email.invalid';
}