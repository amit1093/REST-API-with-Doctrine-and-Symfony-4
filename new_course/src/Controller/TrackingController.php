<?php

namespace App\Controller;

use App\Entity\Tracking;
use FOS\RestBundle\Controller\ControllerTrait;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;


class TrackingController extends FOSRestController
{
    use ControllerTrait;
    /**
     * @REST\Get()
     * @return view
     */
    public function getTrackingAction()
    {
        $em = $this->getDoctrine()->getRepository(Tracking::class)->findAll();

        return View::create($em,Response::HTTP_CREATED, []);;
    }


    /**
     * @Rest\NoRoute()
     * @return view
     */
    public function postTrackingActionStartDate(Request $request)
    {
        $tracking = new Tracking();
        $date=date_create();
        $tracking->setCourseID($request->get('courseID'));
        $tracking->setActorID($request->get('ActorID'));
        $tracking->setActorIP($_SERVER['REMOTE_ADDR']);
        $tracking->setStartDate($date);
        $em = $this->getDoctrine()->getManager();
        $em->persist($tracking);
        $em->flush();

        return View::create($tracking,Response::HTTP_CREATED, []);
    }

    /**
     * @Rest\Get("/tracking/{courseID}/{actorID}", name= "tracking_show")
     * @return view
     */
    public function getLMSCourseRecord($courseID,$actorID)
    {
        $repository = $this->getDoctrine()->getRepository(Tracking::class);
        $tracking = $repository->findOneBy([
            'CourseID' => $courseID,
            'ActorID'  => $actorID
        ]);

        return View::create($tracking,Response::HTTP_CREATED, []);

    }

    /**
     * @Rest\Put("/tracking/{courseID}/{actorID}")
     * @return view
     */

    public function putCompleteDate(Request $request,$courseID,$actorID)
    {
        $repository = $this->getDoctrine()->getRepository(Tracking::class);
        $tracking = $repository->findOneBy([
            'CourseID' => $courseID,
            'ActorID'  => $actorID
        ]);

        if(is_null($tracking->getCompleteDate()))
        {
            $date=date_create();
            $tracking->setCompleteDate($date);
            $tracking->setQuizScore($request->get('Quizscore'));
            $tracking->setExtra($request->get('Extra'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($tracking);
            $em->flush();

        }

        return View::create($tracking,Response::HTTP_CREATED, []);
    }


}
