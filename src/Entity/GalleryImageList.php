<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GalleryImageList
 *
 * @ORM\Table(name="gallery_image_list", indexes={@ORM\Index(name="GALLERY_IMAGE_LIST_fk0", columns={"GIL_GF_ID"})})
 * @ORM\Entity
 */
class GalleryImageList
{
    /**
     * @var int
     *
     * @ORM\Column(name="GIL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gilId;

    /**
     * @var string
     *
     * @ORM\Column(name="GIL_FILE_NAME", type="string", length=255, nullable=false)
     */
    private $gilFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="GIL_WEB_NAME", type="string", length=255, nullable=false)
     */
    private $gilWebName;

    /**
     * @var \GalleryFolders
     *
     * @ORM\ManyToOne(targetEntity="GalleryFolders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GIL_GF_ID", referencedColumnName="GF_ID")
     * })
     */
    private $gilGf;

    public function getGilId(): ?int
    {
        return $this->gilId;
    }

    public function getGilFileName(): ?string
    {
        return $this->gilFileName;
    }

    public function setGilFileName(string $gilFileName): self
    {
        $this->gilFileName = $gilFileName;

        return $this;
    }

    public function getGilWebName(): ?string
    {
        return $this->gilWebName;
    }

    public function setGilWebName(string $gilWebName): self
    {
        $this->gilWebName = $gilWebName;

        return $this;
    }

    public function getGilGf(): ?GalleryFolders
    {
        return $this->gilGf;
    }

    public function setGilGf(?GalleryFolders $gilGf): self
    {
        $this->gilGf = $gilGf;

        return $this;
    }


}
