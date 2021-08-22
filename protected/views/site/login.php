<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

 <div id="loginform">
 </br>
 </br>
 </br>
                    <div class="logo text-center">
                        <span class="db"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/materialpro/material-pro/src/assets/images/logo-icon.png" alt="logo" /><br/>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/materialpro/material-pro/src/assets/images/logo-text.png" alt="Home" /></span>
                    </div>
					</br>
					</br>
					</br>
					</br>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3 form-material">
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
									<?php echo $form->textField($model, 'username', ['class' => "form-control form-control", 'placeholder' => "Username", 'required'=>true ]); ?>
                                       
										<label class="error jquery-validation-error small form-text invalid-feedback" for="validation-checkbox-custom-group-1" style="display: inline-block;"><strong><?php echo $form->error($model, 'username',['style'=>'text-align:center']); ?></strong></label>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
									<?php echo $form->passwordField($model, 'password', ['class' => "form-control form-control", 'placeholder' => 'Password', 'required'=>true]); ?>
									<label class="error jquery-validation-error small form-text invalid-feedback" for="validation-checkbox-custom-group-1" style="display: inline-block;"><strong><?php echo $form->error($model, 'password',['style'=>'text-align:center']); ?></strong></label>
                                </div>
								
                                <div class="form-group text-center mt-3">
                                    <div class="col-xs-12">
									<a href="<?php echo Yii::app()->request->baseUrl; ?>" class="btn btn-lg btn-danger col-xs-6 col-md-4" style="text-decoration:none;">Cancel</a>
											<?php // echo CHtml::Button('Cancel',array('onClick'=>"location='index.php'",'class'=>'text-danger')); ?>
											<?php echo CHtml::submitButton('Login', ['class' => 'btn btn-lg btn-primary col-xs-6 col-md-4']);?>
                                        
                                    </div>
                                </div>
                              
                            </form>
							</br>
							</br>
							<p class="text-center" style="bottom:0;width:100%;position:absolute;text-decoration:none;">Ulahan buhan <a href="https://borneomediateknologi.co.id/" target="_blank" class="text-primary">Borneo Media Teknologi</a> | 2021</p></center>
                        </div>
                    </div>
                </div>
<?php $this->endWidget(); ?>