<?php
$video_mp4 = get_field('settings_demo_video_mp4', 'option');
$video_webm = get_field('settings_demo_video_webm', 'option');
$poster = get_field('settings_demo_video_poster', 'option');
?>
<div id="demo-video">
    <div id="demo-video-container">
        <video controls poster="<?php if ($poster) { echo $poster['url']; }?>" id="demo-video-file">
            <?php if ($video_webm) { ?>
                <source src="<?php echo $video_webm['url']; ?>" type="video/webm">
            <?php } ?>
            <?php if ($video_mp4) { ?>
                <source src="<?php echo $video_mp4['url']; ?>" type="video/mp4">
            <?php } ?>
            <p>Your browser doesn't support HTML5 video. Here is a <a href="path/to/your-video.mp4">link to the video</a> instead.</p>
        </video>
    </div>
    <div id="demo-video-background">
        <div id="demo-video-close"></div>
    </div>
</div>