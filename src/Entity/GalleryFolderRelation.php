<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GalleryFolderRelation
 *
 * @ORM\Table(name="gallery_folder_relation", indexes={@ORM\Index(name="GALLERY_FOLDER_RELATION_fk0", columns={"GFR_PARENT"}), @ORM\Index(name="GALLERY_FOLDER_RELATION_fk1", columns={"GFR_CHILD"})})
 * @ORM\Entity
 */
class GalleryFolderRelation
{
    /**
     * @var int
     *
     * @ORM\Column(name="GFR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gfrId;

    /**
     * @var \GalleryFolders
     *
     * @ORM\ManyToOne(targetEntity="GalleryFolders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GFR_PARENT", referencedColumnName="GF_ID")
     * })
     */
    private $gfrParent;

    /**
     * @var \GalleryFolders
     *
     * @ORM\ManyToOne(targetEntity="GalleryFolders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GFR_CHILD", referencedColumnName="GF_ID")
     * })
     */
    private $gfrChild;

    public function getGfrId(): ?int
    {
        return $this->gfrId;
    }

    public function getGfrParent(): ?GalleryFolders
    {
        return $this->gfrParent;
    }

    public function setGfrParent(?GalleryFolders $gfrParent): self
    {
        $this->gfrParent = $gfrParent;

        return $this;
    }

    public function getGfrChild(): ?GalleryFolders
    {
        return $this->gfrChild;
    }

    public function setGfrChild(?GalleryFolders $gfrChild): self
    {
        $this->gfrChild = $gfrChild;

        return $this;
    }


}
