<?php
class Etudiant
{//la class sert ,lors de la creation de formulaire de repeter les lignes 
    private   $prenom;
    private   $nom;
    private   $email;
    private   $telephone;
    public function setPrenom($prenom)
    {
        if(iconv_strlen($prenom)<5 || iconv_strlen($prenom)>30)
        {
            $this->error = '<p>le prenom doit contenir entre 5 et 30 max!</p>';
            return $this->error;
        }else{
            $this->prenom =$prenom;
            return $this;
        }

    }
    public function getPrenom(){
        
    {
        return $this->prenom;
    }
    //---------------NOM
    public function setNom($nom)
    {
        if(iconv_strlen($nom)<5 ||iconv_strlen($nom)>30)
        {
            $this->error= '<p> le nom doit contenir entre 5 et 30 max !</p>'
            return $this->error;
            
        }else 
        {
            $this->nom=$nom;
            return $this;
        }
    }
    //--------------email-------
    public function setEmail($email)
    {
        if(!filter_var($email))
        {
            $this->error="<p> email n'est pas valide !!</p>";
            return $this;
        }else{
            $this->email=$email;
            return $this;
        }
    }
    public function getEmail()
    {
        return $this->email;
    }

    //--------------telephone-------------
    public function setTelephone($telephone)
    {
    if(is_numeric($telephone))
    {
        $this->error ='<p>le numero de telephone pas valide !!</p>';
        return $this->error;
        }else
        {
            $this->nom=$nom;
            return $this;
        }

    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    //-----------------------getInfo
    public function getInfos(){
        $info['prenom']=$this->getPrenom();
        $info['prenom']=$this->getNom();
        $info['prenom']=$this->getEmail();
        $info['prenom']=$this->getTelephone();
        return $info;
    
    }
}