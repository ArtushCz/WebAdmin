<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GalleryFolders
 *
 * @ORM\Table(name="gallery_folders", uniqueConstraints={@ORM\UniqueConstraint(name="GF_PATH", columns={"GF_PATH"})})
 * @ORM\Entity
 */
class GalleryFolders
{
    /**
     * @var int
     *
     * @ORM\Column(name="GF_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gfId;

    /**
     * @var string
     *
     * @ORM\Column(name="GF_PATH", type="string", length=255, nullable=false)
     */
    private $gfPath;

    /**
     * @var string
     *
     * @ORM\Column(name="GF_WEB_TEXT", type="string", length=255, nullable=false)
     */
    private $gfWebText;

    /**
     * @var int
     *
     * @ORM\Column(name="GF_POSITION", type="integer", nullable=false)
     */
    private $gfPosition;

    public function getGfId(): ?int
    {
        return $this->gfId;
    }

    public function getGfPath(): ?string
    {
        return $this->gfPath;
    }

    public function setGfPath(string $gfPath): self
    {
        $this->gfPath = $gfPath;

        return $this;
    }

    public function getGfWebText(): ?string
    {
        return $this->gfWebText;
    }

    public function setGfWebText(string $gfWebText): self
    {
        $this->gfWebText = $gfWebText;

        return $this;
    }

    public function getGfPosition(): ?int
    {
        return $this->gfPosition;
    }

    public function setGfPosition(int $gfPosition): self
    {
        $this->gfPosition = $gfPosition;

        return $this;
    }


}
