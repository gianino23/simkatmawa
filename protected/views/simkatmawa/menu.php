<div class="container-fluid note-has-grid">
	<!-- <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active"
				id="all-category">
				<i class="icon-layers mr-1"></i><span class="d-none d-md-block">All Notes</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-business">
				<i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Business</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social">
				<i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
		</li>
		<li class="nav-item"> <a href="javascript:void(0)"
				class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important">
				<i class="icon-tag mr-1"></i><span class="d-none d-md-block">Important</span></a>
		</li>
		<li class="nav-item ml-auto"> <a href="javascript:void(0)"
				class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes">
				<i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Add Notes</span></a>
		</li>
	</ul> -->
	<div class="tab-content">
		<div id="note-full-container" class="note-has-grid row">
			<a href="<?= Yii::app()->createAbsoluteUrl('pertukaranpelajar/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Pertukaran Pelajar</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('praktikkerja/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Magang/Praktik Kerja</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('mengajarsekolah/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Mengajar di Sekolah</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('penelitian/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Penelitian</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('projekkemanusian/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Proyek Kemanusiaan</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('projekdesa/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Proyek di Desa</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('wirausaha/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Wirausaha</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('projekindependen/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Studi/Proyek Independen</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('rekognisi/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Rekognisi/Non Lomba</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('belanegara/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Bela Negara</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="<?= Yii::app()->createAbsoluteUrl('ikatanalumni/admin')?>">
				<div class="col-md-4 single-note-item all-category" style="">
					<div class="card card-body">
						<span class="side-stick"></span>
						<h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Ikatan Alumni</h5>
						<div class="note-content">
							<p class="note-inner-content text-muted"
								data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus
								porttitor aasfs. Integer posuere erat a ante venenatis.</p>
						</div>
						<div class="d-flex align-items-center">
							<span class="mr-1"><i class="far fa-star favourite-note"></i></span>
							<span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
							<div class="ml-auto">
								<div class="category-selector btn-group">
									<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#"
										role="button" aria-haspopup="true" aria-expanded="true">
										<div class="category">
											<div class="category-business"></div>
											<div class="category-social"></div>
											<div class="category-important"></div>
											<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-right category-menu">
										<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>
										<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>
										<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger"
											href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
											Important</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>