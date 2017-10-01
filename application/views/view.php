<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
				<h2>
					<?php echo $animeData->title ?>

					<?php if (!empty($animeData->encoder)): ?>
						<br><small>[<?php echo $animeData->encoder; ?>]</small>
					<?php endif; ?>
				</h2>
			</div>
			<div class="col-md-2">
				<h2>
					<?php if (!empty($animeData->encoder)): ?><br><?php endif; ?>
					<a href=<?php echo base_url("edit/" . $animeData->id) ?>
						class="btn btn-success btn-block">
						<i class="fa fa-pencil"></i>&nbsp;Edit
					</a>
				</h2>
			</div>
			<div class="col-md-2">
				<h2>
					<?php if (!empty($animeData->encoder)): ?><br><?php endif; ?>
					<a href=<?php echo base_url("delete/" . $animeData->id) ?>
						class="btn btn-danger btn-block">
						<i class="fa fa-trash"></i>&nbsp;Delete
					</a>
				</h2>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<?php if (!empty($animeData->releaseSeason)): ?>
				<p>Release: <?php echo $animeData->releaseSeason . " " . $animeData->releaseYear; ?></p>
			<?php endif; ?>

			<p>Episodes: <?php echo $animeData->episodes; ?></p>
			<p>OVAs: <?php echo $animeData->ovas; ?></p>
			<p>Specials: <?php echo $animeData->specials; ?></p>
		</div>

		<div class="visible-xs visible-sm hidden-md hidden-lg">
			<hr>
		</div>

		<div class="col-md-6">
			<?php if (!empty($animeData->prequel)): ?>
				<p>Prequel:
					<a href="<?php echo base_url("view/" . $prequelId); ?>">
						<?php echo $animeData->prequel; ?>
					</a>
				</p>
			<?php endif; ?>
			<?php if (!empty($animeData->sequel)): ?>
				<p>Sequel:
					<a href="<?php echo base_url("view/" . $sequelId); ?>">
						<?php echo $animeData->sequel; ?>
					</a>
				</p>
			<?php endif; ?>
			<?php if (!empty($animeData->offquel)): ?>
				<p>Side-story: <?php echo $animeData->offquel; ?></p>
			<?php endif; ?>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-12">
			<?php if (!empty($animeData->durationHour)): ?>
				<p>
					<?php
						echo "Duration: ";
						echo ($animeData->durationHour < 10) ? "0" . $animeData->durationHour . ":" : $animeData->durationHour . ":";
						echo ($animeData->durationMinute < 10) ? "0" . $animeData->durationMinute . ":"  : $animeData->durationMinute . ":";
						echo ($animeData->durationSecond < 10) ? "0" . $animeData->durationSecond : $animeData->durationSecond;
					?>
				</p>
			<?php endif; ?>
			<?php if (!empty($animeData->filesize)): ?>
				<p>
					<?php
						if ($animeData->filesize < 1073741824) {
							echo "File Size: ";
							echo round($animeData->filesize / 1048576, 2) . " MB (";
							echo $animeData->filesize . " bytes)";
						} else {
							echo "File Size: ";
							echo round($animeData->filesize / 1073741824, 2) . " GB (";
							echo $animeData->filesize . " bytes)";
						}
					?>
				</p>
			<?php endif; ?>
			<?php if (!empty($animeData->dateFinished)): ?>
				<p>Date Finished:
					<?php
						echo date_format(
							date_create($animeData->dateFinished),
							"F d, Y"
						);
					?>
				</p>
			<?php endif; ?>
			<?php if (!empty($animeData->variants)): ?>
				<p>Title Variants: <?php echo $animeData->variants; ?></p>
			<?php endif; ?>
			<?php if ($animeData->inHDD): ?>
				<p>Moved to Hard Drive: Yes</p>
			<?php else: ?>
				<p>Moved to Hard Drive: No</p>
			<?php endif; ?>
			<?php if (!empty($animeData->remarks)): ?>
				<p>Remarks: <?php echo $animeData->remarks; ?></p>
			<?php endif; ?>
		</div>
	</div>

	<?php if ( !empty($animeData->ratingAudio) &&
		!empty($animeData->ratingEnjoyment) &&
		!empty($animeData->ratingGraphics) &&
		!empty($animeData->ratingPlot) ): ?>

		<hr>

		<div class="row">
			<div class="col-md-12">
				<p>Rating:
					<?php
						$r_a = $animeData->ratingAudio;
						$r_e = $animeData->ratingEnjoyment;
						$r_g = $animeData->ratingGraphics;
						$r_p = $animeData->ratingPlot;
						echo ($r_a + $r_e + $r_g + $r_p) / 4;
					?>
				</p>

				<p>Audio: <?php echo $animeData->ratingAudio; ?></p>
				<p>Enjoyment: <?php echo $animeData->ratingEnjoyment; ?></p>
				<p>Graphics: <?php echo $animeData->ratingGraphics; ?></p>
				<p>Plot: <?php echo $animeData->ratingPlot; ?></p>
			</div>
		</div>
	<?php endif; ?>



</div>
