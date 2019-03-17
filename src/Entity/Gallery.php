<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery", indexes={@ORM\Index(name="GALLERY_fk0", columns={"G_FOLDERS_ID"})})
 * @ORM\Entity
 */
class Gallery
{
    /**
     * @var int
     *
     * @ORM\Column(name="G_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gId;

    /**
     * @var int
     *
     * @ORM\Column(name="G_BASE_ROOT", type="integer", nullable=false)
     */
    private $gBaseRoot;

    /**
     * @var int
     *
     * @ORM\Column(name="G_NAME", type="integer", nullable=false)
     */
    private $gName;

    /**
     * @var \GalleryFolders
     *
     * @ORM\ManyToOne(targetEntity="GalleryFolders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="G_FOLDERS_ID", referencedColumnName="GF_ID")
     * })
     */
    private $gFolders;

    public function getGId(): ?int
    {
        return $this->gId;
    }

    public function getGBaseRoot(): ?int
    {
        return $this->gBaseRoot;
    }

    public function setGBaseRoot(int $gBaseRoot): self
    {
        $this->gBaseRoot = $gBaseRoot;

        return $this;
    }

    public function getGName(): ?int
    {
        return $this->gName;
    }

    public function setGName(int $gName): self
    {
        $this->gName = $gName;

        return $this;
    }

    public function getGFolders(): ?GalleryFolders
    {
        return $this->gFolders;
    }

    public function setGFolders(?GalleryFolders $gFolders): self
    {
        $this->gFolders = $gFolders;

        return $this;
    }


}
