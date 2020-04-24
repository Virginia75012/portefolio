<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Contact
{
	/**
	 * @var string|null
	 *? @Assert\NotBlank(message="Merci de renseigner votre prénom")
	 *? @Assert\Length(min=2, max=100)
	 */
	private $firstname;

	/**
	 * @var string|null
	 *? @Assert\NotBlank(message="Merci de renseigner votre nom")
	 *? @Assert\Length(min=2, max=100)
	 */
	private $lastname;

	/**
	 * @var string|null
	 *? @Assert\NotBlank(message="Merci de renseigner votre téléphone")
	 *? @Assert\Regex(
	 * pattern="/[0-9]{10}/", message="Numéro de téléphone non valide"
	 * )
	 */
	private $phone;

	/**
	 * @var string|null
	 *? @Assert\NotBlank(message="Merci de renseigner votre email")
	 *? @Assert\Email(message = "Ce mail est invalide")
	 * 
	 */
	private $email;

	/**
	 * @var string|null
	 *? @Assert\NotBlank(message="Merci d'ajouter votre message")
	 *? @Assert\Length(min=10, minMessage="Votre message est trop court, il doit contenir au moins 10 caractères")
	 * 
	 */
	private $message;


	/**
	 * Get the value of firstname
	 *
	 * @return  string|null
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}

	/**
	 * Set the value of firstname
	 *
	 * @param  string|null  $firstname
	 *
	 * @return  self
	 */
	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;

		return $this;
	}

	/**
	 * Get the value of lastname
	 *
	 * @return  string|null
	 */
	public function getLastname()
	{
		return $this->lastname;
	}

	/**
	 * Set the value of lastname
	 *
	 * @param  string|null  $lastname
	 *
	 * @return  self
	 */
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;

		return $this;
	}

	/**
	 * Get pattern="/[0-9]{10}/"
	 *
	 * @return  string|null
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Set pattern="/[0-9]{10}/"
	 *
	 * @param  string|null  $phone  pattern="/[0-9]{10}/"
	 *
	 * @return  self
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;

		return $this;
	}

	/**
	 * Get the value of email
	 *
	 * @return  string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @param  string|null  $email
	 *
	 * @return  self
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of message
	 *
	 * @return  string|null
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * Set the value of message
	 *
	 * @param  string|null  $message
	 *
	 * @return  self
	 */
	public function setMessage($message)
	{
		$this->message = $message;

		return $this;
	}
}
