{
  "name": "<?php echo common_config('site', 'name') ?>",
  "description": "Post and share messages on <?php echo common_config('site', 'name') ?>",
  "icons": {
    "16": "/favicon.ico",
    "32": "/favicon.ico"
  },
  "experimental": {
    "services": {
      "link.send": {
        "endpoint": "/main/firefox-share"
      }
    }
  },
  "services": {
    "link.send": {
      "path": "/main/firefox-share"
    }
  }
}
