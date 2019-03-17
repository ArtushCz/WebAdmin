<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoles
 *
 * @ORM\Table(name="user_roles", indexes={@ORM\Index(name="USER_ROLES_fk0", columns={"UR_U_ID"}), @ORM\Index(name="USER_ROLES_fk1", columns={"UR_R_ID"})})
 * @ORM\Entity
 */
class UserRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="UR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $urId;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UR_U_ID", referencedColumnName="U_ID")
     * })
     */
    private $urU;

    /**
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UR_R_ID", referencedColumnName="R_ID")
     * })
     */
    private $urR;

    public function getUrId(): ?int
    {
        return $this->urId;
    }

    public function getUrU(): ?User
    {
        return $this->urU;
    }

    public function setUrU(?User $urU): self
    {
        $this->urU = $urU;

        return $this;
    }

    public function getUrR(): ?Roles
    {
        return $this->urR;
    }

    public function setUrR(?Roles $urR): self
    {
        $this->urR = $urR;

        return $this;
    }


}
