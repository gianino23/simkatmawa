<section id="page-title"
    data-bg-parallax="https://images.pexels.com/photos/27406/pexels-photo-27406.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="page-title">
            <span>LUARAN KINERJA</span>
            <h1><?php $orma = Ormawa::model()->findByAttributes(['id_ormawa'=>$id]); echo $orma->nama_ormawa; ?></h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Program Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $prokers=Proker::model()->findAllByAttributes(array('ormawa_id'=>$id));
                            $i=0;
                            foreach($prokers as $proker){
                                $i++;
                        ?>
                        <tr>
                            <td><a data-width="75" href="#" style="width: 28px;" data-bs-target="#modal-<?= $proker->id_proker; ?>" data-bs-toggle="modal" href="#"><?= $proker->agenda; ?></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</section>
<!--Modal large -->
<?php foreach($prokers as $proker){ ?>
<div class="modal fade" id="modal-<?= $proker->id_proker; ?>" tabindex="-1" role="modal"
    aria-labelledby="modal-label-<?= $proker->id_proker; ?>" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header"> 
                Luaran Kinerja <strong><?= $proker->agenda; ?></strong>
            </div>
            <div class="modal-body">
            <div class="accordion">

            <?php
                                            $luar = Luarankinerja::model()->findAllByAttributes(['proker_id'=>$proker->id_proker]);
                                            if(isset($luar)) {
                                                $i=0;
                                                foreach ($luar as $l) {
                                                    $i++;
                                        ?>
                            <div class="ac-item">
                                <h5 class="ac-title">Luaran Kinerja #<?= $i; ?></h5>
                                <div class="ac-content" style="display: none;">
                                <iframe src="<?= Yii::app()->request->baseUrl.'/uploaddokumen/'.$l->file; ?>" height="500px" width="100%" ></iframe>
                                </div>
                            </div>
                    <?php }} ?>
                        </div>
                
            </div>
        </div>
    </div>
</div>
<!-- end: Modal large -->
<?php } ?>
