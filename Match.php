<?php
class Match                                                                     //a mettre dans un dossier class !!
{
  private $_equipe1 ;                                                          //j'affecte ma class attributs...
  private $_equipe2;
  private $_score;
  private $_date;

 public function __construct($equipe1, $equipe2, $score, $date)               //ma construction avec le double __construct des variables
  {
    $this->_equipe1 = $equipe1;
    $this->_equipe2 = $equipe2;
    $this->_score = $score;
    $this->_date = $date;
  }
    /**
     * Get the value of Equipe
     *
     * @return mixed
     */
    public function getEquipe1()
    {
        return $this->_equipe1;
    }

   /**
     * Set the value of Equipe
     *
     * @param mixed _equipe1
     *
     * @return self
     */
    public function setEquipe1($_equipe1)
    {
        $this->_equipe1 = $_equipe1;

       return $this;
    }

   /**
     * Get the value of Equipe
     *
     * @return mixed
     */
    public function getEquipe2()
    {
        return $this->_equipe2;
    }

   /**
     * Set the value of Equipe
     *
     * @param mixed _equipe2
     *
     * @return self
     */
    public function setEquipe2($_equipe2)
    {
        $this->_equipe2 = $_equipe2;

       return $this;
    }

   /**
     * Get the value of Score
     *
     * @return mixed
     */
    public function getScore()
    {
        return $this->_score;
    }

   /**
     * Set the value of Score
     *
     * @param mixed _score
     *
     * @return self
     */
    public function setScore($_score)
    {
        $this->_score = $_score;

       return $this;
    }

   /**
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

   /**
     * Set the value of Date
     *
     * @param mixed _date
     *
     * @return self
     */
    public function setDate($_date)
    {
        $this->_date = $_date;

       return $this;
    }
    public function toString(){                  //appel de ma methode toString
      return "<h2>Le non de l'équipe N° 1 est : ".$this->_equipe1." et le nom de l'équipe N°2 est  ".$this->_equipe2.".<br/> Le score est : ".
        $this->_score." et la date du match est : ".$this->_date." Bing... pour les parisiens !</h2>";    //concat pour mon résultat dans un <h1>
    }

}
