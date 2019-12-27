<?php

declare(strict_types=1);

namespace App\Entity;

use Ramsey\Uuid\Uuid;

class Expense
{
    private string $id;

    private ?Category $category = null;

    private ?User $user = null;

    private ?Group $group = null;

    private float $amount;

    private ?string $description = null;

    private ?\DateTime $createdAt = null;

    private ?\DateTime $updatedAt = null;

    /**
     * @throws \Exception
     */
    public function __construct(
        Category $category,
        User $user,
        float $amount,
        string $description = null,
        Group $group = null,
        string $id = null
    ) {
        $this->id = $id ?? Uuid::uuid4()->toString();
        $this->category = $category;
        $this->user = $user;
        $this->amount = $amount;
        $this->description = $description;
        $this->group = $group;
        $this->createdAt = new \DateTime();
        $this->markAsUpdated();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getGroup(): ?Group
    {
        return $this->group;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function markAsUpdated(): void
    {
        $this->updatedAt = new \DateTime();
    }

    public function isOwnedBy(User $user): bool
    {
        return $this->getUser()->getId() === $user->getId();
    }
}
