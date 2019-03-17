<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="U_LOGIN", columns={"U_LOGIN"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="U_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uId;

    /**
     * @var string
     *
     * @ORM\Column(name="U_LOGIN", type="string", length=255, nullable=false)
     */
    private $uLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="U_NAME", type="string", length=255, nullable=false)
     */
    private $uName;

    /**
     * @var string
     *
     * @ORM\Column(name="U_PASSWORD", type="string", length=255, nullable=false)
     */
    private $uPassword;

    public function getUId(): ?int
    {
        return $this->uId;
    }

    public function getULogin(): ?string
    {
        return $this->uLogin;
    }

    public function setULogin(string $uLogin): self
    {
        $this->uLogin = $uLogin;

        return $this;
    }

    public function getUName(): ?string
    {
        return $this->uName;
    }

    public function setUName(string $uName): self
    {
        $this->uName = $uName;

        return $this;
    }

    public function getUPassword(): ?string
    {
        return $this->uPassword;
    }

    public function setUPassword(string $uPassword): self
    {
        $this->uPassword = $uPassword;

        return $this;
    }


}
