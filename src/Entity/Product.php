<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subname;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url72;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url256;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSubname(): ?string
    {
        return $this->subname;
    }

    public function setSubname(string $subname): self
    {
        $this->subname = $subname;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getUrl72(): ?string
    {
        return $this->url72;
    }

    public function setUrl72(string $url72): self
    {
        $this->url72 = $url72;

        return $this;
    }

    public function getUrl256(): ?string
    {
        return $this->url256;
    }

    public function setUrl256(string $url256): self
    {
        $this->url256 = $url256;

        return $this;
    }
}
