<?php



$ffmpeg = 'E:\Development\path\ffmpeg\bin\ffmpeg.exe';


// Convert Video to Wav

// foreach (glob('./videos/*.mp4') as  $value) 
// {
//       convertToWav($value);
// }


// function convertToWav($filename)
// {
//       global $ffmpeg;
//       $file_path = $filename;
//       $newFiile = str_replace('mp4', 'wav', $filename);
      // shell_exec($ffmpeg.'  -i '.$file_path.' -vn -acodec pcm_s16le -ar 44100 -ac 2 '.$newFiile);

// }


// // Crop video
// shell_exec($ffmpeg.' -i screen.webm -vf "crop=1366:650:0:70" invoice-print-crop.webm');

// // Cut video
// // $code = $ffmpeg.' -ss 00:00:45.0 -i 1.webm -c copy -t 00:00:15.0  ./complete-booking-demo.webm ';
// // $code = $ffmpeg.'  -i screen.webm -vf "setpts=0.75*PTS"  ./invoice-print-fast.webm ';

// shell_exec($ffmpeg.' -i invoice-print-crop.webm -vf "scale=1000:480" invoice-print-fast.webm');

// // $code = $ffmpeg.' -i 0.mp4 -i new-booking-1.webm -filter_complex "[0:v][1:v] overlay=150:150" -c:a copy demo0.mp4';
// // $code = $ffmpeg.' -i 0.mp4 -i new-booking-1.webm -filter_complex "[0][1]overlay=x=(main_w-overlay_w)/2:y=(main_h-overlay_h)/2" -c:a copy demo0.mp4';
// $code = $ffmpeg.' -i 0.mp4 -i invoice-print-fast.webm -filter_complex "[0:v]setpts=PTS-STARTPTS[v0];[1:v]setpts=PTS-STARTPTS+.5/TB[v1];[v0][v1]overlay=x=(main_w-overlay_w)/2:y=(main_h-overlay_h)/2:eof_action=pass[out1]" -map [out1]  ./print-invoice.mp4';

// echo ($code);
// echo shell_exec($code);


shell_exec($ffmpeg.' -i add-product.mp4 -i audio.mp3 -c:v copy -c:a aac add-product-music.mp4');
shell_exec($ffmpeg.' -i complete-booking.mp4 -i audio.mp3 -c:v copy -c:a aac complete-booking-music.mp4');
shell_exec($ffmpeg.' -i new-booking.mp4 -i audio.mp3 -c:v copy -c:a aac new-booking-music.mp4');




return null;

// Get video frames

// $ffmpeg = $ffmpeg->create();
// $video = $ffmpeg->open('video.mpg');

// $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
//       ->save('frame.jpg');

