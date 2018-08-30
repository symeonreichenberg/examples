<?php
/*
 * This is a part of project named XCounter. Used to create animated GIFs for mailing. 
 * The user selects the form to counters when the counter is counted, sets fonts, colors, backgrounds, etc. 
 * The final recipient of the mail displays a GIF that counts 60 seconds after opening the message. 
 * The counter is called when it is opened by the end user. First, find out if this GIF already exists in the directory for that particular minute. 
 * If so, then apply, if not, a new one is created.
 * This app is multilingual, result can be viewed in almost 40 languages.
 */
for ($i = 0; $i <= $max_frames; $i++) {
$interval = date_diff($future_date, $now);	

	if ($future_date < $now) {
		// Open the first source image and add the text.
    if (!isset($background_url) or $background_url == "") {
			imagefilledrectangle($image, 0, 0, $image_width, $image_height, $background_color_fix);
		}
		else {
			imagecopyresized($image, $background_from_jpeg, 0, 0, 0, 0, $image_width, $image_height, $width_url, $height_url);
		}
		$box_expiration = imageftbbox($size_expiration, 0, $expiration_font_face, $expiration_text);
		$x_expiration = ($image_width - ($box_expiration[2] - $box_expiration[0])) / 2;
		$y_expiration = ($image_height - ($box_expiration[7] - $box_expiration[1])/2) /2;
		
		imageTTFText($image, $size_expiration, 0, $x_expiration, $y_expiration, $expiration_color_fix, $expiration_font_face, $expiration_text);


		ob_start();	
		imagegif($image);
		$frames[] = ob_get_contents();
		$delays[] = $delay;
		$loops = 0;
		ob_end_clean();

		break;
	} else { 
		$y_labels = $image_height - 1.5*($spacing);
		$text_days = $interval->format('%a');
		$text_hours = $interval->format('%h');
		$text_minutes = $interval->format('%I');
		$text_seconds = $interval->format('%S');

		if (!isset($background_url) or $background_url == "") {
			imagefilledrectangle($image, 0, 0, $image_width, $image_height, $background_color_fix);
		}
		else {
			imagecopyresized($image, $background_from_jpeg, 0, 0, 0, 0, $image_width, $image_height, $width_url, $height_url);
		}
		imagealphablending ($image, true);
		
		$box = imageftbbox($size, 0, $font['file'], "00");
		$x = ($image_height - ($box[2] - $box[0])) / 2;
		$box_width = ($box[2] - $box[0]) + ($spacing / 2);
		$box_height = ($box[1] - $box[7]) + ($spacing / 2);
		$box_middle_x = (($box[4] - $box[0]) * 1.25);
		$box_middle_y = (($box[3] - $box[7]) * 1.5);
		$y = $image_height/2 + ($spacing / 2);
		
		$box_separators = imageftbbox($size, 0, $separator_font_face, $separator);
		$x_separators = ($image_height - ($box_separators[2] - $box_separators[0])) / 2;
		
		$box_days = imageftbbox($size, 0, $font['file'], $text_days);
		$x_days = ($image_height - ($box_days[2] - $box_days[0])) / 2;
		$box_hours = imageftbbox($size, 0, $font['file'], $text_hours);
		$x_hours = ($image_height - ($box_hours[2] - $box_hours[0])) / 2;
		$box_minutes = imageftbbox($size, 0, $font['file'], $text_minutes);
		$x_minutes = ($image_height - ($box_minutes[2] - $box_minutes[0])) / 2;
		$box_seconds = imageftbbox($size, 0, $font['file'], $text_seconds);
		$x_seconds = ($image_height - ($box_seconds[2] - $box_seconds[0])) / 2;
		
		$box_labels_days = imageftbbox($size_label, 0, $labels_font_face, $label_days);
		$x_labels_days = ($image_height - ($box_labels_days[2] - $box_labels_days[0])) / 2;
		$box_labels_hours = imageftbbox($size_label, 0, $labels_font_face, $label_hours);
		$x_labels_hours = ($image_height - ($box_labels_hours[2] - $box_labels_hours[0])) / 2;
		$box_labels_minutes = imageftbbox($size_label, 0, $labels_font_face , $label_minutes);
		$x_labels_minutes = ($image_height - ($box_labels_minutes[2] - $box_labels_minutes[0])) / 2;
		$box_labels_seconds = imageftbbox($size_label, 0, $labels_font_face, $label_seconds);
		$x_labels_seconds = ($image_height - ($box_labels_seconds[2] - $box_labels_seconds[0])) / 2;
		
		
		// Type 1
		if ($counter_type == "1") {
			imagefilledrectangle($image, 0, 40 * $smalldelay, $image_width, $image_height, $element_color_fix);
		}
		// Type 2
		if ($counter_type == "2") {
			include ("types/type_2.php");
		}
		// Type 3
		if ($counter_type == "3") {
			include ("types/type_3.php");
		}
		// Type 4
		if ($counter_type == "4") {
			include ("types/type_4.php");
		}
		// Type 5
		if ($counter_type == "5") {
			include ("types/type_5.php"); 
		}
		// Type 6 
		if ($counter_type == "6") {
			include ("types/type_6.php"); 
		}
		// Type 7
		if ($counter_type == "7") {
			include ("types/type_7.php"); 
		}
		// Type 8
		if ($counter_type == "8") {
			include ("types/type_8.php");
		}    
		// Type 9
		if ($counter_type == "9") {      
			include ("types/type_9.php");	
		}
		// Type 10
		if ($counter_type == "10") {      
			imagefilledrectangle($image, 0, $y + (4 * $smalldelay), $image_width, $y + (5 * $smalldelay), $element_color_fix);
		}
		// digits, labels, separators
		if ($show_seconds != 0) {
			// seconds are visible in the counter
			if ($text_days != 00) {					
				// whole counter (days, hours, minutes, seconds)
				imageTTFText($image, $size, 0, $x_days, $y, $digit_color_fix, $digit_font_face, $text_days);	
				imageTTFText($image, $size_label, 0, $x_labels_days, $y_labels, $labels_color_fix, $labels_font_face, $label_days);
				imageTTFText($image, $size_separator, 0, $x_separators + ($image_height/2), $y, $separator_color_fix, $separator_font_face,  $separator);
				imageTTFText($image, $size, 0, $x_hours + $image_height, $y, $digit_color_fix, $digit_font_face, $text_hours);
				imageTTFText($image, $size_label, 0, $x_labels_hours + $image_height, $y_labels, $labels_color_fix, $labels_font_face, $label_hours);
				imageTTFText($image, $size_separator, 0, $x_separators + $image_height + ($image_height/2), $y, $separator_color_fix, $separator_font_face, $separator);
				imageTTFText($image, $size, 0, $x_minutes + (2 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_minutes);
				imageTTFText($image, $size_label, 0, $x_labels_minutes + (2 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_minutes);
				imageTTFText($image, $size_separator, 0, $x_separators + (2 * $image_height) + ($image_height/2), $y, $separator_color_fix, $separator_font_face, $separator);
				imageTTFText($image, $size, 0, $x_seconds + (3 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_seconds);
				imageTTFText($image, $size_label, 0, $x_labels_seconds + (3 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_seconds);
			}
			else {
				// only hours, minutes and seconds
				if ($text_hours != 00) {	
					imageTTFText($image, $size, 0, $x_hours + (0.5 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_hours);
					imageTTFText($image, $size_label, 0, $x_labels_hours + (0.5 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_hours);
					imageTTFText($image, $size_separator, 0, $x_separators + ($image_height), $y, $separator_color_fix, $separator_font_face,  $separator);
					imageTTFText($image, $size, 0, $x_minutes + (1.5 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_minutes);
					imageTTFText($image, $size_label, 0, $x_labels_minutes + (1.5 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_minutes);
					imageTTFText($image, $size_separator, 0, $x_separators + (2 * $image_height), $y, $separator_color_fix, $separator_font_face,  $separator);
					imageTTFText($image, $size, 0, $x_seconds + (2.5 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_seconds);
					imageTTFText($image, $size_label, 0, $x_labels_seconds + (2.5 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_seconds);
				}
				else {
					// only minutes and seconds
					imageTTFText($image, $size, 0, $x_minutes + $image_height, $y, $digit_color_fix, $digit_font_face, $text_minutes);
					imageTTFText($image, $size_label, 0, $x_labels_minutes + $image_height, $y_labels, $labels_color_fix, $labels_font_face, $label_minutes);
					imageTTFText($image, $size_separator, 0, $x_separators + (1.5 * $image_height), $y, $separator_color_fix, $separator_font_face,  $separator);
					imageTTFText($image, $size, 0, $x_seconds + (2 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_seconds);
					imageTTFText($image, $size_label, 0, $x_labels_seconds + (2 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_seconds);						
				}	
			}
		}
		else {
		// without seconds
			if ($text_days != 00) {
			// whole counter (days, hours, minutes)	
				imageTTFText($image, $size, 0, $x_days + (0.5 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_days);
				imageTTFText($image, $size_label, 0, $x_labels_days + (0.5 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_days);
				imageTTFText($image, $size_separator, 0, $x_separators + ($image_height), $y, $separator_color_fix, $separator_font_face,  $separator);
				imageTTFText($image, $size, 0, $x_hours + (1.5 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_hours);
				imageTTFText($image, $size_label, 0, $x_labels_hours + (1.5 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_hours);
				imageTTFText($image, $size_separator, 0, $x_separators + (2 * $image_height), $y, $separator_color_fix, $separator_font_face,  $separator);
				imageTTFText($image, $size, 0, $x_minutes + (2.5 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_minutes);
				imageTTFText($image, $size_label, 0, $x_labels_minutes + (2.5 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_minutes);
			}
			else {
				// only hours and minutes
				if ($text_hours != 00) {	
					imageTTFText($image, $size, 0, $x_hours + (1 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_hours);
					imageTTFText($image, $size_label, 0, $x_labels_hours + (1 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_hours);
					imageTTFText($image, $size_separator, 0, $x_separators + (1.5 * $image_height), $y, $separator_color_fix, $separator_font_face,  $separator);
					imageTTFText($image, $size, 0, $x_minutes + (2 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_minutes);
					imageTTFText($image, $size_label, 0, $x_labels_minutes + (2 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_minutes);	
				}
				else {
					// only minutes
					imageTTFText($image, $size, 0, $x_minutes + (1.5 * $image_height), $y, $digit_color_fix, $digit_font_face, $text_minutes);
					imageTTFText($image, $size_label, 0, $x_labels_hours + (1.5 * $image_height), $y_labels, $labels_color_fix, $labels_font_face, $label_minutes);						
				}			
			}
		}
		ob_start();	
		imagegif($image);
		$frames[] = ob_get_contents();
		$delays[] = $delay;
		$loops = 0;
		ob_end_clean();
	}
	$now->modify('+1 second');
}

//expire this image instantly
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
$gif = new AnimatedGif($frames, $delays, $loops);
if (isset($url_db)) {
	if (isset($_GET["url_lang"]) and ! empty($_GET["url_lang"])) {
		$gif->saveFile($_GET['url_lang'] . "-" . $url_db . "-" . $now_img);
	} else {
		$gif->saveFile($url_db . "-" . $now_img);
	}
}
$gif->display();