<div class="container">

	<div class="page-header">
		<div class="row">
			<div class="col-sm-8">
				<a href=<?php echo base_url() ?> class="btn btn-primary">
					<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Back
				</a>
				<h2>Add New Entry</h2>
			</div>
			<div class="col-sm-4 hidden-xs">
				<div class="pull-right">
					<form action="/" class="dropzone" id="dropzone">
						<div class="dz-message">
							<p>Drop files here or<br>click to upload</p>
							<div class="fallback">
								<input type="file" multiple="multiple" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12">

			<?php echo form_open('addEntry', array('method' => 'GET')); ?>

				<div class="row">
					<div class="col-xs-5 col-sm-3 col-md-3 form-group">
						<label>Quality</label>
						<select class="form-control" name="quality">
							<option value="4k 2160p">4k 2160p</option>
							<option value="FHD 1080p" selected>FHD 1080p</option>
							<option value="HD 720p">HD 720p</option>
							<option value="HQ 480p">HQ 480p</option>
							<option value="LQ 360p">LQ 360p</option>
						</select>
					</div>

					<div class="col-xs-7 form-group visible-xs hidden-sm hidden-md hidden-lg">
						<label>Status</label>
						<select class="form-control" name="watchStatus">
							<option value="0" selected>Finished Watching</option>
							<option value="1">Currently Watching</option>
							<option value="2">Not Watched</option>
							<option value="3">For Downloading</option>
							<option value="4">Dropped</option>
						</select>
					</div>

					<div class="col-xs-12 col-sm-9 col-md-6 form-group">
						<label>Title</label>
						<input type="text" class="form-control" name="title" required>
					</div>

					<div class="col-sm-12 col-md-3 form-group hidden-xs">
						<label>Status</label>
						<select class="form-control" name="watchStatus">
							<option value="0" selected>Finished Watching</option>
							<option value="1">Currently Watching</option>
							<option value="2">Not Watched</option>
							<option value="3">For Downloading</option>
							<option value="4">Dropped</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4 col-sm-2 col-md-2 form-group">
						<label>Episodes</label>
						<input type="text" class="form-control" name="episodes">
					</div>
					<div class="col-xs-4 col-sm-2 col-md-2 form-group">
						<label>OVAs</label>
						<input type="text" class="form-control" name="ovas">
					</div>
					<div class="col-xs-4 col-sm-2 col-md-2 form-group">
						<label>Specials</label>
						<input type="text" class="form-control" name="specials">
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 form-group">
						<label>Date Finished</label>
						<div class="input-group date">
							<input type="text"
								class="form-control"
								name="dateFinished"
								onkeydown="return false;"
								value="<?php echo date('m/d/Y') ?>"
							>
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 form-group">
						<label>File Size</label>
						<input type="text" class="form-control" name="filesize">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4 col-md-4 form-group hidden-xs">
						<label>Season # (N/A if not applicable)</label>
						<input type="text" class="form-control" name="seasonNumber">
					</div>
					<div class="col-xs-3 form-group visible-xs hidden-sm hidden-md hidden-lg">
						<label>Season</label>
						<input type="text" class="form-control" name="seasonNumber">
					</div>
					<div class="col-xs-9 col-sm-8 col-md-8 form-group">
						<label>First Season Title</label>
						<input type="text" class="form-control" name="firstSeasonTitle">
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5 form-group">
						<label>Season Released</label>
						<div class="row">
							<div class="col-xs-6 col-sm-5 col-md-5">
								<select class="form-control" name="releaseSeason">
									<option value="Winter">Winter</option>
									<option value="Spring">Spring</option>
									<option value="Summer">Summer</option>
									<option value="Fall">Fall</option>
								</select>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4">
								<select class="form-control" name="releaseYear">
									<?php
										for ($i=(int)date('Y') + 1; $i >= 1990; $i--) {
											echo "<option value='" . $i . "'";
											if ($i == (int)date('Y')) {
												echo " selected";
											}
											echo ">" . $i . "</option>";
										}
									?>
								</select>
							</div>
							<div class="col-xs-2 col-sm-3 col-md-3">
								<button type="button"
									class="btn btn-primary btn-block"
									data-toggle="modal"
									data-target="#seasonReleasedModal">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</div>

					<div class="col-xs-4 col-sm-6 col-md-2 form-group">
						<label>Duration</label>
						<input type="text"
							class="form-control text-center"
							name="duration"
							value="00:00:00">
					</div>

					<div class="col-xs-8 col-sm-12 col-md-5 form-group">
						<label>Subber / Encoder</label>
						<input type="text" class="form-control" name="encoder">
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 form-group">
						<label>Variants</label>
						<input type="text" class="form-control" name="variants">
					</div>
					<div class="col-xs-12 col-sm-8 col-md-4 form-group">
						<label>Remarks</label>
						<input type="text" class="form-control" name="remarks">
					</div>
					<div class="col-xs-12 col-sm-4 col-md-2">
						<label>In HDD</label>
						<select class="form-control" name="inHDD">
							<option value="true">Yes</option>
							<option value="false">No</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 form-group">
						<label>Prequel</label>
						<select class="form-control" name="prequel">
							<option value="" selected></option>
							<?php foreach ($titleData as $item): ?>
								<option value="<?php echo $item->title; ?>">
									<?php echo $item->title; ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 form-group">
						<label>Sequel</label>
						<select class="form-control" name="sequel">
							<option value="" selected></option>
							<?php foreach ($titleData as $item): ?>
								<option value="<?php echo $item->title; ?>">
									<?php echo $item->title; ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-4 form-group">
						<label>Side-Story (comma-separated)</label>
						<select multiple class="form-control" name="offquel">
							<?php foreach ($titleData as $item): ?>
								<option value="<?php echo $item->title; ?>">
									<?php echo $item->title; ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div> -->
				</div>

				<!-- <div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3 form-group">
						<label>Audio Rating</label>
						<input type="text" class="form-control" name="ratingAudio">
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 form-group">
						<label>Enjoyment Rating</label>
						<input type="text" class="form-control" name="ratingAudio">
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 form-group">
						<label>Graphics Rating</label>
						<input type="text" class="form-control" name="ratingAudio">
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 form-group">
						<label>Plot Rating</label>
						<input type="text" class="form-control" name="ratingAudio">
					</div>
				</div> -->

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-0">
						<div class="form-group">
							<button class="btn btn-primary btn-block">Submit</button>
						</div>
					</div>
				</div>

			<?php echo form_close(); ?>

		</div>
	</div>

</div>
