<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     * )
     */
    private $email;


    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $token;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 1,
     *      max = 50,
     *      minMessage = "Votre nom doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Votre nom ne doit pas contenir plus de {{ limit }} caractères"
     * )
     */
    private $lastname;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 1,
     *      max = 50,
     *      minMessage = "Votre prénom doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Votre prénom ne doit pas contenir plus de {{ limit }} caractères"
     * )
     */
    private $firstname;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 14,
     *      max = 14,
     *      minMessage = "Votre Siret doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Votre Siret ne doit pas contenir plus de {{ limit }} caractères"
     * )
     */
    private $siret;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 10,
     *      max = 10,
     *      minMessage = "Votre telephone doit contenir au moins {{ limit }} chiffres",
     *      maxMessage = "Votre telephone ne doit pas contenir plus de {{ limit }} chiffres"
     * )
     */
    private $phone;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 1,
     *      max = 80,
     *      minMessage = "Votre prénom doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Votre prénom ne doit pas contenir plus de {{ limit }} caractères"
     * )
     */
    private $adress;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $horaire;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $site;


    /**
     * @ORM\Column(type="integer", length=5, nullable=true)
     * @Assert\Length(
     *      min = 5,
     *      max = 5,
     *      minMessage = "Votre code postal doit contenir au moins {{ limit }} chiffres",
     *      maxMessage = "Votre code postal ne doit pas contenir plus de {{ limit }} chiffres"
     * )
     */
    private $cp;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 1,
     *      max = 80,
     *      minMessage = "Votre ville doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Votre ville ne doit pas contenir plus de {{ limit }} caractères"
     * )
     */
    private $ville;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Departements", inversedBy="users")
     */
    private $dep_id;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="users")
     */
    private $cat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 2,
    *      max = 80,
    *      minMessage = "Votre titre doit contenir au moins {{ limit }} caractères",
    *      maxMessage = "Votre titre ne doit pas contenir plus de {{ limit }} caractères"
    * )
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\Length(
     *      min = 2,
     *      max = 300,
     *      minMessage = "Votre description doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Votre description ne doit pas contenir plus de {{ limit }} caractères"
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\File(mimeTypes={ "image/jpeg","image/jpg" })
     */
    private $images;

    public function __construct()
    {
        $this->cat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
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

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }



    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getHoraire(): ?string
    {
        return $this->horaire;
    }

    public function setHoraire(?int $horaire): self
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;
        return $this;
    }

    public function getDepId(): ?Departements
    {
        return $this->dep_id;
    }

    public function setDepId(?Departements $dep_id): self
    {
        $this->dep_id = $dep_id;
        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCat(): Collection
    {
        return $this->cat;
    }

    public function addCat(Category $cat): self
    {
        if (!$this->cat->contains($cat)) {
            $this->cat[] = $cat;
        }

        return $this;
    }

    public function removeCat(Category $cat): self
    {
        if ($this->cat->contains($cat)) {
            $this->cat->removeElement($cat);
        }

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setImages(?string $images): self
    {
        $this->images = $images;

        return $this;
    }
}
