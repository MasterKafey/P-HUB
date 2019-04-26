<?php
namespace AppBundle\Validator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
/**
 * Class EmailValidator
 * @package AppBundle\Validator
 */
class EmailValidator extends ConstraintValidator
{
    /**
     * @param mixed      $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if (null !== $value) {
            if (!preg_match(
                '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/',
                $value
            )
            ) {
                $this->context->addViolation($constraint->message);
            }
        }
    }
}