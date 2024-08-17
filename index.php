<script>
    class Information {
        constructor(link) {
            this.link = link;
            this.identite = new FormData();
            this.req = new XMLHttpRequest();
            this.identite_tab = [
            ];
        }
        info() {
            return this.identite_tab; 
        }
        add(info, text){
            this.identite_tab.push([info, text]); 
        }
        push(){
            for(var i = 0 ; i < this.identite_tab.length ; i++){
                console.log(this.identite_tab[i][1]);
                this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
            }		
            this.req.open("POST",this.link);
            this.req.send(this.identite);
            console.log(this.req);	 
        }
    }
    </script>






<?php
class Data_send_class
 { 

 private $array_add = []; 
 private $src_push = "" ; 

  function __construct($src_push) {
 
    $this->src_push = $src_push ; 
    
  }


  function set_array_add($var_nam,$value) {
    //array_push($this->array_add,$array_add);

 

   $this->array_add[] =  array($var_nam,$value);

  }


  

  function get_array_add() {
    return $this->array_add;
  }

  function push_send_class() {
?>
<script>
 
     var ok = new Information('<?php echo $this->src_push ?>'); // création de la classe 

</script>
<?php 
for($a = 0 ; $a <count($this->get_array_add()) ; $a ++ ){

?>
<script>
  ok.add(<?php echo "'".$this->get_array_add()[$a][0]."','".$this->get_array_add()[$a][1]."'" ?>); // ajout de l'information pour lenvoi 
</script>

<?php 
}

?>
<script>
  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

</script>

<?php 
  }
}

$apple = new Data_send_class("php.php");
$apple->set_array_add("name",45) ;  
$apple->push_send_class() ; 

?>