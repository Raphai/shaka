<?php
//CSS
echo $this->Html->css(['simplegrid'], ['block' => 'css']);
?>

        <footer>

            <div class="grid grid-pad">
                <div class="col-1-4 mobile-col-1-2">
                    <h3>Formations</h3>
                    <ul>
                       <?php /* <li><a href="<?php echo $this->Url->build(['controller'=> 'Pages','action'=>'view',3]);?>">Web</a></li> */ ?> <li><a href="">Auto</a></li>
                        <li><a href="">Moto</a></li>
                        <li><a href="">&Agrave; la carte</a></li>
                        <li><a href="">Stage de récupération de points</a></li>
                    </ul>
                </div>
                <div class="col-1-4 mobile-col-1-2">
                    <h3>Dernières actualités</h3>
                    <ul>
                        <li><a href="">Sortie conduite à Poitiers</a></li>
                        <li><a href="">Sortie conduite à Niort</a></li>
                        <li><a href="">Sortie conduite à Tours</a></li>
                    </ul>
                </div>
                <div class="col-1-4 mobile-col-1-2">
                    <h3>&Agrave; propos</h3>
                    <ul>
                        <li><a href="<?php echo $this->Url->build(['controller'=> 'Pages','action'=>'view',20]);?>">Votre école de conduite</a></li>
                        <li><a href="<?php echo $this->Url->build(['controller'=> 'Pages','action'=>'view',23]);?>">Liens utiles</a></li>
                    </ul>
                </div>
                <div class="col-1-4 mobile-col-1-2">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="<?php echo $this->Url->build(['controller'=> 'Pages','action'=>'view',21]);?>">Informations</a></li>
                        <li><a href="<?php echo $this->Url->build(['controller'=> 'Pages','action'=>'devis']);?>">Demande de devis</a></li>
                        <li><a href="<?php echo $this->Url->build(['controller'=> 'Pages','action'=>'view',26]);?>">Assistance</a></li>
                    </ul>
                </div>
                <p>Copyright © <?= date('Y');?> <a href="">Shakashool</a> / <a href="http://Shakashool.fr">Shakashool.fr</a>. Tous droits réservés. <br>
                    <a href="<?php echo $this->Url->build(['controller'=> 'Pages','action'=>'view',22]);?>">Informations légales</a> |
                    <?= $this->Html->link('Plan de site',['controller'=>'Pages','action'=>'planDeSite']);?>
                </p>


            </div>

        </footer>