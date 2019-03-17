<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Column(name="P_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pId;

    /**
     * @var string
     *
     * @ORM\Column(name="P_HEADER", type="string", length=255, nullable=false)
     */
    private $pHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="P_BODY", type="text", length=65535, nullable=false)
     */
    private $pBody;

    public function getPId(): ?int
    {
        return $this->pId;
    }

    public function getPHeader(): ?string
    {
        return $this->pHeader;
    }

    public function setPHeader(string $pHeader): self
    {
        $this->pHeader = $pHeader;

        return $this;
    }

    public function getPBody(): ?string
    {
        return $this->pBody;
    }

    public function setPBody(string $pBody): self
    {
        $this->pBody = $pBody;

        return $this;
    }


}
