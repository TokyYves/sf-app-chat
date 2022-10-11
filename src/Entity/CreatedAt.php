<?php 

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait CreatedAt
{
    #[ORM\Column]
    private ?\DateTimeImmutable $CreatedAt = null;

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeImmutable $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }
}