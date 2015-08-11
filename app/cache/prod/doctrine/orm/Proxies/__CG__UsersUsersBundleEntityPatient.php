<?php

namespace Proxies\__CG__\Users\UsersBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Patient extends \Users\UsersBundle\Entity\Patient implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'idpatient', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'cin', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'nom', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'prenom', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'email', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'telephone', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'adresse', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'login', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'password', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'code', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'datenaissance', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'sexe', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'valider');
        }

        return array('__isInitialized__', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'idpatient', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'cin', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'nom', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'prenom', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'email', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'telephone', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'adresse', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'login', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'password', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'code', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'datenaissance', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'sexe', '' . "\0" . 'Users\\UsersBundle\\Entity\\Patient' . "\0" . 'valider');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Patient $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdpatient()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdpatient();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdpatient', array());

        return parent::getIdpatient();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin($cin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', array($cin));

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', array());

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', array($telephone));

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', array());

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', array($login));

        return parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', array());

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', array($code));

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', array());

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatenaissance($datenaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatenaissance', array($datenaissance));

        return parent::setDatenaissance($datenaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatenaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatenaissance', array());

        return parent::getDatenaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', array($sexe));

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', array());

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setValider($valider)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValider', array($valider));

        return parent::setValider($valider);
    }

    /**
     * {@inheritDoc}
     */
    public function getValider()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValider', array());

        return parent::getValider();
    }

}
