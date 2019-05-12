<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $purchase_date;

    /**
     * @ORM\Column(type="float")
     */
    private $amout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $currency;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $billing_firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $billing_lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $billing_email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $billing_address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchase_date;
    }

    public function setPurchaseDate(\DateTimeInterface $purchase_date): self
    {
        $this->purchase_date = $purchase_date;

        return $this;
    }

    public function getAmout(): ?float
    {
        return $this->amout;
    }

    public function setAmout(float $amout): self
    {
        $this->amout = $amout;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getBillingFirstname(): ?string
    {
        return $this->billing_firstname;
    }

    public function setBillingFirstname(string $billing_firstname): self
    {
        $this->billing_firstname = $billing_firstname;

        return $this;
    }

    public function getBillingLastname(): ?string
    {
        return $this->billing_lastname;
    }

    public function setBillingLastname(string $billing_lastname): self
    {
        $this->billing_lastname = $billing_lastname;

        return $this;
    }

    public function getBillingEmail(): ?string
    {
        return $this->billing_email;
    }

    public function setBillingEmail(string $billing_email): self
    {
        $this->billing_email = $billing_email;

        return $this;
    }

    public function getBillingAddress(): ?string
    {
        return $this->billing_address;
    }

    public function setBillingAddress(string $billing_address): self
    {
        $this->billing_address = $billing_address;

        return $this;
    }
}
