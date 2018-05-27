<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items", indexes={@ORM\Index(name="promotion_id", columns={"promotion_id"}), @ORM\Index(name="categories_tree_id", columns={"categories_tree_id"})})
 * @ORM\Entity
 */
class Items
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
     * @ORM\Column(name="name", type="integer", nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity_item", type="integer", nullable=false)
     */
    private $quantityItem;

    /**
     * @var int
     *
     * @ORM\Column(name="buy_quantity", type="integer", nullable=false)
     */
    private $buyQuantity;

    /**
     * @var \Promotions
     *
     * @ORM\ManyToOne(targetEntity="Promotions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promotion_id", referencedColumnName="id")
     * })
     */
    private $promotion;

    /**
     * @var \CategoriesTree
     *
     * @ORM\ManyToOne(targetEntity="CategoriesTree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categories_tree_id", referencedColumnName="id")
     * })
     */
    private $categoriesTree;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?int
    {
        return $this->name;
    }

    public function setName(int $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantityItem(): ?int
    {
        return $this->quantityItem;
    }

    public function setQuantityItem(int $quantityItem): self
    {
        $this->quantityItem = $quantityItem;

        return $this;
    }

    public function getBuyQuantity(): ?int
    {
        return $this->buyQuantity;
    }

    public function setBuyQuantity(int $buyQuantity): self
    {
        $this->buyQuantity = $buyQuantity;

        return $this;
    }

    public function getPromotion(): ?Promotions
    {
        return $this->promotion;
    }

    public function setPromotion(?Promotions $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getCategoriesTree(): ?CategoriesTree
    {
        return $this->categoriesTree;
    }

    public function setCategoriesTree(?CategoriesTree $categoriesTree): self
    {
        $this->categoriesTree = $categoriesTree;

        return $this;
    }


}
