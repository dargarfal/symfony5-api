<?php

declare(strict_types=1);

namespace App\Exception\Group;

use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class GroupDoesNotExistException extends BadRequestHttpException
{
    private const MESSAGE = 'Group with ID %s does not exist';

    public static function fromGroupId(string $id): self
    {
        throw new self(\sprintf(self::MESSAGE, $id));
    }
}
