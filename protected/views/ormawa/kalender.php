
        <section id="page-title" data-bg-parallax="https://images.pexels.com/photos/27406/pexels-photo-27406.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="page-title">
                    <span>KALENDER PROGRAM KERJA</span>
                    <h1><?php $orma = Ormawa::model()->findByAttributes(['id_ormawa'=>$id]); echo $orma->nama_ormawa; ?></h1>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                        <div id="calendar-or"></div>
                            <!-- <div class="col-lg-6">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never
                                been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, <br> <br> facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida
                                tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis
                                eu, sodales vel dolor. </div>

                            <div class="col-lg-6">Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius
                                consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. Pellentesque ipsum erat, facilisis
                                ut venenatis eu, sodales vel dolor. <br> <br>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie
                                ipsum volut.</div> -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php Yii::app()->clientScript->registerCoreScript("jquery");?>
        <script>
            $(document).ready(function() {
        $('#calendar-or').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '<?= date('Y-m-d'); ?>',
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: [
                <?php
                    $proker = Proker::model()->findAllByAttributes(['periode'=>$this->periode->id,'ormawa_id'=>$orma->id_ormawa]);
                    foreach ($proker as $pr) {
                ?>
                {
                title: '<?= $pr->agenda; ?>',
                start: '<?= $pr->waktu; ?>',
                className: 'fc-event-info'
            },
            <?php } ?>],
        });
    });
    </script>