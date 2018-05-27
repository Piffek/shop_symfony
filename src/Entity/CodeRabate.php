<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodeRabate
 *
 * @ORM\Table(name="code_rabate")
 * @ORM\Entity
 */
class CodeRabate
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="rabate", type="integer", nullable=false)
     */
    private $rabate;

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

    public function getRabate(): ?int
    {
        return $this->rabate;
    }

    public function setRabate(int $rabate): self
    {
        $this->rabate = $rabate;

        return $this;
    }


}
