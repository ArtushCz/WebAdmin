<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageArticle
 *
 * @ORM\Table(name="page_article", indexes={@ORM\Index(name="PAGE_ARTICLE_fk1", columns={"PA_SYS_UPDATE_BY"}), @ORM\Index(name="PAGE_ARTICLE_fk0", columns={"PA_P_ID"})})
 * @ORM\Entity
 */
class PageArticle
{
    /**
     * @var int
     *
     * @ORM\Column(name="PA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paId;

    /**
     * @var string
     *
     * @ORM\Column(name="PA_HEADER", type="string", length=255, nullable=false)
     */
    private $paHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="PA_BODY", type="text", length=65535, nullable=false)
     */
    private $paBody;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PA_SYS_INSERT_TIME", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $paSysInsertTime = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PA_SYS_UPDATE_TIME", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $paSysUpdateTime = '0000-00-00 00:00:00';

    /**
     * @var \Page
     *
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PA_P_ID", referencedColumnName="P_ID")
     * })
     */
    private $paP;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PA_SYS_UPDATE_BY", referencedColumnName="U_ID")
     * })
     */
    private $paSysUpdateBy;

    public function getPaId(): ?int
    {
        return $this->paId;
    }

    public function getPaHeader(): ?string
    {
        return $this->paHeader;
    }

    public function setPaHeader(string $paHeader): self
    {
        $this->paHeader = $paHeader;

        return $this;
    }

    public function getPaBody(): ?string
    {
        return $this->paBody;
    }

    public function setPaBody(string $paBody): self
    {
        $this->paBody = $paBody;

        return $this;
    }

    public function getPaSysInsertTime(): ?\DateTimeInterface
    {
        return $this->paSysInsertTime;
    }

    public function setPaSysInsertTime(\DateTimeInterface $paSysInsertTime): self
    {
        $this->paSysInsertTime = $paSysInsertTime;

        return $this;
    }

    public function getPaSysUpdateTime(): ?\DateTimeInterface
    {
        return $this->paSysUpdateTime;
    }

    public function setPaSysUpdateTime(\DateTimeInterface $paSysUpdateTime): self
    {
        $this->paSysUpdateTime = $paSysUpdateTime;

        return $this;
    }

    public function getPaP(): ?Page
    {
        return $this->paP;
    }

    public function setPaP(?Page $paP): self
    {
        $this->paP = $paP;

        return $this;
    }

    public function getPaSysUpdateBy(): ?User
    {
        return $this->paSysUpdateBy;
    }

    public function setPaSysUpdateBy(?User $paSysUpdateBy): self
    {
        $this->paSysUpdateBy = $paSysUpdateBy;

        return $this;
    }


}
