<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="delivery_id", columns={"deliveries_id"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="login", type="string", length=200, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=1000, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=2000, nullable=false)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="remember_token", type="string", length=2000, nullable=false)
     */
    private $rememberToken;

    /**
     * @var \Deliveries
     *
     * @ORM\ManyToOne(targetEntity="Deliveries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deliveries_id", referencedColumnName="id")
     * })
     */
    private $deliveries;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getRememberToken(): ?string
    {
        return $this->rememberToken;
    }

    public function setRememberToken(string $rememberToken): self
    {
        $this->rememberToken = $rememberToken;

        return $this;
    }

    public function getDeliveries(): ?Deliveries
    {
        return $this->deliveries;
    }

    public function setDeliveries(?Deliveries $deliveries): self
    {
        $this->deliveries = $deliveries;

        return $this;
    }


}
