<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestrictionRoleItems
 *
 * @ORM\Table(name="restriction_role_items", indexes={@ORM\Index(name="RESTRICTION_ROLE_ITEMS_fk1", columns={"RI_RR_ID"}), @ORM\Index(name="RESTRICTION_ROLE_ITEMS_fk0", columns={"RI_ROLE_ID"})})
 * @ORM\Entity
 */
class RestrictionRoleItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="RI_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $riId;

    /**
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RI_ROLE_ID", referencedColumnName="R_ID")
     * })
     */
    private $riRole;

    /**
     * @var \RestrictionsRoles
     *
     * @ORM\ManyToOne(targetEntity="RestrictionsRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RI_RR_ID", referencedColumnName="RR_ID")
     * })
     */
    private $riRr;

    public function getRiId(): ?int
    {
        return $this->riId;
    }

    public function getRiRole(): ?Roles
    {
        return $this->riRole;
    }

    public function setRiRole(?Roles $riRole): self
    {
        $this->riRole = $riRole;

        return $this;
    }

    public function getRiRr(): ?RestrictionsRoles
    {
        return $this->riRr;
    }

    public function setRiRr(?RestrictionsRoles $riRr): self
    {
        $this->riRr = $riRr;

        return $this;
    }


}
