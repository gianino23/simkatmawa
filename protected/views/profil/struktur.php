
        <section id="page-title" data-bg-parallax="https://images.pexels.com/photos/7078661/pexels-photo-7078661.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="page-title">
                    <span>PROFIL</span>
                    <h1>Struktur Organisasi</h1>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                        <?php
                                // $periode = Periode::model()->findByAttributes(array('status'=>1));
                                $profil = Profil::model()->findByAttributes(['jenis_id'=>2,'periode'=>$this->periode->id]);
                                echo "<center>".$profil->isi."</center>";
                            ?>
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