<?php

namespace AppBundle\Repository;

/**
 * ProductParameterRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductParameterRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT pp FROM AppBundle:ProductParameter pp ORDER BY pp.name ASC'
            )
            ->getResult();
    }    
    
    public function findAllByProductId($productId)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT pp, p FROM AppBundle:ProductParameter pp
                JOIN pp.product p
                WHERE p.id = :productId'
            )->setParameter('productId', $productId);
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    
}
