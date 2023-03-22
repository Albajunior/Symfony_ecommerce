<?php

namespace App\Entity;

use App\Repository\OrdersDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersDetailsRepository::class)
 */
class OrdersDetails
{
    // ici je l'enleve, j'en ai pas besoin, par contre on l'ajoute dans les 
    //2 proprietes etrangere(product et orders pour avour avoir une cle composite**
    //  * @ORM\Id
    //  * @ORM\GeneratedValue
    //  * @ORM\Column(type="integer")
    //  */
    // private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Orders::class, inversedBy="ordersDetails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orders;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Products::class, inversedBy="ordersDetails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $products;

    // public function getId(): ?int
    // {
    //     return $this->id;
    // }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(?Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): self
    {
        $this->products = $products;

        return $this;
    }
}
