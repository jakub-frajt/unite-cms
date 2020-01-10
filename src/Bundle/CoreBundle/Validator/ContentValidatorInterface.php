<?php


namespace UniteCMS\CoreBundle\Validator;

use Symfony\Component\Validator\Constraint;
use UniteCMS\CoreBundle\Content\ContentInterface;
use UniteCMS\CoreBundle\ContentType\ContentType;
use Symfony\Component\Validator\ConstraintValidatorInterface;
use UniteCMS\CoreBundle\Domain\Domain;

/**
 * Allows to add custom validation constraints for any content type. Will be called on create/update/delete etc.
 */
interface ContentValidatorInterface extends ConstraintValidatorInterface {

    /**
     * @param string $domain
     * @return bool
     */
    function supportsDomain(string $domain) : bool;

    /**
     * @param ContentType $contentType
     * @return bool
     */
    function supportsContentType(ContentType $contentType) : bool;

    /**
     * @param ContentInterface $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint);
}
