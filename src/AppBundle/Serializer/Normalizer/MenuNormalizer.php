<?php

namespace AppBundle\Serializer\Normalizer;

use AppBundle\Entity\Menu;

/**
 * MenuNormalizer.
 */
class MenuNormalizer extends AbstractNormalizer
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        /* @var Menu $object */
        return [
            'id'        => $object->getId(),
            'name'      => $object->getName(),
            'season'    => $this->normalizeObject($object->getSeason(), $format, $context),
//            'recipes'   => $this->normalizeObject($object->getRecipes(), $format, $context),
            'age'       => $object->getAge(),
            'subtitle'  => $object->getSubtitle(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Menu;
    }
}
