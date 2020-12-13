<?php

namespace App\Entity;

use DateTime;

/**
 * Interface RestrictionInterface
 * @package App\Entity
 */
interface RestrictionInterface
{
    /**
     * @param string $code
     */
    public function setCode(string $code): void;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     */
    public function setTitle(string $title): void;

    /**
     * @return string
     */
    public function getCode(): string;

    /**
     * @param DateTime $effectiveOn
     */
    public function setEffectiveOn(DateTime $effectiveOn): void;

    /**
     * @return DateTime
     */
    public function getEffectiveOn(): DateTime;

    /**
     * @param string
     */
    public function setIssuer(string $issuer): void;

    /**
     * @return string
     */
    public function getIssuer(): string;

    /**
     * @param string $cardSet
     */
    public function setCardSet(string $cardSet): void;

    /**
     * @return string
     */
    public function getCardSet(): string;

    /**
     * @param array $contents
     */
    public function setContents(array $contents): void;

    /**
     * @return array
     */
    public function getContents(): array;

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void;

    /**
     * @return bool
     */
    public function isActive(): bool;

    /**
     * @param string $version
     */
    public function setVersion(string $version): void;

    /**
     * @return string
     */
    public function getVersion(): string;

    /**
     * @return array
     */
    public function getJoustRestrictedList(): array;

    /**
     * @return array
     */
    public function getJoustBannedList(): array;

    /**
     * @return array
     */
    public function getJoustRestrictedPods(): array;

    /**
     * @return array
     */
    public function getMeleeRestrictedList(): array;

    /**
     * @return array
     */
    public function getMeleeBannedList(): array;

    /**
     * @return array
     */
    public function getMeleeRestrictedPods(): array;

    /**
     * @return array
     */
    public function getReferencedCards(): array;
}
