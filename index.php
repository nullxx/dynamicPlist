<?php
$appname = $_GET['appname'];
$spliteado = explode("***", $appname);
$appname = $spliteado[0];
$appname = urlencode($appname);
$appname = str_replace("+", " ", $appname);
echo '
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
  <key>items</key>
  <array>
    <dict>
      <key>assets</key>
      <array>
        <dict>
          <key>kind</key>
          <string>software-package</string>
          <key>url</key>
          <string>https://'.$spliteado[1].'</string>
        </dict>
      </array>
      <key>metadata</key>
      <dict>
        <key>bundle-identifier</key>
        <string>jon.lara</string>
        <key>bundle-version</key>
        <string>1.0</string>
        <key>kind</key>
        <string>software</string>
        <key>title</key>
        <string>'.$appname.'</string>
      </dict>
    </dict>
  </array>
</dict>
</plist>
';
?>