/*


// $pocketsphinx = 'C:\xampp\htdocs\test\record_to_mp3\lib\pocketsphinx-5prealpha';

// $folder = 'E:\Development\xampp\htdocs\test\tmp_audio/';
// $file_path = 'a.mpeg';
// $image_path = 'a.jpg';
// $newFiile = 'a.mp4';
// $videoFiile = 'aa.mp4';

/



// function hash_password($password)
// {
//  $salt = bin2hex(random_bytes(32));
//  $hash = hash('sha256', $salt . $password);

//  return $salt . $hash;
// }

// echo hash_password('admin');

// Extract Images from video
// shell_exec($ffmpeg.' -i '.$file_path.' -r 2 -f image2 '.$newFiile.' ');


// Convert media
// shell_exec($ffmpeg.'  -i '.$file_path.' -c:v mpeg4 -vtag xvid '.$newFiile.'.avi');
// shell_exec($ffmpeg.' -i '.$file_path.' -c:v libx264 -crf 19 -preset slow -c:a libfdk_aac -b:a 192k -ac 2  '.$newFiile);
// shell_exec($ffmpeg.' -i '.$file_path.' -threads 0 -c:v libx264 -preset slower -crf 19 -qmin 10 -qmax 51 -c:a libfdk_aac -b:a 92k -y  '.$newFiile);
// shell_exec($ffmpeg.' -i '.$file_path.' -vf scale=800:-1 -codec:v libx264 -b:v 6438912 -r 16 -codec:a libvo_aacenc -b:a 393216 -ar 32000 -ac 1 -y '.$newFiile);
// shell_exec($ffmpeg.'  -i "'.$file_path.'" -i "audio.mp3" -shortest -c copy '.$newFiile);
// shell_exec($ffmpeg.' -i '.$file_path.'  -filter:a "atempo=2.0,atempo=2.0" -vn '.$newFiile);
// shell_exec($ffmpeg.' -i '.$file_path.' -vf scale=-1:720 -c:v libx264 -crf 18 -preset veryslow -c:a copy   '.$newFiile);
// shell_exec($ffmpeg.' -i '.$file_path.' -vf "setpts=2*PTS" '.$newFiile);
 // -vf scale=800:-1 -codec:v libx264 -b:v 6438912 -r 16 -codec:a libvo_aacenc -b:a 393216 -ar 32000 -ac 1 -y '.$newFiile);
// shell_exec($ffmpeg.' -i '.$file_path.' -vn -ar 44100 -ac 2 -ab 192k -f mp4 '.$newFiile);

// Convert mp4 to webm
// shell_exec($ffmpeg.' -i '.$file_path.' -c:v libvpx -crf 10 -b:v 1M -c:a libvorbis '.str_replace('mp4', 'webm', $newFiile));

// Convert mp4 to ogv
// shell_exec($ffmpeg.' -i '.$file_path.' -c:v libtheora -q:v 7 -c:a libvorbis -q:a 4 '.str_replace('mp4', 'ogv', $newFiile));

// ffmpeg -i input.file -map 0:a:0 -b:a 96k output.mp3

// Cut audio
// shell_exec($ffmpeg.' -ss 1 -i '.$file_path.' -t 40 '.$newFiile);

// Reduce video size
// shell_exec($ffmpeg.' -i '.$file_path.' -vf "scale=iw/2:ih/2" '.$newFiile);

// Generate file
// shell_exec($ffmpeg.' -f lavfi -i sine=f=192:b=4:d=5 -c:a libvorbis output.ogg');
// shell_exec($ffmpeg.'  -i output.ogg -acodec libmp3lame audio3.mp3');
// unlink('output.ogg');

// $r = '"1280x720"';


// $a = "'if(lte(mod(on,42),8),zoom+0.0200,zoom-0.0105)':x='iw/2-(iw/zoom)/2':y='ih/2-(ih/zoom)/2'";
// $b = ' "zoompan=z='.$a.':d=50" ';
// $c = $ffmpeg.' -y -i "'.$image_path.'" -vf '.$b.' -t 10 "'.$newFiile.'" ';
// echo $c;

// $a = "'1':x='500*in/200':y='290*in/200'";
// $b = ' "zoompan=z='.$a.':d=.5" ';
// $c = $ffmpeg.' -i "'.$videoFiile.'" -vf '.$b.' "'.$newFiile.'" ';
// echo $c;
// $c = $ffmpeg.' -i "'.$videoFiile.'" -codec copy  "'.$newFiile.'" ';
// shell_exec($c);

// Cut video
// echo($ffmpeg.' -ss 00:00:02 -i "'.$newFiile.'" -vcodec copy -acodec copy "'.$newFiile.'2.mp4" ');
// shell_exec($ffmpeg.' -ss 00:00:02 -i "'.$newFiile.'" -vcodec copy -acodec copy "'.$newFiile.'2.mp4" ');

// shell_exec($ffmpeg.' -i "'.$newFiile.'" -i "'.$file_path.'" -c:v copy -c:a aac aa_output.mp4 ');
// echo $ffmpeg.' -loop 1 -i "'.$image_path.'" -c:v libx264 -t 15 -pix_fmt yuv420p -vf scale=320:240 "' . $newFiile.'" ';
// shell_exec($ffmpeg.' -loop 1 -i "'.$image_path.'" -c:v libx264 -t 187 -pix_fmt yuv420p -vf scale=1280:720 "' . $videoFiile.'" ');

// Fade
// shell_exec($ffmpeg.' -i "tmp_audio/' . $newFiile.'.mp4" -vf "fade=t=in:st=0:d=5" -c:a copy "tmp_audio/' . $newFiile.'aaa.mp4" ');
// shell_exec($ffmpeg.' -i "1' . $newFiile.'.mp4" -i "' . $file_path.'" -c:v copy -c:a aac "tmp_audio/' . $newFiile.'.mp4" ');

// shell_exec($ffmpeg.' -i "'.$newFiile.'" -i "'.$file_path.'" -c:v copy -c:a aac aa_output.mp4 ');
// echo $ffmpeg.' -loop 1 -i "'.$image_path.'" -c:v libx264 -t 15 -pix_fmt yuv420p -vf scale=1280:720 "' . $newFiile.'" ';

// unlink($file_path);
// rename($newFiile, $file_path);

*/

?>