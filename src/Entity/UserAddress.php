<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAddress
 *
 * @ORM\Table(name="user_address")
 * @ORM\Entity
 */
class UserAddress
{
    /**
     * @var string
     *
     * @ORM\Column(name="UA_CITY", type="string", length=255, nullable=false)
     */
    private $uaCity;

    /**
     * @var string
     *
     * @ORM\Column(name="UA_STREET", type="string", length=255, nullable=false)
     */
    private $uaStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="UA_STREET_NM", type="string", length=255, nullable=false)
     */
    private $uaStreetNm;

    /**
     * @var string
     *
     * @ORM\Column(name="UA_PSC", type="string", length=255, nullable=false)
     */
    private $uaPsc;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UA_U_ID", referencedColumnName="U_ID")
     * })
     */
    private $uaU;

    public function getUaCity(): ?string
    {
        return $this->uaCity;
    }

    public function setUaCity(string $uaCity): self
    {
        $this->uaCity = $uaCity;

        return $this;
    }

    public function getUaStreet(): ?string
    {
        return $this->uaStreet;
    }

    public function setUaStreet(string $uaStreet): self
    {
        $this->uaStreet = $uaStreet;

        return $this;
    }

    public function getUaStreetNm(): ?string
    {
        return $this->uaStreetNm;
    }

    public function setUaStreetNm(string $uaStreetNm): self
    {
        $this->uaStreetNm = $uaStreetNm;

        return $this;
    }

    public function getUaPsc(): ?string
    {
        return $this->uaPsc;
    }

    public function setUaPsc(string $uaPsc): self
    {
        $this->uaPsc = $uaPsc;

        return $this;
    }

    public function getUaU(): ?User
    {
        return $this->uaU;
    }

    public function setUaU(?User $uaU): self
    {
        $this->uaU = $uaU;

        return $this;
    }


}
