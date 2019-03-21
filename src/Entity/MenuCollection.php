<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuCollection
 *
 * @ORM\Table(name="menu_collection", uniqueConstraints={@ORM\UniqueConstraint(name="MC_NAME", columns={"MC_NAME"}), @ORM\UniqueConstraint(name="MC_ID", columns={"MC_ID"})})
 * @ORM\Entity
 */
class MenuCollection
{
    /**
     * @var int
     *
     * @ORM\Column(name="MC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mcId;

    /**
     * @var string
     *
     * @ORM\Column(name="MC_NAME", type="string", length=255, nullable=false)
     */
    private $mcName;

    public function getMcId(): ?int
    {
        return $this->mcId;
    }

    public function getMcName(): ?string
    {
        return $this->mcName;
    }

    public function setMcName(string $mcName): self
    {
        $this->mcName = $mcName;

        return $this;
    }


}
