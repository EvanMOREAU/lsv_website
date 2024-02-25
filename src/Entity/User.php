<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name:'users')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 60, nullable: false)]
    private ?string $identifier = null;

    #[ORM\Column(type: "string", length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(type: "json", options: ["jsonb" => true])]
    private array $roles = [];

    #[ORM\Column(type: "string", length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: "string", length: 16, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(type: "string", length: 16, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(type: "string", length: 20, options: ["default" => "unemployed"])]
    private ?string $job = 'unemployed';

    #[ORM\Column(type: "integer", options: ["default" => 0])]
    private int $job_grade = 0;

    #[ORM\Column(type: "string", length: 20, options: ["default" => "unemployed"])]
    private ?string $job2 = 'unemployed';

    #[ORM\Column(type: "integer", options: ["default" => 0])]
    private int $job2_grade = 0;

    #[ORM\Column(type: "string", length: 50, options: ["default" => "user"])]
    private ?string $group = 'user';

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: "datetime", nullable: true, options: ["default" => "NULL ON UPDATE current_timestamp()"])]
    private ?\DateTimeInterface $last_seen = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $accounts = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $inventory = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $loadout = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $crafting_level = null;

    #[ORM\Column(type: "string", length: 255, options: ["default" => '{"x":-269.4,"y":-955.3,"z":31.2,"heading":205.8}'])]
    private ?string $position = '{"x":-269.4,"y":-955.3,"z":31.2,"heading":205.8}';

    #[ORM\Column(type: "string", length: 10, nullable: true)]
    private ?string $dateofbirth = null;

    #[ORM\Column(type: "string", length: 1, nullable: true)]
    private ?string $sex = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $height = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $skin = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $status = null;

    #[ORM\Column(type: "boolean", options: ["default" => 0])]
    private bool $is_dead = false;

    #[ORM\Column(type: "boolean", options: ["default" => 0])]
    private bool $disabled = false;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $last_property = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $hotbar = null;

    #[ORM\Column(type: "text", options: ["default" => '0'])]
    private ?string $IsHandcuffed = '0';


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): static
    {
        $this->identifier = $identifier;

        return $this;
    }
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    
    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;
    
        return $this;
    }
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    
    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;
    
        return $this;
    }
    public function getJob(): ?string
    {
        return $this->job;
    }
    
    public function setJob(?string $job): static
    {
        $this->job = $job;
    
        return $this;
    }
    public function getJobGrade(): int
    {
        return $this->job_grade;
    }
    
    public function setJobGrade(int $job_grade): static
    {
        $this->job_grade = $job_grade;
    
        return $this;
    }
    public function getJob2(): ?string
    {
        return $this->job2;
    }
    
    public function setJob2(?string $job2): static
    {
        $this->job2 = $job2;
    
        return $this;
    }
    public function getJob2Grade(): int
    {
        return $this->job2_grade;
    }
    
    public function setJob2Grade(int $job2_grade): static
    {
        $this->job2_grade = $job2_grade;
    
        return $this;
    }
    public function getGroup(): ?string
    {
        return $this->group;
    }
    
    public function setGroup(?string $group): static
    {
        $this->group = $group;
    
        return $this;
    }
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }
    
    public function setCreatedAt(?\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;
    
        return $this;
    }
    public function getLastSeen(): ?\DateTimeInterface
    {
        return $this->last_seen;
    }
    
    public function setLastSeen(?\DateTimeInterface $last_seen): static
    {
        $this->last_seen = $last_seen;
    
        return $this;
    }
    public function getDateOfBirth(): ?string
    {
        return $this->dateofbirth;
    }
    
    public function setDateOfBirth(?string $dateofbirth): static
    {
        $this->dateofbirth = $dateofbirth;
    
        return $this;
    }
    public function getSex(): ?string
    {
        return $this->sex;
    }
    
    public function setSex(?string $sex): static
    {
        $this->sex = $sex;
    
        return $this;
    }
    public function getHeight(): ?int
    {
        return $this->height;
    }
    
    public function setHeight(?int $height): static
    {
        $this->height = $height;
    
        return $this;
    }
    public function getSkin(): ?string
    {
        return $this->skin;
    }
    
    public function setSkin(?string $skin): static
    {
        $this->skin = $skin;
    
        return $this;
    }
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    public function setStatus(?string $status): static
    {
        $this->status = $status;
    
        return $this;
    }
    public function getLastProperty(): ?string
    {
        return $this->last_property;
    }
    
    public function setLastProperty(?string $last_property): static
    {
        $this->last_property = $last_property;
    
        return $this;
    }
    public function getHotbar(): ?string
    {
        return $this->hotbar;
    }
    
    public function setHotbar(?string $hotbar): static
    {
        $this->hotbar = $hotbar;
    
        return $this;
    }
    public function getIsHandcuffed(): ?string
    {
        return $this->IsHandcuffed;
    }
    
    public function setIsHandcuffed(?string $IsHandcuffed): static
    {
        $this->IsHandcuffed = $IsHandcuffed;
    
        return $this;
    }
                                                                    

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
