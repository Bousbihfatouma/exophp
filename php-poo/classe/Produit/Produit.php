<?php
class Produit{
// ====================================================== //
// ===================== PROPIETES ====================== //
// ====================================================== //
//Les propriétés sont des variables qui vont définir les caractéristiques de l'objet//
private $id; //On déclare une propriété "id" qui va contenir l'id du produit
private $prix;
private $nombre;
// ====================================================== //
// ================== CONSTRUCTEUR ====================== //
// ====================================================== //
public function __construct() //Le constructeur est une méthone qui va être appelée automatiquement lors de l'instanciation de la classe
{
    echo" je suis une instance de la classe Produit";
}
// ====================================================== //
// =================== MAGIC METHODS ==================== //
// ====================================================== //
public function __toString()
{
   return "Je suis un produit";
}
// ====================================================== //
// ===================== METHODES ======================= //
// ====================================================== //
public function sayHello($name)
{
    return "Bonjour $name";
    
}
public function calculTotal()
{
    return $this->prix * $this ->nombre;
}
// ====================================================== //
// =================== GETTER/SETTERS =================== //
// ====================================================== //
/**
 * Get the value of id
 */
public function getId()
{
return $this->id;
}
/**
 * Set the value of id
 *
 * @return  self
 */
public function setId($id)
{
$this->id = $id;
return $this;
}

/**
 * Get the value of prix
 */ 
public function getPrix()
{
return $this->prix;
}

/**
 * Set the value of prix
 *
 * @return  self
 */ 
public function setPrix($prix)
{
$this->prix = $prix;

return $this;
}

/**
 * Get the value of nombre
 */ 
public function getNombre()
{
return $this->nombre;
}

/**
 * Set the value of nombre
 *
 * @return  self
 */ 
public function setNombre($nombre)
{
$this->nombre = $nombre;

return $this;
}
}


























