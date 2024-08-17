<?php
    // Définition d'une classe appelée `Creat_form`
    class Creat_form
    {
        // Propriétés privées pour stocker le nom du formulaire et le type d'élément HTML
        private $name_form;
        private $name_type;

        // Propriété publique pour stocker des informations sur les enfants du formulaire
        public $child_info= [];

        // Constructeur de la classe, qui initialise les propriétés et génère du code JavaScript pour créer un élément HTML
        function __construct($name_form, $name_type, $para)
        {
            // Initialisation des propriétés avec les valeurs fournies en argument
            $this->name_form = $name_form;
            $this->name_type = $name_type;

            // Génération de code JavaScript pour créer un nouvel élément HTML et lui attribuer un ID
            ?>
            <script>
                // Stocke le nom du formulaire dans une variable JavaScript
                var name_form_parent = "<?php echo $this->name_form ?>";
                // Crée un nouvel élément HTML du type spécifié
                var para = document.createElement("<?php echo $this->name_type ?>");

                // Assigne l'ID du formulaire au nouvel élément créé
               

                                // Stocke le nom du formulaire dans une variable JavaScript
                                var name_form_parent = "<?php echo $this->name_form ?>";
                // Crée un nouvel élément HTML du type spécifié
                var para = document.createElement("<?php echo $this->name_type ?>");

                // Assigne l'ID du formulaire au nouvel élément créé
                para.setAttribute("id", name_form_parent);
            </script>
            <?php
            // Si le paramètre `$para` est vide, l'élément est ajouté directement au corps du document
            if ($para == "") {
            ?>
                <script>
                    // Ajoute l'élément directement au body
                    document.body.appendChild(para);
                </script>
            <?php
            } else {
                // Sinon, l'élément est ajouté en tant qu'enfant d'un autre élément spécifié par `$para`
            ?>
                <script>
                    // Ajoute l'élément comme enfant de l'élément spécifié
                    document.getElementById("<?php echo $para ?>").appendChild(para);
                </script>
            <?php
            }
            ?>
        <?php
        }

        // Méthode pour ajouter un enfant au formulaire
        function add_child($name, $type)
        {
            // Ajoute un tableau contenant le nom et le type de l'enfant à la propriété `child_info`
            $this->child_info[] = array($name, $type);
        ?>
            <script>
                // Crée un nouvel élément HTML pour l'enfant
                var para = document.createElement("<?php echo $type ?>");
                // Attribue un ID à l'élément enfant
                para.setAttribute("id", "<?php echo $name ?>")
                // Ajoute l'enfant comme élément du formulaire parent
                document.getElementById("<?php echo $this->name_form ?>").appendChild(para);
            </script>
        <?php
        }

        // Méthode pour obtenir le nom du formulaire
        function get_name_form()
        {
            return $this->name_form;
        }

        // Méthode pour définir un attribut ou le contenu d'un élément enfant
        function child_setAtribut($id, $name_atribute, $value_atribute)
        {
            // Si `$name_atribute` est vide, l'attribut 'innerHTML' de l'élément est défini
            if ($name_atribute == "") {
            ?>
                <script>
                    document.getElementById("<?php echo $id ?>").innerHTML = "<?php echo $value_atribute ?>"
                </script>
            <?php
            } else {
                // Sinon, l'attribut spécifié est défini avec la valeur donnée
            ?>
                <script>
                    document.getElementById("<?php echo $id ?>").setAttribute("<?php echo $name_atribute; ?>", "<?php echo $value_atribute ?>")
                </script>
            <?php
            }
        }

        // Méthode pour définir un attribut ou le contenu de l'élément parent (formulaire)
        function construct_setAtribut($name_atribute, $value_atribute)
        {
            // Si `$name_atribute` est vide, le contenu de l'élément parent est défini
            if ($name_atribute == "") {
            ?>
                <script>
                    document.getElementById("<?php echo $this->name_form ?>").innerHTML = "<?php echo $value_atribute ?>"
                </script>
            <?php
            } else {
                // Sinon, l'attribut spécifié est défini avec la valeur donnée pour l'élément parent
            ?>
                <script>
                    document.getElementById("<?php echo $this->name_form ?>").setAttribute("<?php echo $name_atribute; ?>", "<?php echo $value_atribute ?>")
                </script>
            <?php
            }
        }
    }

    /*
    Explications :
Constructeur (__construct) : Initialise le formulaire avec un nom et un type d'élément HTML. Le code génère ensuite un élément HTML correspondant via du JavaScript, et l'ajoute soit au body, soit à un élément parent spécifique.

add_child : Ajoute un enfant au formulaire en créant un nouvel élément HTML avec un ID et l'ajoutant comme enfant de l'élément formulaire principal.

child_setAtribut : Permet de définir un attribut spécifique ou le contenu (innerHTML) d'un enfant du formulaire.

construct_setAtribut : Similaire à child_setAtribut, mais cette méthode agit directement sur l'élément parent (le formulaire).

EXEMPLE 




*/


/* 


<?php
// Inclure la classe Creat_form si elle est définie dans un autre fichier
// require_once('Creat_form.php');

// Créer une nouvelle instance de Creat_form
$form = new Creat_form("monFormulaire", "form", "");

// Ajouter un champ de texte (input) comme enfant du formulaire
$form->add_child("nomInput", "input");

// Ajouter un bouton de soumission (submit) comme enfant du formulaire
$form->add_child("submitButton", "button");

// Définir des attributs pour les éléments enfants
$form->child_setAtribut("nomInput", "type", "text"); // Définit l'attribut type="text" pour l'input
$form->child_setAtribut("nomInput", "placeholder", "Entrez votre nom"); // Définit l'attribut placeholder="Entrez votre nom"
$form->child_setAtribut("submitButton", "", "Envoyer"); // Définit le contenu texte du bouton

// Ajouter un attribut au formulaire principal
$form->construct_setAtribut("method", "POST"); // Définit l'attribut method="POST" pour le formulaire

?>



*/
?>


