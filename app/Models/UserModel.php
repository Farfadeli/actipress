<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = "utilisateurs";
    protected $primaryKey = "id_utilisateur";
    protected $returnType = "array";
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_utilisateur', 'Nom', 'Prenom', 'Droits', 'Pseudo', 'Mdp_clair'];

}


?>