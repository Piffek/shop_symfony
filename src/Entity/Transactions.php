<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions")
 * @ORM\Entity
 */
class Transactions
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
     * @ORM\Column(name="first_name", type="string", length=250, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=250, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=200, nullable=false)
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
     * @ORM\Column(name="city", type="string", length=250, nullable=false)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer", nullable=false)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=250, nullable=true)
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
     * @ORM\Column(name="item", type="string", length=250, nullable=false)
     */
    private $item;

    /**
     * @var int
     *
     * @ORM\Column(name="transaction_cost", type="integer", nullable=false)
     */
    private $transactionCost;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="unique_id_transaction", type="integer", nullable=false)
     */
    private $uniqueIdTransaction;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_name", type="integer", nullable=false)
     */
    private $attributeName;

    /**
     * @var int
     *
     * @ORM\Column(name="delivery_cost", type="integer", nullable=false)
     */
    private $deliveryCost;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
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

    public function getItem(): ?string
    {
        return $this->item;
    }

    public function setItem(string $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getTransactionCost(): ?int
    {
        return $this->transactionCost;
    }

    public function setTransactionCost(int $transactionCost): self
    {
        $this->transactionCost = $transactionCost;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUniqueIdTransaction(): ?int
    {
        return $this->uniqueIdTransaction;
    }

    public function setUniqueIdTransaction(int $uniqueIdTransaction): self
    {
        $this->uniqueIdTransaction = $uniqueIdTransaction;

        return $this;
    }

    public function getAttributeName(): ?int
    {
        return $this->attributeName;
    }

    public function setAttributeName(int $attributeName): self
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    public function getDeliveryCost(): ?int
    {
        return $this->deliveryCost;
    }

    public function setDeliveryCost(int $deliveryCost): self
    {
        $this->deliveryCost = $deliveryCost;

        return $this;
    }


}
