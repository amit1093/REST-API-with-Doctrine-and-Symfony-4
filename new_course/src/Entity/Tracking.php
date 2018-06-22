<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrackingRepository")
 */
class Tracking
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $CourseID;

    /**
     * @ORM\Column(type="smallint")
     */
    private $ActorID;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $StartDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CompleteDate;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $QuizScore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Extra;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ActorIP;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateCreated;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $CreatedByActorID;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DateModified;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $ModifiedByActorID;

    public function getId()
    {
        return $this->id;
    }

    public function getCourseID(): ?int
    {
        return $this->CourseID;
    }

    public function setCourseID(int $CourseID): self
    {
        $this->CourseID = $CourseID;

        return $this;
    }

    public function getActorID(): ?int
    {
        return $this->ActorID;
    }

    public function setActorID(int $ActorID): self
    {
        $this->ActorID = $ActorID;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->StartDate;
    }

    public function setStartDate(?\DateTimeInterface $StartDate): self
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    public function getCompleteDate(): ?\DateTimeInterface
    {
        return $this->CompleteDate;
    }

    public function setCompleteDate(?\DateTimeInterface $CompleteDate): self
    {
        $this->CompleteDate = $CompleteDate;

        return $this;
    }

    public function getQuizScore(): ?int
    {
        return $this->QuizScore;
    }

    public function setQuizScore(?int $QuizScore): self
    {
        $this->QuizScore = $QuizScore;

        return $this;
    }

    public function getExtra(): ?string
    {
        return $this->Extra;
    }

    public function setExtra(?string $Extra): self
    {
        $this->Extra = $Extra;

        return $this;
    }

    public function getActorIP(): ?string
    {
        return $this->ActorIP;
    }

    public function setActorIP(?string $ActorIP): self
    {
        $this->ActorIP = $ActorIP;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->DateCreated;
    }

    public function setDateCreated(?\DateTimeInterface $DateCreated): self
    {
        $this->DateCreated = $DateCreated;

        return $this;
    }

    public function getCreatedByActorID(): ?int
    {
        return $this->CreatedByActorID;
    }

    public function setCreatedByActorID(?int $CreatedByActorID): self
    {
        $this->CreatedByActorID = $CreatedByActorID;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->DateModified;
    }

    public function setDateModified(?\DateTimeInterface $DateModified): self
    {
        $this->DateModified = $DateModified;

        return $this;
    }

    public function getModifiedByActorID(): ?int
    {
        return $this->ModifiedByActorID;
    }

    public function setModifiedByActorID(?int $ModifiedByActorID): self
    {
        $this->ModifiedByActorID = $ModifiedByActorID;

        return $this;
    }
}
