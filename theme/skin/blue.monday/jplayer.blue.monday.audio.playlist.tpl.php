<?php
/**
 * @file
 * Provide the HTML output for an audio jPlayer interface.
 */
?>
<div class="jp-audio" role="application" aria-label="media player">
  <?php
  /* Module jplayer.js relies on the parent of the node having
   * class jp-player having class jp-type-single or jp-type-playlist.
   * The node having class jp-player must also have the player id.
   */ ?>
  <div class="jp-type-<?php print $mode; ?>">
    <div id="<?php print $player_id; ?>" class="jp-jplayer"></div>
    <div class="jp-gui jp-interface">
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
      <div class="jp-progress">
        <div class="jp-seek-bar">
          <div class="jp-play-bar"></div>
        </div>
      </div>
      <div class="jp-volume-controls">
        <button class="jp-mute" role="button" tabindex="0">mute</button>
        <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
        <div class="jp-volume-bar">
          <div class="jp-volume-bar-value"></div>
        </div>
      </div>
      <div class="jp-time-holder">
        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
      </div>
      <div class="jp-toggles">
        <button class="jp-repeat" role="button" tabindex="0">repeat</button>
        <?php if ($mode == 'playlist'): ?>
        <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
        <?php endif; ?>
      </div>
    </div>
    <div class="jp-playlist">
      <?php if ($mode == 'playlist' || $mode == 'single'): ?>
        <?php print $playlist; ?>
      <?php else: ?>
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