<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestrictionsRoles
 *
 * @ORM\Table(name="restrictions_roles", uniqueConstraints={@ORM\UniqueConstraint(name="RR_ID", columns={"RR_ID"})}, indexes={@ORM\Index(name="RESTRICTIONS_ROLES_fk0", columns={"RR_MC_ID"})})
 * @ORM\Entity
 */
class RestrictionsRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="RR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rrId;

    /**
     * @var string
     *
     * @ORM\Column(name="RR_NAME", type="string", length=255, nullable=false)
     */
    private $rrName;

    /**
     * @var \MenuCollection
     *
     * @ORM\ManyToOne(targetEntity="MenuCollection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RR_MC_ID", referencedColumnName="MC_ID")
     * })
     */
    private $rrMc;

    public function getRrId(): ?int
    {
        return $this->rrId;
    }

    public function getRrName(): ?string
    {
        return $this->rrName;
    }

    public function setRrName(string $rrName): self
    {
        $this->rrName = $rrName;

        return $this;
    }

    public function getRrMc(): ?MenuCollection
    {
        return $this->rrMc;
    }

    public function setRrMc(?MenuCollection $rrMc): self
    {
        $this->rrMc = $rrMc;

        return $this;
    }


}
