<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemsStock
 *
 * @ORM\Table(name="items_stock", indexes={@ORM\Index(name="attributes_id", columns={"attributes_id"}), @ORM\Index(name="item_id", columns={"item_id"})})
 * @ORM\Entity
 */
class ItemsStock
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \Items
     *
     * @ORM\ManyToOne(targetEntity="Items")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \Attributes
     *
     * @ORM\ManyToOne(targetEntity="Attributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attributes_id", referencedColumnName="id")
     * })
     */
    private $attributes;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getItem(): ?Items
    {
        return $this->item;
    }

    public function setItem(?Items $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getAttributes(): ?Attributes
    {
        return $this->attributes;
    }

    public function setAttributes(?Attributes $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }


}
