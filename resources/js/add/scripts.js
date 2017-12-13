var title, encoder;
var filesize = episodes = ovas = resolution = 0;

Dropzone.options.dropzone = {
	paramName: "file",
	maxFilesize: 20480, // 20 GB (20480 MB)
	addRemoveLinks: true,
	parallelUploads: 32,
	uploadMultiple: true,

	init: function() {

		this.on("drop", function() {
			title = encoder = null;
			filesize = episodes = ovas = resolution = 0;
		});

		this.on("addedfile", function(file) {
			filesize += file.size;

			/** TITLE */
			if (!title) {
				title = file.name.replace('_', '').slice(0, -4);
				title = title.replace(/\([^)]*\)|\[[^\]]*\]|\-\ \d+/g, '').trim();
				$('input[name=title]').val(title);
			}

			/** FILESIZE */
			$('input[name=filesize]').val(filesize);

			/** OVAS, EPISODES */
			if (
				file.name.search("OVA") > -1 ||
				file.name.search("OAD") > -1 ||
				file.name.search(/\d\.5|\d\-5/) > -1) {
				ovas++;
				$('input[name=ovas]').val(ovas);
			} else {
				episodes++;
				$('input[name=episodes]').val(episodes);
			}

			/** RESOLUTION */
			if (checkResolution(file.name) > resolution) {
				resolution = checkResolution(file.name);
				console.log("resolution: " + resolution);

				switch(resolution) {
					case 2160: $('select[name=quality]').val("4k 2160p"); break;
					case 1080: $('select[name=quality]').val("FHD 1080p"); break;
					case 720: $('select[name=quality]').val("HD 720p"); break;
					case 480: $('select[name=quality]').val("HQ 480p"); break;
					case 360: $('select[name=quality]').val("LQ 360p"); break;
				}
			}

			/** ENCODER */
			if (!encoder) {
				encoder = file.name.split(']', 1)[0].slice(1);
				$('input[name=encoder]').val(encoder);
			}

			this.removeFile(file);
		});

	}
}

function checkResolution(filename) {
	var parsedResolution = 0;

	if (
		filename.search("2160p") > -1 ||
		filename.search("3840x2160") > -1 ||
		filename.search("x2160") > -1) {
		parsedResolution = 2160;
	} else if (
		filename.search("1080p") > -1 ||
		filename.search("1920x1080") > -1 ||
		filename.search("x1080") > -1) {
		parsedResolution = 1080;
	} else if (
		filename.search("720p") > -1 ||
		filename.search("1280x720") > -1||
		filename.search("x720") > -1) {
		parsedResolution = 720;
	} else if (
		filename.search("480p") > -1 ||
		filename.search("720x480") > -1 ||
		filename.search("x480") > -1) {
		parsedResolution = 480;
	} else if (
		filename.search("360p") > -1 ||
		filename.search("640x360") > -1 ||
		filename.search("x360") > -1) {
		parsedResolution = 360;
	}

	return parsedResolution;
}
