<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuItem
 *
 * @ORM\Table(name="menu_item", indexes={@ORM\Index(name="MENU_ITEM_fk2", columns={"MI_PAGE_ID"}), @ORM\Index(name="MENU_ITEM_fk0", columns={"MI_MC_ID"}), @ORM\Index(name="MENU_ITEM_fk1", columns={"MI_RESTRICTION_ID"})})
 * @ORM\Entity
 */
class MenuItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="MI_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $miId;

    /**
     * @var string
     *
     * @ORM\Column(name="MI_NAME", type="string", length=255, nullable=false)
     */
    private $miName;

    /**
     * @var string
     *
     * @ORM\Column(name="MI_DESC", type="string", length=255, nullable=false)
     */
    private $miDesc;

    /**
     * @var \MenuCollection
     *
     * @ORM\ManyToOne(targetEntity="MenuCollection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MI_MC_ID", referencedColumnName="MC_ID")
     * })
     */
    private $miMc;

    /**
     * @var \RestrictionsRoles
     *
     * @ORM\ManyToOne(targetEntity="RestrictionsRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MI_RESTRICTION_ID", referencedColumnName="R_ID")
     * })
     */
    private $miRestriction;

    /**
     * @var \Page
     *
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MI_PAGE_ID", referencedColumnName="P_ID")
     * })
     */
    private $miPage;

    public function getMiId(): ?int
    {
        return $this->miId;
    }

    public function getMiName(): ?string
    {
        return $this->miName;
    }

    public function setMiName(string $miName): self
    {
        $this->miName = $miName;

        return $this;
    }

    public function getMiDesc(): ?string
    {
        return $this->miDesc;
    }

    public function setMiDesc(string $miDesc): self
    {
        $this->miDesc = $miDesc;

        return $this;
    }

    public function getMiMc(): ?MenuCollection
    {
        return $this->miMc;
    }

    public function setMiMc(?MenuCollection $miMc): self
    {
        $this->miMc = $miMc;

        return $this;
    }

    public function getMiRestriction(): ?RestrictionsRoles
    {
        return $this->miRestriction;
    }

    public function setMiRestriction(?RestrictionsRoles $miRestriction): self
    {
        $this->miRestriction = $miRestriction;

        return $this;
    }

    public function getMiPage(): ?Page
    {
        return $this->miPage;
    }

    public function setMiPage(?Page $miPage): self
    {
        $this->miPage = $miPage;

        return $this;
    }


}
