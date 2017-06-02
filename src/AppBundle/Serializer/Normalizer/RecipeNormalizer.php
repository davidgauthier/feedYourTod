<?php

namespace AppBundle\Serializer\Normalizer;

use AppBundle\Entity\Recipe;

/**
 * RecipeNormalizer.
 */
class RecipeNormalizer extends AbstractNormalizer
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        /* @var Recipe $object */
        return [
            'id' => $object->getId(),
            'name' => $object->getName(),
            'recipeType' => $this->normalizeObject($object->getRecipeType(), $format, $context),
            'season' => $this->normalizeObject($object->getSeason(), $format, $context),
            'prepTime' => $object->getPreptime(),
            'cookTime' => $object->getCooktime(),
            'age' => $object->getAge(),
//            'ingredients'   => $this->normalizeObject($object->getIngredients(), $format, $context),
            'content' => $object->getContent(),
//            'menus'         => $this->normalizeObject($object->getMenus(), $format, $context),
//            'photoRecipes'  => $this->normalizeObject($object->getPhotoRecipes(), $format, $context),
            'filling' => $object->getFilling(),
            'observation' => $object->getObservation(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Recipe;
    }
}
