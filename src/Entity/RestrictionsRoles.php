<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestrictionsRoles
 *
 * @ORM\Table(name="restrictions_roles", uniqueConstraints={@ORM\UniqueConstraint(name="R_ID", columns={"R_ID"})}, indexes={@ORM\Index(name="RESTRICTIONS_ROLES_fk0", columns={"RI_ID"})})
 * @ORM\Entity
 */
class RestrictionsRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="R_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rId;

    /**
     * @var \RestrictionRoleItems
     *
     * @ORM\ManyToOne(targetEntity="RestrictionRoleItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RI_ID", referencedColumnName="RI_ID")
     * })
     */
    private $ri;

    public function getRId(): ?int
    {
        return $this->rId;
    }

    public function getRi(): ?RestrictionRoleItems
    {
        return $this->ri;
    }

    public function setRi(?RestrictionRoleItems $ri): self
    {
        $this->ri = $ri;

        return $this;
    }


}
