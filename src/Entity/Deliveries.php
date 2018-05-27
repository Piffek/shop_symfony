<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deliveries
 *
 * @ORM\Table(name="deliveries")
 * @ORM\Entity
 */
class Deliveries
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=100, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=12, nullable=false)
     */
    private $phone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="company_name", type="integer", nullable=true)
     */
    private $companyName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NIP", type="integer", nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=300, nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=6, nullable=false)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=300, nullable=false)
     */
    private $city;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCompanyName(): ?int
    {
        return $this->companyName;
    }

    public function setCompanyName(?int $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getNip(): ?int
    {
        return $this->nip;
    }

    public function setNip(?int $nip): self
    {
        $this->nip = $nip;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }


}
