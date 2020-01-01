<?php 
class Entity {

    private $con;
    private $sqlData; // All Entity-ready data from the database or an Entity id to create an Entity object.
    
    public function __construct($con, $input) {
        $this->con = $con;
      
        if (is_array($input)) {
            $this->sqlData = $input;
        } else {
            $query = $this->con->prepare("SELECT * FROM entities WHERE id=:id");
            $query->bindValue(":id", $input);
            $query->execute();

            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function getId() {
        return $this->sqlData["id"];
    }

    public function getName() {
        return $this->sqlData["name"];
    }

    public function getThumbnail() {
        return $this->sqlData["thumbnail"];
    }

    public function getPreview() {
        return $this->sqlData["preview"];
    }

    public function getSeasons() {
        $query = $this->con->prepare("SELECT * FROM WHERE entityId=:id 
                                AND isMovie=0 ORDER BY season, episode ASC");
        $query->bindValue(":id", $entity->getId());
        $query->execute();
    }

}
?>