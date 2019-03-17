<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GalleryImeageTemplate
 *
 * @ORM\Table(name="gallery_imeage_template", indexes={@ORM\Index(name="GALLERY_IMEAGE_TEMPLATE_fk0", columns={"GIT_GIL_ID"})})
 * @ORM\Entity
 */
class GalleryImeageTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="GIT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gitId;

    /**
     * @var string
     *
     * @ORM\Column(name="GIT_NAME", type="string", length=255, nullable=false)
     */
    private $gitName;

    /**
     * @var \GalleryImageList
     *
     * @ORM\ManyToOne(targetEntity="GalleryImageList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GIT_GIL_ID", referencedColumnName="GIL_ID")
     * })
     */
    private $gitGil;

    public function getGitId(): ?int
    {
        return $this->gitId;
    }

    public function getGitName(): ?string
    {
        return $this->gitName;
    }

    public function setGitName(string $gitName): self
    {
        $this->gitName = $gitName;

        return $this;
    }

    public function getGitGil(): ?GalleryImageList
    {
        return $this->gitGil;
    }

    public function setGitGil(?GalleryImageList $gitGil): self
    {
        $this->gitGil = $gitGil;

        return $this;
    }


}
