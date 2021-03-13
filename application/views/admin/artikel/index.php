		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Halaman Artikel</h2>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="<?php echo base_url().'artikel/create/' ?>" class="btn btn-secondary btn-round">Tambah Artikel</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<!-- Card Table -->
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<!-- Card Filter -->
								<div class="card-body">
									<div class="card-title">
									<i class="fas fa-list-alt mr-2"></i>
									Tabel Artikel
									</div>
              						<br>
              						<div class="row">
					            <div class="col-md-12">
					              <table id="tableArtikel" class="table table-sm table-hover text-center">
					                <thead class="bg-primary text-white">
					                  <tr>
					                    <th class="py-2">No.</th>
					                    <th class="py-2">Judul Artikel</th>
					                    <th class="py-2">Last Edit</th>
					                    <th class="py-2">Action</th>
					                  </tr>
					                </thead>
					                <tbody>
					                  <?php
							        //include "koneksi.php";

							        if ($artikel){
							            foreach ($artikel as $art) {
							          ?>
							                <tr>
							                  <td><?php echo $art->idart ?></td>
							                  <td><?php echo $art->title ?></td>
							                  <td><?php echo $art->date ?></td>
							                  <td><a href="<?php echo base_url().'artikel/edit/'.$art->idart; ?>" class="btn btn-info active" role="button">Ubah</a>
							                  <a href="<?php echo base_url().'artikel/delete/'.$art->idart; ?>" class="btn btn-danger active" role="button">Hapus</a></td>
							                </tr>
							        <?php
							        }
							      }
							      ?>  
					                </tbody>
					              </table>
					            </div>
          </div>
            						
          							</div>
								</div>
							</div>
							

						</div>
					</div>
					
					
				</div>
			</div>
			
		</div>
		
		
