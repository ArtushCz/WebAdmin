<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserContact
 *
 * @ORM\Table(name="user_contact", uniqueConstraints={@ORM\UniqueConstraint(name="UC_EMAIL", columns={"UC_EMAIL"})})
 * @ORM\Entity
 */
class UserContact
{
    /**
     * @var string
     *
     * @ORM\Column(name="UC_EMAIL", type="string", length=255, nullable=false)
     */
    private $ucEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="UC_PHONE", type="string", length=255, nullable=false)
     */
    private $ucPhone;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UC_U_ID", referencedColumnName="U_ID")
     * })
     */
    private $ucU;

    public function getUcEmail(): ?string
    {
        return $this->ucEmail;
    }

    public function setUcEmail(string $ucEmail): self
    {
        $this->ucEmail = $ucEmail;

        return $this;
    }

    public function getUcPhone(): ?string
    {
        return $this->ucPhone;
    }

    public function setUcPhone(string $ucPhone): self
    {
        $this->ucPhone = $ucPhone;

        return $this;
    }

    public function getUcU(): ?User
    {
        return $this->ucU;
    }

    public function setUcU(?User $ucU): self
    {
        $this->ucU = $ucU;

        return $this;
    }


}
