<?php

declare(strict_types=1);

namespace App\Service\File;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class ImageUploaderService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function uploadAvatar(Request $request, User $user): User
    {
    }
}
