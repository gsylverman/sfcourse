<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class RestController extends AbstractController
{

    #[Route(path: "/all", name: "all", methods: ["GET"])]
    function all(PostRepository $postRepository): JsonResponse
    {
        $posts = $postRepository->findAll();

        $data = array();
        foreach($posts as $post) {
            $data[] = array(
                'id' => $post->getId(),
                'title' => $post->getTitle(),
                'image' => $post->getImage(),
            );
        }

        return new JsonResponse($data);
    }
}
