<?php

namespace espend\Doctrine\RelationBundle\Controller;



use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction()
    {
        $qb = $this->getDoctrine()->getManager()->getRepository('espendDoctrineRelationBundle:Relation')->createQueryBuilder('relation');

        $qb->join('relation.many_to_many', 'many_to_many');
        $qb->join('relation.many_to_one', 'many_to_one');
        $qb->join('relation.one_to_many', 'one_to_many');
        $qb->join('relation.one_to_one', 'one_to_one');

        $qb->andWhere('many_to_many.field_1 = 1');
        $qb->andWhere('many_to_one.field_1 = 1');
        $qb->andWhere('one_to_many.field_1 = 1');
        $qb->andWhere('one_to_one.field_1 = 1');

    }

}
