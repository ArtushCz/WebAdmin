<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
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
     * @var string
     *
     * @ORM\Column(name="R_NAME", type="string", length=255, nullable=false)
     */
    private $rName;

    public function getRId(): ?int
    {
        return $this->rId;
    }

    public function getRName(): ?string
    {
        return $this->rName;
    }

    public function setRName(string $rName): self
    {
        $this->rName = $rName;

        return $this;
    }


}
