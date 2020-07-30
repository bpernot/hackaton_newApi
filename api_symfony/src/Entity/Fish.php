<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FishRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=FishRepository::class)
 * @ApiResource
 */
class Fish
{
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $espece;

  /**
   * @ORM\Column(type="datetime")
   */
  private $createdAt;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getEspece(): ?string
  {
    return $this->espece;
  }

  public function setEspece(string $espece): self
  {
    $this->espece = $espece;

    return $this;
  }

  public function getCreatedAt(): ?\DateTimeInterface
  {
    return $this->createdAt;
  }

  public function setCreatedAt(\DateTimeInterface $createdAt): self
  {
    $this->createdAt = $createdAt;

    return $this;
  }
}
