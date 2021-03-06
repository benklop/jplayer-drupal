<?php
/**
 * @file
 * Provide the HTML output for an video jPlayer interface.
 */
?>
<div id="<?php print $player_id; ?>" class="jp-video jp-type-<?php print $mode; ?>" data-type="jp-video"  data-mode="jp-type-playlist" role="application" aria-label="media player">
  <?php
  /* Module jplayer.js relies on the parent of the node having
   * class jp-player having class jp-type-single or jp-type-playlist.
   * The node having class jp-player must also have the player id.
   */ ?>
  <div class="jp-type-<?php print $mode; ?>">
    <div class="jp-jplayer"></div>
    <div class="jp-gui">
      <div class="jp-video-play">
        <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
      </div>
      <div class="jp-interface">
        <div class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div>
        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
        <div class="jp-controls-holder">
          <div class="jp-controls">
            <?php if ($mode == 'playlist'): ?>
            <button class="jp-previous" role="button" tabindex="0">previous</button>
            <?php endif; ?>
            <button class="jp-play" role="button" tabindex="0">play</button>
            <?php if ($mode == 'playlist'): ?>
            <button class="jp-next" role="button" tabindex="0">next</button>
            <?php endif; ?>
            <button class="jp-stop" role="button" tabindex="0">stop</button>
          </div>
          <div class="jp-volume-controls">
            <button class="jp-mute" role="button" tabindex="0">mute</button>
            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
            <div class="jp-volume-bar">
              <div class="jp-volume-bar-value"></div>
            </div>
          </div>
          <div class="jp-toggles">
            <button class="jp-repeat" role="button" tabindex="0">repeat</button>
            <?php if ($mode == 'playlist'): ?>
            <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
            <?php endif; ?>
            <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
          </div>
        </div>
        <div class="jp-details">
          <div class="jp-title" aria-label="title">&nbsp;</div>
        </div>
      </div>
    </div>
    <div class="jp-playlist">
      <?php if ($mode == 'playlist' || $mode == 'single'): ?>
        <?php print $playlist; ?>
      <?php else: /* stream */ ?>
        <ul>
          <li><?php print check_plain($label);?></li>
        </ul>
      <?php endif; ?>
    </div>
    <div class="jp-no-solution">
      <span>Update Required</span>
      To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
    </div>
  </div>
</div>
